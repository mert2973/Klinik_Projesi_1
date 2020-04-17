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
                        <h2 class="page-title-text d-inline-block">Tıbbi İlaçlar</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Tıbbi İlaçlar</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a class="btn btn-white btn-sm mr-2" data-toggle="modal" data-target="#uploadmedicine-modal"><i class="ti-cloud-up text-primary pr-2"></i> Import Medicines</a>
                        <div class="dropdown d-inline-block mr-2">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"><i class="ti-download text-primary pr-2"></i> Export</a>
                            <ul class="dropdown-menu dropdown-menu-right export-button">
                                <li><a href="#" class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                                <li><a href="#" class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                                <li><a href="#" class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                                <li><a href="#" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                                <li><a href="#" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                            </ul>
                        </div>
                        <a href="{{route('Inventory_Medicines.create')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i> Yeni İlaç Ekle</a>
                    </div>
                   
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row align-items-center pb-3">
                               <!-- <div class="col-sm-6 text-left">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                        <label>Show
                                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="-1">All</option>
                                            </select> entries
                                        </label>
                                    </div>
                                </div> -->
                                <div class="col-sm-12 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Ara:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!--- datatable-table dataTable --->
                                    <table class="table table-middle table-bordered table-striped  no-footer " id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 10px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Medicine: activate to sort column ascending" style="width: 100px;">İlaç Bilgisi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 71px;">Şirket Bilgisi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Unit: activate to sort column ascending" style="width: 24px;">İlaç Birimi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Unit/Packing: activate to sort column ascending" style="width: 76px;">Birim/Paket</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 57px;">Kategori</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Storebox: activate to sort column ascending" style="width: 54px;">Saklama Kutusu</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Reorderlevel: activate to sort column ascending" style="width: 76px;">Sipariş Düzeyi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Live Stock: activate to sort column ascending" style="width: 37px;">Şimdiki Stok Adeti</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 57px;">Durum</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($inventory_mdcn as $list)
                                                    <tr role="row" class="odd">
                                                        <td>1</td>
                                                        <td>
                                                            <p class="text-primary mb-0">{{$list->medc_name}}</p>
                                                            <p class="mb-0">{{$list->medc_generic}}</p>
                                                        </td>
                                                        <td>{{$list->medc_company}}</td>
                                                        <th>{{$list->medc_unit}}</th>
                                                        <td>{{$list->medc_unitpacking}}</td>
                                                        <td>{{$list->medc_category}}</td>
                                                        <td>{{$list->medc_storebox}}</td>
                                                        <td>{{$list->medc_reorderlevel}}</td>
                                                        <td>100.00</td>
                                                        <td><span class="badge badge-sm badge-primary">Normal</span></td>
                                                        <td class="table-action">
                                                            <div class="dropdown d-inline-block">
                                                                <a class="text-primary edit dropdown-toggle" data-toggle="dropdown"><i class="ti-more"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right export-button">
                                                                    <li><a href="{{route('Inventory_Medicines.show',$list->id)}}"><i class="ti-layout-media-center-alt pr-2"></i>İncele</a></li>
                                                                    <li><a href="{{route('Inventory_Medicines.edit',$list->id)}}"><i class="ti-pencil-alt pr-2"></i>Düzenle</a></li>
                                                                </ul>
                                                            </div>
                                                            <button value="{{$list->id}}" class="table-delete text-danger delete" data-toggle="tooltip" title="" data-original-title="Sil" id="del_mdcn<?php del_mdcn(1); ?>">
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
                                <div class="col-sm-12 col-md-10">
                                    
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Toplam: {{ $inventory_mdcn->lastPage() }} Sayfa<br>Toplam {{$inventory_mdcn->total()}} İlaç Listesinden {{$inventory_mdcn->count()}} Kayıt Gösteriliyor</div>
                                </div>
                                <div class="col-sm-12 col-md-2 text-right dataTables_pager">
                                   {{$inventory_mdcn->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="uploadmedicine-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Import Medicines</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicine/upload" method="post" enctype="multipart/form-data" siq_id="autopick_6643">
                            <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Medicine Category</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <select name="category" class="custom-select">
                                            <option value="1">Tablet</option>
                                            <option value="2">Syrup</option>
                                            <option value="3">Capsule</option>
                                            <option value="4">Injection</option>
                                            <option value="5">Cream</option>
                                            <option value="6">Inhalers</option>
                                            <option value="7">Diaper</option>
                                            <option value="8">Evohaler</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="medicine" class="custom-file-input m-0" id="medicinefile" accept=".csv" required="">
                                            <label class="custom-file-label" for="medicinefile">Choose file (Only CSV file)</label>
                                        </div>
                                        <div class="input-group-append">
                                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicine/sample" class="input-group-text">Download Sample</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    var del="@php function del_mdcn($id){return $id; } @endphp";
                    var orgin=window.location.origin;
                    $("#del_mdcn,del").click(function () {
                       var del_id=$(this).val();
                      
                        $("#del_form").get(0).setAttribute("action",orgin+"/Inventory_Medicines/"+del_id);
                    });

                    $("#medicinefile").on('change', function(e) {
                        if (e.target.files.length > 0) {
                            $(this).siblings('label').text(e.target.files[0].name);
                        }
                    });
                });
            
            </script>
            <!--- Delete Modal--->
            <div id="delete-card" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Silme İşlemini Doğrulayınız...</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">Belirtilen İlacı Silmek İstediğinizden Emin Misiniz?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="" class="delete-card-button" method="post" id="del_form">
                                @csrf
                                @method("DELETE")
                                <input type="hidden" value="" class="delete-id" name="id">
                              
                                <button type="submit" class="btn btn-danger" name="delete">Sil</button>
                            </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
