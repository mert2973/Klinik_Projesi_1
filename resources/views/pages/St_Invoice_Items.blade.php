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
                        <h2 class="page-title-text d-inline-block">Hizmetler</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Hizmetler</span>
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
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addItem"><i class="ti-plus pr-2"></i> Yeni Hizmet Ekle</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row align-items-center pb-3">
                             
                                <div class="col-sm-12 text-right">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Ara:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- datatable-table dataTable ---->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 10px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 95px;">Hizmet Adı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 30px;">Fiyatı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 662px;">Açıklaması</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 82px;"></th></tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @foreach($invoice_items as $itms)
                                        <tr role="row" class="odd">
                                            <td>{{$i++}}</td>
                                            <td class="text-primary">{{$itms->product_name}}</td>
                                            <td>{{$itms->item_cost}}</td>
                                            <td>{{$itms->product_note}}</td>
                                            <td class="table-action">
                                                <a class="text-primary edit edit-item" data-name="Physiotherapy" data-description="{{$itms->product_note}}" data-id="1"
                                                   data-price="{{$itms->item_cost}}" data-currency="0" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                                <button type="button" value="{{$itms->id}}" class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete" id="del_itm<?php del_itm_fnc(1); ?>">
                                                    <i class="ti-trash font-16"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row align-items-center pt-3">
                                <div class="col-sm-12 col-md-4">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Toplam: {{ $invoice_items->lastPage() }} Sayfa<br>Toplam {{$invoice_items->total()}} Hizmetten {{$invoice_items->count()}} Kayıt Gösteriliyor</div>
                                </div>
                                <div class="col-sm-8 col-md-8 col-lg-8 " >
                                    <span style="float: right">{{ $invoice_items->links() }}</span>
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
                        <form action="{{route("St_Invoice_Items.store")}}" method="post" ><!--siq_id="autopick_1754" -->
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" class="id" name="item[id]" value="">
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
                                <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
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
                            <h5 class="modal-title">Silme İşlemini Onayla</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">Simek İstediğinizden Emin misiniz?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="" class="delete-card-button" method="post" id="del_form"><!--siq_id="autopick_5894"-->
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
         var id="<?php function del_itm_fnc($id){return $id;} ?>";
         $("#del_itm,id").click(function () {
             var org_itm=window.location.origin;
            var get_id=$(this).val();
            $("#del_form").get(0).setAttribute("action",org_itm+"/St_Invoice_Items/"+get_id);
         });
      });
    </script>
@endsection
