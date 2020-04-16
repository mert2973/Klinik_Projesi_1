<?php

namespace App\Http\Controllers;

use App\Inv_Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Invoice_Items extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    public function autocomplete_inv_items(){
        $search="h";//$_GET["term"];
        $clinic_id=Auth::user()->the_clinic_id();
       $data= Inv_Items::where("itm_name","like","%".$search."%")->where("clinic_id",$clinic_id)->get();
       $push=array();
       foreach ($data as $itm){
           $datas["id"]=$itm["id"];
           $datas["value"]=$itm["itm_name"];
           $datas["name"]=$itm["itm_name"];
           $datas["price"]=$itm["itm_cost"];
           $datas["description"]=$itm["itm_dscr"];
           $datas["label"]=$itm["itm_name"];

           array_push($push,$datas);
       }

       echo json_encode($push);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinic_id=Auth::user()->the_clinic_id();
        $invoice_items=Inv_Items::where("clinic_id",$clinic_id)->paginate(20);
        return view('pages.St_Invoice_Items',compact("invoice_items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clinic_id=Auth::user()->the_clinic_id();
        Inv_Items::create([
           "clinic_id"=>$clinic_id,
           "itm_name"=>$request->item["name"],
           "itm_dscr"=>$request->item["description"],
           "itm_cost"=>$request->item["price"],

        ]);
        return redirect()->back()->with("success","Eklediğiniz Hizmet Sisteme Başarıyla Kaydedildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
