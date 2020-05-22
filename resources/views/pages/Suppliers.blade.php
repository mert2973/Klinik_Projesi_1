@extends('system_layouts.master_sys')
@section('icerik')
    
    <script>
        $(document).ready(function () {
            // $('#Pharmacy_Rotate').addClass('rotate') ;
            $('#Account_active').addClass('active') ;
            $('#Suppliers_text').addClass('text-white') ;
        });
    </script>
    
    
    <div class="page-wrapper">
        <div class="page-body">
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
                        <h2 class="page-title-text d-inline-block">Tedarikçiler</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('Dashboard')}}">Dashboard</a></li>
                                <li>Tedarikçiler</li>
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
                        <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-supplier"><i class="ti-plus pr-2"></i> Yeni Tedarikçi Ekle</a>
                    </div>
                </div>
            </div>
        
            <!-- Tax list page start -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row align-items-center pb-3">
                              
                                
                                <div class="col-sm-12 text-right">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Ara:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                  <!--- datatable-table dataTable --->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr class="table-heading" role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 31px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 206px;">Tedarikçi Adı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 107px;">Email Adresi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 111px;">Telefon Numarası</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 209px;">Adres</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 62px;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $num=1 @endphp
                                        @foreach($suppliers as $spp)
                                        <tr role="row" class="odd">
                                            @if($num<10)
                                                <td>{{"INVP-0000"}}{{$num++}}</td>
                                            @elseif($num<100)
                                                <td>{{"INVP-000"}}{{$num++}}</td>
                                            @elseif($num<1000)
                                                <td>{{"INVP-00"}}{{$num++}}</td>
                                            @elseif($num>=10000 || $num<=10000)
                                                <td> {{"INVP-"}}{{$num++}}</td>
                                            @endif
                                            <td class="text-primary">{{$spp->spp_name}}</td>
                                            <td>{{$spp->spp_email}}</td>
                                            <td>{{$spp->spp_phone}}</td>
                                            <td>{{$spp->spp_adress}}</td>
                                                <td class="table-action">
                                                    <div class="dropdown d-md-inline-block">
                                                        <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-right export-button">
                
                                                            <li><a href="{{route('Suppliers.show',$spp->id)}}"><i class="ti-layout-media-center-alt pr-2"></i>İncele</a></li>
                                                            <li>
                                                                <a  class=" edit-tax" data-name="{{$spp->spp_name}}" data-email="{{$spp->spp_email}}" data-phone="{{$spp->spp_phone}}" data-address="{{$spp->spp_adress}}" data-id="{{$spp->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Düzenle">
                                                                    <i class="ti-pencil-alt pr-2"></i>
                                                                    Düzenle
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <button class="table-delete text-danger delete" type="hidden" data-toggle="tooltip" title="" data-original-title="Delete"
                                                            value="{{$spp->id}}" id="del_spp<?php del_spp_func(1); ?>">
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
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Toplam: {{ $suppliers->lastPage() }} Sayfa<br>Toplam {{$suppliers->total()}} Tedarikçiden {{$suppliers->count()}} Kayıt Gösteriliyor</div>
                                </div>
                                <div class="col-sm-8 col-md-8 col-lg-8 " >
                                    <span style="float: right">{{ $suppliers->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- ADD EDIT MODAL -->
            <div class="modal fade" id="add-supplier" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Yeni Tedarikçi Ekle</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="{{route('Suppliers.store')}}" method="post" ><!--siq_id="autopick_2853" --->
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Tedarikçi Adı <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Supplier Name . . ." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Adresi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Supplier Email Address . . .">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Telefon Numarası <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-mobile"></i></span></div>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Supplier Phone Number . . ." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Adres</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                        <textarea name="address" class="form-control" placeholder="Enter Address . . ."></textarea>
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
        
        
            <!-- Delete Modal -->
            <div id="delete-card" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Silme İşlemini Onaylayın</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">İlgili Tedarikçi Bilgilerini Silmek İstediğinizden Emin misiniz?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="" class="delete-card-button" method="post" id="del_spp_frm">
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
            var del_id="<?php function del_spp_func($id){ return $id ;} ?>";
            $("#del_spp,del_id").click(function () {
                var org_del=window.location.origin;
               var del_idd=$(this).val();
               $("#del_spp_frm").get(0).setAttribute("action",org_del+"/Suppliers/"+del_idd);
               
            });
            
            //New or Edit Payment type Modal *************
            $('body').on('click', '.edit-tax', function () {
                var org_edit=window.location.origin;
                var ele = $(this);
                var data = ele.data();
                $('#add-supplier input[name="name"]').val(ele.data("name"));
                $('#add-supplier input[name="email"]').val(ele.data("email"));
                $('#add-supplier input[name="phone"]').val(ele.data("phone"));
                $('#add-supplier textarea[name="address"]').val(ele.data("address"));
                //$('#add-supplier input[name="id"]').val(ele.data("id"));
                $('#add-supplier .modal-title').text('Tedarikçi Bilgilerini Düzenle');
                $('#add-supplier form').get(0).setAttribute("action",org_edit+"/Suppliers/"+ele.data("id")+"/edit");
                $('#add-supplier form').attr("method","get");

                $('#add-supplier').modal('show');
            });
        });
    </script>
@endsection
