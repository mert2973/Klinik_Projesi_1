@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Setting_active').addClass('active') ;
            $('#St_Suppliers_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Suppliers</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <li>Suppliers</li>
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
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-supplier"><i class="ti-plus pr-2"></i> New Supplier</a>
                    </div>
                </div>
            </div>
        
            <!-- Tax list page start -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12">
                                 <!-- datatable-table dataTable --->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr class="table-heading" role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 29px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 210px;">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 178px;">Email Address</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 139px;">Phone Number</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 198px;">Address</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                        </thead>
                                        <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td class="text-primary">Choice Pharma Distributor</td>
                                            <td>support@pepdev.com</td>
                                            <td>1234567890</td>
                                            <td>Street Line 1, City, Country</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="Choice Pharma Distributor" data-email="support@pepdev.com" data-phone="1234567890" data-address="Street Line 1, City, Country" data-id="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="1">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>2</td>
                                            <td class="text-primary">All in One Distributor</td>
                                            <td>support@pepdev.com</td>
                                            <td>1234567890</td>
                                            <td>Street Line 1, City, Country</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="All in One Distributor" data-email="support@pepdev.com" data-phone="1234567890" data-address="Street Line 1, City, Country" data-id="2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="2">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>3</td>
                                            <td class="text-primary">SIP Pharma</td>
                                            <td>support@pepdev.com</td>
                                            <td>1234567890</td>
                                            <td>Street Line 1, City, Country</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="SIP Pharma" data-email="support@pepdev.com" data-phone="1234567890" data-address="Street Line 1, City, Country" data-id="3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="3">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>4</td>
                                            <td class="text-primary">Ronak Pharma Agency</td>
                                            <td>support@pepdev.com</td>
                                            <td>1234567890</td>
                                            <td>Street Line 1, City, Country</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="Ronak Pharma Agency" data-email="support@pepdev.com" data-phone="1234567890" data-address="Street Line 1, City, Country" data-id="4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="4">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>5</td>
                                            <td class="text-primary">Lannister Medicine House </td>
                                            <td>support@pepdev.com</td>
                                            <td>1234567890</td>
                                            <td>Street Line 1, City, Country</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="Lannister Medicine House " data-email="support@pepdev.com" data-phone="1234567890" data-address="Street Line 1, City, Country" data-id="5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="5">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>6</td>
                                            <td class="text-primary">Stark Medicine House</td>
                                            <td>support@pepdev.com</td>
                                            <td>1234567890</td>
                                            <td>Street Line 1, City, Country</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="Stark Medicine House" data-email="support@pepdev.com" data-phone="1234567890" data-address="Street Line 1, City, Country" data-id="6" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="6">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>7</td>
                                            <td class="text-primary">Targaryen Medicine House</td>
                                            <td>support@pepdev.com</td>
                                            <td>1234567890</td>
                                            <td>Street Line 1, City, Country</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="Targaryen Medicine House" data-email="support@pepdev.com" data-phone="1234567890" data-address="Street Line 1, City, Country" data-id="7" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="7">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>8</td>
                                            <td class="text-primary">Dorne Medicine House</td>
                                            <td>support@pepdev.com</td>
                                            <td>1234567890</td>
                                            <td>Street Line 1, City, Country</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="Dorne Medicine House" data-email="support@pepdev.com" data-phone="1234567890" data-address="Street Line 1, City, Country" data-id="8" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="8">
                                                </a>
                                            </td>
                                        </tr></tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 8 of 1 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li>
                                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a>
                                            </li><li class="paginate_button page-item last disabled" id="DataTables_Table_0_last">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        
            <!-- ADD EDIT MODAL -->
            <div class="modal fade" id="add-supplier" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Supplier</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="" method="" siq_id="autopick_7399">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Supplier Name <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Supplier Name . . ." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Supplier Email Address . . .">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-mobile"></i></span></div>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Supplier Phone Number . . ." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                        <textarea name="address" class="form-control" placeholder="Enter Address . . ."></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="id">
                                <input type="hidden" name="_token" value="">
                            </div>
                            <div class="modal-footer text-center">
                                <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
            <script>
                $(document).ready(function () {
                    //New or Edit Payment type Modal *************
                    $('body').on('click', '.edit-tax', function () {
                        var ele = $(this);
                        var data = ele.data();
                        $('#add-supplier input[name="name"]').val(ele.data("name"));
                        $('#add-supplier input[name="email"]').val(ele.data("email"));
                        $('#add-supplier input[name="phone"]').val(ele.data("phone"));
                        $('#add-supplier textarea[name="address"]').val(ele.data("address"));
                        $('#add-supplier input[name="id"]').val(ele.data("id"));
                        $('#add-supplier .modal-title').text('Edit Supplier');
                        $('#add-supplier form').attr('action', '');
                        $('#add-supplier').modal('show');
                    });

                    $('#add-supplier').on('hidden.bs.modal', function (e) {
                        $('#add-supplier .modal-title').text('New Supplier');
                        $('#add-supplier input').not( "[name='_token']" ).val('');
                        $('#add-supplier textarea').val('');
                        $('#add-supplier form').attr('action', '');
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
                            <form action="" class="delete-card-button" method="" siq_id="autopick_3707">
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
