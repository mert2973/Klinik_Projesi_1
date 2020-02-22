@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Setting_active').addClass('active') ;
            $('#St_Payment_Methods_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Payment Method</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Payment Method</span>
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
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addPaymentType"><i class="ti-plus pr-2"></i> New Payment Method</a>
                    </div>
                </div>
            </div>
        
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12">
                                  <!-- datatable-table dataTable --->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr class="table-heading" role="row"><th class="table-srno sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 119px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Payment Method: activate to sort column ascending" style="width: 512px;">Payment Method</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 209px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                        </thead>
                                        <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr role="row" class="odd">
                                            <td class="table-srno">1</td>
                                            <td><a class="text-primary font-14">Bank Transfer</a></td>
                                            <td>
                                                <span class="label label-success">Active</span>                            </td>
                                            <td class="table-action">
                                                <a class="text-primary edit-paymenttype" data-name="Bank Transfer" data-id="1" data-status="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="1">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td class="table-srno">2</td>
                                            <td><a class="text-primary font-14">Cash Payments</a></td>
                                            <td>
                                                <span class="label label-success">Active</span>                            </td>
                                            <td class="table-action">
                                                <a class="text-primary edit-paymenttype" data-name="Cash Payments" data-id="2" data-status="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="2">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td class="table-srno">3</td>
                                            <td><a class="text-primary font-14">Credit card payments</a></td>
                                            <td>
                                                <span class="label label-success">Active</span>                            </td>
                                            <td class="table-action">
                                                <a class="text-primary edit-paymenttype" data-name="Credit card payments" data-id="3" data-status="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="3">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td class="table-srno">4</td>
                                            <td><a class="text-primary font-14">Cheque</a></td>
                                            <td>
                                                <span class="label label-success">Active</span>                            </td>
                                            <td class="table-action">
                                                <a class="text-primary edit-paymenttype" data-name="Cheque" data-id="4" data-status="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="4">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td class="table-srno">5</td>
                                            <td><a class="text-primary font-14">Direct debit payments</a></td>
                                            <td>
                                                <span class="label label-success">Active</span>                            </td>
                                            <td class="table-action">
                                                <a class="text-primary edit-paymenttype" data-name="Direct debit payments" data-id="5" data-status="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="5">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td class="table-srno">6</td>
                                            <td><a class="text-primary font-14">Digital currencies</a></td>
                                            <td>
                                                <span class="label label-success">Active</span>                            </td>
                                            <td class="table-action">
                                                <a class="text-primary edit-paymenttype" data-name="Digital currencies" data-id="6" data-status="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="6">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td class="table-srno">7</td>
                                            <td><a class="text-primary font-14">Paypal</a></td>
                                            <td>
                                                <span class="label label-success">Active</span>                            </td>
                                            <td class="table-action">
                                                <a class="text-primary edit-paymenttype" data-name="Paypal" data-id="7" data-status="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="7">
                                                </a>
                                            </td>
                                        </tr></tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">
                                                    <i class="fa fa-angle-double-left"></i>
                                                </a>
                                            </li>
                                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">
                                                    <i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active">
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
            <div class="modal fade" id="addPaymentType" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Payment Method</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="" method="" siq_id="autopick_321">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-form-label">Payment Method Name <span class="form-required">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Payment Method Name . . ." required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select name="status" class="custom-select">
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id">
                                <input type="hidden" name="_token" value="">
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
                    $('body').on('click', '.edit-paymenttype', function () {
                        var ele = $(this);
                        $('#addPaymentType input[name="name"]').val(ele.data("name"));
                        $('#addPaymentType input[name="id"]').val(ele.data("id"));
                        $('#addPaymentType select[name="status"]').val(ele.data("status"));
                        $('#addPaymentType .modal-title').text('Edit Payment Method');
                        $('#addPaymentType form').attr('action', '');
                        $('#addPaymentType').modal('show');
                    });

                    $('#addPaymentType').on('hidden.bs.modal', function (e) {
                        $('#addPaymentType .modal-title').text('New Payment Method');
                        $('#addPaymentType input').not( "[name='_token']" ).val('');
                        $('#addPaymentType textarea').val('');
                        $('#addPaymentType form').attr('action', '');
                    });
                    $('#finance-method a').addClass('active');

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
                            <form action="" class="delete-card-button" method="" siq_id="autopick_2880">
                                <input type="hidden" value="" class="delete-id" name="id">
                                <input type="hidden" name="_token" value="">
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
