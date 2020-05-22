@extends('system_layouts.master_sys')
@section('icerik')
    @php $order_management_add=1; @endphp
    <script>
        $(document).ready(function () {

            // $('#Pharmacy_Rotate').addClass('rotate') ;
            $('#Account_active').addClass('active') ;
            // $('#Invoices_active').addClass('active') ;
            $('#Order_Management_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
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
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Fatura Oluştur</h2> <!--- Alış Faturası Ekle---->
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('Dashboard')}}">Dashboard</a></li>
                                <li><a href="{{route('Order_Management.index')}}">Sipariş Yönetimi</a></li>
                                <li>Fatura Oluştur</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            
            <form action="{{route('Order_Management.update',$crt_inv[0]->id)}}" method="post" ><!-- siq_id="autopick_9020" -->
                @csrf
                @method("PUT")
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tedarikçi Adı <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <select name="purchase[supplier]" class="form-control" readonly data-toggle="tooltip" readonly title="Değiştirilemez">
                                            <option value="{{$crt_inv[0]->supplier_id}}">{{$crt_inv[0]->spp_name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sipariş No</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <input name="purchase[note]"  class="form-control"
                                               value="@if($crt_inv[0]->id<10){{"SP-000".$crt_inv[0]->id}} @elseif($crt_inv[0]->id<100){{"SP-00".$crt_inv[0]->id}}@elseif($crt_inv[0]->id<1000){{"SP-0".$crt_inv[0]->id}}@elseif($crt_inv[0]->id>=10000 || $crt_inv[0]->id<=10000){{"SP-".$crt_inv[0]->id}}@endif"
                                               readonly placeholder=" Sipariş no. . ." data-toggle="tooltip" readonly title="Değiştirilemez">
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Teslimat Tarihi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="purchase[date]" readonly="readonly" class="form-control bg-white default1_datetimepicker" value="{{Carbon\Carbon::parse($crt_inv[0]->order_date)->format("d-m-Y")}}" placeholder=" Sipariş tarihi"   required="" >
                                    </div>
                                </div>
                            
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sipariş Tarihi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="purchase[delivery_date]" class="form-control bg-white " value="{{Carbon\Carbon::parse($crt_inv[0]->delivery_date)->format("d-m-Y")}}"  placeholder=" Sipariş tarihi"  required="" data-toggle="tooltip" readonly title="Değiştirilemez">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Not</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <textarea name="purchase[note]" class="form-control" placeholder="Bir not giriniz . . .">{{$crt_inv[0]->note}}</textarea>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="purchase-items table-responsive">
                            <table class="table table-input">
                                <thead>
                                <tr>
                                    <th>Ürün Adı<span class="form-required">*</span></th>
                                    <!-- <th>Batch No<span class="form-required">*</span></th> -->
                                    <!-- <th>Expiry Date<span class="form-required">*</span></th> -->
                                    <!--  <th>Packing Qty</th> -->
                                    <th>Miktar<span class="form-required">*</span></th>
                                    <th>Teslim Alınan<span class="form-required">*</span></th>
                                    <th>Kalan<span class="form-required">*</span></th>
                                    <!--  <th>Purchase Price<span class="form-required">*</span></th> -->
                                    <th>Alış Fiyatı<span class="form-required">*</span></th>
                                    <th>Vergi</th>
                                    <th>Tutar<span class="form-required">*</span></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $say=0; $say2=0; @endphp
                               @foreach($itms_with_tax as $list)
                                   <input type="hidden" name="purchase[chk_qty][{{$say}}][back_up_dqty]" value="{{$list->delivery_qty}}">
                                   <input type="hidden" name="purchase[chk_qty][{{$say}}][id_prdct]" value="{{$list->itm_id}}">
                                <tr class="item-row">
                                    <td>
                                        <input type="hidden" name="purchase[items1][{{$say}}][row_id]" required="" value="{{"$list->id"}}">
                                        <textarea class="product_name item-name ui-autocomplete-input" name="purchase[items1][{{$say}}][name]" required="" readonly autocomplete="off">{{$list->itm_name}}</textarea>
                                        <input type="hidden" class="item-id" name="purchase[items1][{{$say}}][medicine_id]" value="{{$list->itm_id}}"  required="">
                                    </td>
                               
                                    <td>
                                        <textarea class="item-qty" name="purchase[items1][{{$say}}][qty]" readonly data-toggle="tooltip" title="Değiştirilemez" required="">{{$list->quantity}}</textarea>
                                    </td>
                                    
                                    <td>
                                        <textarea class="delivery_qty" name="purchase[items1][{{$say}}][delivery_qty]" required="">{{$list->delivery_qty}}</textarea>
                                       
                                    </td>
                                    <td>
                                        <textarea class="remaning_qty" name="purchase[items1][{{$say}}][remaning_qty]" readonly required="">{{$list->remaning_qty}}</textarea>
    
                                    </td>
                                    
                                    <td>
                                        <textarea class="item-purchaseprice" name="purchase[items1][{{$say}}][purchaseprice]" required="">{{$list->purchaseprice}}</textarea>
                                    </td>
                                 
                                    <td class="invoice-tax">
                                        @foreach($list["order_itms_with_tax"] as $tax)
                                        <p class="badge badge-light badge-sm badge-pill "> {{$tax->tax_name}}
                                            <input type="hidden" class="invoice-tax-id" name="purchase[items1][{{$say}}][tax][{{$say2}}][id]" value="{{$tax->id}}">
                                            <input type="text" class="single-tax-price w-50" name="purchase[items1][{{$say}}][tax][{{$say2}}][tax_price]" value="{{$tax->tax_price}}" readonly="">
                                            
                                            <input type="hidden" name="purchase[items1][{{$say}}][tax][{{$say2}}][name]" value="{{$tax->tax_name}}">
                                            <input type="hidden" class="invoice-tax-rate" name="purchase[items1][{{$say}}][tax][{{$say2}}][rate]" value="{{$tax->tax_rate}}">
                                            <button type="button" class="font-14 text-red text-right delete_tax">x</button>
                                        </p>
                                            
                                            @php $say2++; @endphp
                                        @endforeach
                                        <input type="hidden" class="item-tax-price" name="purchase[items1][{{$say}}][taxprice]" value="{{$list->total_tax}}" readonly="">
                                    </td>
                                    <td>
                                        <textarea class="bg-white item-price" name="purchase[items1][{{$say}}][price]" required="" readonly="">{{$list->total_price}}</textarea>
                                    </td>
                                    <td>
                                        <a class="badge badge-warning badge-sm badge-pill add-taxes m-1 first">Vergi Ekle</a>
                                        <a class="badge badge-danger badge-sm badge-pill delete m-1">Sil</a>
                                    </td>
                                </tr>
                                @php $say++; @endphp
                               @endforeach
                                
                                <tr>
                                    <td colspan="10">
                                        <div class="add-items_order d-inline-block">
                                            <a class="btn btn-success btn-sm m-1"><i class="icon-plus mr-1"></i> Öğe Ekle</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="2" class="total-line"><label class="p-2">Ara Toplam</label></td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="purchase[total]" class="form-transparent p-2 total-price" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="2" class="total-line"><label class="p-2">Vergi</label></td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="purchase[tax]" class="form-transparent p-2 total-tax" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="2" class="total-line">
                                        <div class="row align-items-center">
                                            <div class="col-8"><label class="p-2">İndirim</label></div>
                                            <div class="col-4">
                                                <select name="purchase[discounttype]" class="discount-type">
                                                    <option value="1" @if($crt_inv[0]->discounttype==1) selected @endif>%</option>
                                                    <option value="2" @if($crt_inv[0]->discounttype==2) selected @endif>Flat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="purchase[discount]" class="form-transparent p-2 discount-total" value="{{$crt_inv[0]->discount}}">
                                        <input type="hidden" class="discount-amount" name="purchase[discount_value]" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="2" class="total-line"><label class="p-2">Toplam</label></td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="purchase[amount]" class="form-transparent p-2 total-amount" value="" readonly="">
                                    </td>
                                </tr>
                                <!--<tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="2" class="total-line"><label class="p-2">Ödenen</label></td>
                                    <td colspan="4" class="paid-value">
                                        <input type="text" name="purchase[paid]" class="form-transparent p-2 paid-money" value="" >
                                    </td>
                                </tr> -->
                                <!--<tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="2" class="total-line"><label class="p-2">Kalan Ödeme</label></td>
                                    <td colspan="4" class="paid-value">
                                        <input type="text" name="purchase[due]" class="form-transparent p-2 due-money" value="0" >
                                    </td>
                                </tr> -->
                                <input type="hidden" name="purchase[total_qty]" value=""  class="total_qty">
                                <input type="hidden" name="purchase[total_delvery]" value=""  class="total_delvery">
                                <input type="hidden" name="purchase[total_remning]" value=""  class="total_remning">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <input type="hidden" name="purchase[id]" value="">
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
                    </div>
                </div>
            </form>
            
            <div class="modal fade" id="addTax">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Vergi</h5>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-1" value="0" data-rate="0" data-name="KDV" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-1">KDV (0%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-2" value="1" data-rate="1" data-name="KDV" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-2">KDV (1%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-3" value="8" data-rate="8" data-name="KDV" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-3">KDV (8%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-4" value="18" data-rate="18" data-name="KDV" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-4">KDV (18%)</label>
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning add-modal-taxes ">Vergi Ekle</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- <link rel="stylesheet" href="public/css/bootstrap-datetimepicker.min.css">
             <script type="text/javascript" src="public/js/bootstrap-datetimepicker.min.js"></script> -->
        
        </div>
    </div>
  
<script>
    $(window).on("load",function () {
     $("body").click(); //after load click to calculate of total inv
    }) ;
</script>
@endsection

