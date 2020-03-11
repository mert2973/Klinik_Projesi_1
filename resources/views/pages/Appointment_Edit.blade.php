@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Appointment_active').addClass('active') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
            <!--<link rel="stylesheet" href="./Appointment_Edit_ Klinikal Hospital_files/jquery.fancybox.min.css">
            <script src="./Appointment_Edit_ Klinikal Hospital_files/jquery.fancybox.min.js"></script>
            <script src="./Appointment_Edit_ Klinikal Hospital_files/appointment.js"></script> -->
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Randevu Düzenle</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-13 ml-2" ></i>
                               <span class="text-linkedin ml-2"> <a href="{{url('/Appointments')}}">Randevular</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Randevu Düzenle</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{url('/Appointment_View')}}" class="btn btn-white btn-sm"><i class="ti-calendar text-primary mr-2"></i> Randevu İncele</a>
                    </div>
                </div>
            </div>
            
            <form action="{{route('Appointments.update',$dr_with_patient->patients_id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#appointment-info" data-toggle="tab">Randevu Bilgisi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#appointment-records" data-toggle="tab">Klinik Notlar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#appointment-prescription" data-toggle="tab">Reçete</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#appointment-documents" data-toggle="tab">Dökümanlar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#appointment-invoice" data-toggle="tab">Fatura</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4">
                            <div class="tab-pane active" id="appointment-info">
                                <div id="apnt-info" class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Doktor <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <input type="hidden" name="prev_doctor" value="{{$doctor_id}}">
                                                <select name="doctor" class="custom-select text-capitalize" required="required"> <!-- class="apnt-doctor"--->
                                                     <option value=""> Doktor Seçiniz</option>
                                                     @foreach($all_doctors as $item)
                                                        <option value="{{$item->user_id}}" @if($item->user_id==$doctor_id) selected="selected" @endif>
                                                            {{$item->name}} {{$item->surname}} ( {{$item->department}} )
                                                        </option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tarih <span class="form-required">*</span></label>
                                            
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>  <!-- apnt-date hasDatepicker --->
                                                <input type="text" class="form-control"  name="apt_date" placeholder="Tarih seçiniz . . ."
                                                       value="{{$dr_with_patient->apt_date}}" required="" autocomplete="off" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Saat <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                                </div>
                                                <input type="text" name="apt_time" class="form-control apnt-time" value="10:15" readonly="">
                                            </div>
                                            <div class="apnt-slot"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Durum <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                                </div>
                                                <select name="apt_status" class="custom-select" required="required">
                                                    <option value="">Durum Seçiniz</option>
                                                    <option value="İşleniyor"    @if($dr_with_patient->apt_status=="İşleniyor") selected  @endif>İşleniyor</option>
                                                    <option value="Doğrulandı"    @if($dr_with_patient->apt_status=="Doğrulandı") selected  @endif>Doğrulandı</option>
                                                    <option value="Tamamlandı"   @if($dr_with_patient->apt_status=="Tamamlandı") selected  @endif>Tamamlandı</option>
                                                    <option value="İptal Edildi" @if($dr_with_patient->apt_status=="İptal Edildi") selected  @endif>İptal Edildi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Neden/Problem</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-comment-alt"></i></span>
                                                </div>
                                                <textarea class="form-control" name="apt_prob">{{$dr_with_patient->apt_prob}}</textarea>
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
                                                            <h4 class="m-0"><a href="#" class="d-block text-primary text-capitalize">{{$dr_with_patient->p_name}} {{$dr_with_patient->p_surname}}</a></h4>
                                                            <p class="font-12 mb-0 mt-2">{{$dr_with_patient->p_email}}</p>
                                                            <p class="font-12 mb-0">{{$dr_with_patient->p_phone}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <p><i class="ti-heart-broken"></i> <span>A-</span></p>
                                                <p><i class="ti-user"></i> <span>{{$dr_with_patient->gender}}</span></p>
                                                <p><i class="ti-calendar"></i> <span>{{$dr_with_patient->date_of_birth}}</span></p><!-- 0 Years 1 Month --->
                                                <p class="d-block mt-3">
                                                    <i class="ti-wheelchair"></i> Diabetes, High Blood Pressure, Heart Problems, Jaundice									</p>
                                            </div>
                                        </div>
                                        <div class="apnt-user-input">
                                            <div class="form-group">
                                                <label>Hasta Adı <span class="form-required">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control apnt-name text-capitalize" readonly value="{{$dr_with_patient->p_name}} {{$dr_with_patient->p_surname}}" placeholder="Hasta adını giriniz . . ." required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Hasta Mail Adresi <span class="form-required">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control apnt-email" readonly  value="{{$dr_with_patient->p_email}}" placeholder="Enter Patient Email Address . . ." required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Hasta Telefon Numarası <span class="form-required">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control apnt-mobile" readonly value="{{$dr_with_patient->p_phone}}" placeholder="Enter Patient Mobile Number . . ." required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="appointment-prescription">
                                <div class="table-responsive">
                                    <table class="table table-bordered medicine-table">
                                        <thead>
                                        <tr class="medicine-row">
                                            <th style="width: 20%;">İlaç Adı</th>
                                            <th>Genel</th>
                                            <th style="width: 11%;">Sıklık</th>
                                            <th style="width: 13%;">Süre</th>
                                            <th style="width: 25%;">Talimat</th>
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
                                                    <option value="1">1 Gün</option>
                                                    <option value="2">2 Gün</option>
                                                    <option value="3">3 Gün</option>
                                                    <option value="4">4 Gün</option>
                                                    <option value="5">5 Gün</option>
                                                    <option value="6">6 Gün</option>
                                                    <option value="8">8 Gün</option>
                                                    <option value="10">10 Gün</option>
                                                    <option value="15">15 Gün</option>
                                                    <option value="20">20 Gün</option>
                                                    <option value="30">30 Gün</option>
                                                    <option value="60">60 Gün</option>
                                                </select>
                                            </td>
                                            <td>
                                                <textarea name="prescription[medicine][0][instruction]" class="form-control" rows="3" placeholder="Instruction"></textarea>
                                            </td>
                                            <td><a class="table-action-button medicine-delete" style="display: none;"><i class="ti-trash text-danger"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <a id="add-medicine" class="font-12 text-primary cursor-pointer">İlaç Ekle</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <script>
                                    function medicine_autocomplete() {
                                        $(".prescription-name").autocomplete({
                                            minLength: 0,
                                            source: 'ilaç isimlerini al',
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
                                                        <span class="input-group-text">Ekle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Gözlem</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="observation" placeholder="Add Observation. . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Ekle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Teşhis</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="diagnosis" placeholder="Add Diagnosis . . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Ekle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Test Talebi/Gözlem</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="investigation" placeholder="Add Test Request/Investigation . . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Ekle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Notlar/Tavsiye</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control ui-autocomplete-input" data-name="notes" placeholder="Add Notes . . ." autocomplete="off">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Ekle</span>
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
                                                        <div class="title">Test Talebi/Gözlem</div>
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
                            <div class="tab-pane" id="appointment-documents">
                                <div class="form-group">
                                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#reports-modal"><i class="ti-cloud-up mr-2"></i> Döküman Yükle/Rapor</a>
                                </div>
                                <div class="report-container">
                                </div>
                            </div>
                            <div class="tab-pane" id="appointment-invoice">
                                <div class="text-center">
                                    <p>Fatura Henüz Oluşturulmadı</p>
                                    <a href="{{url('/Invoice_Add')}}" class="btn btn-primary btn-sm" target="_blank"><i class="ti-plus pr-2"></i>Fatura Oluştur</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
                    </div>
                </div>
            </form>
            
            <!-- Reports upload modal -->
            <div id="reports-modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"> Rapor/Döküman Yükle</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Rapor/Döküman Adı</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-tag"></i></span>
                                    </div>
                                    <input type="text" name="report_name" class="form-control" placeholder="Enter Report/Document Name">
                                </div>
                            </div>
                            <div class="media-upload-container" style="max-width: 100%;">
                                <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=report/reportUpload" class="dropzone dz-clickable" id="report-upload" method="post" enctype="multipart/form-data">
                                    
                                    <div class="dz-default dz-message"><span>Dosyaları buraya sürükleyin veya yüklemek için buraya tıklayın<br><br> Sadece Resim/PDF</span></div></form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary upload-report">Bitti</button>
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
