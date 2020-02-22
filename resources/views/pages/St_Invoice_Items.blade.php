@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Setting_active').addClass('active') ;
            $('#St_Invoice_Items_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><!-- Items list page start -->
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Items</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Items</span>
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
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addItem"><i class="ti-plus pr-2"></i> New Item</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12">
                                    <!-- datatable-table dataTable ---->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 10px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 95px;">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 30px;">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 662px;">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                        </thead>
                                        <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td class="text-primary">Physiotherapy</td>
                                            <td>$50</td>
                                            <td>Physiotherapy is a health care profession which assists people to restore their strength.</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Physiotherapy" data-description="Physiotherapy is a health care profession which assists people to restore their strength." data-id="1" data-price="50" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="1">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>2</td>
                                            <td class="text-primary">Occupational Therapy</td>
                                            <td>$30</td>
                                            <td>Occupational Therapy</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Occupational Therapy" data-description="Occupational Therapy" data-id="2" data-price="30" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="2">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>3</td>
                                            <td class="text-primary">Ambulance Service</td>
                                            <td>$100</td>
                                            <td>Ambulance pickup and drop for patient</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Ambulance Service" data-description="Ambulance pickup and drop for patient" data-id="3" data-price="100" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="3">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>4</td>
                                            <td class="text-primary">Health check up</td>
                                            <td>$40</td>
                                            <td>Body checkup and diagnosis.</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Health check up" data-description="Body checkup and diagnosis." data-id="4" data-price="40" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="4">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>5</td>
                                            <td class="text-primary">Electrocardiogram - ECG</td>
                                            <td>$55</td>
                                            <td>ECG is a test that measures the electrical activity of the heartbeat.</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Electrocardiogram - ECG" data-description="ECG is a test that measures the electrical activity of the heartbeat." data-id="5" data-price="55" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="5">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>6</td>
                                            <td class="text-primary">Injection Charges</td>
                                            <td>$5</td>
                                            <td>Injection Charges</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Injection Charges" data-description="Injection Charges" data-id="6" data-price="5" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="6">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>7</td>
                                            <td class="text-primary">X-ray</td>
                                            <td>$37</td>
                                            <td>X-ray is a quick and simple imaging test</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="X-ray" data-description="X-ray is a quick and simple imaging test" data-id="7" data-price="37" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="7">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>8</td>
                                            <td class="text-primary">Ward facility</td>
                                            <td>$20</td>
                                            <td>Ward facilities for observation and management of medical problem like typhoid, acute gastroenteritis, COPD, bronchial asthma, malaria, viral fever, pneumonias etc.</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Ward facility" data-description="Ward facilities for observation and management of medical problem like typhoid, acute gastroenteritis, COPD, bronchial asthma, malaria, viral fever, pneumonias etc." data-id="8" data-price="20" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="8">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td>9</td>
                                            <td class="text-primary">OPD Charges</td>
                                            <td>$10</td>
                                            <td>OPD Charges</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="OPD Charges" data-description="OPD Charges" data-id="9" data-price="10" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="9">
                                                </a>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td>10</td>
                                            <td class="text-primary">Hospital Bed</td>
                                            <td>$110</td>
                                            <td>Hospital Bed Charges per day</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Hospital Bed" data-description="Hospital Bed Charges per day" data-id="10" data-price="110" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="ti-trash"></i><input type="hidden" value="10">
                                                </a>
                                            </td>
                                        </tr></tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 10 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">
                                                    <i class="fa fa-angle-double-left"></i>
                                                </a>
                                            </li>
                                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                <a href=#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                            <li class="paginate_button page-item last" id="DataTables_Table_0_last">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">
                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADD EDIT MODAL -->
            <div class="modal fade" id="addItem" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="" method="" siq_id="autopick_1754">
                            <div class="modal-body">
                                <input type="hidden" class="id" name="item[id]" value="">
                                <input type="hidden" name="_token" value="">
                                <div class="form-group">
                                    <label class="col-form-label">Name <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" class="form-control name" value="" name="item[name]" placeholder="Enter Item Name . . ." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Description</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <textarea class="form-control description" name="item[description]" placeholder="Enter Item Description . . ."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Price <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control price" name="item[price]" value="" placeholder="Enter Item Price . . ." required="">
                                    </div>
                                </div>
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
                    $('body').on('click', '.edit-item', function () {
                        var ele = $(this);
                        $('#addItem .name').val(ele.data("name"));
                        $('#addItem .description').val(ele.data("description"));
                        $('#addItem .price').val(ele.data("price"));
                        $('#addItem .currency').val(ele.data("currency"));
                        $('#addItem .id').val(ele.data("id"));
                        $('#addItem .modal-title').text('Edit Item');
                        $('#addItem').modal('show');
                    });

                    $('#addItem').on('hidden.bs.modal', function (e) {
                        $('#addItem .modal-title').text('New Item');
                        $('#addItem input').not( "[name='_token']" ).val('');
                        $('#addItem textarea').val('');
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
                            <form action="" class="delete-card-button" method="" siq_id="autopick_5894">
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
