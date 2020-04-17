@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Patient_active').addClass('active') ;
        });
    </script>

    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                @if (session('warning'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                            <span aria-hidden="true" style="line-height: 0.6">&times;</span>
                        </button>
                        <strong>{{ session('warning') }}</strong>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                            <span aria-hidden="true" style="line-height: 0.6">&times;</span>
                        </button>
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Hasta Bilgilerini Düzenle</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2 text-linkedin"><a href="{{url('/Patient')}}">Hastalar</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Hasta bilgilerini düzenle</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                    </div>
                </div>
            </div>
        
            <form action="{{route('Patient.update',$patient_info->id)}}" method="Post" >
                @csrf
                @method('PUT')
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#patient-info" data-toggle="tab">Hasta Bilgileri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#patient-address" data-toggle="tab">Adres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#patient-medical-history" data-toggle="tab">Tibbi Geçmişi</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4">
                            <div class="tab-pane active" id="patient-info">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label> Ad <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <input type="text" name="name" class="form-control" value="{{$patient_info->p_name}}" placeholder="Hasta adını giriniz . . . ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Soyad <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <input type="text" name="surname" class="form-control" value="{{$patient_info->p_surname}}" placeholder="Hasta soyadını giriniz. . . ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Adresi <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                                </div>
                                                <input type="email" name="mail" class="form-control" value="{{$patient_info->p_email}}" placeholder="Enter Email Address . . . ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telefon Numarası <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                </div>
                                                <input type="text" name="phone" class="form-control" value="{{$patient_info->p_phone}}" placeholder="Telefon numarasını giriniz . . . ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Doğum Tarihi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>
                                                <input type="text"  name="date_of_birth" class="form-control bg-white " value="{{$patient_info->all_patients_list[0]->date_of_birth}}" placeholder="Doğrum tarihini giriniz . . . "  autocomplete="off" id="datepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kan Grubu</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-heart-broken"></i></span>
                                                </div>
                                                <select name="bloodgroup" class="custom-select">
                                                    <option value="A+" @if($patient_info->all_patients_list[0]->blood_group=="A+") selected @endif>A+</option>
                                                    <option value="A-" @if($patient_info->all_patients_list[0]->blood_group=="A-") selected @endif>A-</option>
                                                    <option value="B+" @if($patient_info->all_patients_list[0]->blood_group=="B+") selected @endif>B+</option>
                                                    <option value="B-" @if($patient_info->all_patients_list[0]->blood_group=="B-") selected @endif>B-</option>
                                                    <option value="O+" @if($patient_info->all_patients_list[0]->blood_group=="O+") selected @endif>O+</option>
                                                    <option value="O-" @if($patient_info->all_patients_list[0]->blood_group=="O-") selected @endif>O-</option>
                                                    <option value="AB+" @if($patient_info->all_patients_list[0]->blood_group=="AB+") selected @endif>AB+</option>
                                                    <option value="AB-" @if($patient_info->all_patients_list[0]->blood_group=="AB-") selected @endif>AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cinsiyet</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-check-box"></i></span></div>
                                                <select name="gender" class="custom-select">
                                                    <option value="Erkek" @if($patient_info->all_patients_list[0]->gender=="Erkek") selected @endif>Erkek</option>
                                                    <option value="Kadın" @if($patient_info->all_patients_list[0]->gender=="Kadın") selected @endif>Kadın</option>
                                                    <option value="Diğer" @if($patient_info->all_patients_list[0]->gender=="Diğer") selected @endif>Diğer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-check-box"></i></span></div>
                                                <select name="status" class="custom-select">
                                                    <option value="1" @if($patient_info->status==1) selected @endif>Aktif</option>
                                                    <option value="0" @if($patient_info->status==0) selected @endif>Pasif</option>
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
                                            <label>Adres 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="adress1" class="form-control" value="{{$patient_info->all_patients_list[0]->adress_1}}" placeholder="Adresi giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Adres 2</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="address2" class="form-control" value="{{$patient_info->all_patients_list[0]->adress_2}}" placeholder="İkinci adresi ekleyiniz. . .">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Şehir</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-map-alt"></i></span>
                                        </div>
                                        <input type="text" name="city" class="form-control" value="{{$patient_info->all_patients_list[0]->city}}" placeholder="Şehir adını giriniz . . .">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ülke</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-map"></i></span>
                                        </div>
                                        <input type="text" name="country" class="form-control" value="{{$patient_info->all_patients_list[0]->country}}" placeholder="Ülke adını giriniz . . .">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Posta/Zip Kodu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-pin"></i></span>
                                        </div>
                                        <input type="text" name="posta_zip" class="form-control" value="{{$patient_info->all_patients_list[0]->postal_zip}}" placeholder="Posta/Zip kodunu giriniz . . .">
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
