
@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Setting_active').addClass('active') ;
                $('#St_Expense_type_text').addClass('text-white') ;
        });
    </script>

    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Expense Types</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <li>Expense Types</li>
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
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addExpenseModel"><i class="ti-plus pr-2"></i> New Expense Type</a>
                    </div>
                </div>
            </div>
            <!-- Expense Type page start -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-container">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12">
                                  <!--datatable-table dataTable ---->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 63px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Type Name: activate to sort column ascending" style="width: 305px;">Type Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 306px;">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 123px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                        </thead>
                                        <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td class="text-primary">Salaries and wages	</td>
                                            <td>Salaries and wages	</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a class="edit-expense-type edit" data-name="Salaries and wages	" data-description="Salaries and wages	" data-id="1" data-status="1" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="1">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>2</td>
                                            <td class="text-primary">Utility expenses	</td>
                                            <td>Utility expenses	</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a class="edit-expense-type edit" data-name="Utility expenses	" data-description="Utility expenses	" data-id="2" data-status="1" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="2">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>3</td>
                                            <td class="text-primary">Administration expenses</td>
                                            <td>Administration expenses</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a class="edit-expense-type edit" data-name="Administration expenses" data-description="Administration expenses" data-id="3" data-status="1" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="3">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>4</td>
                                            <td class="text-primary">IT and Internet Expense</td>
                                            <td>IT and Internet Expense</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a class="edit-expense-type edit" data-name="IT and Internet Expense" data-description="IT and Internet Expense" data-id="4" data-status="1" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="4">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>5</td>
                                            <td class="text-primary">Office Supplies</td>
                                            <td>Office Supplies</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a class="edit-expense-type edit" data-name="Office Supplies" data-description="Office Supplies" data-id="5" data-status="1" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="5">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>6</td>
                                            <td class="text-primary">Health Care</td>
                                            <td>Health Care</td>
                                            <td>
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td class="table-action">
                                                <a class="edit-expense-type edit" data-name="Health Care" data-description="Health Care" data-id="6" data-status="1" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="6">
                                                </a>
                                            </td>
                                        </tr></tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i>
                                                </a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li>
                                            <li class="paginate_button page-item last disabled" id="DataTables_Table_0_last">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a>
                                            </li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
            <!-- ADD EDIT MODAL -->
            <div class="modal fade" id="addExpenseModel" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Expense Type</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="" method="" siq_id="autopick_4860">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-form-label">Expense Type Name <span class="form-required">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Expense Type Name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3" placeholder="Enter Description . . ."></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select name="status" class="custom-select">
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id">
                                <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    //New or Edit Payment type Modal *************
                    $('body').on('click', '.edit-expense-type', function () {
                        var ele = $(this);
                        $('#addExpenseModel input[name="name"]').val(ele.data("name"));
                        $('#addExpenseModel textarea[name="description"]').val(ele.data("description"));
                        $('#addExpenseModel input[name="id"]').val(ele.data("id"));
                        $('#addExpenseModel select[name="status"]').val(ele.data("status"));
                        $('#addExpenseModel .modal-title').text('Edit Expense Type');
                        $('#addExpenseModel form').attr('action', '');
                        $('#addExpenseModel').modal('show');
                    });

                    $('#addExpenseModel').on('hidden.bs.modal', function (e) {
                        $('#addExpenseModel .modal-title').text('New Expense Type');
                        $('#addExpenseModel input').not( "[name='_token']" ).val('');
                        $('#addExpenseModel textarea').val('');
                        $('#addExpenseModel form').attr('action', '');
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
                            <form action="" class="delete-card-button" method="" siq_id="autopick_305">
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
