@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Patient_active').addClass('active') ;
        });
    </script>
    <script>
        $(document).ready(function () {
            var lnk=window.location.href;
            if(lnk.search("page")!=-1){
                $('#ptn_apt').click();
            }else{
                $('#ptn_info').addClass("active show");
            }
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
           <!-- <link rel="stylesheet" href="./Patient View _ Klinikal Hospital_files/jquery.fancybox.min.css">
            <script src="./Patient View _ Klinikal Hospital_files/jquery.fancybox.min.js"></script> -->
        
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Hasta Durumunu Incele</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2 text-linkedin"><a href="{{url('/Patient')}}">Hastalar</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Hasta Durumunu İncele</span>
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
                                <span>P</span>
                            </div>
                           
                            <div class="user-details text-center pt-3">
                                <h3> @foreach($the_patient_infos as $list)
                                        <span class="text-capitalize">
                                        {{$list->p_name}} {{$list->p_surname}}</span>
                                    @endforeach</h3>
                                <ul class="v-menu text-left pt-3 nav d-block">
                                    <li><a href="#patient-info" class="active show" data-toggle="tab" id="ptn_info"><i class="ti-info-alt"></i> <span>Hasta Bilgileri</span></a></li>
                                    <li><a href="#patient-notes" data-toggle="tab" class=""><i class="ti-files"></i> <span>Klinik Notlar</span></a></li>
                                    <li><a href="#patient-documents" data-toggle="tab" class=""><i class="ti-archive"></i> <span>Dökümanlar</span></a></li>
                                    <li><a href="#patient-prescription" data-toggle="tab" class=""><i class="ti-notepad"></i> <span>Reçete</span></a></li>
                                    <li><a href="#patient-appointment" data-toggle="tab" class="" id="ptn_apt"><i class="ti-calendar"></i> <span>Randevular</span></a></li>
                                    <li><a href="#patient-invoice" data-toggle="tab"><i class="ti-receipt"></i> <span>Faturalar</span></a></li>
                                
                                    <li><a href="{{url('/Patient_Edit')}}"><i class="ti-pencil-alt"></i> <span>Hasta Bilgilerini Düzenle</span></a></li>
                                    <li><a href="#patient-sendmail" data-toggle="tab"><i class="ti-email"></i> <span>Email Gönder</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="patient-info">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Hasta Bilgileri</div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped patient-table">
                                        <tbody>
                                        @php $list=""; @endphp
                                        @foreach($the_patient_infos as $list)
                                        <tr>
                                            <td>Email Adresi</td>
                                            <td>{{$list->p_email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Telefon Numarası</td>
                                            <td>{{$list->p_phone}}</td>
                                        </tr>
                                        <tr>
                                            @php
                                                $birth_day=Carbon\Carbon::parse($list->date_of_birth)->format("d/m/Y");
                                                $created_at=Carbon\Carbon::parse($list->created_at)->format("d/m/Y H:m");
                                            @endphp
                                            <td>Doğum Günü</td>
                                            <td>{{$birth_day}}</td>
                                        </tr>
                                        <tr>
                                            <td>Cinsiyet</td>
                                            <td>{{$list->all_patients_list[0]->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>Kan Grubu</td>
                                            <td>{{$list->all_patients_list[0]->blood_group}}</td>
                                        </tr>
                                        <tr>
                                            <td>Adres 1</td>
                                            <td>{{$list->all_patients_list[0]->adress_1}}</td>
                                        </tr>
                                        <tr>
                                            <td>Adres 2</td>
                                            <td>{{$list->all_patients_list[0]->adress_2}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tıbbi Geçmişi</td>
                                            <td>Diyabet, Yüksek Tansiyon, Kalp Sorunları, Sarılık</td>
                                        </tr>
                                        <tr>
                                            <td>Ek Açıklama</td>
                                            <td>Kalp Rahatsızlığı </td>
                                        </tr>
                                        <tr>
                                            <td>Email Doğrulaması</td>
                                            <td class="text-danger">Henüz Doğrulanmadı</td>
                                        </tr>
                                        <tr>
                                            <td>Durum</td>
                                            <td class="text-success">
                                                @if($list->status==1)
                                                    {{"Aktif"}}
                                                @else
                                                    {{"Pasif"}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oluşturulma Tarihi</td>
                                            <td>{{$created_at}}</td>
                                        </tr>
                                       @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="patient-appointment">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Hasta Randevuları</div>
                                    <div class="panel-action">
                                        <a class="btn btn-primary btn-sm appointment-sidebar"><i class="ti-plus pr-2"></i> Yeni Randevu Ekle</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row align-items-center pb-3">
                                           <!-- <div class="col-sm-6 text-left">
                                                <div class="dataTables_length" id="DataTables_Table_0_length">
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
                                        <div class="row">
                                            <div class="col-sm-12">
                                               <!-- datatable-table dataTable ---->
                                                <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                    <thead>
                                                        <tr class="table-heading" role="row">
                                                            <th class="table-srno sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 0px;">#</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DoctorInfo: activate to sort column ascending" style="width: 0px;">Doktor</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DateTime: activate to sort column ascending" style="width: 0px;">Randevu Tarihi</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Durum</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $num=1; $list_apt=""; $row=0; @endphp
                                                    @foreach($list_appointment as $list_apt)
                                                        @php
                                                            $date=$list_apt->apt_date;
                                                            $date=Carbon\Carbon::parse($date)->format('d/m/Y  H:i');
                                                        $row+=1;
                                                        @endphp
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
                                                            <td class="text-primary">{{$list_apt->name }} {{ $list_apt->surname}}</td>
                                                            <td>{{$date}}</td>
                                                            <td>
                                                                <span class="label label-warning">{{$list_apt->apt_status}}</span>											</td>
                                                            <td class="table-action">
                                                                <a href="{{route('Appointments.show',$list_apt->id)}}" class="text-primary edit" data-toggle="tooltip" title="" target="_blank" data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
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
                                            <div class="col-sm-12 col-md-8 text-right dataTables_pager">
                                                <div class="dataTables_paginate paging_full_numbers" >
                                                  {{$list_appointment->links()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="patient-invoice">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Patient's Invoices</div>
                                    <div class="panel-action">
                                        <a href="{{route('Sales_Invoices.create')}}" class="btn btn-primary btn-sm" target="_blank"><i class="ti-plus pr-2"></i> New Invoice</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_1"></label></div></div></div><div class="row"><div class="col-sm-12">
                                                <!-- datatable-table dataTable --->
                                                <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                                    <thead>
                                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 0px;">ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Due: activate to sort column ascending" style="width: 0px;">Due</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="InvoiceDate: activate to sort column ascending" style="width: 0px;">InvoiceDate</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th></tr>
                                                    </thead>
                                                    <tbody>
                                                
                                                    <tr role="row" class="odd">
                                                        <td>INV-0001</td>
                                                        <td>$122.40</td>
                                                        <td>$110</td>
                                                        <td>
                                                            <span class="label label-info badge-pill badge-sm">Partially Paid</span>
                                                        </td>
                                                        <td>07-01-2020</td>
                                                        <td class="table-action">
                                                            <a href="{{route('Sales_Invoices.show',1)}}" class="text-primary edit" data-toggle="tooltip" title="" target="_blank" data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr></tbody>
                                                </table>
                                            </div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_1_first"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_1_next"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last disabled" id="DataTables_Table_1_last"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="patient-notes">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Klinik Notlar</div>
                                </div>
                                <div class="panel-body">
                                    <div class="notes-container">
                                        <div class="timeline-1 timeline-2">
                                            <div class="marker"></div>
                                            @php $a=""; $arr=0; $arr1=0;  $arr2=0; $arr3=0; $arr4=0; @endphp
                                            @foreach($list_appointment_grpDR_id as $group_itm)
                                                <div class="item item-left pb-4">
                                                    <div class="circle">
                                                            <img src="{{asset('css_js_img/patient_view_img/media-1771205195e049ca8ee997.jpg')}}" alt="">
                                                    </div>
                                               @foreach($list_appointment2 as $a)
                                                   @if($group_itm[0]->doctors_id==$a->doctors_id)
                                                       @php $apt_date=Carbon\Carbon::parse($a->apt_date)->format("d/m/Y H:i"); @endphp
                                                        <div class="arrow"></div>
                                                        <div class="time col-lg-10 ">Dr. {{$a->name }} {{ $a->surname }}  <span class="float-right"> Randevu Tarihi: {{$apt_date}} </span></div>
                                                        <div class="item-content">
                                                            <div class="text-primary pt-1">Problemler</div>
                                                            <div class="descr pt-0">
                                                                @foreach($problems[$arr++] as $prob)
                                                                <li>{{$prob->problems}}</li>
                                                               <!-- <li>Patient has stomach problem</li>
                                                                <li>Patient has weakness.</li> -->
                                                                 @endforeach
                                                            </div>
                                                            <div class="text-primary pt-1">Gözlemler</div>
                                                            <div class="descr pt-0">
                                                                @foreach($observations[$arr1++] as $obs)
                                                                    <li>{{$obs->observations}}</li>
                                                               <!-- <li>Eyes are reddish</li> -->
                                                                @endforeach
                                                            </div>
                                                            <div class="text-primary pt-1">Teşhisler</div>
                                                            <div class="descr pt-0">
                                                                @foreach($diagnosis[$arr2++] as $dia)
                                                                    <li>{{$dia->diagnoses}}</li>
                                                                   <!-- <li>Hypoplastic Left Heart Syndrome</li>-->
                                                                @endforeach
                                                            </div>
                                                            <div class="text-primary pt-1">Test Talebi/Gözlem</div>
                                                            <div class="descr pt-0">
                                                                @foreach($investigations[$arr3++] as $ins)
                                                                 <li>{{$ins->investigations}}</li>
                                                                   <!-- <li>Renal scintigraphy</li> -->
                                                                @endforeach
                                                            </div>
                                                            <div class="text-primary pt-1">Notlar</div>
                                                            <div class="descr pt-0">
                                                                @foreach($notes_advices[$arr4++] as $notes)
                                                                    <li>{{$notes->notes_advices}}</li>
                                                                <!-- <li>Please eat healthy food only for some time.</li>
                                                                <li>Please follow your routine exercise </li> -->
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endif
                                                @endforeach
                                                    <div class="text-secondary mt-0 text-right">
                                                        <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=records/pdf&amp;id=2" class="text-primary" target="_blank">PDF/Print</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="patient-documents">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Documents/Reports</div>
                                </div>
                                <div class="panel-body">
                                    <div class="report-container">
                                        <div class="report-image">
                                            <a data-fancybox="gallery" href="{{asset('css_js_img/patient_view_img/Doc-19895196225e0ec898772606.jpg')}}">
                                                <img src="{{asset('css_js_img/patient_view_img/Doc-19895196225e0ec898772606.jpg')}}" alt="Reports">
                                                <span>Blood Report</span>
                                                <p>02-01-2020</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="patient-prescription">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Reçeteler</div>
                                </div>
                                <div class="panel-body">
                                    <div class="timeline-1 timeline-2">
                                        <div class="marker"></div>
                                        @php $lst_appt=""; $arr_prs=0; @endphp
                                        @foreach($list_appointment_grpDR_id as $grp_itm)
                                        <div class="item item-left pb-4">
                                            <div class="circle">
                                                <img src="{{asset('css_js_img/patient_view_img/media-1771205195e049ca8ee997.jpg')}}" alt=""></div>
                                            <div class="arrow"></div>
                                            @foreach($list_appointment2 as $lst_appt)
                                              @php $apt_date=Carbon\Carbon::parse($lst_appt->apt_date)->format("d/m/Y H:i"); @endphp
                                              @if($grp_itm[0]->doctors_id==$lst_appt->doctors_id)
                                                <div class="time col-lg-10">Dr. {{$lst_appt->name }} {{ $lst_appt->surname }}  <span class="float-right">Randevu Tarihi: {{ $apt_date}}</span></div>
                                                <div class="item-content">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <th>İlaç Adı</th>
                                                                <th>Genel</th>
                                                                <th>Doz</th>
                                                                <th>Kullanım Süresi</th>
                                                                <th>Talimatı</th>
                                                            </tr>
                                                            @foreach($prescriptions[$arr_prs++] as $all_prs)
                                                            <tr>
                                                                <td>
                                                                    <p class="text-primary m-0">{{$all_prs->mdc_name}}</p>
                                                                    <p class="m-0">Omez</p>
                                                                </td>
                                                                <td class="text-center"><p class="font-12">{{$all_prs->mdc_generic}}</p></td>
                                                                <td class="text-center"><p class="font-12">{{$all_prs->mdc_dose}}</p></td>
                                                                <td class="text-center"><p class="font-12">{{$all_prs->mdc_duration}} Gün</p></td>
                                                                <td class="text-left"><p class="font-12">{{$all_prs->mdc_instruction}}</p></td>
                                                            </tr>
                                                            @endforeach
                                                           <!-- <tr>
                                                                <td>
                                                                    <p class="text-primary m-0">Amoxicillin</p>
                                                                    <p class="m-0">Amoxicillin</p>
                                                                </td>
                                                                <td class="text-center"><p class="font-12">1-1-1</p></td>
                                                                <td class="text-center"><p class="font-12">4 Day</p></td>
                                                                <td class="text-center"><p class="font-12">After Food</p></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="text-primary m-0">Combiflam</p>
                                                                    <p class="m-0">Paracetamol &amp; Ibuprofen</p>
                                                                </td>
                                                                <td class="text-center"><p class="font-12">1-0-1</p></td>
                                                                <td class="text-center"><p class="font-12">4 Day</p></td>
                                                                <td class="text-center"><p class="font-12">After Food</p></td>
                                                            </tr> -->
                                                            </tbody></table>
                                                    </div>
                                                    <div class="text-secondary mt-2 text-right">
                                                        <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescription/pdf&amp;id=3" class="text-primary" target="_blank">PDF/Print</a>
                                                    </div>
                                                </div>
                                              @endif
                                            @endforeach
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="patient-sendmail">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Send Email to Patient</div>
                                </div>
                                <form action="" method="post" siq_id="autopick_2426">
                                    <input type="hidden" name="" value="" readonly="">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>To</label>
                                            <input type="text" value="PepDev Team" class="form-control" readonly="">
                                            <input type="hidden" name="mail[id]" value="8" readonly="">
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="mail[subject]" class="form-control" placeholder="Enter Subject . . .">
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="mail[message]" class="form-control mail-summernote" placeholder="Enter Message . . ." style="display: none;"></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button type="submit" name="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
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
                                <input type="hidden" name="patient_id" value="" id="patient_id">
                                <input type="text" value="" class="form-control" id="namee"  placeholder="Hasta adını giriniz . . ." autocomplete="off">
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
                                <select name="doctor" class="custom-select apnt-doctor" required="required" autocomplete="off">
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
                                <input type="time" name="apt_time" class="form-control " value="09:00:00" required="" ><!--apnt-time -->
                    
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
            <!--End. Create An Appointment -->
            
           <!-- <script type="text/javascript" src="./Patient View _ Klinikal Hospital_files/appointment.js"></script> -->
        
            <!-- include summernote css/js-->
          <!--  <link href="./Patient View _ Klinikal Hospital_files/summernote-bs4.css" rel="stylesheet">
            <script type="text/javascript" src="./Patient View _ Klinikal Hospital_files/summernote-bs4.min.js"></script>
            <script type="text/javascript" src="./Patient View _ Klinikal Hospital_files/klinikal.summernote.js"></script> -->
        
            <script>
               /* $("a.open-pdf").fancybox({
                    'frameWidth': 800,
                    'frameHeight': 800,
                    'overlayShow': true,
                    'hideOnContentClick': false,
                    'type': 'iframe'
                }); */

            </script>
            <!-- Footer -->
    
        </div>
    </div>
    <script>
        $(function() {
            $( "#namee" ).autocomplete({
                minLength: 1,
                source:"{{'/autoComplete_patients_list'}}",
                //source: "autoComplete_patients_list",
                select: function( event, get_id ) {
                    event.preventDefault();
                    $("#namee").val('');
                    $("#namee").val(get_id.item.name);
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
@endsection
