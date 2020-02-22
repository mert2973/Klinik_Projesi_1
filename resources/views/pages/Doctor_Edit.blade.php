@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Doctors_active').addClass('active') ;
            $('#Doctors_text').addClass('text-text') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
            <script type="text/javascript" src="./Doctor_Edit _ Klinikal Hospital_files/jquery-ui.multidatespicker.min.js"></script>
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Edit Doctor</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <li><a href="{{url('Doctors')}}">Doctors</a></li>
                                <li>Edit Doctor</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            <form action="" method="get" enctype="multipart/form-data" siq_id="autopick_6778">
                <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#doctor-basic" data-toggle="tab">Basic Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-address" data-toggle="tab">Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-web" data-toggle="tab">Website Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-appointment" data-toggle="tab">Appointment Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-holidays" data-toggle="tab">Holidays</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4">
                            <div class="tab-pane active" id="doctor-basic">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name <span class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" name="doctor[firstname]" class="form-control" value="Daniel" placeholder="Enter Doctor First Name . . ." required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name <span class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" name="doctor[lastname]" class="form-control" value="Barnes" placeholder="Enter Doctor Last Name . . ." required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                                </div>
                                                <input type="text" name="doctor[mail]" class="form-control" value="daniel@gmail.com" placeholder="Enter Email Address . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                </div>
                                                <input type="text" name="doctor[mobile]" class="form-control" value="1234567890" placeholder="Enter Mobile Number . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Blood Group</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <select name="doctor[bloodgroup]" class="custom-select">
                                                    <option value="A+" selected="">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+" selected="">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <select name="doctor[gender]" class="custom-select">
                                                    <option value="Male" selected="">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="d-block">Picture</label>
                                            <div class="image-upload" style="display: none">
                                                <a>Upload</a>
                                            </div>
                                            <div class="saved-picture">
                                                <img class="img-thumbnail" src="css_js_img/dr_resim.jpg" alt="">
                                                <input type="hidden" name="doctor[picture]" value="media-1771205195e049ca8ee997.jpg">
                                            </div>
                                            <div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="" data-original-title="Remove">
                                                <a class="ti-trash"></a>
                                            </div>
                                            <div class="form-text">(Size: 530px * 470px)</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>
                                                <input type="text" id="user-dob" name="doctor[dob]" class="form-control bg-white hasDatepicker" value="19-06-1979" placeholder="Select Date of Birth . . ." readonly="" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Department <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-layers-alt"></i></span></div>
                                                <select name="doctor[department]" class="custom-select" required="">
                                                    <option value="1"> Gynaecology</option>
                                                    <option value="2" selected=""> Orthology</option>
                                                    <option value="3"> Dermatologist</option>
                                                    <option value="4"> Anaesthesia</option>
                                                    <option value="5"> Ayurvedic</option>
                                                    <option value="6"> Pathology</option>
                                                    <option value="7"> Radiology</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                                </div>
                                                <select name="doctor[status]" class="custom-select" required="">
                                                    <option value="1" selected="">Active</option>
                                                    <option value="0">InActive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dotted-seprator mt-4 mb-5"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Username <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-id-badge"></i></span>
                                                </div>
                                                <input type="text" name="doctor[user_name]" class="form-control" value="daniel" placeholder="Enter Doctor Username . . ." required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address Line 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="doctor[address][address1]" class="form-control" value="" placeholder="Enter Address Line 1 . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address Line 2</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="doctor[address][address2]" class="form-control" value="" placeholder="Enter Address Line 2 . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-map-alt"></i></span>
                                                </div>
                                                <input type="text" name="doctor[address][city]" class="form-control" value="" placeholder="Enter City . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-map"></i></span>
                                                </div>
                                                <input type="text" name="doctor[address][country]" class="form-control" value="" placeholder="Enter Country . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Postal/Zip Code</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-pin"></i></span>
                                                </div>
                                                <input type="text" name="doctor[address][postal]" class="form-control" value="" placeholder="Enter Postal/Zip Code . . .">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-web">
                                <div class="form-group">
                                    <label>Do you want to display this data on website?</label>
                                    <select name="doctor[web_status]" class="custom-select">
                                        <option value="1" selected="">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Priority</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-shortcode"></i></span>
                                                </div>
                                                <input type="number" name="doctor[priority]" class="form-control" value="1" placeholder="Enter Priority . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-info"></i></span>
                                                </div>
                                                <input type="text" name="doctor[about][position]" class="form-control" value="CEO" placeholder="Enter Doctor&#39;s Position . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-id-badge"></i></span>
                                                </div>
                                                <input type="text" name="doctor[about][degree]" class="form-control" value="MBBS, MD, MCH" placeholder="Enter Doctor&#39;s Degree . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Specility</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-shield"></i></span>
                                                </div>
                                                <input type="text" name="doctor[about][specility]" class="form-control" value="Ortho" placeholder="Enter Doctor&#39;s Specility . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-shine"></i></span>
                                                </div>
                                                <input type="number" name="doctor[about][experience]" class="form-control" value="26" placeholder="Enter Doctor&#39;s Experience . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Awards</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-gift"></i></span>
                                                </div>
                                                <input type="text" name="doctor[about][awards]" class="form-control" value="23" placeholder="Enter Awards Count . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-facebook"></i></span>
                                                </div>
                                                <input type="url" name="doctor[social][facebook]" class="form-control" value="https://www.facebook.com" placeholder="Facebook URL">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-twitter"></i></span>
                                                </div>
                                                <input type="url" name="doctor[social][twitter]" class="form-control" value="https://www.twitter.com" placeholder="Twitter URL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Google +</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-google"></i></span>
                                                </div>
                                                <input type="url" name="doctor[social][google]" class="form-control" value="https://www.google.com" placeholder="Google plus URL">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-instagram"></i></span>
                                                </div>
                                                <input type="url" name="doctor[social][instagram]" class="form-control" value="https://www.instagram.com" placeholder="Instagram URL">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-appointment">
                                <div class="form-group">
                                    <label>Can doctor take appointment? <span class="form-required">*</span></label>
                                    <select name="doctor[appointment_status]" class="custom-select">
                                        <option value="1" selected="">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-middle table-bordered">
                                        <thead>
                                        <tr>
                                            <th rowspan="2">Day</th>
                                            <th colspan="2" class="text-center">Before Lunch</th>
                                            <th colspan="2" class="text-center">After Lunch</th>
                                            <th rowspan="2">Slot Time(In Minute)</th>
                                            <th rowspan="2">Holiday</th>
                                        </tr>
                                        <tr>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Monday</td>
                                            <td>
                                                <input type="time" name="doctor[time][1][st1]" value="10:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][1][et1]" value="13:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][1][st2]" value="15:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][1][et2]" value="18:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="doctor[time][1][slot]" value="15" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="doctor[time][1][holiday]" class="custom-control-input doctor-time" id="time-1" value="1">
                                                    <label class="custom-control-label" for="time-1"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday</td>
                                            <td>
                                                <input type="time" name="doctor[time][2][st1]" value="10:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][2][et1]" value="13:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][2][st2]" value="15:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][2][et2]" value="18:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="doctor[time][2][slot]" value="15" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="doctor[time][2][holiday]" class="custom-control-input doctor-time" id="time-2" value="1">
                                                    <label class="custom-control-label" for="time-2"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wednesday</td>
                                            <td>
                                                <input type="time" name="doctor[time][3][st1]" value="10:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][3][et1]" value="13:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][3][st2]" value="15:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][3][et2]" value="18:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="doctor[time][3][slot]" value="15" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="doctor[time][3][holiday]" class="custom-control-input doctor-time" id="time-3" value="1">
                                                    <label class="custom-control-label" for="time-3"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Thursday</td>
                                            <td>
                                                <input type="time" name="doctor[time][4][st1]" value="10:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][4][et1]" value="12:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][4][st2]" value="16:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][4][et2]" value="18:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="doctor[time][4][slot]" value="15" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="doctor[time][4][holiday]" class="custom-control-input doctor-time" id="time-4" value="1">
                                                    <label class="custom-control-label" for="time-4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td>
                                                <input type="time" name="doctor[time][5][st1]" value="10:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][5][et1]" value="13:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][5][st2]" value="15:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][5][et2]" value="18:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="doctor[time][5][slot]" value="15" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="doctor[time][5][holiday]" class="custom-control-input doctor-time" id="time-5" value="1">
                                                    <label class="custom-control-label" for="time-5"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td>
                                                <input type="time" name="doctor[time][6][st1]" value="09:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][6][et1]" value="23:00" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][6][st2]" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][6][et2]" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="doctor[time][6][slot]" value="15" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="doctor[time][6][holiday]" class="custom-control-input doctor-time" id="time-6" value="1">
                                                    <label class="custom-control-label" for="time-6"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td>
                                                <input type="time" name="doctor[time][0][st1]" value="" class="form-control m-0" readonly="readonly">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][0][et1]" value="" class="form-control m-0" readonly="readonly">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][0][st2]" value="" class="form-control m-0" readonly="readonly">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][0][et2]" value="" class="form-control m-0" readonly="readonly">
                                            </td>
                                            <td>
                                                <input type="text" name="doctor[time][0][slot]" value="" class="form-control m-0" readonly="readonly">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="doctor[time][0][holiday]" class="custom-control-input doctor-time" id="time-0" value="1" checked="">
                                                    <label class="custom-control-label" for="time-0"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-holidays">
                                <div class="form-group">
                                    <div id="other-holiday" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-3" style="display: block; width: 51em;"><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">February</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">1</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">2</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">3</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">4</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">5</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">7</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">8</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">9</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">10</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">11</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">12</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">13</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">14</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">15</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">16</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">17</span></td><td class=" ui-datepicker-days-cell-over undefined ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#id=1">18</a></td><td class=" ui-state-highlight" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">23</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-middle"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">March</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">1</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">7</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">8</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">14</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">15</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">22</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">29</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">3</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">5</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">10</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">12</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">17</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">19</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">26</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><div class="ui-datepicker-title"><span class="ui-datepicker-month">May</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">1</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">3</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">8</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">10</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">15</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">17</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">24</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">31</span></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-middle"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">June</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">5</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">7</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">12</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">14</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">19</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">21</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">26</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">28</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><div class="ui-datepicker-title"><span class="ui-datepicker-month">July</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">3</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">5</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">10</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">12</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">17</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">19</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">26</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">31</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div></div></div>
                                    <input type="hidden" name="doctor[national]" value="2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19" id="altField">
                                    <input type="hidden" id="other-holiday-list" value="2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19">
                                    <input type="hidden" id="weekly-holiday" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="doctor[id]" value="1">
                    <input type="hidden" name="doctor[user_id]" value="2">
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                    </div>
                </div>
            </form>
            
            <script>
                function noWeekendsOrHolidays(date) {
                    var doctor_holiday;
                    if (typeof $('#weekly-holiday').val() != "undefined" && $('#weekly-holiday').val() != "") {
                        doctor_holiday = $('#weekly-holiday').val().split(',');
                    } else {
                        doctor_holiday = '';
                    }
                    var day = date.getDay(),
                        noWeekend = [(day != doctor_holiday['0'] && day != doctor_holiday['1'] && day != doctor_holiday['2'] && day != doctor_holiday['3'] && day != doctor_holiday['4'] && day != doctor_holiday['5'] && day != doctor_holiday['6'])];
                    return noWeekend;
                }

                function holidayCheck(ele) {
                    var ele_parent = ele.parents('tr');
                    if(ele.is(":checked")) {
                        ele_parent.find('input').not(ele).attr('readonly', true);
                    } else {
                        ele_parent.find('input').not(ele).attr('readonly', false);
                    }
                }

                $(document).ready(function () {
                    var other_holiday, today;
                    if ($('#other-holiday-list').val() != "" && typeof $('#other-holiday-list').val() != "undefined") {
                        other_holiday = $('#other-holiday-list').val().split(', ');
                    } else {
                        other_holiday = ["2000-12-25"];
                    }

                    $('#other-holiday').multiDatesPicker({
                        minDate: 0,
                        dateFormat: 'yy-mm-dd',
                        addDates: other_holiday,
                        numberOfMonths: [2, 3],
                        defaultDate: today,
                        altField: '#altField',
                        beforeShowDay: noWeekendsOrHolidays
                    });
                    $(".doctor-time").each(function() {
                        var ele = $(this);
                        holidayCheck(ele);
                    });

                    $('#doctor-appointment').on('change', '.doctor-time', function () {
                        var ele = $(this);
                        holidayCheck(ele);
                    });
                });
            </script>
            <!-- Footer -->
        
        </div>
        </div>
    @endsection
