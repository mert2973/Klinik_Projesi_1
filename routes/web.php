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

/*
Route::get('/', function () {
    return view('pages.Dashboard');
});
*/

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


   Route::get('/Invoices',function (){
       return view('pages.Invoices');
   });
   Route::get('/Invoice_View',function (){
       return view('pages.Invoice_View');
   });
   Route::get('/Invoice_Edit',function (){
       return view('pages.Invoice_Edit');
   });
   Route::get('/Invoice_Add',function (){
       return view('pages.Invoice_Add');
   });
   Route::get('/Prescription',function (){
       return view('pages.Prescription');
   });
   Route::get('/Prescription_Add',function (){
       return view('pages.Prescription_Add');
   });
   Route::get('/Inventory_Medicines',function (){
       return view('pages.Inventory_Medicines');
   });
   Route::get('/Expenses',function (){
       return view('pages.Expenses');
   });
   Route::get('/Expense_Add',function (){
       return view('pages.Expense_Add');
   });
   Route::get('/Birth_Records',function (){
       return view('pages.Birth_Records');
   });
   Route::get('/Death_Records',function (){
       return view('pages.Death_Records');
   });
   Route::get('/Noticeboard',function (){
       return view('pages.Noticeboard');
   });
   Route::get('/Doctors','Doctor@doctors');
   Route::get('/Doctor_Add',"Doctor@doctor_add");
   Route::post('/Doctor_Create','Doctor@doctor_create');


   Route::get('/Doctor_Edit',function (){
       return view('pages.Doctor_Edit');
   });
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
   Route::get('/St_Invoice_Items',function (){
       return view('pages.St_Invoice_Items');
   });
   Route::get('/St_Payment_Gateway',function (){
       return view('pages.St_Payment_Gateway');
   });
   Route::get('/St_Payment_Methods',function (){
       return view('pages.St_Payment_Methods');
   });
   Route::get('/St_Suppliers',function (){
       return view('pages.St_Suppliers');
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


