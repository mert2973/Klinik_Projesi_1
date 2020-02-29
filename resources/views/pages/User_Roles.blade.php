@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#User').addClass('active') ;
            $('#Roles').addClass('text-white') ;
        });
    </script>


    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">User Roles</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                                <li>User Roles</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="dropdown d-inline-block m-2">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"><i class="ti-download text-primary pr-2"></i> Export</a>
                            <ul class="dropdown-menu dropdown-menu-right export-button">
                                <li><a class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                                <li><a class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                                <li><a class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                                <li><a class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                                <li><a class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                            </ul>
                        </div>
                        <a href="{{url('/User_Role_Add')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i> New User Role</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12">
                                    <!-- datatable-table dataTable  -->
                                    <table class="table table-bordered table-striped no-footer" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                                        <thead>
                                        <tr class="table-heading" role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 51px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role Name: activate to sort column ascending" style="width: 149px;">Role Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 418px;">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 181px;">Created Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                        </thead>
                                        <tbody>
                                    
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td class="text-primary">Admin</td>
                                            <td>You can not change Admin role setting</td>
                                            <td>10-01-2018</td>
                                            <td class="table-action">
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>2</td>
                                            <td class="text-primary">Dean</td>
                                            <td>Clinic's Dean</td>
                                            <td>10-01-2018</td>
                                            <td class="table-action">
                                                <a href="{{url('/User_Role_Edit')}}" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>3</td>
                                            <td class="text-primary">Doctor</td>
                                            <td>clinic's doctors</td>
                                            <td>05-08-2019</td>
                                            <td class="table-action">
                                                <a href="" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>4</td>
                                            <td class="text-primary">Nurse</td>
                                            <td>clinic's doctors</td>
                                            <td>05-08-2019</td>
                                            <td class="table-action">
                                                <a href="" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                            </td>
                                        </tr>
                                       </tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=role#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=role#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=role#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=role#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last disabled" id="DataTables_Table_0_last"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=role#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        
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
                            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=role/delete" class="delete-card-button" method="post" siq_id="autopick_4659">
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
