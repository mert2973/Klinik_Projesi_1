<?php

namespace App\Http\Controllers;

use App\Clinics;
use App\inv_sale_items;
use App\Invoices_Sales;
use App\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoicesOf_Sales extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Clinics $cl)
    {
        $clinic_id=Auth::user()->the_clinic_id();

      //$clinic_inv_sales= Clinics::with("Invoices_Sales")->get();
       $clinic_inv_sales= $cl->with("Invoices_Sales")->get();
        $sales_Invoices=$clinic_inv_sales->where("id",$clinic_id)->toArray();


      // $sales_Invoices= Invoices_Sales::where("clinic_id",$clinic_id)->get();

        return view('pages.Invoices_Sale',compact("sales_Invoices"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Invoice_Sale_Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->invoice["patient_id"]!=null){
            if($request->invoice["doctor_id"]!=null){
                $inv_id=Invoices_Sales::create([
                    "patient_id"=>$request->invoice["patient_id"],
                    "doctor_id"=>$request->invoice["doctor_id"],
                    "method"=>$request->invoice["method"],
                    "status"=>$request->invoice["status"],
                    "inv_status"=>$request->invoice["inv_status"],
                    "subtotal"=>$request->invoice["subtotal"],
                    "tax"=>$request->invoice["tax"],
                    "discount"=>$request->invoice["discount"],
                    "discounttype"=>$request->invoice["discounttype"],
                    "amount"=>$request->invoice["amount"],
                    "paid"=>$request->invoice["paid"],
                    "due"=>$request->invoice["due"],
                    "note"=>$request->invoice["note"],
                    "tc"=>$request->invoice["tc"],
                    "invoicedate"=>$request->invoice["invoicedate"],
                    "duedate"=>$request->invoice["duedate"],
                ]);

                foreach ($request->invoice["item"] as $itm) {
                    if (! empty($itm["tax"])){
                       $tax_name= $itm["tax"][0]["name"];
                       $rate= $itm["tax"][0]["rate"];
                       $tax_price=$itm["taxprice"];
                    }else{
                        $tax_name=null;
                        $rate=null;
                        $tax_price=null;
                    }
                    inv_sale_items::create([
                        "inv_sale_id" => $inv_id->id,

                        "itm_name" => $itm["name"],
                        "itm_dscr" => $itm["descr"],
                        "cost" => $itm["cost"],
                        "quantity" => $itm["quantity"],
                        "price" => $itm["price"],

                        "tax_type_name" =>$tax_name,
                        "rate" =>$rate,
                        "tax_price" => $tax_price,

                    ]);
                }
            }else{
                return redirect()->back()->with("warning","Lütfen Açılan Listeden, Geçerli Bir Doktor Adı Seçiniz");
            }
        }else{
            return redirect()->back()->with("warning","Lütfen Açılan Listeden, Geçerli Bir Hasta Adı Seçiniz");
        }

        return redirect()->back()->with("success","Fatura İşlemleri Sisteme Başarıyla Kaydedildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $chk=Invoices_Sales::where("id",$id)->first();
        if($chk!=null){
        $clinic_id=Auth::user()->the_clinic_id(); //[0]["invoices__sales__view"];
        $sales_invs0=  Clinics::with("Invoices_Sales_View")->get(); // all clinics


            $sales_inv = $sales_invs0->where("id", $clinic_id)->toArray(); // the clinic which needed and the sales invs

            $sales_inv_sub = "";
            foreach ( $sales_inv[ 0 ][ "invoices__sales__view" ] as $sub ) {
                if ( $sub[ "id" ] == $id ) {
                    $sales_inv_sub = $sub;
                }
            }

            $id_inv = $id;

            $sales_inv_items = inv_sale_items::where("inv_sale_id", $id_inv)->get();

            return view('pages.Invoice_Sale_View', compact("sales_inv", "sales_inv_sub", "sales_inv_items", "id_inv"));
        }else{
            return redirect()->to("/Sales_Invoices")->with("warning","İlgili Fatura Bulunamadı");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.Invoice_Sale_Edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // return $id;
       inv_sale_items::where("inv_sale_id",$id)->delete();
       Invoices_Sales::where("id",$id)->delete();

       return redirect()->back()->with("success","İlgili Fatura Başarıyla Silinmiştir");
    }
}
