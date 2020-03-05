@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Doctors_active').addClass('active') ;
            $('#Doctors_text').addClass('text-text') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Doktorlar</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Doktorlar</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
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
                        <a href="{{url('/Doctor_Add')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i>Yeni Doktor Ekle</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row align-items-center pb-3">
                                <div class="col-sm-6 text-left">
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
                                        <label>Ara:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- datatable-table dataTable -->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 17px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Picture: activate to sort column ascending" style="width: 123px;">Fotoğraf</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Doctor Info: activate to sort column ascending" style="width: 151px;">Doktor Bilgisi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 57px;">Cinsiyet</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 78px;">Kullanıcı Adı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 92px;">Branşı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Priority: activate to sort column ascending" style="width: 55px;">Öncelik</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 52px;">Durum</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td class="table-img"><img class="img-thumbnail rounded" src="{{asset('css_js_img/doktors_img/media-1771205195e049ca8ee997.jpg')}}" alt="Image"></td>
                                            <td>
                                                <p class="m-0 text-primary">Daniel Barnes</p>
                                                <p class="m-0">daniel@pepdev.com</p>
                                                <p class="m-0">1234567890</p>
                                            </td>
                                            <td>Male</td>
                                            <td>daniel</td>
                                            <td>Orthology</td>
                                            <td>1</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a href="{{url('/Doctor_Edit')}}" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i>
                                                    <input type="hidden" value="1">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>2</td>
                                            <td class="table-img"><img class="img-thumbnail rounded" src="{{asset('css_js_img/doktors_img/media-14789594495e049ca8efcdf.jpg')}}" alt="Image"></td>
                                            <td>
                                                <p class="m-0 text-primary">Melissa Bates</p>
                                                <p class="m-0">melissa@pepdev.com</p>
                                                <p class="m-0">1234567890</p>
                                            </td>
                                            <td>Female</td>
                                            <td>melissa</td>
                                            <td>Gynaecology</td>
                                            <td>2</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a href="" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="2">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>10</td>
                                            <td class="table-img"><img class="img-thumbnail rounded" src="{{asset('css_js_img/doktors_img/media-333493465e049ca924fd4.jpg')}}" alt="Image"></td>
                                            <td>
                                                <p class="m-0 text-primary">Emily Rasberry</p>
                                                <p class="m-0">emily@pepdev.com</p>
                                                <p class="m-0">1234567890</p>
                                            </td>
                                            <td>Female</td>
                                            <td>emily</td>
                                            <td>Gynaecology</td>
                                            <td>10</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a href="" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="10">
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last" id="DataTables_Table_0_last"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        
            <!-- Delete Modal -->
            <div id="delete-card" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Silmeği Doğrula </h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">Silmek İstediğinizden Emin misinz?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="" class="delete-card-button" method="" siq_id="autopick_7955">
                                <input type="hidden" value="" class="delete-id" name="id">
                                <input type="hidden" name="_token" value="">
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
