<?php
use App\Http\Controllers\Genel_Controller;
use App\Http\Controllers\Hesabim;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use function foo\func;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*****Deneme *****/
Route::get('deneme','Genel_Controller@deneme');
Route::get('veri','Genel_Controller@veri');
Route::get('events_calendar','Appointment@show_events');
/***end  Deneme ***/

Route::get('doctors_list','Doctor@doctors_list');
Route::get('search_a_doctor','Doctor@search_a_doctor_autocomplete');
Route::get('kayit',function (){
    return "kayıt oldunuz";
});

Route::get('vue_ex',function (){
    return view('pages.vue_ornekleri');
});

Route::prefix('/')->group(function () {

    Route::get('/',function (){
        if(Auth::check()){
            return view('pages.Dashboard');
        }else{
            return view('pages.Login');
        }
    });

   Route::get('/My_Profile','Hesabim@my_profile');
   Route::get('/Dashboard','HomeController@Dashboard');

   Route::get('/Patient_Add','Patient@patient_add_page');
   Route::resource('Patient','Patient');
   Route::get('autoComplete_patients_list','Patient@autoComplete_patients');
   Route::get('Find_Patient','Patient@find_the_patient');

   Route::resource('/Appointments','Appointment');
   Route::get('/doctor_apt_time','Appointment@doctor_apt_time');

   Route::resource("Sales_Invoices","InvoicesOf_Sales");
   Route::post("add_payment_history","InvoicesOf_Sales@payment_history");

    Route::get('Invoices_Purchase',function (){
        return view('pages.Invoices_Purchase');
    });
    Route::get('Invoice_Purchase_Add',function (){
        return view('pages.Invoice_Purchase_Add');
    });


   Route::get('/Prescription',function (){
       return view('pages.Prescription');
   });
   Route::get('/Prescription_Add',function (){
       return view('pages.Prescription_Add');
   });

    /**** Satın alma ******/
   Route::resource('Inventory_Medicines','Inventory_Medicine');// Products - Urunler
   Route::get("Purchase",function (){
      return view("pages.Purchase");
   });

    Route::resource("Suppliers","Supplier");
/**** End Satın alma ******/

   Route::get('/Expenses',function (){
       return view('pages.Expenses');
   });
   Route::get('/Expense_Add',function (){
       return view('pages.Expense_Add');
   });

   Route::get('/Noticeboard',function (){
       return view('pages.Noticeboard');
   });
   Route::get('/Doctors','Doctor@list_dr');
   Route::get('/Doctor_Add',"Doctor@doctor_add");
   Route::post('/Doctor_Create','Doctor@create_doctor');
   Route::get('/Doctor_Edit/{dr_id}','Doctor@edit_doctor');
   Route::post('/Doctor_Delete/{dr_id}','Doctor@delete_doctor');
   Route::post('/Doctor_Info_Update','Doctor@update_doctor_info');

   Route::get('/Send_Email',function (){
       return view('pages.Send_Email');
   });
   Route::get('/Notice_View',function (){
       return view('pages.Notice_View');
   });
   Route::post('/Add_The_User_Role','Roles_and_Users@add_the_user_role');
   Route::get('/Users','Roles_and_Users@users');
   Route::get('/Users_Add','Roles_and_Users@users_add');
   Route::get('/Users_Edit','Roles_and_Users@users_edit');

   Route::get('/User_Roles','Roles_and_Users@user_roles');
   Route::get('/User_Role_Add','Roles_and_Users@user_role_add');
   Route::get('/User_Role_Edit','Roles_and_Users@user_role_edit');

   Route::get('/St_Clinical_Notes',function (){
       return view('pages.St_Clinical_Notes');
   });
   Route::get('/St_Expense_Type',function (){
       return view('pages.St_Expense_Type');
   });
   Route::resource('St_Invoice_Items',"Invoice_Items");
   Route::get('inv_items',"Invoice_Items@autocomplete_inv_items");
   Route::get('/St_Payment_Gateway',function (){
       return view('pages.St_Payment_Gateway');
   });
   Route::get('/St_Payment_Methods',function (){
       return view('pages.St_Payment_Methods');
   });

   Route::get('/St_System_Info','Clinic@st_system_info');
   Route::post('Clinic_Add','Clinic@clinic_add');
   Route::get('/St_Taxes',function (){
       return view('pages.St_Taxes');
   });
});

Route::match(array('POST','GET'),'sifre_yenile','Hesabim@Sifreyi_Yenile');



Route::get('/no_page', function () {
    return view('pages.No_Page');
});
Route::get('/yetki_msj', function () {
    return view('pages.yetki_msj');
});


