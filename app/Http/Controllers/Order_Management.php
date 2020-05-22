<?php

namespace App\Http\Controllers;

use App\Casings;
use App\Clinics;
use App\HistoryPayment_Add;
use App\inv_sale_items;
use App\order_mng_history;
use App\Order_Mng_items;
use App\order_mng_itm_tax;
use App\product_history;
use App\Product_Stocks;
use App\Suppliers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Order_Managements;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class Order_Management extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function payment_history(Request $request){
        $get=Order_Managements::where("id",$request->payment["id"])->first();
        $a = $get->paid;
        $b=  $get->due;
        $paid_date=Carbon::parse($request->payment["date"])->format("Y-m-d H:i");

        /*Calculate last balance*/
        $credit=$request->payment[ "paid" ];
        if($credit==null){
            $credit=0;
        }
        $get_cs=Casings::where("id",$request->payment["casing"])->first();
        if($get_cs->last_balance<$credit){
            return redirect()->back()->with("warning","Hesapta Yeterli Bakiye Bulunamadı");
        }
        $total_last_balance=($get_cs->last_balance-$credit);
        Casings::where("id",$request->payment["casing"])->update([
            "last_balance"=>$total_last_balance,
        ]);
        /*End.Calculate last balance*/
        Order_Managements::where("id",$request->payment["id"])->update([
            "paid"=>($a+$request->payment["paid"]),
            "due"=>($b-$request->payment["paid"])
        ]);


        HistoryPayment_Add::create([
            "inv_id"=>$request->payment["id"],
            "type_inv"=>"purchase",
            "casing_id"=> $request->payment["casing"],
            "names"=> $request->payment["names"],
            "method"=> $request->payment["method"],
            "last_cash_balance" => $total_last_balance,
            "credit"=>$credit,
            "paid_date"=>$paid_date,
        ]);
        /**--save procesee--**/
        $spp=Suppliers::where("id",$request->payment["spp_id"])->first();
        $b= $spp->total_credit-$credit;
        Suppliers::where("id",$request->payment["spp_id"])->update([
            "total_credit"=>$b
        ]);
        order_mng_history::create([
            "order_mng_id"=>$request->payment["id"],
             "paid"=>$credit,
             "supplier_id"=>$request->payment["spp_id"],
            "total_balance"=>$b,
            "process_date"=>$paid_date,
        ]);
        /**--End.save procesee--**/
        return redirect()->back()->with("success","Ödeme Başarıyla Tamamlanmıştır");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Suppliers $spp)
    {
        $order_managements=  $spp->order_management_with_supplier()->get();
        return view("pages.Order_Management",compact("order_managements"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $chk_page,Suppliers $spp){
        if($chk_page->crt_inv==1){ // condition for pages(if $chk_page=2 then return  true)
          //return $crt_inv= $this->orders()->where("id",$chk_page->sp_id);
           $clinic_id=Auth::user()->the_clinic_id();
           $casing=Casings::where("clinic_id",$clinic_id)->get();
           $crt_inv0= $spp->order_management_with_supplier()->get();
           $crt_inv1=$crt_inv0->where("id",$chk_page->sp_id);
              /*--chk if exist---*/
               $chk=0;
               foreach ($crt_inv1 as $a){
                   $chk=1;
                   break;
               }
              /*--End.chk if exist---*/
               if($chk==1){
                   $crt_inv=array();
                   foreach ($crt_inv1 as $k){
                       $crt_inv[]=$k; // insert to array to arrange all data and get same standart data as array
                       break;
                   }
                  // return $crt_inv;
                   $itms_with_tax=  Order_Mng_items::with("order_itms_with_tax")->where("order_mng_id",$chk_page->sp_id)->get();
                   return view("pages.Create_Invoice_By_Order",compact("crt_inv","itms_with_tax","casing"));
               }elseif($chk==0){
                   return redirect()->to("/Order_Management")->with("warning","Geçersiz bir adres girişimi yapıldı!");
               }
        }else{
            $suppliers= Suppliers::get();
           return view("pages.Order_Management_Add",compact("suppliers"));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
       // return $request->all();
        $clinic_id=Auth::user()->the_clinic_id();
       // return $request->purchase["supplier"];
        if($request->purchase["items1"][0]["medicine_id"]==null){
            return redirect()->back()->with("warning","Ürün Ad Bilgisi İstenildiği Gibi Alınamadı, Lütfen Ürün Adlarını Listeden Seçerek Tekrar Giriniz");
        }
       // return $request->purchase["items"][0]["tax"];

           $id_order= Order_Managements::create([
                "clinic_id"=>$clinic_id,
                "supplier_id"=>$request->purchase["supplier"],
                "total_qty"=>$request->purchase["total_qty"],
                "subtotal"=>$request->purchase["total"],
                "tax"=>$request->purchase["tax"],
                "discount"=>$request->purchase["discount"],
                "discounttype"=>$request->purchase["discounttype"],
                "amount"=>$request->purchase["amount"],
                "note"=>$request->purchase["note"],
                "order_date"=>Carbon::parse($request->purchase["order_date"])->format("Y-m-d"),
                "delivery_date"=>Carbon::parse($request->purchase["delivery_date"])->format("Y-m-d"),
            ]);

           foreach ($request->purchase["items1"] as $itms){
              $id_itms= Order_Mng_items::create([
                "order_mng_id"=>$id_order->id,
                "itm_name"=>$itms["name"],
                "itm_id"=>$itms["medicine_id"],
                "quantity"=>$itms["qty"],
                //"delivery_qty"=>$itms["delivery_qty"],
                //"remaning_qty"=>$itms["remaning_qty"],
                "purchaseprice"=>$itms["purchaseprice"],
                "total_tax"=>$itms["taxprice"],
                "total_price"=>$itms["price"],
               ]);
              Product_Stocks::where("id",$itms["medicine_id"])->update([
                  "item_cost"=>$itms["purchaseprice"],
              ]);
               if(!empty($itms["tax1"])){
                   foreach ($itms["tax1"] as $tx){
                       order_mng_itm_tax::create([
                           "order_mng_itms_id"=>$id_itms->id,
                           "tax_name"=>$tx["name"],
                           "tax_rate"=>$tx["rate"],
                           "tax_price"=>$tx["tax_price"],
                       ]);
                   }
               }
           }
           /**--save procesee--**/
           $a=Suppliers::where("id",$request->purchase["supplier"])->first();
           $b= $a->total_credit+$request->purchase["amount"];
           Suppliers::where("id",$request->purchase["supplier"])->update([
               "total_credit"=>$b
           ]);
           order_mng_history::create([
              "order_mng_id"=>$id_order->id,
                "supplier_id"=>$request->purchase["supplier"],
               "amount_inv"=>$request->purchase["amount"],
               "total_balance"=>$b,
               "process_date"=>Carbon::parse($request->purchase["order_date"])->format("Y-m-d"),
           ]);
        /**--End.save procesee--**/
        return redirect()->to("Order_Management")->with("success","Sipariş Başarıyla Sisteme Eklendi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $id_inv = $id;
        $chk=Order_Managements::where("id",$id)->first();
        if($chk==null){
            return redirect()->to("/Order_Management")->with("warning","Fatura Henüz Oluşturulmadı");
        }
        $clinic_id=Auth::user()->the_clinic_id();
        $data= Clinics::with("Order_Managements_View")->get();

        $order_inv=$data->where("id",$clinic_id)->toArray();

        $order_inv_sub = "";
        foreach ( $order_inv[ 0 ][ "order__managements__view" ] as $sub ) {
            if ( $sub[ "id" ] == $id ) {
                $order_inv_sub = $sub;
            }
        }

        if($order_inv_sub["chk_inv"]==0){
            return redirect()->back()->with("warning","Fatura Henüz Oluşturulmadı, Faturayı İncelemeden Önce Faturayı Oluşturunuz!");
        }
        $casings=Casings::where("clinic_id",$clinic_id)->get();
        $order_inv_items = Order_Mng_items::where("order_mng_id", $id)->get();
        $history_payment=HistoryPayment_Add::where(["inv_id"=>$id,"type_inv"=>"purchase"])->get();

        return view("pages.Order_Management_View",compact("id_inv","order_inv","order_inv_sub","casings","order_inv_items","history_payment"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //note: items1 is a record, items is a new line
       // return $request->all();
        /*----*/
        $order_data = Order_Managements::where("id",$id)->first();
        $spp_data=Suppliers::where("id",$request->purchase["supplier"])->first();
        /*----*/

        Order_Managements::where("id",$id)->update([
            "total_qty"=>$request->purchase["total_qty"],
            "total_delivery"=>$request->purchase["total_delvery"],
            "total_remaining"=>$request->purchase["total_remning"],
            "subtotal"=>$request->purchase["total"],
            "tax"=>$request->purchase["tax"],
            "discount"=>$request->purchase["discount"],
            "discounttype"=>$request->purchase["discounttype"],
            "amount"=>$request->purchase["amount"],
            //"paid"=>$request->purchase["paid"],
            //"due"=>$request->purchase["due"],
            "note"=>$request->purchase["note"],
            //"order_date"=>Carbon::parse($request->purchase["order_date"])->format("Y-m-d"),
            "delivery_date"=>Carbon::parse($request->purchase["delivery_date"])->format("Y-m-d"),
            "chk_inv"=>1 // 1: inv has billed
        ]);

        /**Reset products stocks (just do on record lines)*/
       foreach ($request->purchase["chk_qty"] as $prd){
           $get_data=Product_Stocks::where("id",$prd["id_prdct"])->first();
           Product_Stocks::where("id",$prd["id_prdct"])->update([
               "have_products"=>($get_data->have_products-$prd["back_up_dqty"]),
               "total_till_now"=>($get_data->total_till_now-$prd["back_up_dqty"]),
           ]);
            $rst_data_his_chk=$rst_data_his=product_history::where(["order_mng_id"=>$id,"product_id"=>$prd["id_prdct"]])->first();
            if($rst_data_his_chk!=null){
                product_history::where(["order_mng_id"=>$id,"product_id"=>$prd["id_prdct"]])->update([
                    "purchased"=> ($rst_data_his->purchased-$prd["back_up_dqty"]),
                    "remaining"=> ($rst_data_his->remaining-$prd["back_up_dqty"])
                ]);
            }
       }
        /**End. Reset products stocks */

        $itm_table_id=array();
        $tax_table_id=array();
      if(!empty($request->purchase["items1"])){ // for record
        foreach ($request->purchase["items1"] as $itms1){
            $the_itm_table_id=$itms1["row_id"];
            $itm_table_id[]  =$the_itm_table_id;

            Order_Mng_items::where(["id"=>$the_itm_table_id])->update([
                //"itm_name"=>$itms1["name"],
                //"itm_id"=>$itms1["medicine_id"],
                //"quantity"=>$itms1["qty"],
                "delivery_qty" =>$itms1["delivery_qty"],
                "remaning_qty" =>$itms1["remaning_qty"],
                "purchaseprice"=>$itms1["purchaseprice"],
                "total_tax"    =>$itms1["taxprice"],
                "total_price"  =>$itms1["price"],
            ]);
            Product_Stocks::where("id",$itms1["medicine_id"])->update([ // update item price
                "item_cost"=>$itms1["purchaseprice"],
            ]);
            /**Update products stocks */
            $get_data1=Product_Stocks::where("id",$itms1["medicine_id"])->first();
            Product_Stocks::where("id",$itms1["medicine_id"])->update([
                "have_products" =>($get_data1->have_products+$itms1["delivery_qty"]),
                "total_till_now"=>($get_data1->total_till_now+$itms1["delivery_qty"]),
            ]);

           $data_prdct_his= product_history::where(["order_mng_id"=>$id,"product_id"=>$itms1["medicine_id"]])->first();
           if($data_prdct_his!=null){
               product_history::where(["order_mng_id"=>$id,"product_id"=>$itms1["medicine_id"]])->update([
                   "process_date" => Carbon::now(),
                   //"product_id"   => $itms1["medicine_id"],
                   //"spp_id" =>$request->purchase["supplier"],
                   //"Explanation"=>$spp_data->spp_name,
                   "purchased"=> ($data_prdct_his->purchased+$itms1["delivery_qty"]),
                   "remaining"=> ($get_data1->have_products+$itms1["delivery_qty"]),//($data_prdct_his->remaining+$itms1["delivery_qty"])
               ]);
           }elseif($data_prdct_his==null){
               product_history::create([
                   "process_date" => Carbon::now(),
                   "order_mng_id"   => $id,
                   "product_id"   => $itms1["medicine_id"],
                   "spp_id" =>$request->purchase["supplier"],
                   "Explanation"=>$spp_data->spp_name,
                   "purchased"=> $itms1["delivery_qty"],
                   "remaining"=>($get_data1->have_products+$itms1["delivery_qty"]),//$itms1["delivery_qty"]
               ]);
           }
            /**End. Update products stocks*/

            if(!empty($itms1["tax"])){
                foreach ($itms1["tax"] as $tx){
                    $tax_table_id[]=$tx["id"];
                   /* order_mng_itm_tax::where("order_mng_itms_id",$the_itm_table_id)->update([
                        "tax_name"=>$tx["name"],
                        "tax_rate"=>$tx["rate"],
                        "tax_price"=>$tx["tax_price"],
                    ]); */
                }
            }
            /*---if has deleted the tax from row of invoice page just delete it also from db-*/
            $collect_data_tax=order_mng_itm_tax::where("order_mng_itms_id",$the_itm_table_id)->get();
            foreach ($collect_data_tax as $tax){
                if(in_array($tax->id,$tax_table_id)==false){
                    order_mng_itm_tax::where("id",$tax->id)->delete();
                }
            }
            /*---End.if has deleted the tax from row of invoice page just delete it also from db-*/

            if(!empty($itms1["tax1"])){
                foreach ($itms1["tax1"] as $tx1){
                    order_mng_itm_tax::create([
                        "order_mng_itms_id"=>$the_itm_table_id,
                        "tax_name"=>$tx1["name"],
                        "tax_rate"=>$tx1["rate"],
                        "tax_price"=>$tx1["tax_price"],
                    ]);
                }
            }
        }
     }
        /*---if has deleted the row from invoice page just delete it also from db-*/
        $collect_data=Order_Mng_items::where("order_mng_id",$id)->get();
        foreach ($collect_data as $del){
            if(in_array($del->id,$itm_table_id)==false){
                Order_Mng_items::where("id",$del->id)->delete();
                order_mng_itm_tax::where("order_mng_itms_id",$del->id)->delete();
            }
        }
        /*---End.if has deleted the row from invoice just delete it also from db-*/

        /*---if has created  new items and tax rows at invoice table--*/
        if (!empty($request->purchase["items"])){ // for new line
            foreach ($request->purchase["items"] as $itms){
                $id_itms= Order_Mng_items::create([
                    "order_mng_id"=>$id,
                    "itm_name"=>$itms["name"],
                    "itm_id"=>$itms["medicine_id"],
                    "quantity"=>$itms["qty"],
                    "delivery_qty"=>$itms["delivery_qty"],
                    "remaning_qty"=>$itms["remaning_qty"],
                    "purchaseprice"=>$itms["purchaseprice"],
                    "total_tax"=>$itms["taxprice"],
                    "total_price"=>$itms["price"],
                ]);

                Product_Stocks::where("id",$itms["medicine_id"])->update([ // update item price
                    "item_cost"=>$itms["purchaseprice"],
                ]);

                $get_data2=Product_Stocks::where("id",$itms["medicine_id"])->first();
                Product_Stocks::where("id",$itms["medicine_id"])->update([
                    "have_products"=>($get_data2->have_products+$itms["delivery_qty"]),
                    "total_till_now"=>($get_data2->total_till_now+$itms["delivery_qty"]),
                ]);
                /*-----__---*/
                $data_prdct_his2= product_history::where(["order_mng_id"=>$id,"product_id"=>$itms["medicine_id"]])->first();
                if($data_prdct_his2!=null){
                    product_history::where(["order_mng_id"=>$id,"product_id"=>$itms["medicine_id"]])->update([
                        "process_date" => Carbon::now(),
                        //"product_id"   => $itms1["medicine_id"],
                        //"spp_id" =>$request->purchase["supplier"],
                        //"Explanation"=>$spp_data->spp_name,
                        "purchased"=> ($data_prdct_his2->purchased+$itms["delivery_qty"]),
                        "remaining"=> ($get_data2->have_products+$itms["delivery_qty"])
                    ]);
                }elseif($data_prdct_his2==null){
                    product_history::create([
                        "process_date" => Carbon::now(),
                        "order_mng_id"   => $id,
                        "product_id"   => $itms["medicine_id"],
                        "spp_id" =>$request->purchase["supplier"],
                        "Explanation"=>$spp_data->spp_name,
                        "purchased"=> ($data_prdct_his2->purchased+$itms["delivery_qty"]),
                        "remaining"=> ($get_data2->have_products+$itms["delivery_qty"])
                    ]);
                }
                /*---__---*/
                if(!empty($itms["tax"])){
                    foreach ($itms["tax"] as $tx){
                        order_mng_itm_tax::create([
                            "order_mng_itms_id"=>$id_itms->id,
                            "tax_name"=>$tx["name"],
                            "tax_rate"=>$tx["rate"],
                            "tax_price"=>$tx["tax_price"],
                        ]);
                    }
                }
            }
        }
        /*---End. if has created  new items and tax rows at invoice table--*/

        return redirect()->to("/Order_Management")->with("success","Fatura Başarıyla Oluşturuldu");
        //return redirect()->back()->with("success","Fatura Başarıyla Oluşturuldu");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return $id;
    }
}
