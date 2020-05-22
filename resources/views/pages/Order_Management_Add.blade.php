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
                        <h2 class="page-title-text d-inline-block">Sipariş Ekle</h2> <!--- Alış Faturası Ekle---->
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('Dashboard')}}">Dashboard</a></li>
                                <li><a href="{{url('Invoices_Purchase')}}">Alış Faturaları</a></li>
                                <li>Alış Faturası Ekle</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            
            <form action="{{route('Order_Management.store')}}" method="post" ><!-- siq_id="autopick_9020" -->
                @csrf
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tedarikçi Adı <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <select name="purchase[supplier]" class="custom-select" required="" id="spp">
                                            <option value="">Tedarikçi Seçiniz</option>
                                            @foreach($suppliers as $spp)
                                                <option value="{{$spp->id}}">{{$spp->spp_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sipariş No</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <input name="purchase[note]" class="form-control" placeholder=" Sipariş no. . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sipariş Tarihi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="purchase[order_date]" class="form-control bg-white default1_datetimepicker" value="" placeholder=" Sipariş tarihi" readonly="" required="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Teslimat Tarihi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="purchase[delivery_date]" class="form-control bg-white default1_datetimepicker" value="" placeholder=" Sipariş tarihi" readonly="" required="" id="">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Not</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <textarea name="purchase[note]" class="form-control" placeholder="Bir not giriniz . . ."></textarea>
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
                                  <!--  <th>Purchase Price<span class="form-required">*</span></th> -->
                                    <th>Alış Fiyatı<span class="form-required">*</span></th>
                                    <th>Vergi</th>
                                    <th>Tutar<span class="form-required">*</span></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="item-row">
                                    <td>
                                        <textarea class="product_name item-name ui-autocomplete-input" name="purchase[items1][0][name]" required="" autocomplete="off"></textarea>
                                        <input type="hidden" class="item-id" name="purchase[items1][0][medicine_id]" required="">
                                        <input type="hidden" name="purchase[items1][0][id]" required="">
                                    </td>
                                    <td>
                                        <textarea class="item-qty" name="purchase[items1][0][qty]" required=""></textarea>
                                       
                                    </td>
                                    <td>
                                        <textarea class="item-purchaseprice" name="purchase[items1][0][purchaseprice]" required=""></textarea>
                                    </td>
                                    <td class="invoice-tax">
                                        <input type="hidden" class="item-tax-price" name="purchase[items1][0][taxprice]" value="0" readonly="">
                                    </td>
                                    <td>
                                        <textarea class="bg-white item-price" name="purchase[items1][0][price]" required="" readonly=""></textarea>
                                    </td>
                                    <td>
                                        <a class="badge badge-warning badge-sm badge-pill add-taxes m-1">Vergi Ekle</a>
                                        <a class="badge badge-danger badge-sm badge-pill delete m-1">Sil</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <div class="add-items_order_add d-inline-block">
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
                                                    <option value="1">%</option>
                                                    <option value="2">Flat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="purchase[discount]" class="form-transparent p-2 discount-total" value="">
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
                                <input type="hidden" name="purchase[total_qty]" value=""  class="total_qty">
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
                            <button type="button" class="btn btn-warning add-modal-taxes">Vergi Ekle</button>
                        </div>
                    </div>
                </div>
            </div>
      
            <!-- <link rel="stylesheet" href="public/css/bootstrap-datetimepicker.min.css">
             <script type="text/javascript" src="public/js/bootstrap-datetimepicker.min.js"></script> -->
    
        </div>
    </div>
 

@endsection

