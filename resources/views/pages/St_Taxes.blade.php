@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Setting_active').addClass('active') ;
            $('#St_Taxes_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Tax Rates</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <li>Tax Rates</li>
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
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addTax"><i class="ti-plus pr-2"></i> New Tax</a>
                    </div>
                </div>
            </div>
        
            <!-- Tax list page start -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12">
                                   <!-- datatable-table dataTable -->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr class="table-heading" role="row"><th class="table-srno sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 165px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tax Name: activate to sort column ascending" style="width: 367px;">Tax Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Rate(%): activate to sort column ascending" style="width: 308px;">Rate(%)</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                        </thead>
                                        <tbody>
                                    
                                        <tr role="row" class="odd">
                                            <td class="table-srno">1</td>
                                            <td><a class="text-primary font-14">VAT</a></td>
                                            <td>5</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="VAT" data-rate="5" data-id="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="1">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td class="table-srno">2</td>
                                            <td><a class="text-primary font-14">VAT</a></td>
                                            <td>7.5</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="VAT" data-rate="7.5" data-id="2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="2">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td class="table-srno">3</td>
                                            <td><a class="text-primary font-14">VAT</a></td>
                                            <td>10</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="VAT" data-rate="10" data-id="3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="3">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td class="table-srno">4</td>
                                            <td><a class="text-primary font-14">GST</a></td>
                                            <td>2.5</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="GST" data-rate="2.5" data-id="4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="4">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td class="table-srno">5</td>
                                            <td><a class="text-primary font-14">GST</a></td>
                                            <td>5</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="GST" data-rate="5" data-id="5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="5">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td class="table-srno">6</td>
                                            <td><a class="text-primary font-14">GST</a></td>
                                            <td>7.5</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="GST" data-rate="7.5" data-id="6" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="6">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td class="table-srno">7</td>
                                            <td><a class="text-primary font-14">GST</a></td>
                                            <td>10</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="GST" data-rate="10" data-id="7" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="7">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td class="table-srno">8</td>
                                            <td><a class="text-primary font-14">GST</a></td>
                                            <td>12</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="GST" data-rate="12" data-id="8" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="8">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td class="table-srno">9</td>
                                            <td><a class="text-primary font-14">GST</a></td>
                                            <td>15</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="GST" data-rate="15" data-id="9" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="9">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td class="table-srno">10</td>
                                            <td><a class="text-primary font-14">GST</a></td>
                                            <td>18</td>
                                            <td class="table-action">
                                                <a class="text-primary edit-tax" data-name="GST" data-rate="18" data-id="10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="10">
                                                </a>
                                            </td>
                                        </tr></tbody>
                                    </table></div></div>
                            <div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li>
                                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">
                                                    <i class="fa fa-angle-left"></i>
                                                </a></li><li class="paginate_button page-item active">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item ">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li>
                                            <li class="paginate_button page-item last" id="DataTables_Table_0_last">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i>
                                                </a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        
            <!-- ADD EDIT MODAL -->
            <div class="modal fade" id="addTax" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Tax Rate</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="" method="" siq_id="autopick_5438">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-form-label">Tax Name <span class="form-required">*</span></label>
                                    <div>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Tax Rate Name . . ." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Rate (%) <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="rate" placeholder="Enter Tax Rate . . ." required="">
                                        <div class="input-group-append"><span class="input-group-text">%</span></div>
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
                        $('#addTax input[name="name"]').val(ele.data("name"));
                        $('#addTax input[name="rate"]').val(ele.data("rate"));
                        $('#addTax input[name="id"]').val(ele.data("id"));
                        $('#addTax .modal-title').text('Edit Tax Rate');
                        $('#addTax form').attr('action', '');
                        $('#addTax').modal('show');
                    });

                    $('#addTax').on('hidden.bs.modal', function (e) {
                        $('#addTax .modal-title').text('New Tax Rate');
                        $('#addTax input').not( "[name='_token']" ).val('');
                        $('#addTax textarea').val('');
                        $('#addTax form').attr('action', '');
                    });

                    $('#finance-tax a').addClass('active');
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
                            <form action="" class="delete-card-button" method="" siq_id="autopick_6007">
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
