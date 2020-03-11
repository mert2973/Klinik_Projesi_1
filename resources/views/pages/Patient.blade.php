@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Patient_active').addClass('active') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Hastalar</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Hastalar</span>
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
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" class="pdf"><i class="far fa-file-pdf pr-2"></i> PDF</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" class="excel"><i class="far fa-file-excel pr-2"></i> Excel</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" class="csv"><i class="ti-clipboard pr-2"></i> CSV</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" class="print"><i class="ti-printer pr-2"></i> Print</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" class="copy"><i class="ti-layers pr-2"></i> Copy</a></li>
                            </ul>
                        </div>
                        <a href="{{url('Patient_Add')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i> Yeni Hasta Ekle</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="user-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3">
                              <!--  <div class="col-sm-6 text-left">
                                    <div class="dataTables_length" id="user-table_length">
                                        <label>Show <select name="user-table_length" aria-controls="user-table" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option><option value="25">25</option>
                                                <option value="50">50</option><option value="75">75</option>
                                                <option value="-1">All</option>
                                            </select> entries</label>
                                    </div>
                                </div>  -->
                                <div class="col-sm-12 text-right">
                                    <div id="user-table_filter" class="dataTables_filter">
                                        <label>Ara:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="user-table"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                   <!-- datatable-table dataTable -->
                                    <table id="user-table" class="table table-middle table-bordered table-striped  no-footer" role="grid" aria-describedby="user-table_info">
                                        <thead>
                                        <tr class="table-heading" role="row"><th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 22px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Patient Info: activate to sort column ascending" style="width: 211px;">Hasta Bilgisi</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 65px;">Cinsiyet</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Bloodgroup: activate to sort column ascending" style="width: 97px;">Kan Grubu</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Date of Birth: activate to sort column ascending" style="width: 102px;">Doğum Tarihi</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 58px;">Aktif Durum</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 113px;">Oluşturulduğu Tarih</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($the_patients as $list)
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>
                                                <p class="m-0 text-primary">{{$list->p_name}} {{$list->p_surname}}</p>
                                                <p class="m-0">{{$list->p_email}}</p>
                                                <p class="m-0">{{$list->p_phone}}</p>
                                            </td>
                                            <td>{{$list->gender}}</td>
                                            <td>{{$list->blood_group}}</td>
                                            <td>{{$list->date_of_birth}}</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>20-02-2020</td>
                                            <td class="table-action">
                                                <div class="dropdown d-inline-block">
                                                    <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right export-button">
                                                        <form action="{{route('Patient.show',$list->id)}}" method="post">
                                                            @csrf
                                                            @method('get')
                                                            <li>
                                                                <button type="submit" class="btn btn-sm text-info">
                                                                    <i class="ti-layout-media-center-alt pr-2"></i>İncele
                                                                </button>
                                                            </li>
                                                        </form>
                                                        <form action="{{route('Patient.edit',$list->id)}}" method="post">
                                                            @csrf
                                                            @method('get')
                                                            <li>
                                                                <button  type="submit" class="btn btn-sm text-primary">
                                                                    <i class="ti-pencil-alt pr-2"></i>Düzenle
                                                                </button>
                                                            </li>
                                                        </form>
                                                    </ul>
                                                </div>
                                               
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                   <!-- <div class="dataTables_info" id="user-table_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div> -->
                                </div>
                                <div class="col-sm-8 col-md-8 col-lg-8 " >
                               <span style="float: right">{{ $the_patients->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <script>
                $(document).ready(function () {
                    $('.table-date-range').daterangepicker({
                        autoApply: false,
                        alwaysShowCalendars: true,
                        opens: 'left',
                        applyButtonClasses: 'btn-danger',
                        cancelClass: 'btn-white',
                        locale: {
                            format: $('.common_daterange_format').val(),
                            separator: " => ",
                        },
                        startDate: "20-01-2020",
                        endDate: "20-02-2020",
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                            'This Year': [moment().startOf('year'), moment().endOf('year')],
                            'All Time': [moment('2015-01-01'), moment().add(1, 'days')],
                        },
                    });

                    $('.table-date-range').on('apply.daterangepicker', function(ev, picker) {
                        window.location.replace(''+'&start='+picker.startDate.format('YYYY-MM-DD')+'&end='+picker.endDate.format('YYYY-MM-DD'));
                    });
                });
            </script>
            
            <!-- Delete Modal -->
            <div id="delete-card" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Silmeyi Onayla</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">Silmek İstediğinizden Emin misiniz?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="" class="delete-card-button" method="" siq_id="autopick_3570">
                                @csrf
                                <button type="submit" class="btn btn-danger" name="delete">Sil</button>
                            </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    @endsection
