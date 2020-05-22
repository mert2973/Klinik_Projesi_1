<?php

namespace App\Http\Controllers;

use App\Appointments;
use App\Casings;
use App\Clinics;
use App\HistoryPayment_Add;
use App\Inv_Items;
use App\inv_sale_items;
use App\Invoices_Sales;
use App\invoices_sales_history;
use App\Patients;
use App\product_history;
use App\Product_Stocks;
use App\Teeth_Process;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class InvoicesOf_Sales extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    protected function validator(array $data){
        return Validator::make($data, [
            'paid' => ['required', 'integer', 'min:1','digits_between: 1,5'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           // 'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    protected  function check_patient_items_from_apt(){
      return  DB::table("appointments as apt")
            ->join("teeth_processes as tp","tp.apt_id","=","apt.id")
          ->where("tp.control_invoice",0);//if control_invoice==1 then dont chk it
    }
    protected  function add_patient_items_from_apt(){
      return  DB::table("appointments as apt")
            ->join("teeth_processes as tp","tp.apt_id","=","apt.id")
            ->join("product_stocks as ps","ps.id","=","tp.itm_id")
            ->where("tp.control_invoice",0) //if control_invoice==1 then dont add it
            ->select("*")->selectRaw("tp.id")->get();
    }
    /***--------------------------------****/

    public function add_ptn_item_proceseses(){
        //return $this->add_patient_items_from_apt();
        $ptn_id=$_GET["ptn_id"];
        $dr_id =$_GET["dr_id"];

        $itms= $this->add_patient_items_from_apt()->where("patients_id",$ptn_id)->where("doctors_id",$dr_id);
        $all_items0=$itms->toArray();
        $skil_data=array();
        foreach ($all_items0 as $itm){
            $all_items["id"]=$itm->id;// teeth_process id
            $all_items["itm_id"]=$itm->itm_id;// teeth_process id
            $all_items["itm_name"]=$itm->product_name;
            $all_items["apt_date"]=Carbon::parse($itm->apt_date)->format("d/m/Y  H:i");
           // $all_items["itm_dscr"]=$itm->itm_dscr;
            $all_items["piece"]=$itm->piece;
            $all_items["itm_cost"]=$itm->item_cost;
          array_push($skil_data,$all_items);
        }
        echo json_encode($skil_data);
    }
    public function chk_ptn_extra_items(){
       $ptn_id=$_GET["ptn_id"];
       $dr_id=$_GET["dr_id"];
       $check=0; $skill_data=array();
       $itms= $this->check_patient_items_from_apt()->where("patients_id",$ptn_id)->where("doctors_id",$dr_id);
       $items=$itms->get();
       foreach ($items as $chk){
          $check=1;
          break;
       }
       if($check==0){
           $data["chk"]="false";
           array_push($skill_data,$data);
       }else{
           $data["chk"]="true";
           array_push($skill_data,$data);
       }

        echo json_encode($skill_data);
      // return "Ptn id: $ptn_id,  Dr id: $dr_id";
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
      $id=  Auth::user()->the_clinic_id();
       $casings= Casings::where("clinic_id",$id)->get();
        return view('pages.Invoice_Sale_Add',compact("casings"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payment_history(Request $request){
    $get=Invoices_Sales::where("id",$request->payment["id"])->first();
    $a = $get->paid;
    $b=  $get->due;
    Invoices_Sales::where("id",$request->payment["id"])->update([
       "paid"=>($a+$request->payment["paid"]),
       "due"=>($b-$request->payment["paid"])
    ]);

        $paid_date=Carbon::parse($request->payment["date"])->format("Y-m-d H:i");

        /*Calculate last balance*/
            $debt=$request->payment[ "paid" ];
            if($debt==null){
                $debt=0;
            }
            $get=Casings::where("id",$request->payment["casing"])->first();
            $total_last_balance=($get->last_balance+$debt);
            Casings::where("id",$request->payment["casing"])->update([
                "last_balance"=>$total_last_balance,
            ]);
        /*End.Calculate last balance*/
        HistoryPayment_Add::create([
            "inv_id"=>$request->payment["id"],
            "type_inv"=>"sale",
            "casing_id"=> $request->payment["casing"],
            "names"=> $request->payment["names"],
            "method"=> $request->payment["method"],
            "last_cash_balance" => $total_last_balance,
            "debt"=>$debt,
            "paid_date"=>$paid_date,
        ]);
        return redirect()->back()->with("success","Ödeme Başarıyla Yapılmıştır");
    }
    public function store(Request $request){
        //return $request->all();
       /*$request->validate([
            "odeme" => ['required',"digits_between:1,100"],
        ]); */

        if($request->invoice["patient_id"]!=null){
            if($request->invoice["doctor_id"]!=null){
              $invoicedate = $request->invoice["invoicedate"];

                   $inv0_id = Invoices_Sales::create([
                       "patient_id" => $request->invoice[ "patient_id" ],
                       "doctor_id" => $request->invoice[ "doctor_id" ],
                       "method" => $request->invoice[ "method" ],
                       "status" => $request->invoice[ "status" ],
                       "inv_status" => $request->invoice[ "inv_status" ],
                       "subtotal" => $request->invoice[ "subtotal" ],
                       "tax" => $request->invoice[ "tax" ],
                       "discount" => $request->invoice[ "discount" ],
                       "discounttype" => $request->invoice[ "discounttype" ],
                       "amount" => $request->invoice[ "amount" ],
                       "paid" => $request->invoice[ "paid" ],
                       "due" => $request->invoice[ "due" ],
                       "note" => $request->invoice[ "note" ],
                       "tc" => $request->invoice[ "tc" ],
                       "invoicedate" => Carbon::parse($invoicedate)->format("Y-m-d"),
                       "duedate" => Carbon::parse($request->invoice[ "duedate" ])->format("Y-m-d"),
                   ]);
                   $inv_id= $inv0_id->id;

                $now = Carbon::now();
                $time = $now->toTimeString();
                $paid_date = ($invoicedate . " " . $time);
                /*Calculate last balance*/
                    $debt=$request->invoice[ "paid" ];
                    if($debt==null){
                        $debt=0;
                    }
                    $get=Casings::where("id",$request->invoice["casing"])->first();
                    $total_last_balance=($get->last_balance+$debt);
                    Casings::where("id",$request->invoice["casing"])->update([
                        "last_balance"=>$total_last_balance,
                    ]);
                /*Calculate last balance*/

                HistoryPayment_Add::create([
                    "inv_id" => $inv_id,
                    "type_inv" => "sale",
                    "method" => $request->invoice[ "method" ],
                    "names"=> $request->invoice["name"],
                    "casing_id"=> $request->invoice["casing"],
                    "debt" => $debt,
                    "last_cash_balance" => $total_last_balance,
                    "paid_date" => Carbon::parse($paid_date)->format("Y-m-d H:i"),
                ]);

                /*--store to the history--*/
                $ptn_data=Patients::where("id",$request->invoice[ "patient_id" ])->first();
                $total=$ptn_data->total_dept+$request->invoice[ "amount" ];
                Patients::where("id",$request->invoice[ "patient_id" ])->update([
                    "total_dept"=>$total,
                ]);
                invoices_sales_history::create([
                    "inv_sale_id"=>$inv_id,
                    "ptn_id"=>$request->invoice[ "patient_id" ],
                    "paid"=>0,
                    "amount_inv"=>$request->invoice[ "amount" ],
                    "total_balance"=>$total,
                    "process_date"=>Carbon::parse($paid_date)->format("Y-m-d H:i"),
                ]);
                if ($debt!=0){
                    $total=$ptn_data->total_dept+$request->invoice[ "amount" ]-$debt;
                    Patients::where("id",$request->invoice[ "patient_id" ])->update([
                        "total_dept"=>$total,
                    ]);
                    invoices_sales_history::create([
                        "inv_sale_id"=>$inv_id,
                        "ptn_id"=>$request->invoice[ "patient_id" ],
                        "paid"=>$debt,
                        "amount_inv"=>0,//$request->invoice[ "amount" ],
                        "total_balance"=>$total,
                        "process_date"=>Carbon::parse($paid_date)->format("Y-m-d H:i"),
                    ]);
                }
                /*--End.store to the history--*/

                /** items which are coming from appointment of "Yapılan işler" by the "invoice add page" **/
                if(!empty( $request->invoice[ "item_record" ])){
                    foreach ( $request->invoice[ "item_record" ] as $itm ) {

                        if ( !empty($itm[ "tax" ]) ) {
                            $tax_name = $itm[ "tax" ][ 0 ][ "name" ];
                            $rate = $itm[ "tax" ][ 0 ][ "rate" ];
                            $tax_price = $itm[ "taxprice" ];
                        } else {
                            $tax_name = null;
                            $rate = null;
                            $tax_price = null;
                        }
                        inv_sale_items::create([
                            "inv_sale_id" => $inv_id,
                           // "apnt_id"=>$itm[ 0 ],
                            "itm_name" => $itm[ "name" ],
                            "itm_dscr" => $itm[ "descr" ],
                            "cost" => $itm[ "cost" ],
                            "quantity" => $itm[ "quantity" ],
                            "price" => $itm[ "price" ],

                            "tax_type_name" => $tax_name,
                            "rate" => $rate,
                            "tax_price" => $tax_price,

                        ]);
                        Teeth_Process::where("id",$itm["prc_tooth_id"])->update([
                           "control_invoice"=>$inv_id,
                        ]);
                        /*___*/
                        /*---update parent table of product---*/
                        $data_product0=Product_Stocks::where(["id"=>$itm["itm_id"],"type"=>0])->first();
                        if($data_product0!=null){
                            Product_Stocks::where(["id"=>$itm["itm_id"],"type"=>0])->update([
                                "have_products"=>($data_product0->have_products-$itm["quantity"]),
                            ]);
                        }
                        /*---End.update parent table of product---*/
                        $data_product1=Product_Stocks::where(["id"=>$itm["itm_id"],"type"=>0])->first(); //as updated
                        $data_his_product=product_history::where(["inv_sale_id"=>$inv_id,"product_id"=>$itm["itm_id"]])->first();
                        if($data_his_product!=null){
                            product_history::where(["inv_sale_id"=>$inv_id,"product_id"=>$itm["itm_id"]])->update([
                                "process_date" =>Carbon::now(),
                                "sold"=>($data_his_product->sold+$itm["quantity"]),
                                "remaining"=>($data_his_product->remaining-$itm["quantity"]),
                            ]);
                        }elseif($data_his_product==null){ //$data_his_product->sold+
                            product_history::create([
                                "inv_sale_id"=>$inv_id,
                                "process_date" =>Carbon::now(),
                                "product_id"=>$itm["itm_id"],
                                "ptn_id"=>$request->invoice["patient_id"],
                                "Explanation"=>$request->invoice["name"],//patient name
                                "sold"=>$itm["quantity"],
                                "remaining"=>$data_product1->have_products
                            ]);
                        }
                        /*____*/
                    }
                }
                /**End items which are coming from appointment of "Yapılan işler " by the "invoice add page"**/
                /** New items which are coming from "invoice add page" "**/
                if(!empty($request->invoice[ "item" ])){
                    foreach ( $request->invoice[ "item" ] as $itm ) {
                        if ( !empty($itm[ "tax" ]) ) {
                            $tax_name = $itm[ "tax" ][ 0 ][ "name" ];
                            $rate = $itm[ "tax" ][ 0 ][ "rate" ];
                            $tax_price = $itm[ "taxprice" ];
                        } else {
                            $tax_name = null;
                            $rate = null;
                            $tax_price = null;
                        }
                        inv_sale_items::create([
                            "inv_sale_id" => $inv_id,
                            "itm_name" => $itm[ "name" ],
                            "itm_dscr" => $itm[ "descr" ],
                            "cost" => $itm[ "cost" ],
                            "quantity" => $itm[ "quantity" ],
                            "price" => $itm[ "price" ],

                            "tax_type_name" => $tax_name,
                            "rate" => $rate,
                            "tax_price" => $tax_price,

                        ]);
                        /*___*/
                        /*---update parent table of product---*/
                        $data_product0=Product_Stocks::where(["id"=>$itm["itm_id"],"type"=>0])->first();
                        if($data_product0!=null){
                            Product_Stocks::where(["id"=>$itm["itm_id"],"type"=>0])->update([
                                "have_products"=>($data_product0->have_products-$itm["quantity"]),
                            ]);
                        }
                        /*---End.update parent table of product---*/
                        $data_product1=Product_Stocks::where(["id"=>$itm["itm_id"],"type"=>0])->first(); //as updated
                        $data_his_product=product_history::where(["inv_sale_id"=>$inv_id,"product_id"=>$itm["itm_id"]])->first();
                        if($data_his_product!=null){
                            product_history::where(["inv_sale_id"=>$inv_id,"product_id"=>$itm["itm_id"]])->update([
                                "process_date" =>Carbon::now(),
                                "sold"=>($data_his_product->sold+$itm["quantity"]),
                                "remaining"=>($data_his_product->remaining-$itm["quantity"]),
                            ]);
                        }elseif($data_his_product==null){ //$data_his_product->sold+
                            product_history::create([
                                "inv_sale_id"=>$inv_id,
                                "process_date" =>Carbon::now(),
                                "product_id"=>$itm["itm_id"],
                                "ptn_id"=>$request->invoice["patient_id"],
                                "Explanation"=>$request->invoice["name"],//patient name
                                "sold"=>$itm["quantity"],
                                "remaining"=>$data_product1->have_products
                            ]);
                        }
                        /*____*/

                    }
                }

            }else{
                return redirect()->back()->with("warning","Lütfen Açılan Listeden, Doktor Adını Seçtikten Sonra Düzenlemeyiniz!");
            }
        }else{
            return redirect()->back()->with("warning","Lütfen Açılan Listeden, Hasta Adını Seçtikten Sonra Düzenlemeyiniz!");
        }

        return redirect()->to("Sales_Invoices")->with("success","Fatura İşlemleri Sisteme Başarıyla Kaydedildi");
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
            $id_inv = $id;
            $clinic_id=Auth::user()->the_clinic_id(); //[0]["invoices__sales__view"];
            $sales_invs0=  Clinics::with("Invoices_Sales_View")->get(); // all clinics
                $sales_inv = $sales_invs0->where("id", $clinic_id)->toArray(); // the clinic which needed and the sales invs
                $sales_inv_sub = "";
                foreach ( $sales_inv[ 0 ][ "invoices__sales__view" ] as $sub ) {
                    if ( $sub[ "id" ] == $id ) {
                        $sales_inv_sub = $sub;
                    }
                }

             $casings=Casings::where("clinic_id",$clinic_id)->get();
             $sales_inv_items = inv_sale_items::where("inv_sale_id", $id_inv)->get();
             $history_payment=HistoryPayment_Add::where(["inv_id"=>$id,"type_inv"=>"sale"])->get();

             return view('pages.Invoice_Sale_View', compact("id_inv","sales_inv", "sales_inv_sub", "sales_inv_items","history_payment","casings"));
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
       Teeth_Process::where("control_invoice",$id)->update([
           "control_invoice"=>0, //if the invoice has deleted reset the process of teeth
       ]);
       inv_sale_items::where("inv_sale_id",$id)->delete();
       Invoices_Sales::where("id",$id)->delete();
       HistoryPayment_Add::where(["inv_id"=>$id,"type_inv"=>"sale"])->delete();

       return redirect()->back()->with("success","İlgili Fatura Başarıyla Silinmiştir");
    }
}
