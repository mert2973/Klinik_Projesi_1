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
                    <h2 class="page-title-text d-inline-block">Hasta Ekle</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="ml-2 text-linkedin"><a href="{{url('/Patient_Add')}}">Hastalar</a></span>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="ml-2">Hasta Ekle</span>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                </div>
            </div>
        </div>
        
        <form action="{{route('Patient.store')}}" method="POST" siq_id="autopick_208">
            @csrf
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                        <li class="nav-item">
                            <a class="nav-link active" href="#patient-info" data-toggle="tab">Bilgiler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#patient-address" data-toggle="tab">Adres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#patient-medical-history" data-toggle="tab">Tıbbi Geçmişi</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-4">
                        <div class="tab-pane active" id="patient-info">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ad <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-user"></i></span>
                                            </div>
                                            <input type="text" name="name" required class="form-control" value="" placeholder="Adı giriniz . . . ">
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
                                            <input type="text" name="surname" required class="form-control" value="" placeholder="Soyadı giriniz . . . ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Adres <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-email"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control" value="" placeholder="Email adresi giriniz . . . ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telefon <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-mobile"></i></span>
                                            </div>
                                            <input type="text" name="phone" required class="form-control" value="" placeholder="Telefon numarasını giriniz . . . ">
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
                                            <input type="date" name="date_birth" required class="form-control bg-white" value="" placeholder="Doğum tarihini giriniz. . . "  autocomplete="on">
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
                                            <select name="blood_group" class="custom-select">
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
                                        <label>Cinsiyet</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="ti-check-box"></i></span></div>
                                            <select name="gender" class="custom-select" required>
                                                <option value="Male">Erkek</option>
                                                <option value="Female">Kadın</option>
                                                <option value="Other">Diğer</option>
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
                                        <label>Adres  1</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                            </div>
                                            <input type="text" name="adres_1" class="form-control" value="" placeholder="Birinci adresi giriniz . . .">
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
                                            <input type="text" name="adres_2" class="form-control" value="" placeholder="İkinici adresi giriniz . . .">
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
                                    <input type="text" name="city"  class="form-control" value="" placeholder="Şehir adını giriniz . . .">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ülke</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-map"></i></span>
                                    </div>
                                    <input type="text" name="country" class="form-control" value="" placeholder="Ülke adını giriniz . . .">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Posta/Zip Kodu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-pin"></i></span>
                                    </div>
                                    <input type="text" name="posta_kodu" class="form-control" value="" placeholder="Posta/Zip kodunu giriniz . . .">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="patient-medical-history">
                            <div class="form-group mb-2">
                                <label class="d-block mb-2">Aşağdaki hastalıklardan herhangi birine şimdi veya daha önce hiç yakalandınız mı?</label>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="diabetes" class="custom-control-input" value="Diabetes" id="diabetes">
                                            <label class="custom-control-label" for="diabetes">Şeker Hastalığı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="high_blood_pressure" class="custom-control-input" value="High Blood Pressure" id="high-blood-pressure">
                                            <label class="custom-control-label" for="high-blood-pressure">Tansiyon</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="high_cholestrol" class="custom-control-input" value="High Cholesterol" id="high-cholesterol">
                                            <label class="custom-control-label" for="high-cholesterol">Yüksek kolestorol</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="heart_problems" class="custom-control-input" value="Heart Problems" id="heart-problems">
                                            <label class="custom-control-label" for="heart-problems">Kalp Rahatsızlıkları</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="asthma" class="custom-control-input" value="Asthma" id="asthma">
                                            <label class="custom-control-label" for="asthma">Astım</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="kidney_disease" class="custom-control-input" value="Kidney Disease" id="kidney-disease">
                                            <label class="custom-control-label" for="kidney-disease">Böbrek Hastalığı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="kidney_stones" class="custom-control-input" value="Kidney Stones" id="kidney-stones">
                                            <label class="custom-control-label" for="kidney-stones">Böbrek taşı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="jaundice" class="custom-control-input" value="Jaundice" id="jaundice">
                                            <label class="custom-control-label" for="jaundice">Sarılık</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="rheumatic_fever" class="custom-control-input" value="Rheumatic Fever" id="rheumatic-fever">
                                            <label class="custom-control-label" for="rheumatic-fever">Romatizmal Ateş</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="cancer" class="custom-control-input" value="Cancer" id="cancer">
                                            <label class="custom-control-label" for="cancer">Kanser</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="hiv_aids" class="custom-control-input" value="HIV/AIDS" id="hiv-aids">
                                            <label class="custom-control-label" for="hiv-aids">HİV/AİDS</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="epilepsy" class="custom-control-input" value="Epilepsy" id="epilepsy">
                                            <label class="custom-control-label" for="epilepsy">Epilepsi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="pregnancy" class="custom-control-input" value="Pregnancy" id="pregnancy">
                                            <label class="custom-control-label" for="pregnancy">Gebelik</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="blood_thinners" class="custom-control-input" value="Blood Thinners" id="blood-thinners">
                                            <label class="custom-control-label" for="blood-thinners">Kansızlık</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ek Açıklama :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-heart-broken"></i></span>
                                    </div>
                                    <textarea name="explation" class="form-control" placeholder=" . . ."></textarea>
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
