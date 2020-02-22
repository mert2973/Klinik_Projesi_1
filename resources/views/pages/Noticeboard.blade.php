@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Noticeboard_active').addClass('active') ;
            $('#Noticeboard_text').addClass('text-text') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Noticeboard</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Noticeboard</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="dropdown d-inline-block mr-2">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"><i class="ti-download text-primary pr-2"></i> Export</a>
                            <ul class="dropdown-menu dropdown-menu-right export-button">
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                            </ul>
                        </div>
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
                                </div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                    </div></div></div>
                            <div class="row">
                                <div class="col-sm-12"><!--- class="datatable-table dataTable" çift tabloyu önlemek için kaldırıldı -->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 10px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 87px;">Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 466px;">Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="StartDate: activate to sort column ascending" style="width: 58px;">StartDate</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="EndDate: activate to sort column ascending" style="width: 51px;">EndDate</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 39px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td class="text-primary">Seminar on medicines and health</td>
                                            <td>Please attend this seminar on every Sunday.  This seminar will be based on new arrival of medicines or new diseases etc.
                                                
                                                Not compulsory for everyone.
                                                
                                                Thanks </td>
                                            <td>31-12-2019</td>
                                            <td>14-04-2021</td>
                                            <td>
                                                <span class="label label-success">Active</span>							</td>
                                            <td class="table-action">
                                                <div class="dropdown d-inline-block">
                                                    <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right export-button">
                                                        <li><a href="{{url('Notice_View')}}"><i class="ti-layout-media-center-alt pr-2"></i>View</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr></tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last disabled" id="DataTables_Table_0_last"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    @endsection
