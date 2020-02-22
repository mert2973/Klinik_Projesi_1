@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Patient_active').addClass('active') ;
        });
    </script>
<div class="page-wrapper">
    <div class="page-body"><div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">Add Patient</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="{{url('/Patient')}}">Home</a></li>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="ml-2 text-linkedin"><a href="{{url('/Patient_Add')}}">Patients</a></span>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="ml-2">Add Patient</span>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                </div>
            </div>
        </div>
        
        <form action="{{url('/Patient')}}" method="" siq_id="autopick_208">
            <input type="hidden" name="_token" value="">
            <input type="hidden" name="patient[id]" value="">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                        <li class="nav-item">
                            <a class="nav-link active" href="#patient-info" data-toggle="tab">Basic Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#patient-address" data-toggle="tab">Address</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#patient-medical-history" data-toggle="tab">Medical History</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-4">
                        <div class="tab-pane active" id="patient-info">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First Name <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                            </div>
                                            <input type="text" name="patient[firstname]" class="form-control" value="" placeholder="Enter First Name . . . ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last Name <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                            </div>
                                            <input type="text" name="patient[lastname]" class="form-control" value="" placeholder="Enter Last Name . . . ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-email"></i></span>
                                            </div>
                                            <input type="email" name="patient[mail]" class="form-control" value="" placeholder="Enter Email Address . . . ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-mobile"></i></span>
                                            </div>
                                            <input type="text" name="patient[mobile]" class="form-control" value="" placeholder="Enter Mobile Number . . . ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-calendar"></i></span>
                                            </div>
                                            <input type="text" id="user-dob" name="patient[dob]" class="form-control bg-white hasDatepicker" value="" placeholder="Enter Date of Birth . . . " readonly="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-heart-broken"></i></span>
                                            </div>
                                            <select name="patient[bloodgroup]" class="custom-select">
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="ti-check-box"></i></span></div>
                                            <select name="patient[gender]" class="custom-select">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="patient-address">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address Line 1</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                            </div>
                                            <input type="text" name="patient[address][address1]" class="form-control" value="" placeholder="Enter Address Line 1 . . .">
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
                                            <input type="text" name="patient[address][address2]" class="form-control" value="" placeholder="Enter Address Line 2 . . .">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-map-alt"></i></span>
                                    </div>
                                    <input type="text" name="patient[address][city]" class="form-control" value="" placeholder="Enter City . . .">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-map"></i></span>
                                    </div>
                                    <input type="text" name="patient[address][country]" class="form-control" value="" placeholder="Enter Country . . .">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Postal/Zip Code</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-pin"></i></span>
                                    </div>
                                    <input type="text" name="patient[address][postal]" class="form-control" value="" placeholder="Enter Postal/Zip Code . . .">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="patient-medical-history">
                            <div class="form-group mb-2">
                                <label class="d-block mb-2">Do you now or have you ever had:</label>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Diabetes" id="diabetes">
                                            <label class="custom-control-label" for="diabetes">Diabetes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="High Blood Pressure" id="high-blood-pressure">
                                            <label class="custom-control-label" for="high-blood-pressure">High Blood Pressure</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="High Cholesterol" id="high-cholesterol">
                                            <label class="custom-control-label" for="high-cholesterol">High Cholesterol</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Heart Problems" id="heart-problems">
                                            <label class="custom-control-label" for="heart-problems">Heart Problems</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Asthma" id="asthma">
                                            <label class="custom-control-label" for="asthma">Asthma</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Kidney Disease" id="kidney-disease">
                                            <label class="custom-control-label" for="kidney-disease">Kidney Disease</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Kidney Stones" id="kidney-stones">
                                            <label class="custom-control-label" for="kidney-stones">Kidney Stones</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Jaundice" id="jaundice">
                                            <label class="custom-control-label" for="jaundice">Jaundice</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Rheumatic Fever" id="rheumatic-fever">
                                            <label class="custom-control-label" for="rheumatic-fever">Rheumatic Fever</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Cancer" id="cancer">
                                            <label class="custom-control-label" for="cancer">Cancer</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="HIV/AIDS" id="hiv-aids">
                                            <label class="custom-control-label" for="hiv-aids">HIV/AIDS</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Epilepsy" id="epilepsy">
                                            <label class="custom-control-label" for="epilepsy">Epilepsy</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Pregnancy" id="pregnancy">
                                            <label class="custom-control-label" for="pregnancy">Pregnancy</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="patient[history][]" class="custom-control-input" value="Blood Thinners" id="blood-thinners">
                                            <label class="custom-control-label" for="blood-thinners">Blood Thinners</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Other History :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-heart-broken"></i></span>
                                    </div>
                                    <textarea name="patient[other]" class="form-control" placeholder="Patient other history . . ."></textarea>
                                </div>
                            </div>
                        </div>
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
