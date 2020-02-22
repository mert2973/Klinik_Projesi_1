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
                        <h2 class="page-title-text d-inline-block">Patients</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('Patient')}}">Home</a></li>
                                <li>Patients</li>
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
                        <a href="{{url('Patient_Add')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i> New Patient</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="user-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="user-table_length"><label>Show <select name="user-table_length" aria-controls="user-table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="user-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="user-table"></label></div></div></div><div class="row"><div class="col-sm-12">
                                   <!-- datatable-table dataTable -->
                                    <table id="user-table" class="table table-middle table-bordered table-striped  no-footer" role="grid" aria-describedby="user-table_info">
                                        <thead>
                                        <tr class="table-heading" role="row"><th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 22px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Patient Info: activate to sort column ascending" style="width: 211px;">Patient Info</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 65px;">Gender</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Bloodgroup: activate to sort column ascending" style="width: 97px;">Bloodgroup</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Date of Birth: activate to sort column ascending" style="width: 102px;">Date of Birth</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 58px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 113px;">Created Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="user-table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    
                                    
                                    
                                    
                                    
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>
                                                <p class="m-0 text-primary">Pep Dev</p>
                                                <p class="m-0">example@gmail.com</p>
                                                <p class="m-0">1234567890</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>20-02-2020</td>
                                            <td class="table-action">
                                                <div class="dropdown d-inline-block">
                                                    <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right export-button">
                                                        <li><a href="{{url('/Patient_View')}}"><i class="ti-layout-media-center-alt pr-2"></i>View</a></li>
                                                        <li><a href="{{url('/Patient_Edit')}}"><i class="ti-pencil-alt pr-2"></i>Edit</a></li>
                                                    </ul>
                                                </div>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="13">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>2</td>
                                            <td>
                                                <p class="m-0 text-primary">Bhuvi Menon</p>
                                                <p class="m-0">bhuvaneswari148@gmail.com</p>
                                                <p class="m-0">8637613868</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>18-02-2020</td>
                                            <td class="table-action">
                                                <div class="dropdown d-inline-block">
                                                    <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right export-button">
                                                        <li><a href="{{url('/Patient_View')}}"><i class="ti-layout-media-center-alt pr-2"></i>View</a></li>
                                                        <li><a href="{{url('/Patient_Edit')}}"><i class="ti-pencil-alt pr-2"></i>Edit</a></li>
                                                    </ul>
                                                </div>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="12">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>3</td>
                                            <td>
                                                <p class="m-0 text-primary">saman Jahani</p>
                                                <p class="m-0">op.net2net@gmail.com</p>
                                                <p class="m-0">8185269874</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>11-02-2020</td>
                                            <td class="table-action">
                                                <div class="dropdown d-inline-block">
                                                    <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right export-button">
                                                        <li><a href="{{url('/Patient_View')}}"><i class="ti-layout-media-center-alt pr-2"></i>View</a></li>
                                                        <li><a href="{{url('/Patient_Edit')}}"><i class="ti-pencil-alt pr-2"></i>Edit</a></li>
                                                    </ul>
                                                </div>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="11">
                                                </a>
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="user-table_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="user-table_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="user-table_first"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" aria-controls="user-table" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="user-table_previous"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" aria-controls="user-table" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" aria-controls="user-table" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="user-table_next"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" aria-controls="user-table" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last disabled" id="user-table_last"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients#" aria-controls="user-table" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
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
                        window.location.replace('http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patients'+'&start='+picker.startDate.format('YYYY-MM-DD')+'&end='+picker.endDate.format('YYYY-MM-DD'));
                    });
                });
            </script>
            <!-- Delete Modal -->
            <div id="delete-card" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">Are you sure you want to delete?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=patient/delete" class="delete-card-button" method="post" siq_id="autopick_3570">
                                <input type="hidden" value="" class="delete-id" name="id">
                                <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                            </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
