@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Appointment_active').addClass('active') ;
        });
    </script>
  
   <div class="page-wrapper">
        <div class="page-body">
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
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Randevular</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}" >Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Randevular</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="btn btn-white btn-sm text-left mr-2">
                            <i class="ti-filter text-danger pr-2"></i>
                            <input type="text" class="table-date-range">
                        </div>
                        <div class="dropdown d-inline-block mr-2">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"><i class="ti-download text-primary pr-2"></i> Export</a>
                            <ul class="dropdown-menu dropdown-menu-right export-button">
                                <li><a href="#" class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                                <li><a href="#" class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                                <li><a href="#" class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                                <li><a href="#" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                                <li><a href="#" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-primary btn-sm appointment-sidebar"><i class="ti-plus pr-2"></i> Yeni Randevu Ekle</a>
                    </div>
                </div>
            </div>
        
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive" data-name="appointments">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3">
                               <!-- <div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length">
                                        <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="-1">All</option>
                                            </select> entries</label>
                                    </div>
                                </div> -->
                                <div class="col-sm-12 text-right">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Ara:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><div class="col-sm-12">
                                    <!-- datatable-table dataTable -->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 108px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Patient: activate to sort column ascending" style="width: 208px;">Hasta Bilgileri</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DateTime: activate to sort column ascending" style="width: 171px;">Randevu Tarihi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Doctor: activate to sort column ascending" style="width: 159px;">Doktor</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 108px;">Durum</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $num=1 @endphp
                                        @foreach($list_appointment as $list)
                                        <tr role="row" class="odd">
                                            @if($num<10)
                                                <td>{{"APT-0000"}}{{$num++}}</td>
                                            @elseif($num<100)
                                                <td>{{"APT-000"}}{{$num++}}</td>
                                            @elseif($num<1000)
                                                <td>{{"APT-00"}}{{$num++}}</td>
                                            @elseif($num>=10000 || $num<=10000)
                                                <td> {{"Apt-"}}{{$num++}}</td>
                                            @endif
                                            @php
                                                $date=$list->apt_date;
                                                $date=Carbon\Carbon::parse($date)->format('d/m/Y  H:i');
                                            @endphp
                                            <td>
                                                <a class="m-0 text-primary">{{$list->p_name}} {{$list->p_surname}}</a>
                                                <p class="m-0">{{$list->p_email}}</p>
                                                <p class="m-0">{{$list->p_phone}}</p>
                                            </td>
                                            <td class="text-info">{{$date}}</td>
                                            <td>{{$list->name}} {{$list->surname}}</td>
                                            <td>
                                                <span class="label label-warning">İşleniyor</span>
                                            </td>
                                            <td class="table-action">
                                                <div class="dropdown d-inline-block">
                                                    <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right export-button">
                                                        
                                                        <li><a href="{{route('Appointments.show',$list->id)}}"><i class="ti-layout-media-center-alt pr-2"></i>İncele</a></li>
                                                        <li><a href="{{route('Appointments.edit',$list->id)}}"><i class="ti-pencil-alt pr-2"></i>Yönet</a></li>
                                                        
                                                        <li><a href="{{url('/Invoice_Sale_Add')}}"><i class="ti-receipt pr-2"></i>Fatura Oluştur</a></li>
                                                    </ul>
                                                </div>
                                                <button class="table-delete text-danger delete" type="hidden" data-toggle="tooltip" title="" data-original-title="Delete"
                                                value="{{$list->id}}" id="del<?php  apt_del(1); ?>"> <i class="ti-trash font-16"></i></button>
                                            </td>
                                        </tr>
                                     @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row align-items-center pt-3">
                                <div class="col-sm-12 col-md-4">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Toplam: {{ $list_appointment->lastPage() }} Sayfa<br>Toplam {{$list_appointment->total()}} Randevudan {{$list_appointment->count()}} Kayıt Gösteriliyor</div>
                                </div>
                                <div class="col-sm-8 col-md-8 col-lg-8 " >
                                    <span style="float: right">{{ $list_appointment->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- Delete Modal -->
            <div id="delete-card" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Simeyi Doğrulayınız</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">Bu Randevuyu Simek İstediğinizden Emin misiniz?</p>
                            <p class="form-text">Bu randevuyla ilgili tüm Belgeler, Reçete ve notlar silinecek.</p>
                        </div>
                        <div class="modal-footer">
                            <form action=""  method="post" id="delete_appointment">
                                @csrf
                                @method("DELETE")
                                <input type="hidden" value="" class="apt_id" name="apt_id">
                                <button type="submit" class="btn btn-danger" name="delete">Sil</button>
                            </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End. Delete Modal -->
            
            <!-- Create An Appointment -->
            <div class="sidebar sidebar-right appointmet-sidebar" style="right: -450px;">
                <div class="sidebar-hdr">
                    <div class="sidebar-close"><i class="ti-close"></i></div>
                    <h3 class="title">Randevu Oluştur</h3>
                </div>
                <form class="sidebar-bdy" action="{{route('Appointments.store')}}" method="post" >
                   @csrf
                    <div id="apnt-info">
                        <div class="form-group mb-2">
                            <label>Hasta Adı <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="hidden" name="patient_id" value="" id="patient_id" required="required">
                                <input type="text" value="" class="form-control" id="name"  placeholder="Hasta adını giriniz . . ." autocomplete="off" required="required">
                                <input type="text" value="" class="form-control " id="surname"  placeholder="Hasta Soyadını giriniz . . ." required="required">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Email Adresi <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control patient-mail" id="email" placeholder="Email Adresi . . ."
                                       required="required" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Telefon <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="phone" class="form-control patient-mobile" id="phone"
                                       placeholder="Telefon numarası . . ." required="" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Doktor <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="ti-timer"></i>
                                    </span>
                                </div>
                                <select name="doctor" class="custom-select apnt-doctor" required="required" autocomplete="off" id="doctors_list">
                                 
                                    <option value="">Seçiniz</option>
                                      @foreach($list_doctors as $list)
                                        <option value="{{$list->user_id}}">{{$list->name}} {{$list->surname}} ( {{$list->all_roles}} ) - {{$list->phone}}</option>
                                      @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group mb-2">
                            <label>Tarih <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                                                      <!--class=" apnt-date"-->
                                <!--<input type="text" name="apt_date" class="form-control zdatepicker" value="" placeholder="Randevu tarihini seçiniz . . ." required="" autocomplete="off" id="datepicker"> -->
                                <input type="text" name="apt_date" class="form-control apnt-date "  placeholder="Randevu tarihini seçiniz . . ."  id="default_datetimepicker" autocomplete="off"  required="">
                  
                            </div>
                           
                        </div>
                        <div class="form-group mb-2">
                            <label>Randevu Saati <span class="form-required">*</span></label>
                          <div class="input-group">
                              <!--  <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ti-timer"></i></span>
                              </div>
                              <input type="time" name="apt_time" class="form-control " value="09:00:00" required="" >-->
                               <div id="apt_time_info" class="text-danger">Doktor ve Randevu Tarihini Belirleyiniz...</div>
                              <div class="apnt-slot"  id="apt_times"></div>
                            </div>
                          
                        </div>
                        <div class="form-group">
                            <label>Durum <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                </div>
                                <select name="apt_status" class="custom-select apnt-status" required="">
                                    <option value="İşleniyor">İşleniyor</option>
                                    <option value="Doğrulandı">Doğrulandı</option>
                                    <option value="Tamamlandı">Tamamlandı</option>
                                    <option value="İptal Edildi">İptal Edildi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-ftr text-left">
                       <!-- <a href="" class="btn btn-default">İncele</a> -->
                        <button type="submit" name="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
            <!--End. Create An Appointment -->
        
                <script>
                    $(document).ready(function () {
                        var orgin=window.location.origin;
                        var $del_apt="@php function apt_del($id){return $id;} @endphp";
                        $("#del,del_apt").click(function () {
                            var del_id=$(this).val();
                            //$('.apt_id').val(del_id);
                            $("#delete_appointment").get(0).setAttribute("action",orgin+"/Appointments/"+del_id);
                        });
                    });
                </script>
                
                <!-- Set Confirmation Message on create, update and delete -->
                <script>
                    /*Set toastr Option*/
                    /*   toastr.options = {
                           "closeButton": true,
                           "debug": false,
                           "newestOnTop": false,
                           "progressBar": false,
                           "positionClass": "toast-top-right",
                           "preventDuplicates": false,
                           "onclick": null,
                           "showDuration": "10000",
                           "hideDuration": "10000",
                           "timeOut": "2000",
                           "extendedTimeOut": "800",
                           "showEasing": "swing",
                           "hideEasing": "linear",
                           "showMethod": "fadeIn",
                           "hideMethod": "fadeOut"
                       }
                       toastr.warning("Create and update is disabled in demo!", "Warning");  */
                </script>
               
            <script>
               /* $(document).ready(function () {
                    
                    var logic = function( currentDateTime ){
                        if (currentDateTime && currentDateTime.getDay() == 1){
                            this.setOptions({
                                yearStart: 2020,
                                yearEnd:2030,
                                allowTimes:['11:00','12:00','14:00'],
                                timepickerScrollbar:true,
                                step:15,
                            });
                        }else{
                            this.setOptions({
                                allowTimes:['00:00'],
                            });
                        }
                    };
                    $('#default_datetimepicker').datetimepicker({
                        formatTime:'H:i',
                        formatDate:'d.m.Y',
                        onChangeDateTime:logic,
                        onShow:logic,
                        
                        dayOfWeekStart: 1,
                        disabledWeekDays: [0],
                    });
                }); */
            </script>
        </div>
  </div>
    
    @endsection
