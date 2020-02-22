@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Appointment_active').addClass('active') ;
        });
    </script>
<div class="page-wrapper">
    <div class="page-body"><div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">Appointments</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                            <li>Appointments</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="btn btn-white btn-sm text-left mr-2">
                        <i class="ti-filter text-danger pr-2"></i>
                        <input type="text" class="table-date-range">
                    </div>
                    <div class="dropdown d-inline-block mr-2">
                        <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"><i class="ti-download text-primary pr-2"></i> Export</a>
                        <ul class="dropdown-menu dropdown-menu-right export-button">
                            <li><a href="#" class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                            <li><a href="#" class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                            <li><a href="#" class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                            <li><a href="#" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                            <li><a href="#" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-primary btn-sm appointment-sidebar"><i class="ti-plus pr-2"></i> New Appointment</a>
                </div>
            </div>
        </div>
    
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive" data-name="appointments">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3">
                            <div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12">
                                <!-- datatable-table dataTable -->
                                <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 108px;">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Patient: activate to sort column ascending" style="width: 208px;">Patient</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DateTime: activate to sort column ascending" style="width: 171px;">DateTime</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Doctor: activate to sort column ascending" style="width: 159px;">Doctor</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 108px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                    </thead>
                                    <tbody>
                                
                                
                                
                                    <tr role="row" class="odd">
                                        <td>APNT-00077</td>
                                        <td>
                                            <a class="m-0 text-primary">PepDev Team</a>
                                            <p class="m-0">support@pepdev.com</p>
                                            <p class="m-0">1234567890</p>
                                        </td>
                                        <td class="text-info">21-02-2020 AT 10:15</td>
                                        <td>Dr. Emily Rasberry</td>
                                        <td>
                                            <span class="label label-warning">In process</span>                            </td>
                                        <td class="table-action">
                                            <div class="dropdown d-inline-block">
                                                <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right export-button">
                                                    <li><a href="{{url('/Appointment_View')}}"><i class="ti-layout-media-center-alt pr-2"></i>View</a></li>
                                                    <li><a href="{{url('/Appointment_Edit')}}"><i class="ti-pencil-alt pr-2"></i>Edit</a></li>
                                                    <li><a href="{{url('/Invoice_Add')}}"><i class="ti-receipt pr-2"></i>Generate Invoice</a></li>
                                                </ul>
                                            </div>
                                            <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                <i class="ti-trash"></i><input type="hidden" value="77">
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>APNT-00079</td>
                                        <td>
                                            <a class="m-0 text-primary">PepDev Team</a>
                                            <p class="m-0">support@pepdev.com</p>
                                            <p class="m-0">1234567890</p>
                                        </td>
                                        <td class="text-info">21-02-2020 AT 16:00</td>
                                        <td>Dr. Melissa Bates</td>
                                        <td>
                                            <span class="label label-warning">In process</span>                            </td>
                                        <td class="table-action">
                                            <div class="dropdown d-inline-block">
                                                <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right export-button">
                                                    <li><a href=""><i class="ti-layout-media-center-alt pr-2"></i>View</a></li>
                                                    <li><a href=""><i class="ti-pencil-alt pr-2"></i>Edit</a></li>
                                                    <li><a href=""><i class="ti-receipt pr-2"></i>Generate Invoice</a></li>
                                                </ul>
                                            </div>
                                            <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                <i class="ti-trash"></i><input type="hidden" value="79">
                                            </a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td>APNT-00095</td>
                                        <td>
                                            <a class="m-0 text-primary">PepDev Team</a>
                                            <p class="m-0">support@pepdev.com</p>
                                            <p class="m-0">1234567890</p>
                                        </td>
                                        <td class="text-info">21-02-2020 AT 11:00</td>
                                        <td>Dr. Linda Adams</td>
                                        <td>
                                            <span class="label label-warning">In process</span>
                                        </td>
                                        <td class="table-action">
                                            <div class="dropdown d-inline-block">
                                                <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right export-button">
                                                    <li><a href=""><i class="ti-layout-media-center-alt pr-2"></i>View</a></li>
                                                    <li><a href=""><i class="ti-pencil-alt pr-2"></i>Edit</a></li>
                                                    <li><a href=""><i class="ti-receipt pr-2"></i>Generate Invoice</a></li>
                                                </ul>
                                            </div>
                                            <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                <i class="ti-trash"></i>
                                                <input type="hidden" value="95">
                                            </a>
                                        </td>
                                    </tr></tbody>
                                </table>
                            </div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-8 text-right dataTables_pager">
                                <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item first disabled" id="DataTables_Table_0_first">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-left"></i>
                                            </a></li><li class="paginate_button page-item active">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item last disabled" id="DataTables_Table_0_last">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            $(document).ready(function () {
                $('.table-date-range').daterangepicker({
                    autoApply: false,
                    alwaysShowCalendars: true,
                    opens: 'left',
                    applyButtonClasses: 'btn-danger',
                    cancelClass: 'btn-white',
                    locale: {
                        format: $('.common_daterange_format').val(),
                        separator: " => ",
                    },
                    startDate: "18-02-2020",
                    endDate: "18-02-2020",
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Tomorrow': [moment().add(1, 'days'), moment().add(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Next 7 Days': [moment(), moment().add(6, 'days')],
                        //'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                        'All Time': [moment('2015-01-01'), moment().add(30, 'days')]
                    },
                });
                $('.table-date-range').on('apply.daterangepicker', function(ev, picker) {
                    window.location.replace(''+'&start='+picker.startDate.format('YYYY-MM-DD')+'&end='+picker.endDate.format('YYYY-MM-DD'));
                });
            });
        </script>
        
        <!-- Delete Modal -->
        <div id="delete-card" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <p class="delete-card-ttl mb-0">Are you sure you want to delete?</p>
                        <p class="form-text">All Docuements, Prescription and notes related to this appointment will be deleted.</p>
                    </div>
                    <div class="modal-footer">
                        <form action="" class="delete-card-button" method="" siq_id="autopick_2051">
                            <input type="hidden" value="" class="delete-id" name="id">
                            <input type="hidden" name="_token" value="">
                            <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                        </form>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div
        ><div class="sidebar sidebar-right appointmet-sidebar" style="right: -450px;">
            <div class="sidebar-hdr">
                <div class="sidebar-close"><i class="ti-close"></i></div>
                <h3 class="title">Appointment</h3>
            </div>
            <form class="sidebar-bdy" action="" method="" siq_id="autopick_5007">
                <input type="hidden" name="_token" value="">
                <div id="apnt-info">
                    <input type="hidden" class="apnt-id" name="appointment[id]" value="">
                    <div class="form-group mb-2">
                        <label>Name <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-timer"></i></span>
                            </div>
                            <input type="text" name="appointment[name]" class="form-control patient-name ui-autocomplete-input" placeholder="Enter Name . . ." required="" autocomplete="off">
                            <input type="hidden" name="appointment[patient_id]" class="form-control patient-id" value="">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Email Address <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-timer"></i></span>
                            </div>
                            <input type="text" name="appointment[mail]" class="form-control patient-mail" placeholder="Enter Email Address . . ." required="">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Mobile Number <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-timer"></i></span>
                            </div>
                            <input type="text" name="appointment[mobile]" class="form-control patient-mobile" placeholder="Enter Mobile Number . . ." required="">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Doctor <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-timer"></i></span>
                            </div>
                            <select name="appointment[doctor]" class="custom-select apnt-doctor" required="">
                                <option value="">Select Doctor</option>
                                <option value="2" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-17, 2020-02-13, 2020-02-18, 2020-03-13, 2020-03-17, 2020-04-16, 2020-04-28&quot;">Melissa Bates (Gynaecology)</option>
                                <option value="7" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-20&quot;">Linda Adams (Gynaecology)</option>
                                <option value="8" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Janet Collins (Gynaecology)</option>
                                <option value="10" data-department="1" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Emily Rasberry (Gynaecology)</option>
                                <option value="11" data-department="1" data-weekly="[4,5,6]" data-national="&quot;2000-12-25&quot;">Nancy Allen (Gynaecology)</option>
                                <option value="1" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19&quot;">Daniel Barnes (Orthology)</option>
                                <option value="4" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Steve Soeren (Orthology)</option>
                                <option value="6" data-department="2" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Barbara Baker (Orthology)</option>
                                <option value="3" data-department="3" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Cheri Aria (Dermatologist)</option>
                                <option value="9" data-department="5" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Vedhraj Jain (Ayurvedic)</option>
                            </select>
                            <input type="hidden" class="apnt-department" name="appointment[department]" value="">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Date <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-timer"></i></span>
                            </div>
                            <input type="text" name="appointment[date]" class="form-control apnt-date" value="" placeholder="Select Date . . ." required="" autocomplete="on">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Time <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-timer"></i></span>
                            </div>
                            <input type="text" name="appointment[time]" class="form-control apnt-time" value="" required="" readonly="">
                            <input type="hidden" name="appointment[slot]" class="apnt-slot-time" value="" required="">
                        </div>
                        <div class="apnt-slot"></div>
                    </div>
                    <div class="form-group">
                        <label>Status <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-check-box"></i></span>
                            </div>
                            <select name="appointment[status]" class="custom-select apnt-status" required="">
                                <option value="2">In Process</option>
                                <option value="3">Confirmed</option>
                                <option value="4">Completed</option>
                                <option value="1">Cancelled</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="sidebar-ftr text-right">
                    <a href="" class="btn btn-default">View</a>
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
   
        
        <!-- Footer -->
        
        <!-- Set Confirmation Message on create, update and delete -->
        <script>
            /*Set toastr Option*/
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "10000",
                "hideDuration": "10000",
                "timeOut": "2000",
                "extendedTimeOut": "800",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.warning("Create and update is disabled in demo!", "Warning");
        </script>
    </div>
</div>
    @endsection
