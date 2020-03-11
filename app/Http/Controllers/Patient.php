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
           ->join('patients','patients.id','=','pgi.patients_id')
           ->join('patient_infos','patient_infos.id','=','pgi.patient_infos_id')->get();
        return $a;
    } */

    public function index( Patients $a)
    {
       //$the_patients= $a->all_patients_list()->paginate(3);
        $the_patients= Patients::with('all_patients_list')->paginate(2); // all patients
       // return $the_patients;
       // $the_patients = Auth::user()->patients_list(); // patients of the belong to user

       return view('pages.Patient',compact('the_patients'));
    }
    public function autoComplete_patients(){

        $search = $_GET['term'];
       // return $name;

        $skillData = array();
        $dta= Patients::where('p_name','like','%'.$search.'%')->get();

        foreach ($dta as $datas){
            $data['id']=$datas['id'];
            $data['value']=$datas['p_name'];//when it is requesting the name

            $data['name']=$datas['p_name'];
            $data['surname']=$datas['p_surname'];
            $data['email']=$datas['p_email'];
            $data['phone']=$datas['p_phone'];


            $name_surname=  $datas['p_name']." ".$datas['p_surname']."<br>".$datas['p_phone']; //the autocomplete format
            $data['label']=$name_surname;

            /* if we want an autocomplete with a picture  */
            /* $data['label'] = '
           <a class="bg-white border-white text-capitalize text-info font-weight-bold text-black-50 ">
           <img src="/css_js_img/media-1771205195e049ca8ee997.jpg" class="img-thumbnail" width="60" height="60"/>
            <span class="" />'.$name_surname.'</span> </a>
        '; */


            array_push($skillData, $data);
        }

        echo json_encode($skillData);
    }
    public function find_the_patient(){
        $patient_id=$_GET['id'];
        return $patient_id;
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
        $patients_id=Patients::create([
            'the_dr_id'=>$doctor_id,
            'p_name'=>$request->name,
            'p_surname'=>$request->surname,
            'p_email'=>$request->email,
            'p_phone'=>$request->phone,
        ]);
        //city','country','adress_1','adress_2','gender','date_of_birth','postal_zip','blood_group
       $patient_infos_id= Patient_Infos::create([
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
        DB::table('patient_and_patient_infos')->insert(['patients_id'=>$patients_id->id,'patient_infos_id'=>$patient_infos_id->id]);
       return redirect()->to('/Patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {//Patient_View
       $the_patient_infos= Auth::user()->patients_list()->where('patients_id',$id);
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
