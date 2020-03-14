@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Appointment_active').addClass('active') ;
        });
    </script>
    
<div class="page-wrapper">
    <div class="page-body">
       <!-- <link rel="stylesheet" href="./Appointment_View _ Klinikal Hospital_files/jquery.fancybox.min.css">
        <script src="./Appointment_View _ Klinikal Hospital_files/jquery.fancybox.min.js"></script>  -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">Randevu durumunu incele</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="text-linkedin ml-2"><a href="{{url('/Appointments')}}" >Randevular</a></span>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="ml-2">Randevu durumunu incele</span>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right"></div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="user-avtar">
                            <span>E</span>
                        </div>
                        <div class="user-details text-center pt-3">
                      
                            <h3>{{$dr_with_ptn->name}} {{$dr_with_ptn->surname}}</h3>
                            <p class="mb-3 font-12"><i class="ti-email"></i> {{$dr_with_ptn->email}} <i class="ti-mobile"></i> {{$dr_with_ptn->phone}}</p>
                            <ul class="v-menu text-left pt-0 nav d-block">
                                <li><a href="#appointment-info" class="active show" data-toggle="tab"><i class="ti-info-alt"></i> <span>Randevu Bilgisi</span></a></li>
                                <li><a href="#appointment-records" data-toggle="tab"><i class="ti-calendar"></i> <span>Klinik Notlar</span></a></li>
                                <li><a href="#appointment-documents" data-toggle="tab"><i class="ti-calendar"></i> <span>Dökümanlar</span></a></li>
                                <li><a href="#appointment-prescription" data-toggle="tab"><i class="ti-clipboard"></i> <span>Reçete</span></a></li>
                                <li><a href="#appointment-invoice" data-toggle="tab"><i class="ti-receipt"></i> <span>Fatura</span></a></li>
                                <li><a href="{{route('Appointments.edit',['Appointment'=>$dr_with_ptn->patients_id,'dr_id'=>$dr_with_ptn->doctors_id])}}"><i class="ti-pencil-alt"></i> <span>Randevu Düzenle</span></a></li>
                                <li><a href="#appointment-send-mail" data-toggle="tab" class=""><i class="ti-email"></i> <span>Email Gönder</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="appointment-info">
                        <div class="panel panel-default">
                            <div class="panel-head">
                                <div class="panel-title">Randevu Bilgisi</div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped patient-table">
                                        <tbody>
                                        <tr>
                                            <td>Tarih & Saat</td>
                                            <td class="text-dark">21-02-2020 at 10:15</td>
                                        </tr>
                                        <tr>
                                            <td>Nedeni/Problemi</td>
                                            <td class="text-dark"></td>
                                        </tr>
                                        <tr>
                                            <td>Hasta Adı</td>
                                            <td class="text-dark text-capitalize">{{$dr_with_ptn->p_name}} {{$dr_with_ptn->p_surname}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email Adresi</td>
                                            <td class="text-dark">{{$dr_with_ptn->p_email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telefon Numarası</td>
                                            <td class="text-dark">{{$dr_with_ptn->p_phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Kan Grubu</td>
                                            <td class="text-primary">{{$dr_with_ptn->blood_group}}</td>
                                        </tr>
                                        <tr>
                                            <td>Cinsiyet</td>
                                            <td class="text-info text-capitalize">{{$dr_with_ptn->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>Yaş</td>
                                            <td class="text-success">{{$dr_with_ptn->date_of_birth}}</td><!--0 Years 1 Month-->
                                        </tr>
                                        <tr>
                                            <td>Tibbi Geçmişi</td>
                                            <td class="text-danger">Diabetes, High Blood Pressure, Heart Problems, Jaundice</td>
                                        </tr>
                                        <tr>
                                            <td>Durumu</td>
                                            <td>
                                                <span class="badge badge-sm badge-pill badge-info">İşleniyor</span>                                        </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="appointment-records">
                        <div class="panel panel-default">
                            <div class="panel-head">
                                <div class="panel-title">Klinik Notlar & Rapor / Belgeler</div>
                            </div>
                            <div class="panel-body">
                                <div class="notes-container">
                                    <div class="timeline-1 timeline-2">
                                        <div class="marker"></div>
                                        <div class="item item-left notes-problem">
                                            <div class="circle"><i class="ti-help-alt"></i></div>
                                            <div class="arrow"></div>
                                            <div class="item-content">
                                                <div class="title">Problemler</div>
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
                                                <div class="title">Gözlem</div>
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
                                                <div class="title">Teşhis</div>
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
                                                <div class="title">Test Talebi / İnceleme</div>
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
                                                <div class="title">Notlar</div>
                                                <div class="descr">
                                                    <ul>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="appointment-documents">
                        <div class="panel panel-default">
                            <div class="panel-head">
                                <div class="panel-title">Belgeler / Raporlar</div>
                            </div>
                            <div class="panel-body">
                                <div class="report-container">
                                    <p class="text-danger text-center">Herhangi bir belge bulunmadı !!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="appointment-invoice">
                        <div class="panel panel-default">
                            <div class="panel-head">
                                <div class="panel-title">Fatura</div>
                            </div>
                            <div class="panel-body">
                                <div class="text-center">
                                    <p>Herhangi bir fatura oluşturulmadı</p>
                                    <a href="{{url('/Invoice_Add')}}" class="btn btn-primary btn-sm" target="_blank"><i class="ti-plus pr-2"></i>Generate Invoice Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="appointment-prescription">
                        <div class="panel panel-default">
                            <div class="panel-head">
                                <div class="panel-title">Reçete</div>
                            
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody><tr>
                                            <th>İlaç Adı</th>
                                            <th>Doz</th>
                                            <th>Süre</th>
                                            <th>Talimat</th>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="appointment-send-mail">
                        <div class="panel panel-default">
                            <div class="panel-head">
                                <div class="panel-title">Hasta'ya Bir Email Gönder</div>
                            </div>
                            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=appointment/sendmail" method="post" siq_id="autopick_8321">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Kime</label>
                                        <input type="text" value="PepDev Team" class="form-control" readonly="">
                                        <input type="hidden" name="mail[id]" value="77" readonly="">
                                        <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label>Konu</label>
                                        <input type="text" name="mail[subject]" class="form-control" placeholder="Enter SUbject . . .">
                                    </div>
                                    <div class="form-group">
                                        <label>Mesaj</label>
                                        <textarea name="mail[message]" class="form-control mail-summernote" placeholder="Enter Message . . ." style="display: none;"></textarea>
                                        
                                    </div>
                                </div>
                                <div class="panel-footer text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">Gönder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- include summernote css/js-->
        <link href="./Appointment_View _ Klinikal Hospital_files/summernote-bs4.css" rel="stylesheet">
        <script type="text/javascript" src="./Appointment_View _ Klinikal Hospital_files/summernote-bs4.min.js"></script>
        <script type="text/javascript" src="./Appointment_View _ Klinikal Hospital_files/klinikal.summernote.js"></script>
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
