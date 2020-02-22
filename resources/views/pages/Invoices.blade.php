@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Invoices_active').addClass('active') ;
        });
    </script>
<div class="page-wrapper">
    <div class="page-body"><!-- Invoice List Page start -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">Invoices</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="{{url('Dashboard')}}">Dashboard</a></li>
                            <li>Invoices</li>
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
                            <li><a href="#" class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                            <li><a href="#" class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                            <li><a href="#" class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                            <li><a href="" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                            <li><a href="" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                        </ul>
                    </div>
                    <a href="{{url('Invoice_Add')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i> New Invoice</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row align-items-center pb-3"><div class="col-sm-6 text-left"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-middle table-bordered table-striped invoice-table dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 32px;">ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Patient Info: activate to sort column ascending" style="width: 109px;">Patient Info</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 82px;">Amount</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Due: activate to sort column ascending" style="width: 48px;">Due</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Doctor: activate to sort column ascending" style="width: 72px;">Doctor</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 69px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Invoice Date: activate to sort column ascending" style="width: 120px;">Invoice Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 128px;">Created Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 17px;"></th></tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">No data available in table</td></tr></tbody>
                                    <tfoot>
                                    <tr><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1">$0</th><th rowspan="1" colspan="1">$0</th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row align-items-center pt-3">
                            <div class="col-sm-12 col-md-4">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
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
                                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item last disabled" id="DataTables_Table_0_last">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">
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
                    startDate: "18-02-2020",
                    endDate: "18-02-2020",
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                        'All Time': [moment('2015-01-01'), moment().add(30, 'days')]
                    },
                });

                $('.table-date-range').on('apply.daterangepicker', function(ev, picker) {
                    window.location.replace(''+'&start='+picker.startDate.format('YYYY-MM-DD')+'&end='+picker.endDate.format('YYYY-MM-DD'));
                });

                var invoiceTable = $('.invoice-table').DataTable({
                    aLengthMenu: [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
                    iDisplayLength: 10,
                    pagingType: 'full_numbers',
                    order: [],
                    dom: "<'row align-items-center pb-3'<'col-sm-6 text-left'l><'col-sm-6 text-right'f>><'row'<'col-sm-12'tr>><'row align-items-center pt-3'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-8 text-right dataTables_pager'p>>",
                    responsive: false,
                    buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
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
                            return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ? i : 0;
                        };
                        amount = api.column(2).data().reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                        pageamount = api.column( 2, { page: 'current'} ).data().reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                        due = api.column(3).data().reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                        pagedue = api.column(3, { page: 'current'} ).data().reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                        $( api.column(2).footer() ).html('$'+amount);
                        $( api.column(3).footer() ).html('$'+due);
                    }
                });

                $(".export-button .print").on("click", function(e) {
                    e.preventDefault(); invoiceTable.button(0).trigger()
                });

                $("export-button .copy").on("click", function(e) {
                    e.preventDefault(); invoiceTable.button(1).trigger()
                });

                $(".export-button .excel").on("click", function(e) {
                    e.preventDefault(); invoiceTable.button(2).trigger()
                });

                $(".export-button .csv").on("click", function(e) {
                    e.preventDefault(); invoiceTable.button(3).trigger()
                });

                $(".export-button .pdf").on("click", function(e) {
                    e.preventDefault(); invoiceTable.button(4).trigger()
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
                        <p class="form-text">All Payments and Attachments will be deleted.</p>
                    </div>
                    <div class="modal-footer">
                        <form action="" class="delete-card-button" method="get" siq_id="autopick_3544">
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
