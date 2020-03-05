<?php

namespace App\Http\Controllers;

use App\Patient_Infos;
use Illuminate\Http\Request;
use App\Patients;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class Patient extends Controller
{
    public function __construct()
    {

      $this->middleware('auth');
      $this->middleware('Yetkili_Doktor');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public  function patient_infos(){
       $a= DB::table('patient_and_patient_infos as pgi')
           ->join('patients','patients.id','=','pgi.patient_id')
           ->join('patient_infos','patient_infos.id','=','pgi.patient_info_id')->get();
        return $a;
    } */

    public function index()
    {
        $the_patients = Auth::user()->patients_list();
        return view('pages.Patient',compact('the_patients'));
    }

    public function patient_add_page(){
        return view('pages.Patient_Add');
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
        $doctor_id=Auth::user()->id;
        $patient_id=Patients::create([
            'the_dr_id'=>$doctor_id,
            'p_name'=>$request->name,
            'p_surname'=>$request->surname,
            'p_email'=>$request->email,
            'p_phone'=>$request->phone,
        ]);
        //city','country','adress_1','adress_2','gender','date_of_birth','postal_zip','blood_group
       $patient_info_id= Patient_Infos::create([
            'city'=>$request-> city,
            'country'=>$request-> country,
            'adress_1'=>$request-> adres_1,
            'adress_2'=>$request-> adres_2,
            'gender'=>$request-> gender,
            'date_of_birth'=>$request-> date_birth,
            'postal_zip'=>$request-> posta_kodu,
            'blood_group'=>$request-> blood_group,

        ]);
       /*--weak entity relationship--*/
        DB::table('patient_and_patient_infos')->insert(['patient_id'=>$patient_id->id,'patient_info_id'=>$patient_info_id->id]);
       return redirect()->to('/Patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $the_patient_infos= Auth::user()->patients_list()->where('patient_id',$id);
        return view('pages.Patient_View',compact('the_patient_infos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.Patient_Edit');
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
