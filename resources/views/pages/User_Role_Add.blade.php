@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#User').addClass('active') ;
            $('#Roles').addClass('text-white') ;
        });
    </script>


    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">New User Role</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=role">User Roles</a></li>
                                <li>New User Role</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=role/add" method="post" enctype="multipart/form-data" siq_id="autopick_8489">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label class="col-form-label">User Role Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-tag"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" value="" placeholder="Enter User Role Name . . .">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-paragraph"></i></span>
                                </div>
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="col-form-label">Permission</label>
                            <table class="table table-bordered table-striped userrole-table table-middle">
                                <tbody>
                                <tr>
                                    <td>Dashboard</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="dashboard" value="dashboard">
                                            <label class="custom-control-label" for="dashboard">Dashboard</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="dashbaordappointment" value="dashbaordappointment">
                                            <label class="custom-control-label" for="dashbaordappointment">Calendar Appointment</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Patient</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="patients" value="patients">
                                            <label class="custom-control-label" for="patients">Patient List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="patient/add" value="patient/add">
                                            <label class="custom-control-label" for="patient/add">Patient Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="patient/edit" value="patient/edit">
                                            <label class="custom-control-label" for="patient/edit">Patient Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="patient/delete" value="patient/delete">
                                            <label class="custom-control-label" for="patient/delete">Patient Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="patient/view" value="patient/view">
                                            <label class="custom-control-label" for="patient/view">Patient View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Patient Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="patient/notes" value="patient/notes">
                                            <label class="custom-control-label" for="patient/notes">Patient Clinical Notes</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="patients/documents" value="patients/documents">
                                            <label class="custom-control-label" for="patients/documents">Paitent Documents</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="patient/sendmail" value="patient/sendmail">
                                            <label class="custom-control-label" for="patient/sendmail">Patient Sendmail</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Appointment</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="appointments" value="appointments">
                                            <label class="custom-control-label" for="appointments">Appointment List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="appointment/add" value="appointment/add">
                                            <label class="custom-control-label" for="appointment/add">Appointment Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="appointment/edit" value="appointment/edit">
                                            <label class="custom-control-label" for="appointment/edit">Appointment Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="appointment/delete" value="appointment/delete">
                                            <label class="custom-control-label" for="appointment/delete">Appointment Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="appointment/view" value="appointment/view">
                                            <label class="custom-control-label" for="appointment/view">Appointment View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Appointment Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="appointment/sendmail" value="appointment/sendmail">
                                            <label class="custom-control-label" for="appointment/sendmail">Appointment Sendmail</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="appointment/notes" value="appointment/notes">
                                            <label class="custom-control-label" for="appointment/notes">Appointment Clinical Notes</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="appointment/documents" value="appointment/documents">
                                            <label class="custom-control-label" for="appointment/documents">Appointment Documents</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="report/reportUpload" value="report/reportUpload">
                                            <label class="custom-control-label" for="report/reportUpload">Document Upload</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="report/removeReport" value="report/removeReport">
                                            <label class="custom-control-label" for="report/removeReport">Document Remove</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Prescription</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="prescriptions" value="prescriptions">
                                            <label class="custom-control-label" for="prescriptions">Prescription List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="prescription/add" value="prescription/add">
                                            <label class="custom-control-label" for="prescription/add">Prescription Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="prescription/edit" value="prescription/edit">
                                            <label class="custom-control-label" for="prescription/edit">Prescription Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="prescription/delete" value="prescription/delete">
                                            <label class="custom-control-label" for="prescription/delete">Prescription Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="prescription/view" value="prescription/view">
                                            <label class="custom-control-label" for="prescription/view">Prescription View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Prescription Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="prescription/pdf" value="prescription/pdf">
                                            <label class="custom-control-label" for="prescription/pdf">Prescription PDF</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Invoice</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="invoices" value="invoices">
                                            <label class="custom-control-label" for="invoices">Invoice List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="invoice/add" value="invoice/add">
                                            <label class="custom-control-label" for="invoice/add">Invoice Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="invoice/edit" value="invoice/edit">
                                            <label class="custom-control-label" for="invoice/edit">Invoice Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="invoice/delete" value="invoice/delete">
                                            <label class="custom-control-label" for="invoice/delete">Invoice Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="invoice/view" value="invoice/view">
                                            <label class="custom-control-label" for="invoice/view">Invoice View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Invoice Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="invoice/pdf" value="invoice/pdf">
                                            <label class="custom-control-label" for="invoice/pdf">Invoice PDF</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="invoice/sentmail" value="invoice/sentmail">
                                            <label class="custom-control-label" for="invoice/sentmail">Invoice Sendmail</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="addpayment" value="addpayment">
                                            <label class="custom-control-label" for="addpayment">Add Payment</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Request</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="request" value="request">
                                            <label class="custom-control-label" for="request">Request List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="request/edit" value="request/edit">
                                            <label class="custom-control-label" for="request/edit">Request Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="request/delete" value="request/delete">
                                            <label class="custom-control-label" for="request/delete">Request Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="request/view" value="request/view">
                                            <label class="custom-control-label" for="request/view">Request View</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="request/mail" value="request/mail">
                                            <label class="custom-control-label" for="request/mail">Request Send Mail</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>POS/Bill</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/billing" value="medicine/billing">
                                            <label class="custom-control-label" for="medicine/billing">POS/Bill List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/billing/add" value="medicine/billing/add">
                                            <label class="custom-control-label" for="medicine/billing/add">Bill Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/billing/edit" value="medicine/billing/edit">
                                            <label class="custom-control-label" for="medicine/billing/edit">Bill Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/billing/delete" value="medicine/billing/delete">
                                            <label class="custom-control-label" for="medicine/billing/delete">Bill Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/billing/view" value="medicine/billing/view">
                                            <label class="custom-control-label" for="medicine/billing/view">Bill View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>POS/Bill Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/billing/pdf" value="medicine/billing/pdf">
                                            <label class="custom-control-label" for="medicine/billing/pdf">Bill PDF/Print</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Purchase</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/purchase" value="medicine/purchase">
                                            <label class="custom-control-label" for="medicine/purchase">Purchase List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/purchase/add" value="medicine/purchase/add">
                                            <label class="custom-control-label" for="medicine/purchase/add">Purchase Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/purchase/edit" value="medicine/purchase/edit">
                                            <label class="custom-control-label" for="medicine/purchase/edit">Purchase Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/purchase/delete" value="medicine/purchase/delete">
                                            <label class="custom-control-label" for="medicine/purchase/delete">Purchase Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/purchase/view" value="medicine/purchase/view">
                                            <label class="custom-control-label" for="medicine/purchase/view">Purchase View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Purchase Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/purchase/pdf" value="medicine/purchase/pdf">
                                            <label class="custom-control-label" for="medicine/purchase/pdf">Purchase PDF/Print</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stock adjustment</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/stock" value="medicine/stock">
                                            <label class="custom-control-label" for="medicine/stock">Stock List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/stock/delete" value="medicine/stock/delete">
                                            <label class="custom-control-label" for="medicine/stock/delete">Stock Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Medicine</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicines" value="medicines">
                                            <label class="custom-control-label" for="medicines">Medicine List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/add" value="medicine/add">
                                            <label class="custom-control-label" for="medicine/add">Medicine Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/edit" value="medicine/edit">
                                            <label class="custom-control-label" for="medicine/edit">Medicine Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/delete" value="medicine/delete">
                                            <label class="custom-control-label" for="medicine/delete">Medicine Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/view" value="medicine/view">
                                            <label class="custom-control-label" for="medicine/view">Medicine View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Medicine Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/upload" value="medicine/upload">
                                            <label class="custom-control-label" for="medicine/upload">Medicine Upload</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Medicine Category</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/category" value="medicine/category">
                                            <label class="custom-control-label" for="medicine/category">Medicine Category List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/category/add" value="medicine/category/add">
                                            <label class="custom-control-label" for="medicine/category/add">Medicine Category Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/category/edit" value="medicine/category/edit">
                                            <label class="custom-control-label" for="medicine/category/edit">Medicine Category Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="medicine/category/delete" value="medicine/category/delete">
                                            <label class="custom-control-label" for="medicine/category/delete">Medicine Category Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="departments" value="departments">
                                            <label class="custom-control-label" for="departments">Department List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="department/add" value="department/add">
                                            <label class="custom-control-label" for="department/add">Department Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="department/edit" value="department/edit">
                                            <label class="custom-control-label" for="department/edit">Department Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="department/delete" value="department/delete">
                                            <label class="custom-control-label" for="department/delete">Department Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Doctor</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="doctors" value="doctors">
                                            <label class="custom-control-label" for="doctors">Doctor List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="doctor/add" value="doctor/add">
                                            <label class="custom-control-label" for="doctor/add">Doctor Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="doctor/edit" value="doctor/edit">
                                            <label class="custom-control-label" for="doctor/edit">Doctor Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="doctor/delete" value="doctor/delete">
                                            <label class="custom-control-label" for="doctor/delete">Doctor Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Expenses</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="expenses" value="expenses">
                                            <label class="custom-control-label" for="expenses">Expense List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="expense/add" value="expense/add">
                                            <label class="custom-control-label" for="expense/add">Expense Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="expense/edit" value="expense/edit">
                                            <label class="custom-control-label" for="expense/edit">Expense Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="expense/delete" value="expense/delete">
                                            <label class="custom-control-label" for="expense/delete">Expense Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Expenses Type</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="expensetype" value="expensetype">
                                            <label class="custom-control-label" for="expensetype">Expenses Type List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="expensetype/add" value="expensetype/add">
                                            <label class="custom-control-label" for="expensetype/add">Expenses Type Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="expensetype/edit" value="expensetype/edit">
                                            <label class="custom-control-label" for="expensetype/edit">Expenses Type Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="expensetype/delete" value="expensetype/delete">
                                            <label class="custom-control-label" for="expensetype/delete">Expenses Type Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Attendance</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="staffattendance" value="staffattendance">
                                            <label class="custom-control-label" for="staffattendance">Attendance List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="staffattendance/add" value="staffattendance/add">
                                            <label class="custom-control-label" for="staffattendance/add">Attendance Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="staffattendance/view" value="staffattendance/view">
                                            <label class="custom-control-label" for="staffattendance/view">Attendance View</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Salarytemplate</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="salarytemplate" value="salarytemplate">
                                            <label class="custom-control-label" for="salarytemplate">Salary Template List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="salarytemplate/add" value="salarytemplate/add">
                                            <label class="custom-control-label" for="salarytemplate/add">Salary Template Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="salarytemplate/edit" value="salarytemplate/edit">
                                            <label class="custom-control-label" for="salarytemplate/edit">Salary Template Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="salarytemplate/delete" value="salarytemplate/delete">
                                            <label class="custom-control-label" for="salarytemplate/delete">Salary Template Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manage Salary</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="managesalary" value="managesalary">
                                            <label class="custom-control-label" for="managesalary">Manage Salary List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="managesalary/add" value="managesalary/add">
                                            <label class="custom-control-label" for="managesalary/add">Manage Salary Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="managesalary/edit" value="managesalary/edit">
                                            <label class="custom-control-label" for="managesalary/edit">Manage Salary Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="managesalary/view" value="managesalary/view">
                                            <label class="custom-control-label" for="managesalary/view">Manage Salary View</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Payment history</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="managesalary/history" value="managesalary/history">
                                            <label class="custom-control-label" for="managesalary/history">Payment history List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="managesalary/history/view" value="managesalary/history/view">
                                            <label class="custom-control-label" for="managesalary/history/view">Payment View</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="managesalary/history/delete" value="managesalary/history/delete">
                                            <label class="custom-control-label" for="managesalary/history/delete">Payment Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="managesalary/history/pdf" value="managesalary/history/pdf">
                                            <label class="custom-control-label" for="managesalary/history/pdf">Payment PDF</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Make Payment</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="makepayment" value="makepayment">
                                            <label class="custom-control-label" for="makepayment">Make payment List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="makepayment/add" value="makepayment/add">
                                            <label class="custom-control-label" for="makepayment/add">Make Payment Add</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Birthrecords</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="birthrecords" value="birthrecords">
                                            <label class="custom-control-label" for="birthrecords">Birthrecords List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="birthrecord/add" value="birthrecord/add">
                                            <label class="custom-control-label" for="birthrecord/add">Birthrecord Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="birthrecord/edit" value="birthrecord/edit">
                                            <label class="custom-control-label" for="birthrecord/edit">Birthrecord Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="birthrecord/delete" value="birthrecord/delete">
                                            <label class="custom-control-label" for="birthrecord/delete">Birthrecord Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="birthrecord/view" value="birthrecord/view">
                                            <label class="custom-control-label" for="birthrecord/view">Birthrecord View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Birthrecords Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="birthrecord/pdf" value="birthrecord/pdf">
                                            <label class="custom-control-label" for="birthrecord/pdf">Birthrecord PDF/Print</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deathrecords</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="deathrecords" value="deathrecords">
                                            <label class="custom-control-label" for="deathrecords">Deathrecords List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="deathrecord/add" value="deathrecord/add">
                                            <label class="custom-control-label" for="deathrecord/add">Deathrecord Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="deathrecord/edit" value="deathrecord/edit">
                                            <label class="custom-control-label" for="deathrecord/edit">Deathrecord Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="deathrecord/delete" value="deathrecord/delete">
                                            <label class="custom-control-label" for="deathrecord/delete">Deathrecord Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="deathrecord/view" value="deathrecord/view">
                                            <label class="custom-control-label" for="deathrecord/view">Deathrecord View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deathrecords Other</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="deathrecord/pdf" value="deathrecord/pdf">
                                            <label class="custom-control-label" for="deathrecord/pdf">Deathrecords PDF/Print</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Noticeboard</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="noticeboard" value="noticeboard">
                                            <label class="custom-control-label" for="noticeboard">Noticeboard List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="noticeboard/add" value="noticeboard/add">
                                            <label class="custom-control-label" for="noticeboard/add">Noticeboard Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="noticeboard/edit" value="noticeboard/edit">
                                            <label class="custom-control-label" for="noticeboard/edit">Noticeboard Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="noticeboard/delete" value="noticeboard/delete">
                                            <label class="custom-control-label" for="noticeboard/delete">Noticeboard Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="noticeboard/view" value="noticeboard/view">
                                            <label class="custom-control-label" for="noticeboard/view">Noticeboard View</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>User</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="users" value="users">
                                            <label class="custom-control-label" for="users">User List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="user/add" value="user/add">
                                            <label class="custom-control-label" for="user/add">User Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="user/edit" value="user/edit">
                                            <label class="custom-control-label" for="user/edit">User Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="user/delete" value="user/delete">
                                            <label class="custom-control-label" for="user/delete">User Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Subscriber</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="subscribers" value="subscribers">
                                            <label class="custom-control-label" for="subscribers">Subscriber List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="subscriber/add" value="subscriber/add">
                                            <label class="custom-control-label" for="subscriber/add">Subscriber Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="subscriber/edit" value="subscriber/edit">
                                            <label class="custom-control-label" for="subscriber/edit">Subscriber Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="subscriber/delete" value="subscriber/delete">
                                            <label class="custom-control-label" for="subscriber/delete">Subscriber Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Page</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="pages" value="pages">
                                            <label class="custom-control-label" for="pages">Page List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="page/add" value="page/add">
                                            <label class="custom-control-label" for="page/add">Page Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="page/edit" value="page/edit">
                                            <label class="custom-control-label" for="page/edit">Page Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="page/delete" value="page/delete">
                                            <label class="custom-control-label" for="page/delete">Page Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other Pages</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="page/menu" value="page/menu">
                                            <label class="custom-control-label" for="page/menu">Web Menu</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="page/footer" value="page/footer">
                                            <label class="custom-control-label" for="page/footer">Web Footer</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="page/theme" value="page/theme">
                                            <label class="custom-control-label" for="page/theme">Web Theme</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="page/settings" value="page/settings">
                                            <label class="custom-control-label" for="page/settings">Web Settings</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Facility</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="facility" value="facility">
                                            <label class="custom-control-label" for="facility">Facility List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="facility/add" value="facility/add">
                                            <label class="custom-control-label" for="facility/add">Facility Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="facility/edit" value="facility/edit">
                                            <label class="custom-control-label" for="facility/edit">Facility Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="facility/delete" value="facility/delete">
                                            <label class="custom-control-label" for="facility/delete">Facility Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Service</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="services" value="services">
                                            <label class="custom-control-label" for="services">Service List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="service/add" value="service/add">
                                            <label class="custom-control-label" for="service/add">Service Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="service/edit" value="service/edit">
                                            <label class="custom-control-label" for="service/edit">Service Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="service/delete" value="service/delete">
                                            <label class="custom-control-label" for="service/delete">Service Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Review</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="reviews" value="reviews">
                                            <label class="custom-control-label" for="reviews">Review List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="review/edit" value="review/edit">
                                            <label class="custom-control-label" for="review/edit">Review Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="review/delete" value="review/delete">
                                            <label class="custom-control-label" for="review/delete">Review Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Testimonial</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="testimonials" value="testimonials">
                                            <label class="custom-control-label" for="testimonials">Testimonial List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="testimonial/add" value="testimonial/add">
                                            <label class="custom-control-label" for="testimonial/add">Testimonial Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="testimonial/edit" value="testimonial/edit">
                                            <label class="custom-control-label" for="testimonial/edit">Testimonial Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="testimonial/delete" value="testimonial/delete">
                                            <label class="custom-control-label" for="testimonial/delete">Testimonial Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Blog</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="blogs" value="blogs">
                                            <label class="custom-control-label" for="blogs">Blog List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="blog/add" value="blog/add">
                                            <label class="custom-control-label" for="blog/add">Blog Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="blog/edit" value="blog/edit">
                                            <label class="custom-control-label" for="blog/edit">Blog Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="blog/delete" value="blog/delete">
                                            <label class="custom-control-label" for="blog/delete">Blog Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="category" value="category">
                                            <label class="custom-control-label" for="category">Category List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="category/add" value="category/add">
                                            <label class="custom-control-label" for="category/add">Category Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="category/edit" value="category/edit">
                                            <label class="custom-control-label" for="category/edit">Category Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="category/delete" value="category/delete">
                                            <label class="custom-control-label" for="category/delete">Category Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Comment</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="comment" value="comment">
                                            <label class="custom-control-label" for="comment">Comment List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="comment/edit" value="comment/edit">
                                            <label class="custom-control-label" for="comment/edit">Comment Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="comment/delete" value="comment/delete">
                                            <label class="custom-control-label" for="comment/delete">Comment Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>System Info</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="info" value="info">
                                            <label class="custom-control-label" for="info">System Info</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Taxes</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="tax" value="tax">
                                            <label class="custom-control-label" for="tax">Taxes List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="tax/add" value="tax/add">
                                            <label class="custom-control-label" for="tax/add">Taxes Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="tax/edit" value="tax/edit">
                                            <label class="custom-control-label" for="tax/edit">Taxes Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="tax/delete" value="tax/delete">
                                            <label class="custom-control-label" for="tax/delete">Taxes Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Payment Method</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="paymentmethod" value="paymentmethod">
                                            <label class="custom-control-label" for="paymentmethod">Payment Methods</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="paymentmethod/add" value="paymentmethod/add">
                                            <label class="custom-control-label" for="paymentmethod/add">Payment Method Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="paymentmethod/edit" value="paymentmethod/edit">
                                            <label class="custom-control-label" for="paymentmethod/edit">Payment Method Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="paymentmethod/delete" value="paymentmethod/delete">
                                            <label class="custom-control-label" for="paymentmethod/delete">Payment Method Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Payment Gateway</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="paymentgateway" value="paymentgateway">
                                            <label class="custom-control-label" for="paymentgateway">Payment Gateway</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Clinical Notes</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="notes" value="notes">
                                            <label class="custom-control-label" for="notes">Clinical Notes List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="note/add" value="note/add">
                                            <label class="custom-control-label" for="note/add">Clinical Note Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="note/edit" value="note/edit">
                                            <label class="custom-control-label" for="note/edit">Clinical Note Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="note/delete" value="note/delete">
                                            <label class="custom-control-label" for="note/delete">Clinical Note Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Invoice Items</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="items" value="items">
                                            <label class="custom-control-label" for="items">Items List</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="item/add" value="item/add">
                                            <label class="custom-control-label" for="item/add">Items Add</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="item/edit" value="item/edit">
                                            <label class="custom-control-label" for="item/edit">Items Edit</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="item/delete" value="item/delete">
                                            <label class="custom-control-label" for="item/delete">Items Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mail</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="send/email" value="send/email">
                                            <label class="custom-control-label" for="send/email">Send Email</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="sendbulk/email" value="sendbulk/email">
                                            <label class="custom-control-label" for="sendbulk/email">Send Bulk Email</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="emaillogs" value="emaillogs">
                                            <label class="custom-control-label" for="emaillogs">Email Log</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="emailsetting" value="emailsetting">
                                            <label class="custom-control-label" for="emailsetting">Email Settings</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="emailtemplate" value="emailtemplate">
                                            <label class="custom-control-label" for="emailtemplate">Email Template</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Media</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="get/media" value="get/media">
                                            <label class="custom-control-label" for="get/media">Media on Modal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="media/upload" value="media/upload">
                                            <label class="custom-control-label" for="media/upload">Media Upload</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="media/delete" value="media/delete">
                                            <label class="custom-control-label" for="media/delete">Media Delete</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="upload/gallery" value="upload/gallery">
                                            <label class="custom-control-label" for="upload/gallery">Gallery Upload</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="role[]" id="gallery/delete" value="gallery/delete">
                                            <label class="custom-control-label" for="gallery/delete">Gallery Delete</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                    </div>
                </div>
            </form>
        
        
            <!-- Footer -->
    
        </div>
    </div>
@endsection
