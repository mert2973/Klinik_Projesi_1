@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            // $('#Pharmacy_Rotate').addClass('rotate') ;
            $('#Account_active').addClass('active') ;
            // $('#Invoices_active').addClass('active') ;
            $('#Order_Management_text').addClass('text-white') ;
        });
    </script>
    
    <div class="page-wrapper">
        <div class="page-body">
            <!--<link rel="stylesheet" href="public/css/bootstrap-datetimepicker.min.css">
            <script type="text/javascript" src="public/js/bootstrap-datetimepicker.min.js"></script> -->
            @if (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                        <span aria-hidden="true" style="line-height: 0.6">&times;</span>
                    </button>
                    <strong>{{ session('warning') }}</strong>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                        <span aria-hidden="true" style="line-height: 0.6">&times;</span>
                    </button>
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Sipariş Yönetimi</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{"Dashboard"}}">Dashboard</a></li>
                                <li> Sipariş Yönetimi</li>
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
                                <li><a href="#" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                                <li><a href="#" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                            </ul>
                        </div>
                      <a href="{{route('Order_Management.create')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i> Yeni Sipariş Ekle</a>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row align-items-center pb-3">
                                <div class="col-lg-12 text-right">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                        <label>Ara: </label>
                                        <label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><div class="col-sm-12">
                                    <!-- purchase-table dataTable --->
                                    <table class="table table-middle table-bordered table-striped " id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 66px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Supplier Name: activate to sort column ascending" style="width: 114px;">Tedarikçi Adı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 94px;">Satın Alma Fiyatı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 24px;">Toplam Miktar</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 24px;">Teslim Alınan</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 24px;">Kalan</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Purchase Date: activate to sort column ascending" style="width: 115px;">Sipariş Tarihi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Purchase Date: activate to sort column ascending" style="width: 115px;">Teslimat Tarihi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 22px;">Not</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order_managements as $list)
                                                <tr class="odd">
                                                    @if($list->id<10)
                                                        <td>{{"SP-000".$list->id}}</td>
                                                    @elseif($list->id<100)
                                                        <td>{{"SP-00".$list->id}}</td>
                                                    @elseif($list->id<1000)
                                                        <td>{{"SP-0".$list->id}}</td>
                                                    @elseif($list->id>=10000 || $list->id<=10000)
                                                        <td>{{"SP-".$list->id}}</td>
                                                    @endif
                                                    @php $order_date= Carbon\Carbon::parse($list->order_date)->format("d/m/Y") @endphp
                                                    @php $delivery_date= Carbon\Carbon::parse($list->delivery_date)->format("d/m/Y") @endphp
                                                    <td>{{$list->spp_name}}</td>
                                                    <td>{{$list->amount}} TL</td>
                                                    <td>{{$list->total_qty}} </td>
                                                    <td>{{$list->total_delivery}}</td>
                                                    <td>{{$list->total_remaining}}</td>
                                                    <td>{{$order_date}}</td>
                                                    <td>{{$delivery_date}}</td>
                                                    <td>{{$list->note}}</td>
                                                   
                                                    <td class="table-action">
                                                        <div class="dropdown d-inline-block">
                                                            <a class="text-primary edit dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="ti-more"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-sm-right export-button" x-placement="bottom-end" style="position: absolute; transform: translate3d(32px, 32px, 0px); top: 0px; left: -3px; will-change: transform;">
                    
                                                                <li><a href="{{route('Order_Management.show',$list->id)}}"><i class="ti-pencil-alt pr-2"></i>İncele</a></li>
                                                                <li><a href=""><i class="ti-pencil-alt pr-2"></i>Düzenle</a></li>
                                                                <li><a href="{{route('Order_Management.create',['crt_inv'=>1,"sp_id"=>$list->id])}}"><i class="ti-receipt pr-2"></i>Fatura Oluştur</a></li>
                                                            </ul>
                                                        </div>
                                                        <button class="table-delete text-danger delete" type="hidden" data-toggle="tooltip" title="" data-original-title="Delete" value="" id="del"> <i class="ti-trash font-16"></i></button>
                                                    </td>
                                                    <!--<td valign="top" colspan="8" class="dataTables_empty">No data available in table</td> -->
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <!--<tfoot>
                                            
                                                <tr>
                                                    <th rowspan="1" colspan="1"></th>
                                                    <th rowspan="1" colspan="1"></th>
                                                    <th rowspan="1" colspan="1">$0</th>
                                                    <th rowspan="1" colspan="1"></th>
                                                    <th rowspan="1" colspan="1"></th>
                                                    <th rowspan="1" colspan="1"></th>
                                                    <th rowspan="1" colspan="1"></th>
                                                </tr>
                                           
                                        </tfoot> -->
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
                            <form action="" class="delete-card-button" method="post" siq_id="autopick_7727">
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
                startDate: "12-04-2020",
                endDate: "19-04-2020",
                ranges: {
                    'Today': [moment(), moment().add(1, 'days')],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'All Time': [moment('2015-01-01'), moment().add(30, 'days')]
                },
            });

            $('.table-date-range').on('apply.daterangepicker', function(ev, picker) {
                window.location.href = ''+'&start='+picker.startDate.format('YYYY-MM-DD')+'&end='+picker.endDate.format('YYYY-MM-DD');
            });

            var billingTable = $('.purchase-table').DataTable({
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

                    for (var i = row.childElementCount - 1; i >= 0; i--) {
                        if (i > 1 && i < 6) {
                            column = api.column(i).data().reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                            if ($.isNumeric(column)) {
                                $(api.column(i).footer()).html('$'+column);
                            }
                        }
                    }
                }
            });

            $(".export-button .print").on("click", function(e) {
                e.preventDefault(); billingTable.button(0).trigger()
            });

            $("export-button .copy").on("click", function(e) {
                e.preventDefault(); billingTable.button(1).trigger()
            });

            $(".export-button .excel").on("click", function(e) {
                e.preventDefault(); billingTable.button(2).trigger()
            });

            $(".export-button .csv").on("click", function(e) {
                e.preventDefault(); billingTable.button(3).trigger()
            });

            $(".export-button .pdf").on("click", function(e) {
                e.preventDefault(); billingTable.button(4).trigger()
            });
        });
    </script>
@endsection
