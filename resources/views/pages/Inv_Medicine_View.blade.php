@extends('system_layouts.master_sys')
@section('icerik')
    
    <script>
        $(document).ready(function () {
            // $('#Pharmacy_Rotate').addClass('rotate') ;
            $('#Account_active').addClass('active') ;
            $('#Inventory_Medicines_text').addClass('text-white') ;
        });
    </script>
    
    <div class="page-wrapper">
        <div class="page-body">
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="page-title-text d-inline-block">Medicine View</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines">Medicines</a></li>
                                <li>Medicine View</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right"></div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="user-avtar">
                                <span>A</span>
                            </div>
                            <div class="user-details text-center pt-3">
                                <h3>Amoxicillin</h3>
                                <ul class="v-menu text-left pt-3 nav d-block">
                                    <li><a href="#medicine-info" class="active" data-toggle="tab"><i class="ti-info-alt"></i> <span>Medicine Info</span></a></li>
                                    <li><a href="#medicine-stock" data-toggle="tab"><i class="ti-archive"></i> <span>Live Stock</span></a></li>
                                    <li><a href="#medicine-badstock" data-toggle="tab"><i class="ti-files"></i> <span>Bad Stock</span></a></li>
                                    <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicine/edit&amp;id=15"><i class="ti-pencil-alt"></i> <span>Edit</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="medicine-info">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Medicine Info</div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped patient-table">
                                            <tbody>
                                            <tr>
                                                <td>Medicine Name</td>
                                                <td>Amoxicillin</td>
                                            </tr>
                                            <tr>
                                                <td>company</td>
                                                <td>Amoxicillin</td>
                                            </tr>
                                            <tr>
                                                <td>generic</td>
                                                <td>Amoxicillin</td>
                                            </tr>
                                            <tr>
                                                <td>unit</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>unitpacking</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>medicine_group</td>
                                                <td>Antibiotic</td>
                                            </tr>
                                            <tr>
                                                <td>category</td>
                                                <td>Capsule</td>
                                            </tr>
                                            <tr>
                                                <td>storebox</td>
                                                <td>Box 8</td>
                                            </tr>
                                            <tr>
                                                <td>minlevel</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>reorderlevel</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>note</td>
                                                <td>Amoxicillin is a penicillin antibiotic that fights bacteria.</td>
                                            </tr>
                                            <tr>
                                                <td>Created Date</td>
                                                <td>2019-12-31 10:15:25</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="medicine-stock">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Live Stock</div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive stock-table">
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12">
                                                   <!-- livestock-table dataTable --->
                                                    <table class="table table-middle table-bordered table-striped " id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                        <thead>
                                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 0px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Batch: activate to sort column ascending" style="width: 0px;">Batch</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Expiry: activate to sort column ascending" style="width: 0px;">Expiry</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Purchase Price: activate to sort column ascending" style="width: 0px;">Purchase Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sale Price: activate to sort column ascending" style="width: 0px;">Sale Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending" style="width: 0px;">Qty</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sold: activate to sort column ascending" style="width: 0px;">Sold</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Live Stock: activate to sort column ascending" style="width: 0px;">Live Stock</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th></tr>
                                                        </thead>
                                                        <tbody>
                                                    
                                                        <tr role="row" class="odd">
                                                            <td>1</td>
                                                            <td class="batch text-primary">AMX0012</td>
                                                            <td class="expiry text-danger">12-2020</td>
                                                            <td>$120.00</td>
                                                            <td>$130.00</td>
                                                            <td class="qty">100.00</td>
                                                            <td class="sold">0.00</td>
                                                            <td class="available">100</td>
                                                            <td class="table-action">
                                                                <div class="dropdown d-inline-block">
                                                                    <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-right export-button">
                                                                        <li><a class="edit-stock" data-id="16" data-medicineid="15"><i class="ti-dashboard pr-2"></i>Update Stock</a></li>
                                                                        <li><a href=""><i class="ti-layout-media-center-alt pr-2"></i>Purchase View</a></li>
                                                                        <li><a href=""><i class="ti-pencil-alt pr-2"></i>Purchase Edit</a></li>
                                                                    </ul>
                                                                </div>
                                                                <a class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                                    <i class="ti-trash"></i><input type="hidden" value="16">
                                                                </a>
                                                            </td>
                                                        </tr></tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1"></th>
                                                            <th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1">$120</th><th rowspan="1" colspan="1">$130</th><th rowspan="1" colspan="1">100</th><th rowspan="1" colspan="1">0</th><th rowspan="1" colspan="1">100</th><th rowspan="1" colspan="1"></th></tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-3">
                                                <div class="col-sm-12 col-md-4">
                                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                                </div>
                                                <div class="col-sm-12 col-md-8 text-right dataTables_pager">
                                                    <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item first disabled" id="DataTables_Table_0_first">
                                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">
                                                                    <i class="fa fa-angle-double-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">
                                                                    <i class="fa fa-angle-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a>
                                                            </li>
                                                            <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">
                                                                    <i class="fa fa-angle-right"></i>
                                                                </a>
                                                            </li>
                                                            <li class="paginate_button page-item last disabled" id="DataTables_Table_0_last">
                                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">
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
                        </div>
                        <div class="tab-pane fade" id="medicine-badstock">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">Bad Stock</div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive stock-table">
                                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-middle table-bordered table-striped badstock-table dataTable" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                                        <thead>
                                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 0px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Batch: activate to sort column ascending" style="width: 0px;">Batch</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Expiry: activate to sort column ascending" style="width: 0px;">Expiry</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Purchase Price: activate to sort column ascending" style="width: 0px;">Purchase Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Sale Price: activate to sort column ascending" style="width: 0px;">Sale Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending" style="width: 0px;">Qty</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Sold: activate to sort column ascending" style="width: 0px;">Sold</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th></tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr></tbody>
                                                        <tfoot>
                                                        <tr><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1">$0</th><th rowspan="1" colspan="1">$0</th><th rowspan="1" colspan="1">0</th><th rowspan="1" colspan="1">0</th><th rowspan="1" colspan="1"></th></tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-3">
                                                <div class="col-sm-12 col-md-4">
                                                    <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                                </div>
                                                <div class="col-sm-12 col-md-8 text-right dataTables_pager">
                                                    <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item first disabled" id="DataTables_Table_1_first">
                                                                <a href="#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" class="page-link">
                                                                    <i class="fa fa-angle-double-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous">
                                                                <a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0" class="page-link">
                                                                    <i class="fa fa-angle-left"></i>
                                                                </a>
                                                            </li>
                                                            <li class="paginate_button page-item next disabled" id="DataTables_Table_1_next">
                                                                <a href="#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" class="page-link">
                                                                    <i class="fa fa-angle-right"></i>
                                                                </a>
                                                            </li>
                                                            <li class="paginate_button page-item last disabled" id="DataTables_Table_1_last">
                                                                <a href="#" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0" class="page-link">
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
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="modal fade" id="editstock-modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Stock Adjustment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="" method="post" siq_id="autopick_3188">
                            <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="medicine_id" value="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Available in Store<span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="available" class="form-control" required="">
                                    </div>
                                    <span class="form-text">Sold quantity will be updated =&gt; Sold = Total - Available in store. <br>If you want to change qunatity or other info please click on edit link.</span>
                                </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Batch</th>
                                        <th>Expiry</th>
                                        <th>Qty</th>
                                        <th>Sold</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="batch">Batch kk</td>
                                        <td class="expiry">Expiry</td>
                                        <td class="qty">Qty</td>
                                        <td class="sold">Sold</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Update Stock</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
            <script>
                $(document).ready(function () {
                    "use strict";
                    $('.livestock-table').DataTable({
                        aLengthMenu: [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
                        iDisplayLength: 10,
                        pagingType: 'full_numbers',
                        order: [],
                        dom: "<'row align-items-center pb-3'<'col-sm-6 text-left'l><'col-sm-6 text-right'f>><'row'<'col-sm-12'tr>><'row align-items-center pt-3'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-8 text-right dataTables_pager'p>>",
                        responsive: true,
                        language: {
                            "paginate": {
                                "first":       '<i class="fa fa-angle-double-left"></i>',
                                "previous":    '<i class="fa fa-angle-left"></i>',
                                "next":        '<i class="fa fa-angle-right"></i>',
                                "last":        '<i class="fa fa-angle-double-right"></i>'
                            },
                        },
                        footerCallback: function ( row, data, start, end, display ) {
                            var api = this.api(), data;

                            var intVal = function ( i ) {
                                return typeof i === 'string' ?
                                    i.replace(/[\$,]/g, '')*1 :
                                    typeof i === 'number' ?
                                        i : 0;
                            };
                            var column3 = api.column(3).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(3).footer() ).html('$'+column3);

                            var column4 = api.column(4).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(4).footer() ).html('$'+column4);

                            var column5 = api.column(5).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(5).footer() ).html(column5);

                            var column6 = api.column(6).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(6).footer() ).html(column6);

                            var column7 = api.column(7).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(7).footer() ).html(column7);
                        }
                    });
                    $('.badstock-table').DataTable({
                        aLengthMenu: [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
                        iDisplayLength: 10,
                        pagingType: 'full_numbers',
                        order: [],
                        dom: "<'row align-items-center pb-3'<'col-sm-6 text-left'l><'col-sm-6 text-right'f>><'row'<'col-sm-12'tr>><'row align-items-center pt-3'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-8 text-right dataTables_pager'p>>",
                        responsive: true,
                        language: {
                            "paginate": {
                                "first":       '<i class="fa fa-angle-double-left"></i>',
                                "previous":    '<i class="fa fa-angle-left"></i>',
                                "next":        '<i class="fa fa-angle-right"></i>',
                                "last":        '<i class="fa fa-angle-double-right"></i>'
                            },
                        },
                        footerCallback: function ( row, data, start, end, display ) {
                            var api = this.api(), data;

                            var intVal = function ( i ) {
                                return typeof i === 'string' ?
                                    i.replace(/[\$,]/g, '')*1 :
                                    typeof i === 'number' ?
                                        i : 0;
                            };
                            var column3 = api.column(3).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(3).footer() ).html('$'+column3);

                            var column4 = api.column(4).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(4).footer() ).html('$'+column4);

                            var column5 = api.column(5).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(5).footer() ).html(column5);

                            var column6 = api.column(6).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            $( api.column(6).footer() ).html(column6);
                        }
                    });

                    $('.stock-table').on('click', '.edit-stock', function () {
                        var ele = $(this), ele_parent = ele.parents('tr'),
                            data = ele.data();
                        $('#editstock-modal input[name="available"]').val(ele_parent.find('.available').text());
                        $('#editstock-modal input[name="id"]').val(data.id);
                        $('#editstock-modal input[name="medicine_id"]').val(data.medicineid);
                        $('#editstock-modal .batch').html(ele_parent.find('.batch').text());
                        $('#editstock-modal .expiry').html(ele_parent.find('.expiry').text());
                        $('#editstock-modal .qty').html(ele_parent.find('.qty').text());
                        $('#editstock-modal .sold').html(ele_parent.find('.sold').text());
                        $('#editstock-modal').modal('show');
                    });
                    $('#editstock-modal').on('hidden.bs.modal', function (e) {
                        $('#editstock-modal input').not( "[name='_token']" ).val('');
                    })
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
                            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicine/stock/delete" class="delete-card-button" method="post" siq_id="autopick_9325">
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
