@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Patient_active').addClass('active') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
            <link rel="stylesheet" href="./Patient View _ Klinikal Hospital_files/jquery.fancybox.min.css">
            <script src="./Patient View _ Klinikal Hospital_files/jquery.fancybox.min.js"></script>
        
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Hasta durumunu incele</h2>
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
                                    @endforeach</h3><!--PepDev Team --->
                                <ul class="v-menu text-left pt-3 nav d-block">
                                    <li><a href="#patient-info" class="active show" data-toggle="tab"><i class="ti-info-alt"></i> <span>Hasta Bilgileri</span></a></li>
                                    <li><a href="#patient-notes" data-toggle="tab" class=""><i class="ti-files"></i> <span>Klinik Notlar</span></a></li>
                                    <li><a href="#patient-documents" data-toggle="tab" class=""><i class="ti-archive"></i> <span>Dökümanlar</span></a></li>
                                    <li><a href="#patient-prescription" data-toggle="tab" class=""><i class="ti-notepad"></i> <span>Reçete</span></a></li>
                                    <li><a href="#patient-appointment" data-toggle="tab" class=""><i class="ti-calendar"></i> <span>Randevular</span></a></li>
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
                                                $t=strtotime($list->date_of_birth);
                                                $date=Carbon\Carbon::createFromTimestamp($t);
                                                $birth_day=$date->format('d / m / Y');
                                               
                                            @endphp
                                            <td>Doğum Günü</td>
                                            <td>{{$birth_day}}</td>
                                        </tr>
                                        <tr>
                                            <td>Cinsiyet</td>
                                            <td>{{$list->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>Kan Grubu</td>
                                            <td>{{$list->blood_group}}</td>
                                        </tr>
                                        <tr>
                                            <td>Adres 1</td>
                                            <td>{{$list->adress_1}}</td>
                                        </tr>
                                        <tr>
                                            <td>Adres 2</td>
                                            <td>{{$list->adress_2}}</td>
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
                                            <td>{{$list->created_at}}/td>
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
                                    <div class="panel-title">Patient's Appointments</div>
                                    <div class="panel-action">
                                        <a class="btn btn-primary btn-sm appointment-sidebar"><i class="ti-plus pr-2"></i> New Appointment</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row align-items-center pb-3"><div class="col-sm-6 text-left">
                                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                                    <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="75">75</option>
                                                            <option value="-1">All</option>
                                                        </select> entries</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
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
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DoctorInfo: activate to sort column ascending" style="width: 0px;">DoctorInfo</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DateTime: activate to sort column ascending" style="width: 0px;">DateTime</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                
                                                    <tr role="row" class="odd">
                                                        <td>1</td>
                                                        <td class="text-primary">Dr. Emily Rasberry</td>
                                                        <td>04-03-2020 AT 12:10</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="{{url('/Appointment_View')}}" class="text-primary edit" data-toggle="tooltip" title="" target="_blank" data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td>2</td>
                                                        <td class="text-primary">Dr. Janet Collins</td>
                                                        <td>28-02-2020 AT 09:15</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="" class="text-primary edit" data-toggle="tooltip" title=""  data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td>3</td>
                                                        <td class="text-primary">Dr. Melissa Bates</td>
                                                        <td>27-02-2020 AT 10:45</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="" class="text-primary edit" data-toggle="tooltip" title=""  data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td>4</td>
                                                        <td class="text-primary">Dr. Janet Collins</td>
                                                        <td>27-02-2020 AT 12:30</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td>5</td>
                                                        <td class="text-primary">Dr. Melissa Bates</td>
                                                        <td>27-02-2020 AT 12:30</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="" class="text-primary edit" data-toggle="tooltip" title=""  data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td>6</td>
                                                        <td class="text-primary">Dr. Melissa Bates</td>
                                                        <td>27-02-2020 AT 17:15</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="" class="text-primary edit" data-toggle="tooltip" title=""  data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td>7</td>
                                                        <td class="text-primary">Dr. Steve Soeren</td>
                                                        <td>27-02-2020 AT 14:30</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td>8</td>
                                                        <td class="text-primary">Dr. Melissa Bates</td>
                                                        <td>27-02-2020 AT 17:00</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="" class="text-primary edit" data-toggle="tooltip" title=""  data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="odd">
                                                        <td>9</td>
                                                        <td class="text-primary">Dr. Linda Adams</td>
                                                        <td>26-02-2020 AT 11:10</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="#" class="text-primary edit" data-toggle="tooltip" title=""  data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr><tr role="row" class="even">
                                                        <td>10</td>
                                                        <td class="text-primary">Dr. Nancy Allen</td>
                                                        <td>26-02-2020 AT 17:45</td>
                                                        <td>
                                                            <span class="label label-warning">In process</span>											</td>
                                                        <td class="table-action">
                                                            <a href="#" class="text-primary edit" data-toggle="tooltip" title=""  data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr></tbody>
                                                </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last" id="DataTables_Table_0_last"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="patient-invoice">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Patient's Invoices</div>
                                    <div class="panel-action">
                                        <a href="{{url('/Invoice_Add')}}" class="btn btn-primary btn-sm" target="_blank"><i class="ti-plus pr-2"></i> New Invoice</a>
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
                                                            <a href="{{url('/Invoice_View')}}" class="text-primary edit" data-toggle="tooltip" title="" target="_blank" data-original-title="View"><i class="ti-layout-media-center-alt"></i></a>
                                                        </td>
                                                    </tr></tbody>
                                                </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_1_first"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_1_next"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last disabled" id="DataTables_Table_1_last"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" aria-controls="DataTables_Table_1" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="patient-notes">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Clinical Notes</div>
                                </div>
                                <div class="panel-body">
                                    <div class="notes-container">
                                        <div class="timeline-1 timeline-2">
                                            <div class="marker"></div>
                                            <div class="item item-left pb-4">
                                                <div class="circle"><img src="{{asset('css_js_img/patient_view_img/media-1771205195e049ca8ee997.jpg')}}" alt=""></div>
                                                <div class="arrow"></div>
                                                <div class="time">Dr. Daniel Barnes (03-01-2020)</div>
                                                <div class="item-content">
                                                    <div class="text-primary pt-1">Problem</div>
                                                    <div class="descr pt-0">
                                                        <li>Patient has stomach problem</li>
                                                        <li>Patient has weakness.</li>
                                                    </div>
                                                    <div class="text-primary pt-1">Observation</div>
                                                    <div class="descr pt-0">
                                                        <li>Eyes are reddish</li>
                                                    </div>
                                                    <div class="text-primary pt-1">Diagnosis</div>
                                                    <div class="descr pt-0">
                                                        <li>Hypoplastic Left Heart Syndrome</li>
                                                    </div>
                                                    <div class="text-primary pt-1">Investigation</div>
                                                    <div class="descr pt-0">
                                                        <li>Renal scintigraphy</li>
                                                    </div>
                                                    <div class="text-primary pt-1">Notes</div>
                                                    <div class="descr pt-0">
                                                        <li>Please eat healthy food only for some time.</li>
                                                        <li>Please follow your routine exercise </li>
                                                    </div>
                                                    <div class="text-secondary mt-2 text-right">
                                                        <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=records/pdf&amp;id=2" class="text-primary" target="_blank">PDF/Print</a>
                                                    </div>
                                                </div>
                                            </div>
                                    
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
                                    <div class="panel-title">Prescription</div>
                                </div>
                                <div class="panel-body">
                                    <div class="timeline-1 timeline-2">
                                        <div class="marker"></div>
                                        <div class="item item-left pb-4">
                                            <div class="circle"><img src="{{asset('css_js_img/patient_view_img/media-1771205195e049ca8ee997.jpg')}}" alt=""></div>
                                            <div class="arrow"></div>
                                            <div class="time">Dr. Daniel Barnes (03-01-2020)</div>
                                            <div class="item-content">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody><tr>
                                                            <th>Medicine Name</th>
                                                            <th>Dose</th>
                                                            <th>Duration</th>
                                                            <th>Instruction</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p class="text-primary m-0">Combiflam</p>
                                                                <p class="m-0">Paracetamol &amp; Ibuprofen</p>
                                                            </td>
                                                            <td class="text-center"><p class="font-12">1-1-1</p></td>
                                                            <td class="text-center"><p class="font-12">3 Day</p></td>
                                                            <td class="text-center"><p class="font-12">After Food</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p class="text-primary m-0">Omiparazol</p>
                                                                <p class="m-0">Omez</p>
                                                            </td>
                                                            <td class="text-center"><p class="font-12">1-0-0</p></td>
                                                            <td class="text-center"><p class="font-12">4 Day</p></td>
                                                            <td class="text-center"><p class="font-12">Before Breakfast</p></td>
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <div class="text-secondary mt-2 text-right">
                                                    <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescription/pdf&amp;id=4" class="text-primary" target="_blank">PDF/Print</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item item-left pb-4">
                                            <div class="circle"><img src="{{asset('css_js_img/patient_view_img/media-14789594495e049ca8efcdf.jpg')}}" alt=""></div>
                                            <div class="arrow"></div>
                                            <div class="time">Dr. Melissa Bates (01-01-2020)</div>
                                            <div class="item-content">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody><tr>
                                                            <th>Medicine Name</th>
                                                            <th>Dose</th>
                                                            <th>Duration</th>
                                                            <th>Instruction</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p class="text-primary m-0">Omiparazol</p>
                                                                <p class="m-0">Omez</p>
                                                            </td>
                                                            <td class="text-center"><p class="font-12">1-0-0</p></td>
                                                            <td class="text-center"><p class="font-12">8 Day</p></td>
                                                            <td class="text-center"><p class="font-12">Before Breakfast</p></td>
                                                        </tr>
                                                        <tr>
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
                                                        </tr>
                                                        </tbody></table>
                                                </div>
                                                <div class="text-secondary mt-2 text-right">
                                                    <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=prescription/pdf&amp;id=3" class="text-primary" target="_blank">PDF/Print</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="patient-sendmail">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Send Email to Patient</div>
                                </div>
                                <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/sendmail" method="post" siq_id="autopick_2426">
                                    <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8" readonly="">
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
        
            <div class="sidebar sidebar-right appointmet-sidebar">
                <div class="sidebar-hdr">
                    <div class="sidebar-close"><i class="ti-close"></i></div>
                    <h3 class="title">Appointment</h3>
                </div>
                <form class="sidebar-bdy" action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=appointment/add" method="post" siq_id="autopick_8086">
                    <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                    <div id="apnt-info">
                        <input type="hidden" class="apnt-id" name="appointment[id]">
                        <div class="form-group mb-2">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[name]" class="form-control patient-name ui-autocomplete-input" value="PepDev Team" placeholder="Enter Name . . ." required="" autocomplete="off">
                                <input type="hidden" name="appointment[patient_id]" value="8" class="form-control patient-id">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Email Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[mail]" class="form-control patient-mail" value="support@pepdev.com" placeholder="Enter Email Address . . ." required="">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Mobile Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[mobile]" class="form-control patient-mobile" value="1234567890" placeholder="Enter Mobile Number . . ." required="">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Doctor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <select name="appointment[doctor]" class="custom-select apnt-doctor" data-live-search="true" required="">
                                    <option value="">Select Doctor</option>
                                    <option value="2" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-17, 2020-02-13, 2020-02-18, 2020-03-13, 2020-03-17, 2020-04-16, 2020-04-28&quot;">Melissa Bates (Gynaecology)</option>
                                    <option value="7" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-20&quot;">Linda Adams (Gynaecology)</option>
                                    <option value="8" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Janet Collins (Gynaecology)</option>
                                    <option value="10" data-department="1" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Emily Rasberry (Gynaecology)</option>
                                    <option value="11" data-department="1" data-weekly="[4,5,6]" data-national="&quot;2000-12-25&quot;">Nancy Allen (Gynaecology)</option>
                                    <option value="1" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19&quot;">Daniel Barnes (Orthology)</option>
                                    <option value="4" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Steve Soeren (Orthology)</option>
                                    <option value="6" data-department="2" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Barbara Baker (Orthology)</option>
                                    <option value="3" data-department="3" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Cheri Aria (Dermatologist)</option>
                                    <option value="9" data-department="5" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Vedhraj Jain (Ayurvedic)</option>
                                </select>
                                <input type="hidden" class="apnt-department" name="appointment[department]" value="">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[date]" class="form-control apnt-date" value="" placeholder="Select Date . . ." required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[time]" class="form-control apnt-time" value="" required="" readonly="">
                                <input type="hidden" name="appointment[slot]" class="apnt-slot-time" value="" required="">
                            </div>
                            <div class="apnt-slot"></div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                </div>
                                <select name="appointment[status]" class="custom-select apnt-status" required="">
                                    <option value="2">In Process</option>
                                    <option value="3">Confirmed</option>
                                    <option value="4">Completed</option>
                                    <option value="1">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-ftr text-right">
                        <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/view&amp;id=8#" class="btn btn-default">View</a>
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="./Patient View _ Klinikal Hospital_files/appointment.js"></script>
        
            <!-- include summernote css/js-->
            <link href="./Patient View _ Klinikal Hospital_files/summernote-bs4.css" rel="stylesheet">
            <script type="text/javascript" src="./Patient View _ Klinikal Hospital_files/summernote-bs4.min.js"></script>
            <script type="text/javascript" src="./Patient View _ Klinikal Hospital_files/klinikal.summernote.js"></script>
        
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
