@extends('system_layouts.master_sys')
@section('icerik')
    
    <script>
        $(document).ready(function () {
            // $('#Pharmacy_Rotate').addClass('rotate') ;
            $('#Account_active').addClass('active') ;
            $('#Product_Stocks_text').addClass('text-white') ;
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
                        <h2 class="page-title-text d-inline-block">Yeni Ürün Ekle</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url("Dashboard")}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Ürün Ekle</span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
            <form action="{{route('Product_Stocks.store')}}" method="post" enctype="multipart/form-data"><!-- siq_id="autopick_2179"-->
                @csrf
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ürün Adı <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <input type="text" name="product_name" class="form-control" value="" placeholder="Ürün adını giriniz . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Stok Kodu <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <input type="text" name="stock_code" class="form-control" value="" placeholder="Stok kodunu giriniz . . .">
                                    </div>
                                </div>
                            </div>
                           <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tedarikçi<span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <select name="supplier_id" class="custom-select">
                                            <option value="1">Tedarikçi 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ürün Kategorisi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <select name="product_catgry" class="custom-select">
                                            <option value="Diş">Diş</option>
                                            <option value="Tablet(Hap)">Tablet(Hap)</option>
                                            <option value="Şurup">Şurup</option>
                                            <option value="Kapsül">Kapsül</option>
                                            <option value="Enjeksiyon">Enjeksiyon</option>
                                            <option value="Krem">Krem</option>
                                            <option value="Oksijen Cihazı">Oksijen Cihazı</option>
                                            <option value="Bebek Bezi">Bebek Bezi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Not</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <textarea name="product_note" class="form-control" placeholder="Bir not giriniz . . ."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
                    </div>
                </div>
            </form>
         </div>
    </div>

@endsection
