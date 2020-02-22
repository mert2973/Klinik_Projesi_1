@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Appointment_active').addClass('active') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><link rel="stylesheet" href="./Appointment_Edit_ Klinikal Hospital_files/jquery.fancybox.min.css">
            <script src="./Appointment_Edit_ Klinikal Hospital_files/jquery.fancybox.min.js"></script>
            <script src="./Appointment_Edit_ Klinikal Hospital_files/appointment.js"></script>
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Edit Appointment</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-13 ml-2" ></i>
                                <a href="{{url('/Appointments')}}" class="ml-2">Appointments</a>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Edit Appointment</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{url('/Appointment_View')}}" class="btn btn-white btn-sm"><i class="ti-calendar text-primary mr-2"></i> View Appointment</a>
                    </div>
                </div>
            </div>
            
            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=appointment/edit" method="post" siq_id="autopick_9777">
                <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#appointment-info" data-toggle="tab">Appointment Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#appointment-records" data-toggle="tab">Clinical Notes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#appointment-prescription" data-toggle="tab">Prescription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#appointment-documents" data-toggle="tab">Documents</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#appointment-invoice" data-toggle="tab">Invoice</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4">
                            <div class="tab-pane active" id="appointment-info">
                                <div id="apnt-info" class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Doctor <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <select name="appointment[doctor]" class="custom-select apnt-doctor" required="">
                                                    <option value="">Select Doctor</option>
                                                    <option value="2" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-17, 2020-02-13, 2020-02-18, 2020-03-13, 2020-03-17, 2020-04-16, 2020-04-28&quot;">Melissa Bates (Gynaecology)</option>
                                                    <option value="7" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-20&quot;">Linda Adams (Gynaecology)</option>
                                                    <option value="8" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Janet Collins (Gynaecology)</option>
                                                    <option value="10" data-department="1" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;" selected="">Emily Rasberry (Gynaecology)</option>
                                                    <option value="11" data-department="1" data-weekly="[4,5,6]" data-national="&quot;2000-12-25&quot;">Nancy Allen (Gynaecology)</option>
                                                    <option value="1" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19&quot;">Daniel Barnes (Orthology)</option>
                                                    <option value="4" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Steve Soeren (Orthology)</option>
                                                    <option value="6" data-department="2" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Barbara Baker (Orthology)</option>
                                                    <option value="3" data-department="3" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Cheri Aria (Dermatologist)</option>
                                                    <option value="9" data-department="5" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Vedhraj Jain (Ayurvedic)</option>
                                                </select>
                                                <input type="hidden" class="apnt-department" name="appointment[department]" value="1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Date <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>
                                                <input type="date" class="form-control apnt-date hasDatepicker" name="appointment[date]" placeholder="Select Date . . ." value="21-02-2020" required="" autocomplete="off" id="dp1582277769837">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Time <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                                </div>
                                                <input type="text" name="appointment[time]" class="form-control apnt-time" value="10:15" readonly="">
                                                <input type="hidden" name="appointment[slot]" class="apnt-slot-time" value="15" required="">
                                            </div>
                                            <div class="apnt-slot"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Status <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                                </div>
                                                <select name="appointment[status]" class="custom-select" required="">
                                                    <option value="">Status</option>
                                                    <option value="2" selected="">In Process</option>
                                                    <option value="3">Confirmed</option>
                                                    <option value="4">Completed</option>
                                                    <option value="1">Cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Reason/Problem</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-comment-alt"></i></span>
                                                </div>
                                                <textarea class="form-control" name="appointment[message]"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="apnt-user">
                                            <div class="edit"><i class="ti-pencil-alt"></i></div>
                                            <div class="user-container">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <div class="img">
                                                            <!-- <img src="../public/uploads/author-1.jpg" alt=""> -->
                                                            <span>P</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto pl-0">
                                                        <div class="title mt-2">
                                                            <h4 class="m-0"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=appointment/edit&amp;id=77#" class="d-block text-primary">PepDev Team</a></h4>
                                                            <p class="font-12 mb-0 mt-2">support@pepdev.com</p>
                                                            <p class="font-12 mb-0">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <p><i class="ti-heart-broken"></i> <span>A-</span></p>
                                                <p><i class="ti-user"></i> <span>Male</span></p>
                                                <p><i class="ti-calendar"></i> <span>0 Years 1 Month</span></p>
                                                <p class="d-block mt-3">
                                                    <i class="ti-wheelchair"></i> Diabetes, High Blood Pressure, Heart Problems, Jaundice									</p>
                                            </div>
                                        </div>
                                        <div class="apnt-user-input">
                                            <div class="form-group">
                                                <label>Patient Name <span class="form-required">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control apnt-name" name="appointment[name]" value="PepDev Team" placeholder="Enter Patient Name . . ." required="">
                                                    <input type="hidden" class="patient-id" name="appointment[patient_id]" value="8">
                                                
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Patient Email Address <span class="form-required">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control apnt-email" name="appointment[mail]" value="support@pepdev.com" placeholder="Enter Patient Email Address . . ." required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Patient Mobile Number <span class="form-required">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control apnt-mobile" name="appointment[mobile]" value="1234567890" placeholder="Enter Patient Mobile Number . . ." required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="appointment-prescription">
                                <input type="hidden" name="prescription[id]" value="">
                                <div class="table-responsive">
                                    <table class="table table-bordered medicine-table">
                                        <thead>
                                        <tr class="medicine-row">
                                            <th style="width: 20%;">Drug Name</th>
                                            <th>Generic</th>
                                            <th style="width: 11%;">Frequency</th>
                                            <th style="width: 13%;">Duration</th>
                                            <th style="width: 25%;">Instruction</th>
                                            <th style="width: 5%;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="medicine-row">
                                            <td>
                                                <input class="form-control prescription-name" name="prescription[medicine][0][name]" placeholder="Medicine Name">
                                            </td>
                                            <td>
                                                <textarea name="prescription[medicine][0][generic]" class="form-control prescription-generic" rows="3" placeholder="Generic"></textarea>
                                            </td>
                                            <td>
                                                <select name="prescription[medicine][0][dose]" class="form-control">
                                                    <option value="1-0-0">1-0-0</option>
                                                    <option value="1-0-1">1-0-1</option>
                                                    <option value="1-1-1">1-1-1</option>
                                                    <option value="0-0-1">0-0-1</option>
                                                    <option value="0-1-0">0-1-0</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="prescription[medicine][0][duration]" class="form-control">
                                                    <option value="1">1 Days</option>
                                                    <option value="2">2 Days</option>
                                                    <option value="3">3 Days</option>
                                                    <option value="4">4 Days</option>
                                                    <option value="5">5 Days</option>
                                                    <option value="6">6 Days</option>
                                                    <option value="8">8 Days</option>
                                                    <option value="10">10 Days</option>
                                                    <option value="15">15 Days</option>
                                                    <option value="20">20 Days</option>
                                                    <option value="30">30 Days</option>
                                                    <option value="60">60 Days</option>
                                                </select>
                                            </td>
                                            <td>
                                                <textarea name="prescription[medicine][0][instruction]" class="form-control" rows="3" placeholder="Instruction"></textarea>
                                            </td>
                                            <td><a class="table-action-button medicine-delete" style="display: none;"><i class="ti-trash text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <a id="add-medicine" class="font-12 text-primary cursor-pointer">Add Medicine</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <script>
                                    function medicine_autocomplete() {
                                        $(".prescription-name").autocomplete({
                                            minLength: 0,
                                            source: 'http://pepdev.com/theme-preview/klinikal/admin/index.php?route=getmedicine',
                                            focus: function( event, ui ) {
                                                $(this).parents('tr').find('.prescription-name').val( ui.item.label );
                                                return false;
                                            },
                                            select: function( event, ui ) {
                                                $(this).parents('tr').find('.prescription-name').val( ui.item.label );
                                                $(this).parents('tr').find('.prescription-generic').val( ui.item.generic );
                                                return false;
                                            }
                                        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                                            return $( "<li>" )
                                                .append( "<div>" + item.label + "<br>" + item.generic + "</div>" )
                                                .appendTo( ul );
                                        };
                                    }

                                    $('body').on('keydown.autocomplete', '.prescription-name', function() {
                                        medicine_autocomplete();
                                    });
                                    if ($(".medicine-delete").length < 2) { $(".medicine-delete").hide(); }
                                    else { $(".medicine-delete").show(); }

                                    $('body').on('click', '.medicine-delete', function() {
                                        $(this).parents('tr').remove();
                                        if ($(".medicine-delete").length < 2) $(".medicine-delete").hide();
                                    });

                                    $('#add-medicine').click(function () {
                                        if ($(".medicine-delete").length < 1) { $(".medicine-delete").hide(); }
                                        else { $(".medicine-delete").show(); }
                                        var count = $('.medicine-table .medicine-row:last .prescription-name').attr('name').split('[')[2];
                                        count = parseInt(count.split(']')[0]) + 1;
                                        $(".medicine-row:last").after('<tr class="medicine-row">'+
                                            '<td><input class="form-control prescription-name" name="prescription[medicine]['+count+'][name]" value="" placeholder="Medicine Name"></td>'+
                                            '<td><textarea class="form-control prescription-generic" name="prescription[medicine]['+count+'][generic]" rows="3" placeholder="Generic"></textarea></td>'+
                                            '<td><select name="prescription[medicine]['+count+'][dose]" class="form-control"><option value="1-0-0">1-0-0</option><option value="1-0-1">1-0-1</option><option value="1-1-1">1-1-1</option><option value="0-0-1">0-0-1</option><option value="0-1-0">0-1-0</option></select></td>'+
                                            '<td><select name="prescription[medicine]['+count+'][duration]" class="form-control"><option value="1">1 Days</option><option value="2">2 Days</option><option value="3">3 Days</option><option value="4">4 Days</option><option value="5">5 Days</option><option value="6">6 Days</option><option value="8">8 Days</option><option value="10">10 Days</option><option value="15">15 Days</option><option value="20">20 Days</option><option value="30">30 Days</option><option value="60">60 Days</option></select></td>'+
                                            '<td><textarea name="prescription[medicine]['+count+'][instruction]" class="form-control" rows="3" placeholder="Instruction"></textarea></td>'+
                                            '<td><a class="table-action-button medicine-delete"><i class="ti-trash text-danger"></i></a></td>'+
                                            '</tr>');
                                    });
                                </script>
                            </div>
                            <div class="tab-pane" id="appointment-records">
                                <div class="row clinical-notes">
                                    <div class="col-lg-4">
                                        <div class="notes-form">
                                            <div class="form-group">
                                                <label>Problem</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="problem" placeholder="Add Patient Problem . . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Add</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Observation</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="observation" placeholder="Add Observation. . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Add</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Diagnosis</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="diagnosis" placeholder="Add Diagnosis . . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Add</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Test Request/Investigation</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="investigation" placeholder="Add Test Request/Investigation . . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Add</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Notes/Advice</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="notes" placeholder="Add Notes . . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Add</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="notes-container">
                                            <div class="timeline-1 timeline-2">
                                                <div class="marker"></div>
                                                <div class="item item-left notes-problem">
                                                    <div class="circle"><i class="ti-help-alt"></i></div>
                                                    <div class="arrow"></div>
                                                    <div class="item-content">
                                                        <div class="title">Problems</div>
                                                        <div class="descr">
                                                            <ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item item-left notes-observation">
                                                    <div class="circle"><i class="ti-panel text-info"></i></div>
                                                    <div class="arrow"></div>
                                                    <div class="item-content">
                                                        <div class="title">Observation</div>
                                                        <div class="descr">
                                                            <ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item item-left notes-diagnosis">
                                                    <div class="circle"><i class="ti-heart-broken text-secondary"></i></div>
                                                    <div class="arrow"></div>
                                                    <div class="item-content">
                                                        <div class="title">Diagnosis</div>
                                                        <div class="descr">
                                                            <ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item item-left notes-investigation">
                                                    <div class="circle"><i class="ti-agenda text-success"></i></div>
                                                    <div class="arrow"></div>
                                                    <div class="item-content">
                                                        <div class="title">Test Request/Investigation</div>
                                                        <div class="descr">
                                                            <ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item item-left notes-notes">
                                                    <div class="circle"><i class="ti-write text-primary"></i></div>
                                                    <div class="arrow"></div>
                                                    <div class="item-content">
                                                        <div class="title">Notes</div>
                                                        <div class="descr">
                                                            <ul>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="notes[id]" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="appointment-documents">
                                <div class="form-group">
                                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#reports-modal"><i class="ti-cloud-up mr-2"></i> Upload Document/Report</a>
                                </div>
                                <div class="report-container">
                                </div>
                            </div>
                            <div class="tab-pane" id="appointment-invoice">
                                <div class="text-center">
                                    <p>Invoice is not Generated</p>
                                    <a href="{{url('/Invoice_Add')}}" class="btn btn-primary btn-sm" target="_blank"><i class="ti-plus pr-2"></i>Generate Invoice Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="appointment-id" name="appointment[id]" value="77">
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                    </div>
                </div>
            </form>
            
            <!-- Reports upload modal -->
            <div id="reports-modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Reports/Documents</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Report/Document Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-tag"></i></span>
                                    </div>
                                    <input type="text" name="report_name" class="form-control" placeholder="Enter Report/Document Name">
                                </div>
                            </div>
                            <div class="media-upload-container" style="max-width: 100%;">
                                <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=report/reportUpload" class="dropzone dz-clickable" id="report-upload" method="post" enctype="multipart/form-data">
                                    
                                    <div class="dz-default dz-message"><span>Drop files here or click here to upload <br><br> Only Image or PDF</span></div></form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary upload-report">Done</button>
                        </div>
                    </div>
                
                </div>
            </div>
            
            <script>
                $("a.open-pdf").fancybox({
                    'frameWidth': 800,
                    'frameHeight': 800,
                    'overlayShow': true,
                    'hideOnContentClick': false,
                    'type': 'iframe'
                });
            </script>
            
            <!-- Footer -->
        
        </div>
    </div>
@endsection
