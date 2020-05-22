<?php

namespace App\Http\Controllers;

use App\Order_Managements;
use App\order_mng_history;
use App\Suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Supplier extends Controller
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
        $clinic_id=Auth::user()->the_clinic_id();
       $suppliers= Suppliers::where("clinic_id",$clinic_id)->paginate(10);
        return view("pages.Suppliers",compact("suppliers"));
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
      Suppliers::create([
         "clinic_id"=>$clinic_id,
         "spp_name"=>$request->name,
         "spp_email"=>$request->email,
         "spp_phone"=>$request->phone,
         "spp_adress"=>$request->address,
      ]);
      return redirect()->back()->with("success","Eklemiş Olduğunuz Tedarikçi Bilgilieri, Başarıyla Kaydedilmiştir");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return $id;
       // $data=$om->order_mng_with_history_payment()->get();
       // $mng_with_payment= $data->where("supplier_id",$id);
        $supplier=Suppliers::where("id",$id)->first();
        $mng_with_payment=order_mng_history::where("supplier_id",$id)->get();
        return view("pages.Supplier_View",compact("mng_with_payment","supplier"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request) // Edit With Update
    {

        Suppliers::where("id",$id)->update([
            "spp_name"=>$request->name,
            "spp_email"=>$request->email,
            "spp_phone"=>$request->phone,
            "spp_adress"=>$request->address,
        ]);
        return redirect()->back()->with("success","Değişiklikler, Sisteme Başarıyla Kaydedilmiştir");
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
       Suppliers::where("id",$id)->delete();
       return redirect()->back()->with("success","İlgili Tedarikçi Bilgileri Başarıyla Silinmiştir");
    }
}
