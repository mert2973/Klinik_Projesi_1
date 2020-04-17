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
                        <h2 class="page-title-text d-inline-block">Doktor Bilgilerini Düzenle</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2"><a href="{{url('Doctors')}}">Doktorlar</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Doktor Bilgilerini Düzenle</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            <form action="{{url('/Doctor_Info_Update')}}" method="POST" enctype="multipart/form-data" >
               @csrf
                <div class="panel panel-default">
                    <div class="panel-body">
                        <input type="hidden" name="dr_id" value="{{$the_doctor->user_id}}">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#doctor-basic" data-toggle="tab">Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-address" data-toggle="tab">Adres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-web" data-toggle="tab">Web Site Bilgileri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doctor-appointment" data-toggle="tab">Randevu Bilgileri</a>
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
                                                        <input type="text" name="name" class="form-control" value="{{$the_doctor->name}} " placeholder="Enter Doctor First Name . . ." required="">
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
                                                        <input type="text" name="surname" class="form-control" value="{{$the_doctor->surname}}" placeholder="Enter Doctor Last Name . . ." required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Adresi <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                                </div>
                                                <input type="text" class="form-control" value="{{$the_doctor->email}}" placeholder="Enter Email Address . . ." required="" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon Numarası <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                </div>
                                                <input type="text" name="phone" class="form-control" value="{{$the_doctor->phone}}" placeholder="Enter Mobile Number . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kan Grubu</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <select name="blood_group" class="custom-select">
                                                    <option>Kan Grubunu Seçiniz</option>
                                                    <option value="A+" @if($the_doctor->blood_group=="A+") selected="" @endif>A+</option>
                                                    <option value="A-" @if($the_doctor->blood_group=="A-") selected="" @endif>A-</option>
                                                    <option value="B+" @if($the_doctor->blood_group=="B+") selected="" @endif>B+</option>
                                                    <option value="B-" @if($the_doctor->blood_group=="B-") selected="" @endif>B-</option>
                                                    <option value="O+" @if($the_doctor->blood_group=="O+") selected="" @endif>O+</option>
                                                    <option value="O-" @if($the_doctor->blood_group=="O-") selected="" @endif>O-</option>
                                                    <option value="AB+" @if($the_doctor->blood_group=="AB+") selected="" @endif>AB+</option>
                                                    <option value="AB-" @if($the_doctor->blood_group=="AB-") selected="" @endif>AB-</option>
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
                                                    <option value="" > Seçiniz </option>
                                                    <option value="Erkek"   @if($the_doctor->gender=="Erkek") selected="" @endif>Erkek</option>
                                                    <option value="Kadın"   @if($the_doctor->gender=="Kadın") selected="" @endif>Kadın</option>
                                                    <option value="Diğer"   @if($the_doctor->gender=="Diğer") selected="" @endif>Diğer</option>
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
                                                    @if($the_doctor->gender=="Erkek")
                                                        <img class="img-thumbnail" src="{{asset('css_js_img/dr_resim.jpg')}}" alt="">
                                                        <input type="hidden" name="doctor[picture]" value="media-1771205195e049ca8ee997.jpg">
                                                    @elseif($the_doctor->gender=="Kadın")
                                                        <td class="table-img"><img class="img-thumbnail rounded" src="{{asset('css_js_img/doktors_img/media-14789594495e049ca8efcdf.jpg')}}" alt="Image"></td>
                                                    @else
                                                        <td class="table-img"><img class="img-thumbnail rounded" src="{{asset('css_js_img/doktors_img/a.jpg')}}" alt="Image"></td>
                                                    @endif
                                                  
                                                </div>
                                                <div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="" data-original-title="Remove">
                                                    <a class="ti-trash"></a>
                                                </div>
                                                <div class="form-text">(Size: 530px * 470px)</div>
                                            </div>
                                      
                                        <div class="form-group">
                                            <label>Doğum Tarihi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>
                                                <input type="text"  name="date_of_birth" class="form-control bg-white " value="{{$the_doctor->date_of_birth}}" placeholder="Select Date of Birth . . ."  autocomplete="off"  id="datepicker">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Branş <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-layers-alt"></i></span></div>
                                                <select name="department" class="custom-select" required="">
                                                    <option value="Jinekoloji"  @if($the_doctor->department=="Jinekoloji") selected="" @endif> Jinekoloji</option>
                                                    <option value="Ortoloji"    @if($the_doctor->department=="Ortoloji") selected="" @endif> Ortoloji</option>
                                                    <option value="Dermatolog"  @if($the_doctor->department=="Dermatolog") selected="" @endif> Dermatolog</option>
                                                    <option value="Anestezi"    @if($the_doctor->department=="Anestezi") selected="" @endif> Anestezi</option>
                                                    <option value="Ayurveda"    @if($the_doctor->department=="Ayurveda") selected="" @endif> Ayurveda</option>
                                                    <option value="Patoloji"    @if($the_doctor->department=="Patoloji") selected="" @endif> Patoloji</option>
                                                    <option value="Radyoloji"   @if($the_doctor->department=="Radyoloji") selected="" @endif> Radyoloji</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Durum</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                                </div>
                                                <select name="status" class="custom-select" required="">
                                                    <option value="1" @if($the_doctor->status==1) selected="" @endif >Aktif</option>
                                                    <option value="0" @if($the_doctor->status==0) selected="" @endif>Pasif</option>
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
                                                <input type="text" name="user_name" class="form-control" value="{{$the_doctor->usr_name}}" placeholder="Enter Doctor Username . . ." required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Adres 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="adress1" class="form-control" value="{{$the_doctor->adress_1}}" placeholder="Enter Address Line 1 . . .">
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
                                                <input type="text" name="adress2" class="form-control" value="{{$the_doctor->adress_2}}" placeholder="Enter Address Line 2 . . .">
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
                                                <input type="text" name="city" class="form-control" value="{{$the_doctor->city}}" placeholder="Şehir adını giriniz . . .">
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
                                                <input type="text" name="country" class="form-control" value="{{$the_doctor->country}}" placeholder="Ülke adını giriniz . . .">
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
                                                <input type="text" name="posta_zip_kodu" class="form-control" value="{{$the_doctor->postal_zip}}" placeholder="Posta/Zip kodunu giriniz . . .">
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
                                                <input type="number" name="priority" class="form-control" value="{{$the_doctor->priority}}" placeholder="Öncelik sayısını giriniz . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Pozisyon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-info"></i></span>
                                                </div>
                                                <input type="text" name="position" class="form-control" value="{{$the_doctor->position}}" placeholder="Doktor pozisyonunu giriniz . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Derece</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-id-badge"></i></span>
                                                </div>
                                                <input type="text" name="degree" class="form-control" value="{{$the_doctor->degree}}" placeholder="Doktor derecesini giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Uzman Olduğu Alan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-shield"></i></span>
                                                </div>
                                                <input type="text" name="specility" class="form-control" value="{{$the_doctor->specility}}" placeholder="Doktorun Uzman olduğu alanı giriniz. . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Deneyim</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-shine"></i></span>
                                                </div>
                                                <input type="number" name="experience" class="form-control" value="{{$the_doctor->expr_year}}" placeholder="Doktor'un deneyim yılını giriniz . . .">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ödüller</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-gift"></i></span>
                                                </div>
                                                <input type="text" name="awards" class="form-control" value="{{$the_doctor->awards_count}}" placeholder="Ödül sayısını giriniz . . .">
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
                                                <input type="url" name="facebook_link" class="form-control" value="{{$the_doctor->facebook_link}}" placeholder="Facebook linki">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-twitter"></i></span>
                                                </div>
                                                <input type="url" name="twitter_link" class="form-control" value="{{$the_doctor->twitter_link}}" placeholder="Twitter linki">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <!-- <div class="form-group">
                                            <label>Google +</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-google"></i></span>
                                                </div>
                                                <input type="url" name="google_plus_link" class="form-control" value="{{--$the_doctor->instegram_link--}}" placeholder="Google+ linki">
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-instagram"></i></span>
                                                </div>
                                                <input type="url" name="instagram_link" class="form-control" value="{{$the_doctor->instegram_link}}" placeholder="Instagram linki">
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
                                        @foreach($doctor_apt_time as $apt_time)
                                        <tr>
                                            <td>@if($apt_time->day==1)
                                                    {{"Pazartesi"}}
                                                @elseif($apt_time->day==2)
                                                    {{"Salı"}}
                                                @elseif($apt_time->day==3)
                                                    {{"Çarşamba"}}
                                                @elseif($apt_time->day==4)
                                                    {{"Perşembe"}}
                                                @elseif($apt_time->day==5)
                                                    {{"Cuma"}}
                                                @elseif($apt_time->day==6)
                                                    {{"Cumartesi"}}
                                                @elseif($apt_time->day==7)
                                                    {{"Pazar"}}
                                                @endif
                                            </td>
                                            <td>
                                                <input type="time" name="appointment_dr[time][{{$apt_time->day}}][before_lunch_begin]" value="{{$apt_time->bfr_lunch_begin}}" class="form-control m-0" @if($apt_time->holiday==1) readonly="readonly" @endif>
                                            </td>
                                            <td>
                                                <input type="time" name="appointment_dr[time][{{$apt_time->day}}][before_lunch_end]" value="{{$apt_time->bfr_lunch_end}}" class="form-control m-0" @if($apt_time->holiday==1) readonly="readonly" @endif>
                                            </td>
                                            <td>
                                                <input type="time" name="appointment_dr[time][{{$apt_time->day}}][after_lunch_begin]" value="{{$apt_time->aftr_lunch_begin}}" class="form-control m-0" @if($apt_time->holiday==1) readonly="readonly" @endif>
                                            </td>
                                            <td>
                                                <input type="time" name="appointment_dr[time][{{$apt_time->day}}][after_lunch_end]" value="{{$apt_time->aftr_lunch_end}}" class="form-control m-0" @if($apt_time->holiday==1) readonly="readonly" @endif>
                                            </td>
                                            <td>
                                                <input type="text" name="appointment_dr[time][{{$apt_time->day}}][slot_time]" value="{{$apt_time->range_time}}" class="form-control m-0" @if($apt_time->holiday==1) readonly="readonly" @endif>
                                            </td>
                                            <td class="text-center">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                    <input type="checkbox" name="appointment_dr[time][{{$apt_time->day}}][holiday]" class="custom-control-input doctor-time" @if($apt_time->holiday==1) checked @endif id="time-{{$apt_time->day}}" >
                                                    <label class="custom-control-label" for="time-{{$apt_time->day}}"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="doctor-holidays">
                                <div class="form-group">
                                    <div id="other-holiday" class="hasDatepicker">
                                        <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-3" style="display: block; width: 51em;">
                                            <div class="ui-datepicker-group ui-datepicker-group-first">
                                                <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left">
                                                    <a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev">
                                                        <span class="ui-icon ui-icon-circle-triangle-w">Prev</span>
                                                    </a>
                                                    <div class="ui-datepicker-title"><span class="ui-datepicker-month">February</span>&nbsp;
                                                        <span class="ui-datepicker-year">2020</span>
                                                    </div>
                                                </div>
                                                <table class="ui-datepicker-calendar">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" class="ui-datepicker-week-end">
                                                            <span title="Sunday">Su</span>
                                                        </th>
                                                        <th scope="col"><span title="Monday">Mo</span>
                                                        </th>
                                                        <th scope="col"><span title="Tuesday">Tu</span></th>
                                                        <th scope="col"><span title="Wednesday">We</span></th>
                                                        <th scope="col"><span title="Thursday">Th</span></th>
                                                        <th scope="col"><span title="Friday">Fr</span></th>
                                                        <th scope="col" class="ui-datepicker-week-end">
                                                            <span title="Saturday">Sa</span>
                                                        </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">1</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">2</span>
                                                        </td><td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">3</span>
                                                        </td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">4</span>
                                                        </td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined">
                                                            <span class="ui-state-default">5</span></td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined">
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
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">9</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">10</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">11</span>
                                                        </td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">12</span></td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">13</span></td>
                                                        <td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">14</span></td>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">15</span> </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">16</span></td><td class=" ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">17</span></td>
                                                        <td class=" ui-datepicker-days-cell-over undefined ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#id=1">18</a></td><td class=" ui-state-highlight" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020">
                                                            <a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">23</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">26</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td>
                                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="ui-datepicker-group ui-datepicker-group-middle">
                                                <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix">
                                                    <div class="ui-datepicker-title"><span class="ui-datepicker-month">March</span>&nbsp;<span class="ui-datepicker-year">2020</span></div>
                                                </div>
                                                <table class="ui-datepicker-calendar">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                                                        <th scope="col"><span title="Monday">Mo</span></th>
                                                        <th scope="col"><span title="Tuesday">Tu</span></th>
                                                        <th scope="col"><span title="Wednesday">We</span></th>
                                                        <th scope="col"><span title="Thursday">Th</span></th>
                                                        <th scope="col"><span title="Friday">Fr</span></th>
                                                        <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">1</span></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020">
                                                            <a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a>
                                                        </td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">3</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">5</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td>
                                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">7</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">8</span></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">10</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">12</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td>
                                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">14</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">15</span></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020">
                                                            <a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">17</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">19</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td>
                                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">22</span></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">26</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td>
                                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">29</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table>
                                            </div><div class="ui-datepicker-group ui-datepicker-group-last">
                                                <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div>
                                                <table class="ui-datepicker-calendar">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                                                        <th scope="col"><span title="Monday">Mo</span></th>
                                                        <th scope="col"><span title="Tuesday">Tu</span></th>
                                                        <th scope="col"><span title="Wednesday">We</span></th>
                                                        <th scope="col"><span title="Thursday">Th</span></th>
                                                        <th scope="col"><span title="Friday">Fr</span></th>
                                                        <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
                                                    </tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">3</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">5</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">10</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">12</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">17</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">19</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">26</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><div class="ui-datepicker-title"><span class="ui-datepicker-month">May</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div>
                                                <table class="ui-datepicker-calendar">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                                                        <th scope="col"><span title="Monday">Mo</span></th>
                                                        <th scope="col"><span title="Tuesday">Tu</span></th>
                                                        <th scope="col"><span title="Wednesday">We</span></th>
                                                        <th scope="col"><span title="Thursday">Th</span></th>
                                                        <th scope="col"><span title="Friday">Fr</span></th>
                                                        <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">1</a></td>
                                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">3</span></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">5</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">8</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">10</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">12</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">15</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">17</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">19</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">24</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">26</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="4" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">31</span></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="ui-datepicker-group ui-datepicker-group-middle">
                                                <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">June</span>&nbsp;<span class="ui-datepicker-year">2020</span></div></div>
                                                <table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">1</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">3</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">5</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">7</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">10</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">12</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">14</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">17</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">19</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">21</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">26</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">28</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="5" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div>
                                            <div class="ui-datepicker-group ui-datepicker-group-last">
                                                <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right">
                                                    <div class="ui-datepicker-title"><span class="ui-datepicker-month">July</span>&nbsp;<span class="ui-datepicker-year">2020</span>
                                                    </div>
                                                </div>
                                                <table class="ui-datepicker-calendar">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                                                        <th scope="col"><span title="Monday">Mo</span></th>
                                                        <th scope="col"><span title="Tuesday">Tu</span></th>
                                                        <th scope="col"><span title="Wednesday">We</span></th>
                                                        <th scope="col"><span title="Thursday">Th</span></th>
                                                        <th scope="col"><span title="Friday">Fr</span></th>
                                                        <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">1</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">2</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">3</a></td>
                                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">4</a></td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">5</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">6</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">7</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">8</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">9</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">10</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">11</a></td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">12</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">13</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">14</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">15</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">16</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">17</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">18</a></td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">19</span></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">20</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">21</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">22</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">23</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">24</a></td><td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">25</a></td></tr>
                                                    <tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled undefined"><span class="ui-state-default">26</span></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">27</a></td>
                                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">28</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">29</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">30</a></td><td class=" undefined" data-handler="selectDay" data-event="click" data-month="6" data-year="2020"><a class="ui-state-default" href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/edit&amp;id=1#">31</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr>
                                                    <tr>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="ui-datepicker-row-break"></div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="doctor[national]" value="2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19" id="altField">
                                    <input type="hidden" id="other-holiday-list" value="2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19">
                                    <input type="hidden" id="weekly-holiday" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
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
    <script>
        $(document).ready(function () {
            $(".doctor-time").click(function() {
                var chk = $(this);
                holidayCheck(chk);
            });
            function holidayCheck(chk) {

                var chk_parent = chk.parents('tr');
                if(chk.is(":checked")) {
                    chk_parent.find('input').not(chk).attr('readonly', true);
                } else {
                    chk_parent.find('input').not(chk).attr('readonly', false);
                }
            }
        });
    </script>
    @endsection
