@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Account_active').addClass('active') ;
            $('#Casing_text').addClass('text-white') ;
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
            @if (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                        <span aria-hidden="true" style="line-height: 0.6">&times;</span>
                    </button>
                    <strong>{{ session('warning') }}</strong>
                </div>
            @endif
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Kasalar Ve Bankalar</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Kasalar Ve Bankalar</span>
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
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addItem" id="add-item"><i class="ti-plus pr-2"></i> Yeni Kasa Ekle</a>
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
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 100px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 125px;">Hizmet Adı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 120px;">Şube Adı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 120px;">Para Birimi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 300px;">Açıklama</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 150px;">Telefon</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 102px;"></th></tr>
                                        </thead>
                                        <tbody>
                                          @php $say=1; @endphp
                                          @foreach($all_casings as $list)
                                            <tr role="row" class="odd">
                                                <td>{{"CSH-000".$say++}}</td>
                                                <td class="text-primary">{{$list->service_name}}</td>
                                                <td>{{$list->branch_name}}</td>
                                                <td>{{$list->currency}}</td>
                                                <td>{{$list->cs_description}}</td>
                                                <td>{{$list->cs_phone}}</td>
                                               
                                                
                                                <td class="table-action">
                                                    <div class="dropdown d-md-inline-block">
                                                        <a class="text-primary edit dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="ti-more"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-right export-button" x-placement="bottom-end" style="position: absolute; transform: translate3d(32px, 32px, 0px); top: -4px; left: 0px; will-change: transform;">
                
                                                            <li>
                                                                <a href="{{route('Casing.show',$list->id)}}"><i class="ti-layout-media-center-alt pr-2 font-16"></i>İncele</a>
                                                            </li>
                                                            <li>
                                                                <a  class="edit-item" data-name="{{$list->service_name}}"  data-description="{{$list->cs_description}}" data-id="{{$list->id}}"
                                                                   data-branch="{{$list->branch_name}}" data-phone="{{$list->cs_phone}}" data-currency="{{$list->currency}}" data-toggle="tooltip" title="" data-original-title="Edit" id="edit-item1">
                                                                    <i class="ti-pencil-alt pr-2 font-16" ></i> Düzenle
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <button type="button" value="{{$list->id}}" class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Delete" id="del_itm<?php del_itm_fnc(1); ?>">
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
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Toplam: {{ ""}} Sayfa<br>Toplam {{""}} Hizmetten {{""}} Kayıt Gösteriliyor</div>
                                </div>
                                <div class="col-sm-8 col-md-8 col-lg-8 " >
                                    <span style="float: right">{{ "" }}</span>
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
                            <h5 class="modal-title">Yeni Hesap Ekle</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="{{route("Casing.store")}}" method="post" id="the_form">
                            @csrf
                           <input type="hidden" name="_method" value="PATCH" id="chk_edit_or_add">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label class="col-form-label">Hizmet Adı <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                                <input type="text" class="form-control name" value="" name="cash[c_name]" placeholder="Hizmet adını giriniz. . ." required="">
                                                <input type="hidden" class="cash['id']" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="col-form-label">Para Birimi <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text ti-money "></span>
                                                </div>
                                                <select class="form-control currency"  name="cash[currency]" required>
                                                    <option>TL</option>
                                                    <option>USD</option>
                                                    <option>EUR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-form-label">Şube Adı</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <input class="form-control branch_name" name="cash[branch_name]" placeholder="Şube adını giriniz . . ." required>
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <label class="col-form-label">Açıklama</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <textarea class="form-control description" name=cash[c_desc]"  placeholder="Bir açıklama giriniz. . ."></textarea>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label class="col-form-label">Telefon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <input class="form-control phone" name="cash[c_phone]" placeholder="Şube adını giriniz . . ." >
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
                        $('#addItem .branch_name').val(ele.data("branch"));
                        $('#addItem .currency').val(ele.data("currency"));
                        $('#addItem .phone').val(ele.data("phone"));
                        $('#addItem .id').val(ele.data("id"));
                        $('#addItem .modal-title').text('Hesap Bilgilerini Düzenle');
                        $('#addItem').modal('show');
                    });

                    $('#addItem').on('hidden.bs.modal', function (e) {
                        $('#addItem .modal-title').text('Yeni Hesap Ekle');
                        /*$('#addItem input').not( "[name='_token']" ).val(''); */
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
            var org_itm=window.location.origin;
            $("#del_itm,id").click(function () {
                var get_id=$(this).val();
                $("#del_form").get(0).setAttribute("action",org_itm+"/Casing/"+get_id);
            });
            
       
          $("#add-item").click(function () {
            //  alert("tıklandı ");
             $("#the_form").get(0).setAttribute("action",org_itm+"/Casing") ;
              $("#the_form").attr("method","POST");
              $("#chk_edit_or_add").val("");
          });
          $("body").on("click","#edit-item1",function () {
             var id= $(this).data("id");
             // alert(id);
              $("#the_form").get(0).setAttribute("action",org_itm+"/Casing/"+id);
              $("#chk_edit_or_add").val("PATCH");
          });
        });
    </script>
@endsection
