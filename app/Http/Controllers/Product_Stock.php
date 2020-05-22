<?php

namespace App\Http\Controllers;

use App\product_history;
use App\Product_Stocks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Product_Stock extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function autocomplete_medicine(){
        $clinic_id= Auth::user()->the_clinic_id();
        if(isset($_GET["order_request"])){
            $trm=$_GET["order_request"];
            $mdc=Product_Stocks::where("product_name","like","%".$trm."%")->where("clinic_id",$clinic_id)->get();
        }
        if(isset($_GET["term"])){
            $trm=$_GET["term"];
            $mdc=Product_Stocks::where("product_name","like","%".$trm."%")->where("clinic_id",$clinic_id)->where("have_products",">",0)->get();
        }
        //$trm=$_GET["term"];

        $datas=array(); $a="";
        foreach ($mdc as $list){
            $data["id"]=$list["id"];
            $data["value"]=$list["product_name"];
            if($list["type"]==0){ //if type; 0:ürün, 1:Hizmet
                $a="Ürün"."/Stok: ".$list["have_products"];
            }else{
                $a="Hizmet";
            }
            $data["label"]=$list["product_name"]."/".$a;

            $data["name"]=$list["product_name"];
            $data["price"]=$list["item_cost"];
            $data["description"]=$list["product_note"];
            $data["type"]=$list["type"];

            array_push($datas,$data);
        }
        echo  json_encode($datas);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clnc_id=Auth::user()->the_clinic_id();
        $products= Product_Stocks::where(["clinic_id"=>$clnc_id,"type"=>0])->paginate(5);
        return view("pages.Product_Stock",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Product_Stock_Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return  $request->all();

        $clnc_id=Auth::user()->the_clinic_id();
        Product_Stocks::create([
            "clinic_id"=>$clnc_id,
            "product_name"=>$request->product_name ,
            "product_catgry"=>$request-> product_catgry,
            "stock_code"=>$request->stock_code ,
            "product_note"=>$request->product_note ,
        ]);

        return redirect()->back()->with("success","İlaç Bilgileri Başarıyla Sisteme Eklendi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inv_mdcn= Product_Stocks::where("id",$id)->first();
        $product_history= product_history::where("product_id",$id)->get();
        return view("pages.Product_Stock_View",compact("inv_mdcn","product_history"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $inv_mdcn= Product_Stocks::where("id",$id)->first();
        return view("pages.Product_Stock_Edit",compact("inv_mdcn"));
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
     //return  $request->all();
        Product_Stocks::where("id",$id)->update([
            "medc_name"=>$request->medc_name ,
            "medc_category"=>$request-> medc_category,
            "medc_company"=>$request->medc_company ,
            "medc_generic"=>$request->medc_generic ,
            "medc_group"=>$request->medc_group ,
            "medc_unit"=>$request->medc_unit ,
            "medc_unitpacking"=>$request->medc_unitpacking ,
            "medc_storebox"=>$request->medc_storebox ,
            "medc_minlevel"=>$request->medc_minlevel ,
            "medc_reorderlevel"=>$request->medc_reorderlevel ,
            "medc_note"=>$request->medc_note ,
        ]);
        return redirect()->back()->with("success","Güncelleme İşlemi Başarılı Oldu");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product_Stocks::where("id",$id)->delete();

        return redirect()->back()->with("success","Silme İşlemi Başarıyla Tamamlandı");
    }
}
