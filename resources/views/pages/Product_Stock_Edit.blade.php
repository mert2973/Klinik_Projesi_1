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
                        <h2 class="page-title-text d-inline-block">İlaç Bilgilerini Düzenle</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url("Dashboard")}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span><a class="text-linkedin" href="{{route('Product_Stocks.index')}}">Stok/İlaçlar</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span>İlaç Bilgilerini Düzenle</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
    
            <form action="{{route('Product_Stocks.update',$inv_mdcn->id)}}" method="post" enctype="multipart/form-data"><!-- siq_id="autopick_2179"-->
                @csrf
                @method("PUT")
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>İlaç Adı <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <input type="text" name="medc_name" class="form-control" value="{{$inv_mdcn->medc_name}}" placeholder="İlaç adını giriniz . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>İlaç Kategorisi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <select name="medc_category" class="custom-select">
                                            <option @if($inv_mdcn->medc_category=="Tablet(Hap)")   selected @endif value="Tablet(Hap)">Tablet(Hap)</option>
                                            <option @if($inv_mdcn->medc_category=="Şurup") selected @endif value="Şurup">Şurup</option>
                                            <option @if($inv_mdcn->medc_category=="Kapsül") selected @endif value="Kapsül">Kapsül</option>
                                            <option @if($inv_mdcn->medc_category=="Enjeksiyon") selected @endif value="Enjeksiyon">Enjeksiyon</option>
                                            <option @if($inv_mdcn->medc_category=="Krem") selected @endif value="Krem">Krem</option>
                                            <option @if($inv_mdcn->medc_category=="Oksijen Cihazı") selected @endif value="Oksijen Cihazı">Oksijen Cihazı</option>
                                            <option @if($inv_mdcn->medc_category=="Bebek Bezi") selected @endif value="Bebek Bezi">Bebek Bezi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>İlaç Şirketi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <input type="text" name="medc_company" class="form-control" value="{{$inv_mdcn->medc_company}}" placeholder="İlaç şirketini giriniz . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenerik İlaç <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <input type="text" name="medc_generic" class="form-control" value="{{$inv_mdcn->medc_generic}}" placeholder="Jenerik ilacı giriniz . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>İlaç Grubu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <input type="text" name="medc_group" class="form-control" value="{{$inv_mdcn->medc_group}}" placeholder="İlaç grubunu giriniz . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Birim<span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-tag"></i></span>
                                                </div>
                                                <input type="text" name="medc_unit" class="form-control" value="{{$inv_mdcn->medc_unit}}" placeholder="İlaç Birimini giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Birim/Paketleme</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-tag"></i></span>
                                                </div>
                                                <input type="text" name="medc_unitpacking" class="form-control" value="{{$inv_mdcn->medc_unitpacking}}" placeholder="Birim/Paketleme giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Saklama Kutusu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-tag"></i></span>
                                        </div>
                                        <input type="text" name="medc_storebox" class="form-control" value="{{$inv_mdcn->medc_storebox}}" placeholder="Saklama yeri veya çekmece adını giriniz . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Minimum Düzey</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-tag"></i></span>
                                                </div>
                                                <input type="text" name="medc_minlevel" class="form-control" value="{{$inv_mdcn->medc_minlevel}}" placeholder="Minimum düzeyi giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tekrar Sipariş Etme Düzeyi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-tag"></i></span>
                                                </div>
                                                <input type="text" name="medc_reorderlevel" class="form-control" value="{{$inv_mdcn->medc_reorderlevel}}" placeholder="Tekrar sipariş etme düzeyini giriniz . . .">
                                            </div>
                                        </div>
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
                                        <textarea name="medc_note" class="form-control" placeholder="Bir not giriniz . . .">{{$inv_mdcn->medc_note}}</textarea>
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
