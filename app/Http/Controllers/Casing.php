<?php

namespace App\Http\Controllers;

use App\HistoryPayment_Add;
use Illuminate\Http\Request;
use App\Casings;
use Illuminate\Support\Facades\Auth;

class Casing extends Controller
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
      $clinic_id=  Auth::user()->the_clinic_id();
       $all_casings= Casings::where("clinic_id",$clinic_id)->get();


        return view("pages.Casing",compact("all_casings"));
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
     // return $request->cash["c_desc"];

       $clinic_id=Auth::user()->the_clinic_id();
        Casings::create([
            "clinic_id"=>$clinic_id,
            "service_name"=>$request->cash["c_name"],
            "branch_name"=>$request->cash["branch_name"],
            "currency"=>$request->cash["currency"],
            "cs_description"=>$request->cash["c_desc"],
            "cs_phone"=>$request->cash["c_phone"],
        ]);

        return redirect()->back()->with("success","Kayıt Başarıyla Sisteme Eklenmiştir");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $casing= Casings::where("id",$id)->first();
        $proceses_of_accounts= HistoryPayment_Add::where("casing_id",$id)->get();
        return view("pages.Casing_View",compact("casing","proceses_of_accounts"));
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

        Casings::where("id",$id)->update([
            "service_name"=>$request->cash["c_name"],
            "branch_name"=>$request->cash["branch_name"],
            "currency"=>$request->cash["currency"],
            "cs_description"=>$request->cash["c_desc"],
            "cs_phone"=>$request->cash["c_phone"],
        ]);
        return redirect()->back()->with("success","Güncelleme İşlemi Başarıyla Yapılmıştır");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // Casings::where("id",$id)->delete();
       // return redirect()->back()->with("success","Veriler Başarıyla Silinmiştir");
        return redirect()->back()->with("warning","Kasa/Banka Hesap Silme İşlemi Devre Dışı Bırakıldı");
    }
}
