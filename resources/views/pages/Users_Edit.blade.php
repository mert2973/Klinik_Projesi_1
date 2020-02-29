@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#User').addClass('active') ;
            $('#Users').addClass('text-white') ;
        });
    </script>


    <div class="page-wrapper">
        <div class="page-body">
            <link rel="stylesheet" href="./Edit User _ Klinikal Hospital_files/jquery.fancybox.min.css">
            <script src="./Edit User _ Klinikal Hospital_files/jquery.fancybox.min.js"></script>
            <script>
                $("a.open-pdf").fancybox({
                    'frameWidth': 800,
                    'frameHeight': 800,
                    'overlayShow': true,
                    'hideOnContentClick': false,
                    'type': 'iframe'
                });
            </script>
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Edit User</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="">Dashboard</a></li>
                                <li><a href="">Users</a></li>
                                <li>Edit User</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            <form action="" method="" enctype="multipart/form-data" siq_id="autopick_8834">
                <input type="hidden" name="" value="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#user-info" data-toggle="tab">Basic Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#user-address" data-toggle="tab">Address</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4">
                            <div class="tab-pane active" id="user-info">
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
                                                        <input type="text" name="user[firstname]" class="form-control" value="Donna" placeholder="Enter First Name . . ." required="">
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
                                                        <input type="text" name="user[lastname]" class="form-control" value="Paulsen" placeholder="Enter Last Name . . ." required="">
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
                                                <input type="text" name="user[mail]" class="form-control" value="donna@pepdev.com" placeholder="Enter Email Address . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                </div>
                                                <input type="text" name="user[mobile]" class="form-control" value="1234567890" placeholder="Enter Mobile Number . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <select name="user[gender]" class="custom-select">
                                                    <option value="Male">Male</option>
                                                    <option value="Female" selected="">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group pb-3">
                                            <label class="d-block">Picture</label>
                                            <div class="image-upload" style="display: none">
                                                <a>Upload</a>
                                            </div>
                                            <div class="saved-picture">
                                                <img class="img-thumbnail" src="./Edit User _ Klinikal Hospital_files/media-21436920055e049caa9bf41.jpg" alt="">
                                                <input type="hidden" name="user[picture]" value="media-21436920055e049caa9bf41.jpg">
                                            </div>
                                            <div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="" data-original-title="Remove">
                                                <a class="ti-trash"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>
                                                <input type="text" id="user-dob" name="user[dob]" class="form-control bg-white hasDatepicker" value="11-12-1990" placeholder="Enter Date of Birth . . ." autocomplete="off" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Blood Group</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-heart-broken"></i></span>
                                                </div>
                                                <select name="user[bloodgroup]" class="custom-select">
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-" selected="">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                                </div>
                                                <select name="user[status]" class="custom-select">
                                                    <option value="1" selected="">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dotted-seprator mt-4 mb-5"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Role <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-cloud-up"></i></span></div>
                                                <select name="user[user_role]" class="custom-select">
                                                    <option value="2">Dean</option>
                                                    <option value="4">Nurse</option>
                                                    <option value="5">Accountant</option>
                                                    <option value="6">Pharmacist</option>
                                                    <option value="7" selected="">Receptionist</option>
                                                    <option value="8">Employee</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Name <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-cloud-up"></i></span>
                                                </div>
                                                <input type="text" name="user[user_name]" class="form-control" value="donna" placeholder="Enter User Name . . ." required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="user-address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address Line 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="user[address][address1]" class="form-control" value="" placeholder="Enter Address Line 1 . . .">
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
                                                <input type="text" name="user[address][address2]" class="form-control" value="" placeholder="Enter Address Line 2 . . .">
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
                                                <input type="text" name="user[address][city]" class="form-control" value="" placeholder="Enter City . . .">
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
                                                <input type="text" name="user[address][country]" class="form-control" value="" placeholder="Enter Country . . .">
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
                                                <input type="text" name="user[address][postal]" class="form-control" value="" placeholder="Enter Postal/Zip Code . . .">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="user[user_id]" value="17">
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                    </div>
                </div>
            </form>
        
            <!-- Footer -->
    
        </div>
    </div>
@endsection
