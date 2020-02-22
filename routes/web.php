<?php
use App\Http\Controllers\Genel_Controller;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */



/*
Route::get('/', function () {
    return view('pages.Dashboard');
});
*/


Route::prefix('/')->group(function () {
    Route::get('/',function (){
        return view('pages.Login');
    });

   Route::get('/My_Profile',function (){
       return view('pages.My_Profile');
   });

   Route::get('/Dashboard',function (){
       return view('pages.Dashboard');
   });
   Route::get('/Patient',function (){
       return view('pages.Patient');
   });
   Route::get('/Patient_Add',function (){
       return view('pages.Patient_Add');
   });
   Route::get('/Patient_View',function (){
       return view('pages.Patient_View');
   });
   Route::get('/Patient_Edit',function (){
       return view('pages.Patient_Edit');
   });
   Route::get('/Appointments',function (){
       return view('pages.Appointments');
   });
   Route::get('/Appointment_View',function (){
       return view('pages.Appointment_View');
   });
   Route::get('/Appointment_Edit',function (){
       return view('pages.Appointment_Edit');
   });
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
   Route::get('/Doctors',function (){
       return view('pages.Doctors');
   });
   Route::get('/Doctor_Edit',function (){
       return view('pages.Doctor_Edit');
   });
   Route::get('/Send_Email',function (){
       return view('pages.Send_Email');
   });
   Route::get('/Notice_View',function (){
       return view('pages.Notice_View');
   });
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
   Route::get('/St_System_Info',function (){
       return view('pages.St_System_Info');
   });
   Route::get('/St_Taxes',function (){
       return view('pages.St_Taxes');
   });
});


Route::get('/no_page', function () {
    return view('pages.No_Page');
});
