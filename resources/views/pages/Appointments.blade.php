@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Appointment_active').addClass('active') ;
        });
    </script>
  
<div class="page-wrapper">
    <div class="page-body">
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
                                        <td>
                                            <a class="m-0 text-primary">{{$list->p_name}}</a>
                                            <p class="m-0">{{$list->p_email}}</p>
                                            <p class="m-0">{{$list->p_phone}}</p>
                                        </td>
                                        <td class="text-info">21-02-2020 AT 10:15</td>
                                        <td>{{$list->name}} {{$list->surname}}</td>
                                        <td>
                                            <span class="label label-warning">İşleniyor</span>
                                        </td>
                                        <td class="table-action">
                                            <div class="dropdown d-inline-block">
                                                <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right export-button">
                                                   <!-- <li><a href="{{--url('/Appointment_View')--}}"><i class="ti-layout-media-center-alt pr-2"></i>İncele</a></li>
                                                    <li><a href="{{--url('/Appointment_Edit')--}}"><i class="ti-pencil-alt pr-2"></i>Düzenle</a></li> -->
                                                    
                                                    <li><a href="{{route('Appointments.show',['Appointment'=>$list->patients_id,'dr_id'=>$list->doctors_id])}}"><i class="ti-layout-media-center-alt pr-2"></i>İncele</a></li>
                                                    <li><a href="{{route('Appointments.edit',['Appointment'=>$list->patients_id,'dr_id'=>$list->doctors_id])}}"><i class="ti-pencil-alt pr-2"></i>Düzenle</a></li>
                                                    
                                                    <li><a href="{{url('/Invoice_Add')}}"><i class="ti-receipt pr-2"></i>Fatura Oluştur</a></li>
                                                </ul>
                                            </div>
                                            <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                <i class="ti-trash"></i><input type="hidden" value="77">
                                            </a>
                                        </td>
                                    </tr>
                                 @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row align-items-center pt-3">
                            <div class="col-sm-12 col-md-4">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
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
                        <p class="delete-card-ttl mb-0">Simek İstediğinizden Emin misiniz?</p>
                        <p class="form-text">Bu randevuyla ilgili tüm Belgeler, Reçete ve notlar silinecek.</p>
                    </div>
                    <div class="modal-footer">
                        <form action="" class="delete-card-button" method="" siq_id="autopick_2051">
                            <input type="hidden" value="" class="delete-id" name="id">
                            <input type="hidden" name="_token" value="">
                            <button type="submit" class="btn btn-danger" name="delete">Sil</button>
                        </form>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>
        
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
                            <input type="hidden" name="patient_id" value="" id="patient_id">
                            <input type="text" value="" class="form-control  " id="name"  placeholder="Hasta adını giriniz . . ." autocomplete="off">
                            <input type="text" value="" class="form-control " id="surname"  placeholder="Hasta Soyadını giriniz . . .">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Email Adresi <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-timer"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control patient-mail" id="email" placeholder="Email Adresi . . ."
                                   required="" autocomplete="off" readonly>
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
                            <select name="doctor_appointment" class="custom-select apnt-doctor" required="required" autocomplete="off">
                              <!--  <option value="">Doktor Seçiniz</option>
                                <option value="2" data-department="1" data-weekly="[0]" data-national="&quot;&quot;">Melissa Bates (Gynaecology)</option>
                                <option value="7" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-20&quot;">Linda Adams (Gynaecology)</option>
                                <option value="8" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Janet Collins (Gynaecology)</option>
                                <option value="10" data-department="1" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Emily Rasberry (Gynaecology)</option>
                                <option value="11" data-department="1" data-weekly="[4,5,6]" data-national="&quot;2000-12-25&quot;">Nancy Allen (Gynaecology)</option>
                                <option value="1" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19&quot;">Daniel Barnes (Orthology)</option>
                                <option value="4" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Steve Soeren (Orthology)</option>
                                <option value="6" data-department="2" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Barbara Baker (Orthology)</option>
                                <option value="3" data-department="3" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Cheri Aria (Dermatologist)</option>
                                <option value="9" data-department="5" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Vedhraj Jain (Ayurvedic)</option>  -->
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
                            <input type="text" name="apt_date" class="form-control zdatepicker" value="" placeholder="Randevu tarihini seçiniz . . ." required="" autocomplete="off" id="datepicker">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Saat <span class="form-required">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-timer"></i></span>
                            </div>
                            <input type="text" name="apt_time" class="form-control apnt-time" value="" required="" readonly="">
                           
                        </div>
                        <div class="apnt-slot"></div>
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
  
        <script>
            $(function() {
                $( "#name" ).autocomplete({
                    minLength: 1,
                    
                    source:"{{'/autoComplete_patients_list'}}",
                    
                    select: function( event, get_id ) {
                        event.preventDefault();
                        $("#name").val('');
                        $("#name").val(get_id.item.name);
                        $("#surname").val(get_id.item.surname);
                        $("#email").val(get_id.item.email);
                        $("#phone").val(get_id.item.phone);
                        $("#patient_id").val(get_id.item.id);
                    
                       // $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );

                        return false;
                    }
                }).data("ui-autocomplete")._renderItem = function( ul, item ) {
                    return $( "<li class='ui-autocomplete-row list-group-item  list-group-item-action font-weight-bold p-10 text-capitalize'></li>" )
                        .data( "item.autocomplete", item )
                        .append( item.label )
                        .appendTo( ul );
                };
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
    </div>
</div>
    @endsection
