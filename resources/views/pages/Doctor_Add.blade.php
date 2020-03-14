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
         
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Doktor Ekle</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2 text-linkedin"><a href="{{url('Docotrs')}}">Doktorlar</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Doktor Ekle</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            <form action="{{url('/Doctor_Create')}}" method="POST" enctype="multipart/form-data" ><!-- siq_id="autopick_8689" -->
                @csrf
                <input type="hidden" name="" value="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#doctor-basic" data-toggle="tab">Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-address" data-toggle="tab">Adres Bilgileri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-web" data-toggle="tab">Website Bilgileri </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-appointment" data-toggle="tab">Randevular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-holidays" data-toggle="tab">Tatiller</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4">
                            <div class="tab-pane active" id="doctor-basic">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Ad <span class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" name="name" class="form-control" value="" placeholder="Doktor adını giriniz . . ." required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Soyad <span class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" name="surname" class="form-control" value="" placeholder="Doktor soyadını giriniz . . ." required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>E-Mail Adresi <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                                </div>
                                                <input type="text" name="mail" class="form-control" value="" placeholder="E-Mail adresini giriniz . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                </div>
                                                <input type="text" name="phone" class="form-control" value="" placeholder="Telefon numarasını giriniz. . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kan Grubu</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <select name="bloodgroup" class="custom-select">
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
                                        <div class="form-group">
                                            <label>Cinsiyet</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <select name="gender" class="custom-select">
                                                    <option value="Male">Erkek</option>
                                                    <option value="Female">Kadın</option>
                                                    <option value="Other">Diğer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="d-block">Fotoğraf</label>
                                            <div class='file-input'>
                                                <input type='file'>
                                                <span class='button'>Yükle</span>
                                                <label  data-js-label> Resim Yükleyeniz</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Doğum Tarihi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>
                                                <input type="text" id="user-dob" name="date_of_birth" class="form-control bg-white hasDatepicker" value="" placeholder="Select Date of Birth . . ." readonly="" autocomplete="off" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Branş <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-layers-alt"></i></span></div>
                                                <select name="department" class="custom-select" required="">
                                                    <option value="Jinekoloji"> Jinekoloji</option>
                                                    <option value="Ortoloji"> Ortoloji</option>
                                                    <option value="Dermatolog"> Dermatolog</option>
                                                    <option value="Anestezi"> Anestezi</option>
                                                    <option value="Ayurveda"> Ayurveda</option>
                                                    <option value="Patoloji"> Patoloji</option>
                                                    <option value="Radyoloji"> Radiology</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Durum</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                                </div>
                                                <select name="durum" class="custom-select" required="">
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Pasif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="dotted-seprator mt-4 mb-5"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kullanıcı Adı <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-id-badge"></i></span>
                                                </div>
                                                <input type="text" name="user_name" class="form-control" value="" placeholder="Enter Doctor Username . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Şifre <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-key"></i></span>
                                                </div>
                                                <input type="password" name="password" class="form-control" placeholder="Şifreyi Giriniz . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Şifreyi Doğrula <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-key"></i></span>
                                                </div>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Şifreyi doğrula . . ." required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Addres 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="adress1" class="form-control" value="" placeholder="Adres 1 . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Addres 2</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="adress2" class="form-control" value="" placeholder="Adres 2 . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Şehir</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-map-alt"></i></span>
                                                </div>
                                                <input type="text" name="city" class="form-control" value="" placeholder="Şehir adını giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ülke</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-map"></i></span>
                                                </div>
                                                <input type="text" name="country" class="form-control" value="" placeholder="Ülke adını giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Posta/Zip Kodu</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-pin"></i></span>
                                                </div>
                                                <input type="text" name="posta_zip_kodu" class="form-control" value="" placeholder="Posta/Zip kodunu giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-web">
                                <div class="form-group">
                                    <label>Bilgileri web site üzerinde göstermek istiyor musunuz?</label>
                                    <select name="web_status" class="custom-select">
                                        <option value="1">Evet</option>
                                        <option value="0">Hayır</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Öncelik</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-shortcode"></i></span>
                                                </div>
                                                <input type="number" name="priority" class="form-control" value="" placeholder="Öncelik sayısını giriniz . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Pozisyon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-info"></i></span>
                                                </div>
                                                <input type="text" name="position" class="form-control" value="" placeholder="Doktor pozisyonunu giriniz . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Derece</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-id-badge"></i></span>
                                                </div>
                                                <input type="text" name="degree" class="form-control" value="" placeholder="Doktor derecesini giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Uzaman Olduğu Alan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-shield"></i></span>
                                                </div>
                                                <input type="text" name="specility" class="form-control" value="" placeholder="Doktorun Uzman olduğu alanı giriniz. . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Deneyim</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-shine"></i></span>
                                                </div>
                                                <input type="number" name="experience" class="form-control" value="" placeholder="Doktor'un deneyim yılını giriniz . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ödüller</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-gift"></i></span>
                                                </div>
                                                <input type="text" name="awards" class="form-control" value="" placeholder="Ödül sayısını giriniz . . .">
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
                                                <input type="url" name="facebook_link" class="form-control" value="" placeholder="Facebook linki">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-twitter"></i></span>
                                                </div>
                                                <input type="url" name="twitter_link" class="form-control" value="" placeholder="Twitter linki">
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
                                                <input type="url" name="google_plus_link" class="form-control" value="" placeholder="Google+ linki">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-instagram"></i></span>
                                                </div>
                                                <input type="url" name="instagram_link" class="form-control" value="" placeholder="Instagram linki">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-appointment">
                                <div class="form-group">
                                    <label>Doktor randevu alabilir mi? <span class="form-required">*</span></label>
                                    <select name="appointment_status" class="custom-select">
                                        <option value="1">Evet</option>
                                        <option value="0">Hayır</option>
                                    </select>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-middle table-bordered">
                                        <thead>
                                        <tr>
                                            <th rowspan="2">Günler</th>
                                            <th colspan="2" class="text-center">Öğleden Önce</th>
                                            <th colspan="2" class="text-center">Öğleden Sonra</th>
                                            <th rowspan="2">Zaman Aralığı(Dakika)</th>
                                            <th rowspan="2">Tatil</th>
                                        </tr>
                                        <tr>
                                            <th>Başlama Saati</th>
                                            <th>Bitiş Saati</th>
                                            <th>Başlama Saati</th>
                                            <th>Bitiş Saati</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Pazartesi</td>
                                            <td>
                                                <input type="time" name="pzt_before_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="pzt_before_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="pzt_after_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="pzt_after_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="pzt_slot_time" value="" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="pzt_holiday" class="custom-control-input doctor-time" id="time-1" value="1">
                                                    <label class="custom-control-label" for="time-1"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Salı</td>
                                            <td>
                                                <input type="time" name="sali_before_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="sali_before_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="sali_after_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="sali_after_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="sali_slot_time" value="" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="sali_holiday" class="custom-control-input doctor-time" id="time-2" value="1">
                                                    <label class="custom-control-label" for="time-2"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Çarşamba</td>
                                            <td>
                                                <input type="time" name="crs_beforo_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="crs_beforo_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="crs_after_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="crs_after_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="crs_slot_time" value="" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="crs_holiday" class="custom-control-input doctor-time" id="time-3" value="1">
                                                    <label class="custom-control-label" for="time-3"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Perşembe</td>
                                            <td>
                                                <input type="time" name="pers_before_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="pers_before_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="pers_after_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="pers_after_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="pers_slot_time" value="" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="" class="custom-control-input doctor-time" id="time-4" value="1">
                                                    <label class="custom-control-label" for="time-4"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cuma</td>
                                            <td>
                                                <input type="time" name="cuma_before_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="cuma_before_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="cuma_after_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="cuma_after_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="cuma_slot_time" value="" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="cuma_holiday" class="custom-control-input doctor-time" id="time-5" value="1">
                                                    <label class="custom-control-label" for="time-5"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cumartesi</td>
                                            <td>
                                                <input type="time" name="cmt_before_begin" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="cmt_before_end" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="cmt_after_" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="" value="" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="" class="custom-control-input doctor-time" id="time-6" value="1">
                                                    <label class="custom-control-label" for="time-6"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pazar</td>
                                            <td>
                                                <input type="time" name="doctor[time][0][st1]" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][0][et1]" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][0][st2]" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="time" name="doctor[time][0][et2]" value="" class="form-control m-0">
                                            </td>
                                            <td>
                                                <input type="text" name="doctor[time][0][slot]" value="" class="form-control m-0">
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="doctor[time][0][holiday]" class="custom-control-input doctor-time" id="time-0" value="1">
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
                                    <div id="other-holiday" class="hasDatepicker">
                                        <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-3" style="display: block; width: 51em;"><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">February</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">1</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">2</span>
                                                        </td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">3</span>
                                                        </td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">4</span>
                                                        </td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">5</span>
                                                        </td><td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">6</span>
                                                        </td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">7</span>
                                                        </td>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">8</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">9</span>
                                                        </td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">10</span>
                                                        </td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">11</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">12</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">13</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">14</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">15</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">16</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">17</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">18</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">19</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">20</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">21</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">22</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">23</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">24</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">25</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">26</span></td><td class=" ui-datepicker-days-cell-over undefined ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">27</a>
                                                        </td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020">
                                                            <a class="ui-state-default" href="#">28</a>
                                                        </td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="#">29</a></td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-middle"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">March</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">6</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">7</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">13</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">14</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">20</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">21</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">27</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">28</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">3</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">4</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">10</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">11</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">17</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">18</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">24</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">25</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><div class="ui-datepicker-title"><span class="ui-datepicker-month">May</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">1</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">2</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">8</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">9</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">15</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">16</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">22</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">23</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">29</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">30</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-middle"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">June</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">5</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">6</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">12</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">13</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">19</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">20</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">26</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">27</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><div class="ui-datepicker-title"><span class="ui-datepicker-month">July</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">3</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">4</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">5</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">10</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">11</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">17</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">18</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">24</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">25</a></td></tr><tr><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div></div></div>
                                    <input type="hidden" name="doctor[national]" value="2000-12-25" id="altField">
                                    <input type="hidden" id="other-holiday-list" value="">
                                    <input type="hidden" id="weekly-holiday" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="doctor[id]" value="">
                    <input type="hidden" name="doctor[user_id]" value="">
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i>Kaydet</button>
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
