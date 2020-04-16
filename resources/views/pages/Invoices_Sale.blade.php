@extends('system_layouts.master_sys')
@section('icerik')

   <script>
       $(document).ready(function () {
           // $('#Pharmacy_Rotate').addClass('rotate') ;
           $('#Account_active').addClass('active') ;
           $('#Invoices_active').addClass('active') ;
           $('#Invoices_Sale_text').addClass('text-white') ;
       });
   </script>
<div class="page-wrapper">
    <div class="page-body">
        <div class="page-body">
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
                    <h2 class="page-title-text d-inline-block">Satış Faturaları</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="{{url('Dashboard')}}">Dashboard</a></li>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="ml-2">Satış Faturaları</span>
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
                    <a href="{{route('Sales_Invoices.create')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i> Yeni Satış Faturası Oluştur</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive col-lg-12">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      
                        <div class="row"><div class="col-sm-12">
                                <table class="table table-middle table-bordered table-striped invoice-table dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 32px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Patient Info: activate to sort column ascending" style="width: 100px;">Hasta Bilgisi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 82px;">Fatura Tutarı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Due: activate to sort column ascending" style="width: 95px;">Ödenecek Tutar</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Doctor: activate to sort column ascending" style="width: 80px;">Doktor</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 50px;">Durum</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Invoice Date: activate to sort column ascending" style="width: 100px;">Fatura Tarihi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 100px;">Oluşturulma Tarihi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 17px;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sales_Invoices[0]["invoices__sales"] as $inv)
                                                <tr class="odd">
                                                    @if($inv["id"]<10)
                                                        <td>{{"INV-0000"}}{{$inv["id"]}}</td>
                                                    @elseif($inv["id"]<100)
                                                        <td>{{"INV-000"}}{{$inv["id"]}}</td>
                                                    @elseif($inv["id"]<1000)
                                                        <td>{{"INV-00"}}{{$inv["id"]}}</td>
                                                    @elseif($inv["id"]>=10000 || $inv["id"]<=10000)
                                                        <td> {{"INV-"}}{{$inv["id"]}}</td>
                                                    @endif
                                                    <td >{{$inv["p_name"]}} {{$inv["p_surname"]}}
                                                    
                                                    </td>
                                                    <td >{{$inv["amount"]}}</td>
                                                    <td >{{$inv["due"]}}</td>
                                                    <td >{{$inv["name"]}} {{$inv["surname"]}}</td>
                                                    <td >{{$inv["status"]}}</td>
                                                    <td >{{$inv["invoicedate"]}}</td>
                                                    <td >{{$inv["duedate"]}}</td>
                                                    <td class="table-action">
                                                        <div class="dropdown d-inline-block">
                                                           
                                                            <a href="{{route("Sales_Invoices.show",$inv["id"])}}" class="text-primary edit" data-toggle="tooltip" title="" target="_blank" data-original-title="View">
                                                                <i class="ti-layout-media-center-alt"></i>
                                                            </a>
                                                        </div>
                                                        <button class="table-delete text-danger delete" type="hidden" data-toggle="tooltip" title="" data-original-title="Delete"
                                                                value="{{$inv["id"]}}" id="del_inv_sale<?php del_inv_sales(1) ?>"> <i class="ti-trash font-16"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                             @endforeach
                                        </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1">0 TL</th>
                                        <th rowspan="1" colspan="1">0 TL</th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                        <th rowspan="1" colspan="1"></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row align-items-center pt-3">
                            <div class="col-sm-12 col-md-4">
                            
                            </div>
                            <div class="col-sm-12 col-md-8 text-right dataTables_pager">
                            
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
                        <p class="delete-card-ttl mb-0">Belirtilen Faturayı Silmek İstediğinizden Emin misiniz??</p>
                        <p class="form-text">Fatuya ait Tüm Ödemeler ve hizmetler silinecektir</p>
                    </div>
                    <div class="modal-footer">
                        <form action="" class="delete-card-button" method="post" id="form_del"><!-- siq_id="autopick_3544" -->
                           @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger" name="delete">Sil</button>
                        </form>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <script>
       $(document).ready(function () {
          var id_del="@php function del_inv_sales($id){ return $id; } @endphp";
          var org=window.location.origin;
          $("#del_inv_sale,id_del").click(function () {
              $("#form_del").get(0).setAttribute("action",org+"/Sales_Invoices/"+$(this).val());
          });
       });
   </script>
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
               aLengthMenu: [[1,10, 25, 50, 75, -1], [1,10, 25, 50, 75, "All"]],
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

                   $( api.column(2).footer() ).html(amount+' TL');
                   $( api.column(3).footer() ).html(due+' TL');
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
@endsection
