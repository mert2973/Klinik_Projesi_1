@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Setting_active').addClass('active') ;
            $('#St_System_Info_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">System Info</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li>
                                    <a href="{{url('/Dashboard')}}">Dashboard</a>
                                    <i class="fa fa-angle-right font-13 ml-2" ></i>
                                    <span class="ml-2">System Info</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                    </div>
                </div>
            </div>
            <form action="" method="" enctype="multipart/form-data" siq_id="autopick_1811">
                <input type="hidden" name="_token" value="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active show" href="#setting-info" data-toggle="tab">Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#setting-address" data-toggle="tab">Adres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#settings-sociallink" data-toggle="tab">Sosyal Medya Linkleri</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content pt-4">
                            <!--Bilgiler --->
                            <div class="tab-pane active show" id="setting-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--logo-->
                                        <div class="row pb-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="d-block">Logo</label>
                                                    <div class="image-upload" style="display: none">
                                                        <a>Yükle</a>
                                                    </div>
                                                    <div class="saved-picture">
                                                        <img class="img-thumbnail" src="{{asset('css_js_img/setting/media-13067443605e049cf2882b1.png')}}" alt="">
                                                        <input type="hidden" name="logo" value="media-13067443605e049cf2882b1.png">
                                                    </div>
                                                    <div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="" data-original-title="Remove">
                                                        <a class="fa fa-times"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="d-block">İcon</label>
                                                    <div class="image-upload" style="display: none">
                                                        <a>Yükle</a>
                                                    </div>
                                                    <div class="saved-picture">
                                                        <img class="img-thumbnail" src="{{asset('css_js_img/setting/media-16557374875e049cf2688e3.png')}}" alt="">
                                                        <input type="hidden" name="favicon" value="media-16557374875e049cf2688e3.png">
                                                    </div>
                                                    <div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="" data-original-title="Remove">
                                                        <a class="fa fa-times"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End logo-->
                                        <!-- klinik adı-->
                                        <div class="form-group">
                                            <label>Klinik Adı <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-tag"></i></span>
                                                </div>
                                                <input type="text" name="clinic_name" class="form-control" value="" placeholder="Klinik Adını Giriniz . . ." required="">
                                            </div>
                                        </div>
                                        <!--end  klinik adı-->
                                        <!-- klinik adı-->
                                        <div class="form-group">
                                            <label>Klinik Resmi Adı <span class="form-required">*</span></label><!--Clinic Legal Name-->
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-id-badge"></i></span>
                                                </div>
                                                <input type="text" name="legal_name" class="form-control" value="" placeholder="Klinik Resmi Adını Giriniz (Klinik Pvt Ltd) . . ." required="">
                                            </div>
                                        </div>
                                        <!--End klinik adı-->
                                        <!-- email-->
                                        <div class="form-group">
                                            <label>E-mail Adresi <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                                </div>
                                                <input type="email" name="email" class="form-control" value="support@pepdev.com" placeholder="Email Adresi Giriniz . . ." required="">
                                            </div>
                                        </div>
                                        <!--End email-->
                                        <!-- telefon-->
                                        <!-- telefon-->
                                        <div class="form-group">
                                            <label>Telefon <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                </div>
                                                <input type="text" name="phone_1" class="form-control" value="" placeholder="Telefon numarası giriniz . . ." required="">
                                            </div>
                                        </div>
                                        <!--End telefon-->
                                        <!--Acil telefon-->
                                        <div class="form-group">
                                            <label>Acil Telefon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-headphone-alt"></i></span>
                                                </div>
                                                <input type="text" name="phone_2" class="form-control" value="" placeholder="Acil telefon numarası giriniz . . .">
                                            </div>
                                        </div>
                                        <!--End Acil telefon-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <!--Site modu-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Site Modu<span class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-settings"></i></span></div>
                                                        <select name="site_mode" class="custom-select" required="">
                                                            <option value="1" selected="">Live</option>
                                                            <option value="2">Comming Soon</option>
                                                            <option value="3">Maintenance mode</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Site modu-->
                                            
                                            <!--Tema Rengi-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tema Rengi</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-paint-bucket"></i></span>
                                                        </div>
                                                        <select name="theme_color" class="custom-select">
                                                            <option value="blue" selected="">Mavi</option>
                                                            <option value="green">Yeşil</option>
                                                            <option value="orange">Turuncu</option>
                                                            <option value="purple">Mor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Tema Rengi-->
                                        </div>
                                        <!--Dil-->
                                        <div class="form-group">
                                            <label>Dil</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-world"></i></span>
                                                </div>
                                                <select name="language" class="custom-select">
                                                    <option value="tr" >Türkçe</option>
                                                    <option value="en" >İngilizce</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--End dil -->
                                        <!--Google Analytics ID --->
                                        <div class="form-group">
                                            <label>Google Analytics ID</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-world"></i></span>
                                                </div>
                                                <input type="text" name="google_anlytc_id" class="form-control" value="UA-93901876-1" placeholder="Tracking ID (UA-XXXXX-Y)">
                                            </div>
                                        </div>
                                        <!--Google Analytics ID --->
                                        <!--saat dilim --->
                                        <div class="form-group">
                                            <label>Saat Dilimi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>
                                                <select name="timezone" class="custom-select">
                                                    <option value="Pacific/Niue">(GMT-11:00) Niue</option>
                                                    <option value="Pacific/Pago_Pago">(GMT-11:00) Pago Pago</option>
                                                    <option value="Pacific/Honolulu">(GMT-10:00) Hawaii Time</option>
                                                    <option value="Pacific/Rarotonga">(GMT-10:00) Rarotonga</option>
                                                    <option value="Pacific/Tahiti">(GMT-10:00) Tahiti</option>
                                                    <option value="Pacific/Marquesas">(GMT-09:30) Marquesas</option>
                                                    <option value="America/Anchorage">(GMT-09:00) Alaska Time</option>
                                                    <option value="Pacific/Gambier">(GMT-09:00) Gambier</option>
                                                    <option value="America/Los_Angeles">(GMT-08:00) Pacific Time</option>
                                                    <option value="America/Tijuana">(GMT-08:00) Pacific Time - Tijuana</option>
                                                    <option value="America/Vancouver">(GMT-08:00) Pacific Time - Vancouver</option>
                                                    <option value="America/Whitehorse">(GMT-08:00) Pacific Time - Whitehorse</option>
                                                    <option value="Pacific/Pitcairn">(GMT-08:00) Pitcairn</option>
                                                    <option value="America/Dawson_Creek">(GMT-07:00) Mountain Time - Dawson Creek</option>
                                                    <option value="America/Denver">(GMT-07:00) Mountain Time</option>
                                                    <option value="America/Edmonton">(GMT-07:00) Mountain Time - Edmonton</option>
                                                    <option value="America/Hermosillo">(GMT-07:00) Mountain Time - Hermosillo</option>
                                                    <option value="America/Mazatlan">(GMT-07:00) Mountain Time - Chihuahua, Mazatlan</option>
                                                    <option value="America/Phoenix">(GMT-07:00) Mountain Time - Arizona</option>
                                                    <option value="America/Yellowknife">(GMT-07:00) Mountain Time - Yellowknife</option>
                                                    <option value="America/Belize">(GMT-06:00) Belize</option>
                                                    <option value="America/Chicago">(GMT-06:00) Central Time</option>
                                                    <option value="America/Costa_Rica">(GMT-06:00) Costa Rica</option>
                                                    <option value="America/El_Salvador">(GMT-06:00) El Salvador</option>
                                                    <option value="America/Guatemala">(GMT-06:00) Guatemala</option>
                                                    <option value="America/Managua">(GMT-06:00) Managua</option>
                                                    <option value="America/Mexico_City">(GMT-06:00) Central Time - Mexico City</option>
                                                    <option value="America/Regina">(GMT-06:00) Central Time - Regina</option>
                                                    <option value="America/Tegucigalpa">(GMT-06:00) Central Time - Tegucigalpa</option>
                                                    <option value="America/Winnipeg">(GMT-06:00) Central Time - Winnipeg</option>
                                                    <option value="Pacific/Galapagos">(GMT-06:00) Galapagos</option>
                                                    <option value="America/Bogota">(GMT-05:00) Bogota</option>
                                                    <option value="America/Cancun">(GMT-05:00) America Cancun</option>
                                                    <option value="America/Cayman">(GMT-05:00) Cayman</option>
                                                    <option value="America/Guayaquil">(GMT-05:00) Guayaquil</option>
                                                    <option value="America/Havana">(GMT-05:00) Havana</option>
                                                    <option value="America/Iqaluit">(GMT-05:00) Eastern Time - Iqaluit</option>
                                                    <option value="America/Jamaica">(GMT-05:00) Jamaica</option>
                                                    <option value="America/Lima">(GMT-05:00) Lima</option>
                                                    <option value="America/Nassau">(GMT-05:00) Nassau</option>
                                                    <option value="America/New_York">(GMT-05:00) Eastern Time</option>
                                                    <option value="America/Panama">(GMT-05:00) Panama</option>
                                                    <option value="America/Port-au-Prince">(GMT-05:00) Port-au-Prince</option>
                                                    <option value="America/Rio_Branco">(GMT-05:00) Rio Branco</option>
                                                    <option value="America/Toronto">(GMT-05:00) Eastern Time - Toronto</option>
                                                    <option value="Pacific/Easter">(GMT-05:00) Easter Island</option>
                                                    <option value="America/Caracas">(GMT-04:30) Caracas</option>
                                                    <option value="America/Asuncion">(GMT-03:00) Asuncion</option>
                                                    <option value="America/Barbados">(GMT-04:00) Barbados</option>
                                                    <option value="America/Boa_Vista">(GMT-04:00) Boa Vista</option>
                                                    <option value="America/Campo_Grande">(GMT-03:00) Campo Grande</option>
                                                    <option value="America/Cuiaba">(GMT-03:00) Cuiaba</option>
                                                    <option value="America/Curacao">(GMT-04:00) Curacao</option>
                                                    <option value="America/Grand_Turk">(GMT-04:00) Grand Turk</option>
                                                    <option value="America/Guyana">(GMT-04:00) Guyana</option>
                                                    <option value="America/Halifax">(GMT-04:00) Atlantic Time - Halifax</option>
                                                    <option value="America/La_Paz">(GMT-04:00) La Paz</option>
                                                    <option value="America/Manaus">(GMT-04:00) Manaus</option>
                                                    <option value="America/Martinique">(GMT-04:00) Martinique</option>
                                                    <option value="America/Port_of_Spain">(GMT-04:00) Port of Spain</option>
                                                    <option value="America/Porto_Velho">(GMT-04:00) Porto Velho</option>
                                                    <option value="America/Puerto_Rico">(GMT-04:00) Puerto Rico</option>
                                                    <option value="America/Santo_Domingo">(GMT-04:00) Santo Domingo</option>
                                                    <option value="America/Thule">(GMT-04:00) Thule</option>
                                                    <option value="Atlantic/Bermuda">(GMT-04:00) Bermuda</option>
                                                    <option value="America/St_Johns">(GMT-03:30) Newfoundland Time - St. Johns</option>
                                                    <option value="America/Araguaina">(GMT-03:00) Araguaina</option>
                                                    <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                                                    <option value="America/Bahia">(GMT-03:00) Salvador</option>
                                                    <option value="America/Belem">(GMT-03:00) Belem</option>
                                                    <option value="America/Cayenne">(GMT-03:00) Cayenne</option>
                                                    <option value="America/Fortaleza">(GMT-03:00) Fortaleza</option>
                                                    <option value="America/Godthab">(GMT-03:00) Godthab</option>
                                                    <option value="America/Maceio">(GMT-03:00) Maceio</option>
                                                    <option value="America/Miquelon">(GMT-03:00) Miquelon</option>
                                                    <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                    <option value="America/Paramaribo">(GMT-03:00) Paramaribo</option>
                                                    <option value="America/Recife">(GMT-03:00) Recife</option>
                                                    <option value="America/Santiago">(GMT-03:00) Santiago</option>
                                                    <option value="America/Sao_Paulo">(GMT-02:00) Sao Paulo</option>
                                                    <option value="Antarctica/Palmer">(GMT-03:00) Palmer</option>
                                                    <option value="Antarctica/Rothera">(GMT-03:00) Rothera</option>
                                                    <option value="Atlantic/Stanley">(GMT-03:00) Stanley</option>
                                                    <option value="America/Noronha">(GMT-02:00) Noronha</option>
                                                    <option value="Atlantic/South_Georgia">(GMT-02:00) South Georgia</option>
                                                    <option value="America/Scoresbysund">(GMT-01:00) Scoresbysund</option>
                                                    <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                    <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde</option>
                                                    <option value="Africa/Abidjan">(GMT+00:00) Abidjan</option>
                                                    <option value="Africa/Accra">(GMT+00:00) Accra</option>
                                                    <option value="Africa/Bissau">(GMT+00:00) Bissau</option>
                                                    <option value="Africa/Casablanca">(GMT+00:00) Casablanca</option>
                                                    <option value="Africa/El_Aaiun">(GMT+00:00) El Aaiun</option>
                                                    <option value="Africa/Monrovia">(GMT+00:00) Monrovia</option>
                                                    <option value="America/Danmarkshavn">(GMT+00:00) Danmarkshavn</option>
                                                    <option value="Atlantic/Canary">(GMT+00:00) Canary Islands</option>
                                                    <option value="Atlantic/Faroe">(GMT+00:00) Faeroe</option>
                                                    <option value="Atlantic/Reykjavik">(GMT+00:00) Reykjavik</option>
                                                    <option value="Etc/GMT">(GMT+00:00) GMT (no daylight saving)</option>
                                                    <option value="Europe/Dublin">(GMT+00:00) Dublin</option>
                                                    <option value="Europe/Lisbon">(GMT+00:00) Lisbon</option>
                                                    <option value="Europe/London">(GMT+00:00) London</option>
                                                    <option value="Africa/Algiers">(GMT+01:00) Algiers</option>
                                                    <option value="Africa/Ceuta">(GMT+01:00) Ceuta</option>
                                                    <option value="Africa/Lagos">(GMT+01:00) Lagos</option>
                                                    <option value="Africa/Ndjamena">(GMT+01:00) Ndjamena</option>
                                                    <option value="Africa/Tunis">(GMT+01:00) Tunis</option>
                                                    <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
                                                    <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam</option>
                                                    <option value="Europe/Andorra">(GMT+01:00) Andorra</option>
                                                    <option value="Europe/Belgrade">(GMT+01:00) Central European Time - Belgrade</option>
                                                    <option value="Europe/Berlin">(GMT+01:00) Berlin</option>
                                                    <option value="Europe/Brussels">(GMT+01:00) Brussels</option>
                                                    <option value="Europe/Budapest">(GMT+01:00) Budapest</option>
                                                    <option value="Europe/Copenhagen">(GMT+01:00) Copenhagen</option>
                                                    <option value="Europe/Gibraltar">(GMT+01:00) Gibraltar</option>
                                                    <option value="Europe/Luxembourg">(GMT+01:00) Luxembourg</option>
                                                    <option value="Europe/Madrid">(GMT+01:00) Madrid</option>
                                                    <option value="Europe/Malta">(GMT+01:00) Malta</option>
                                                    <option value="Europe/Monaco">(GMT+01:00) Monaco</option>
                                                    <option value="Europe/Oslo">(GMT+01:00) Oslo</option>
                                                    <option value="Europe/Paris">(GMT+01:00) Paris</option>
                                                    <option value="Europe/Prague">(GMT+01:00) Central European Time - Prague</option>
                                                    <option value="Europe/Rome">(GMT+01:00) Rome</option>
                                                    <option value="Europe/Stockholm">(GMT+01:00) Stockholm</option>
                                                    <option value="Europe/Tirane">(GMT+01:00) Tirane</option>
                                                    <option value="Europe/Vienna">(GMT+01:00) Vienna</option>
                                                    <option value="Europe/Warsaw">(GMT+01:00) Warsaw</option>
                                                    <option value="Europe/Zurich">(GMT+01:00) Zurich</option>
                                                    <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                    <option value="Africa/Johannesburg">(GMT+02:00) Johannesburg</option>
                                                    <option value="Africa/Maputo">(GMT+02:00) Maputo</option>
                                                    <option value="Africa/Tripoli">(GMT+02:00) Tripoli</option>
                                                    <option value="Asia/Amman">(GMT+02:00) Amman</option>
                                                    <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                    <option value="Asia/Damascus">(GMT+02:00) Damascus</option>
                                                    <option value="Asia/Gaza">(GMT+02:00) Gaza</option>
                                                    <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                    <option value="Asia/Nicosia">(GMT+02:00) Nicosia</option>
                                                    <option value="Europe/Athens">(GMT+02:00) Athens</option>
                                                    <option value="Europe/Bucharest">(GMT+02:00) Bucharest</option>
                                                    <option value="Europe/Chisinau">(GMT+02:00) Chisinau</option>
                                                    <option value="Europe/Helsinki">(GMT+02:00) Helsinki</option>
                                                    <option value="Europe/Istanbul" selected="">(GMT+02:00) Istanbul</option>
                                                    <option value="Europe/Kaliningrad">(GMT+02:00) Moscow-01 - Kaliningrad</option>
                                                    <option value="Europe/Kiev">(GMT+02:00) Kiev</option>
                                                    <option value="Europe/Riga">(GMT+02:00) Riga</option>
                                                    <option value="Europe/Sofia">(GMT+02:00) Sofia</option>
                                                    <option value="Europe/Tallinn">(GMT+02:00) Tallinn</option>
                                                    <option value="Europe/Vilnius">(GMT+02:00) Vilnius</option>
                                                    <option value="Africa/Khartoum">(GMT+03:00) Khartoum</option>
                                                    <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                                                    <option value="Antarctica/Syowa">(GMT+03:00) Syowa</option>
                                                    <option value="Asia/Baghdad">(GMT+03:00) Baghdad</option>
                                                    <option value="Asia/Qatar">(GMT+03:00) Qatar</option>
                                                    <option value="Asia/Riyadh">(GMT+03:00) Riyadh</option>
                                                    <option value="Europe/Minsk">(GMT+03:00) Minsk</option>
                                                    <option value="Europe/Moscow">(GMT+03:00) Moscow+00 - Moscow</option>
                                                    <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                    <option value="Asia/Baku">(GMT+04:00) Baku</option>
                                                    <option value="Asia/Dubai">(GMT+04:00) Dubai</option>
                                                    <option value="Asia/Tbilisi">(GMT+04:00) Tbilisi</option>
                                                    <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                    <option value="Europe/Samara">(GMT+04:00) Moscow+01 - Samara</option>
                                                    <option value="Indian/Mahe">(GMT+04:00) Mahe</option>
                                                    <option value="Indian/Mauritius">(GMT+04:00) Mauritius</option>
                                                    <option value="Indian/Reunion">(GMT+04:00) Reunion</option>
                                                    <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                    <option value="Antarctica/Mawson">(GMT+05:00) Mawson</option>
                                                    <option value="Asia/Aqtau">(GMT+05:00) Aqtau</option>
                                                    <option value="Asia/Aqtobe">(GMT+05:00) Aqtobe</option>
                                                    <option value="Asia/Ashgabat">(GMT+05:00) Ashgabat</option>
                                                    <option value="Asia/Dushanbe">(GMT+05:00) Dushanbe</option>
                                                    <option value="Asia/Karachi">(GMT+05:00) Karachi</option>
                                                    <option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
                                                    <option value="Asia/Yekaterinburg">(GMT+05:00) Moscow+02 - Yekaterinburg</option>
                                                    <option value="Indian/Kerguelen">(GMT+05:00) Kerguelen</option>
                                                    <option value="Indian/Maldives">(GMT+05:00) Maldives</option>
                                                    <option value="Asia/Calcutta" >(GMT+05:30) India Standard Time</option>
                                                    <option value="Asia/Colombo">(GMT+05:30) Colombo</option>
                                                    <option value="Asia/Katmandu">(GMT+05:45) Katmandu</option>
                                                    <option value="Antarctica/Vostok">(GMT+06:00) Vostok</option>
                                                    <option value="Asia/Almaty">(GMT+06:00) Almaty</option>
                                                    <option value="Asia/Bishkek">(GMT+06:00) Bishkek</option>
                                                    <option value="Asia/Dhaka">(GMT+06:00) Dhaka</option>
                                                    <option value="Asia/Omsk">(GMT+06:00) Moscow+03 - Omsk, Novosibirsk</option>
                                                    <option value="Asia/Thimphu">(GMT+06:00) Thimphu</option>
                                                    <option value="Indian/Chagos">(GMT+06:00) Chagos</option>
                                                    <option value="Asia/Rangoon">(GMT+06:30) Rangoon</option>
                                                    <option value="Indian/Cocos">(GMT+06:30) Cocos</option>
                                                    <option value="Antarctica/Davis">(GMT+07:00) Davis</option>
                                                    <option value="Asia/Bangkok">(GMT+07:00) Bangkok</option>
                                                    <option value="Asia/Hovd">(GMT+07:00) Hovd</option>
                                                    <option value="Asia/Jakarta">(GMT+07:00) Jakarta</option>
                                                    <option value="Asia/Krasnoyarsk">(GMT+07:00) Moscow+04 - Krasnoyarsk</option>
                                                    <option value="Asia/Saigon">(GMT+07:00) Hanoi</option>
                                                    <option value="Asia/Ho_Chi_Minh">(GMT+07:00) Ho Chi Minh</option>
                                                    <option value="Indian/Christmas">(GMT+07:00) Christmas</option>
                                                    <option value="Antarctica/Casey">(GMT+08:00) Casey</option>
                                                    <option value="Asia/Brunei">(GMT+08:00) Brunei</option>
                                                    <option value="Asia/Choibalsan">(GMT+08:00) Choibalsan</option>
                                                    <option value="Asia/Hong_Kong">(GMT+08:00) Hong Kong</option>
                                                    <option value="Asia/Irkutsk">(GMT+08:00) Moscow+05 - Irkutsk</option>
                                                    <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                    <option value="Asia/Macau">(GMT+08:00) Macau</option>
                                                    <option value="Asia/Makassar">(GMT+08:00) Makassar</option>
                                                    <option value="Asia/Manila">(GMT+08:00) Manila</option>
                                                    <option value="Asia/Shanghai">(GMT+08:00) China Time - Beijing</option>
                                                    <option value="Asia/Singapore">(GMT+08:00) Singapore</option>
                                                    <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                                                    <option value="Asia/Ulaanbaatar">(GMT+08:00) Ulaanbaatar</option>
                                                    <option value="Australia/Perth">(GMT+08:00) Western Time - Perth</option>
                                                    <option value="Asia/Pyongyang">(GMT+08:30) Pyongyang</option>
                                                    <option value="Asia/Dili">(GMT+09:00) Dili</option>
                                                    <option value="Asia/Jayapura">(GMT+09:00) Jayapura</option>
                                                    <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                    <option value="Asia/Tokyo">(GMT+09:00) Tokyo</option>
                                                    <option value="Asia/Yakutsk">(GMT+09:00) Moscow+06 - Yakutsk</option>
                                                    <option value="Pacific/Palau">(GMT+09:00) Palau</option>
                                                    <option value="Australia/Adelaide">(GMT+10:30) Central Time - Adelaide</option>
                                                    <option value="Australia/Darwin">(GMT+09:30) Central Time - Darwin</option>
                                                    <option value="Antarctica/DumontDUrville">(GMT+10:00) Dumont D'Urville</option>
                                                    <option value="Asia/Magadan">(GMT+10:00) Moscow+07 - Magadan</option>
                                                    <option value="Asia/Vladivostok">(GMT+10:00) Moscow+07 - Yuzhno-Sakhalinsk</option>
                                                    <option value="Australia/Brisbane">(GMT+10:00) Eastern Time - Brisbane</option>
                                                    <option value="Australia/Hobart">(GMT+11:00) Eastern Time - Hobart</option>
                                                    <option value="Australia/Sydney">(GMT+11:00) Eastern Time - Melbourne, Sydney</option>
                                                    <option value="Pacific/Chuuk">(GMT+10:00) Truk</option>
                                                    <option value="Pacific/Guam">(GMT+10:00) Guam</option>
                                                    <option value="Pacific/Port_Moresby">(GMT+10:00) Port Moresby</option>
                                                    <option value="Pacific/Efate">(GMT+11:00) Efate</option>
                                                    <option value="Pacific/Guadalcanal">(GMT+11:00) Guadalcanal</option>
                                                    <option value="Pacific/Kosrae">(GMT+11:00) Kosrae</option>
                                                    <option value="Pacific/Norfolk">(GMT+11:00) Norfolk</option>
                                                    <option value="Pacific/Noumea">(GMT+11:00) Noumea</option>
                                                    <option value="Pacific/Pohnpei">(GMT+11:00) Ponape</option>
                                                    <option value="Asia/Kamchatka">(GMT+12:00) Moscow+09 - Petropavlovsk-Kamchatskiy</option>
                                                    <option value="Pacific/Auckland">(GMT+13:00) Auckland</option>
                                                    <option value="Pacific/Fiji">(GMT+13:00) Fiji</option>
                                                    <option value="Pacific/Funafuti">(GMT+12:00) Funafuti</option>
                                                    <option value="Pacific/Kwajalein">(GMT+12:00) Kwajalein</option>
                                                    <option value="Pacific/Majuro">(GMT+12:00) Majuro</option>
                                                    <option value="Pacific/Nauru">(GMT+12:00) Nauru</option>
                                                    <option value="Pacific/Tarawa">(GMT+12:00) Tarawa</option>
                                                    <option value="Pacific/Wake">(GMT+12:00) Wake</option>
                                                    <option value="Pacific/Wallis">(GMT+12:00) Wallis</option>
                                                    <option value="Pacific/Apia">(GMT+14:00) Apia</option>
                                                    <option value="Pacific/Enderbury">(GMT+13:00) Enderbury</option>
                                                    <option value="Pacific/Fakaofo">(GMT+13:00) Fakaofo</option>
                                                    <option value="Pacific/Tongatapu">(GMT+13:00) Tongatapu</option>
                                                    <option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--End saat dilim --->
                                        <!--tarih formatı --->
                                        <div class="form-group">
                                            <label>Tarih Formatı</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-timer"></i></span>
                                                        </div>
                                                        <select name="info[date_format]" class="custom-select">
                                                            <option value="d/m/Y">d/m/Y ( 21/02/2020 ) </option>
                                                            <option value="d.m.Y">d.m.Y ( 21.02.2020 ) </option>
                                                            <option value="d-m-Y" selected="">d-m-Y ( 21-02-2020 ) </option>
                                                            <option value="m/d/Y">m/d/Y ( 02/21/2020 ) </option>
                                                            <option value="m-d-Y">m-d-Y ( 02-21-2020 ) </option>
                                                            <option value="Y/m/d">Y/m/d ( 2020/02/21 ) </option>
                                                            <option value="Y-m-d">Y-m-d ( 2020-02-21 ) </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-timer"></i></span>
                                                        </div>
                                                        <select name="date_my_format" class="custom-select">
                                                            <option value="m-Y" selected="">m-Y ( 02-2020 ) </option>
                                                            <option value="m/Y">m/Y ( 02/2020 ) </option>
                                                            <option value="Y/m">Y/m ( 2020/02 ) </option>
                                                            <option value="Y-m">Y-m ( 2020-02 ) </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End tarih formatı --->
                                        <!--para birimleri --->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Para Birimi</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-timer"></i></span>
                                                        </div>
                                                        <input type="text" name="info[currency]" class="form-control" value="" placeholder="Para birimi (TL) . . .">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Para Birimi Kısaltması</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-timer"></i></span>
                                                        </div>
                                                                                  <!-- currency_abbreviation--->
                                                        <input type="text" name="currency_abbr" class="form-control" value="" placeholder="Para birimi kısaltması ($) . . .">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End para birimleri --->
                                    </div>
                                </div>
                                <div class="dotted-seprator mt-3 mb-4"></div>
                                <!--Randevu Öneki --->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Randevu Öneki</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-flag"></i></span>
                                                </div>
                                                <input type="text" name="appointment_prefix" class="form-control" value="APNT-" placeholder="Enter Appointment Prefix . . .">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Randevu Öneki --->
                                <div class="dotted-seprator mt-3 mb-4"></div>
                                <!-- fatura tanımlamaları--->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fatura Öneki</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-flag"></i></span>
                                                </div>
                                                <input type="text" name="invoice_prefix" class="form-control" value="INV-" placeholder="Enter Invoice Prefix . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tanımlı Müşteri Notu</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-flag"></i></span>
                                                </div>
                                                <textarea name="invoice_cus_note" class="form-control" placeholder="Invoice Predefined Customer Note">It's great to work with you. </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tanımlı Terim Koşulları</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-flag"></i></span>
                                                </div>
                                                <textarea name="invoice_trm_cnd" class="form-control" placeholder="Invoice Terms &amp; Conditions">Please pay us your amount in 15 days. Otherwise 12% interest will be applied.  </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fatura tanımlamaları--->
                                <div class="dotted-seprator mt-3 mb-4"></div>
                                <!-- fatura reçete şablonları--->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group invoice-template-img">
                                            <label>Reçete Şablonu</label>
                                            <div>
                                                <div class="custom-control custom-radio custom-radio-1 d-inline-block">
                                                    <input type="radio" name="prescription_template" class="custom-control-input" value="1" id="prescription_template-template-1">
                                                    <label class="custom-control-label" for="prescription_template-template-1"><img src="{{asset('css_js_img/setting/invoice-1.png')}}" alt="Invoice Template 1"></label>
                                                </div>
                                                <div class="custom-control custom-radio custom-radio-1 d-inline-block">
                                                    <input type="radio" name="prescription_template" class="custom-control-input" value="2" id="prescription_template-template-2" checked="">
                                                    <label class="custom-control-label" for="prescription_template-template-2"><img src="{{asset('css_js_img/setting/invoice-2.png')}}" alt="Invoice Template 1"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group invoice-template-img">
                                            <label>Fatura Şablonu</label>
                                            <div>
                                                <div class="custom-control custom-radio custom-radio-1 d-inline-block">
                                                    <input type="radio" name="invoice_template" class="custom-control-input" value="1" id="invoice-template-1">
                                                    <label class="custom-control-label" for="invoice-template-1"><img src="{{asset('css_js_img/setting/invoice-1.png')}}" alt="Invoice Template 1"></label>
                                                </div>
                                                <div class="custom-control custom-radio custom-radio-1 d-inline-block">
                                                    <input type="radio" name="invoice_template" class="custom-control-input" value="2" id="invoice-template-2" checked="">
                                                    <label class="custom-control-label" for="invoice-template-2"><img src="{{asset('css_js_img/setting/invoice-2.png')}}" alt="Invoice Template 1"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End fatura reçete şablonları--->
                                <div class="dotted-seprator mt-3 mb-4"></div>
                                <!-- Doktor Erişimi--->
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-form-label mr-3 mb-0">Doktor Erişimi</label>
                                        <div class="custom-control custom-checkbox custom-checkbox-1 d-inline-block">
                                            <input type="checkbox" name="doctor_access" class="custom-control-input" value="2" id="doctor_access" checked="">
                                            <label class="custom-control-label" for="doctor_access">Doktor sadece Hasta, Randevu, Fatura ve Reçete gibi verilerini görebilir.</label>
                                        </div>
                                        <span class="form-text">By Enabling this option. doctor can see only their own data which is created by doctor or doctor have their name in. For example, One appointment is made by patient or admin staff for one doctor then that doctor can see that appointment and patient history (All history).</span>
                                        <span class="form-text">By Disabling this, Doctor can see all Patient, Appointment, Invoice and Prescription.</span>
                                    </div>
                                </div>
                                <!--End Doktor Erişimi--->
                            </div>
                            <!--End Bilgiler --->
                            <!-- Adres bilgileri --->
                            <div class="tab-pane" id="setting-address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Adres 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="adress_1" class="form-control" value="" placeholder="Adres giriniz . . .">
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
                                                <input type="text" name="adress_2" class="form-control" value="" placeholder="Adres giriniz . . .">
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
                                                <input type="text" name="postal_zip" class="form-control" value="" placeholder="Posta/Zip kodunu giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Adres bilgileri --->
                            <!-- Sosyal medya adresleri --->
                            <div class="tab-pane" id="settings-sociallink">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="sociallink[facebook]" value="https://www.facebook.com" placeholder="Enter Facebook Social Link . . .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="sociallink[twitter]" value="https://www.twitter.com" placeholder="Enter Twitter Social Link . . .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Google +</label>
                                            <input type="text" name="sociallink[google]" value="https://www.google.com" placeholder="Enter Google + Social Link . . .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" name="sociallink[instagram]" value="https://www.instagram.com" placeholder="Enter Instagram Social Link . . .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input type="text" name="sociallink[youtube]" value="https://www.youtube.com" placeholder="Enter Youtube Social Link . . .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <input type="text" name="sociallink[linkedin]" value="https://www.linkedin.com" placeholder="Enter Linkedin Social Link . . .">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Flickr</label>
                                            <input type="text" name="sociallink[flickr]" value="https://www.flickr.com" placeholder="Enter Flickr Social Link . . .">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sosyal medya adresleri --->
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
                    </div>
                </div>
            </form>
            <!-- Footer -->
    
        </div>
    </div>
@endsection
