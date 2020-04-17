<?php

namespace App\Http\Controllers;

use App\Inventory_Medicines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Inventory_Medicine extends Controller
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
    public function index()
    {
        $clnc_id=Auth::user()->the_clinic_id();
        $inventory_mdcn= Inventory_Medicines::where("clinic_id",$clnc_id)->paginate(5);
        return view("pages.Inventory_Medicines",compact("inventory_mdcn"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Inv_Medicine_Add');
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
        Inventory_Medicines::create([
            "clinic_id"=>$clnc_id,
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
        return view("pages.Inv_Medicine_View");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $inv_mdcn= Inventory_Medicines::where("id",$id)->first();
        return view("pages.Inv_Medicine_Edit",compact("inv_mdcn"));
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
        Inventory_Medicines::where("id",$id)->update([
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
        Inventory_Medicines::where("id",$id)->delete();

        return redirect()->back()->with("success","Silme İşlemi Başarıyla Tamamlandı");
    }
}
