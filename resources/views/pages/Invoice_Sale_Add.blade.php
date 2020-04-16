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
                        <h2 class="page-title-text d-inline-block">Satış Faturası</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2 text-linkedin"><a href="{{url('/Invoices_Sale')}}" >Satış Faturaları</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Satış Faturası Oluştur</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            
            <form action="{{route('Sales_Invoices.store')}}" method="post" ><!-- siq_id="autopick_8816" --->
                @csrf
                <div class="panel panel-default">
                  
                    <input type="hidden" name="invoice[id]" value="">
                    <input type="hidden" name="invoice[appointment_id]" value="">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Hasta Adı <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                        <input type="text" name="invoice[name]" class="form-control patient-name ui-autocomplete-input src-patient" value="" placeholder="Hasta adını giriniz . . ." required="" autocomplete="off">
                                        <input type="hidden" name="invoice[patient_id]" class="form-control patient-id" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Email Adresi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                        <input type="text" name="invoice[email]" class="form-control patient-mail" value="" readonly required placeholder="Hasta email adresi . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Hasta Telefon No </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-mobile"></i></span></div>
                                        <input type="text" name="invoice[mobile]" class="form-control patient-mobile" readonly value="" required placeholder="Hasta telefon numarası . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Doktor</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-heart-broken"></i></span></div>
                                        <input type="text" name="invoice[doctor]" class="form-control patient-doctor ui-autocomplete-input" value=""
                                               placeholder="Doktor adını giriniz . . ."  autocomplete="off">
                                        <input type="hidden" name="invoice[doctor_id]" class="form-control patient-doctor-id" value="" readonly="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Fatura Tarihi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="ti-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="date" name="invoice[invoicedate]" class="form-control " value="" required placeholder="Fatura tarihi"  >
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Son Ödeme Tarihi <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-calendar"></i></span></div>
                                        <input type="date" name="invoice[duedate]" class="form-control date hasDatepicker" value="" required placeholder="Son Ödeme Tarihi" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Ödeme Şekli</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-credit-card"></i></span></div>
                                        <select name="invoice[method]" class="custom-select" required="">
                                            <option value="Banka Transferi">Banka Transferi</option>
                                            <option value="Nakit Ödeme">Nakit Ödeme</option>
                                            <option value="Kredi Kartı Ödemesi">Kredi Kartı Ödemesi</option>
                                            <!--<option value="4">Cheque</option> -->
                                            <option value="Otomatik Ödeme">Otomatik Ödeme</option>
                                            <option value="Dijital Para ödemesi">Dijital Para ödemesi</option>
                                            <option value="Paypal">Paypal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Ödeme Durumu <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-check-box"></i></span></div>
                                        <select name="invoice[status]" id="" class="custom-select" required="">
                                            <option value="Ödendi">Ödendi</option>
                                            <option value="Kısmen Ödenmiş">Kısmen Ödenmiş</option>
                                            <option value="Ödenmedi">Ödenmedi</option>
                                            <option value="Bekliyor">Bekliyor</option>
                                            <option value="İşleniyor">İşleniyor</option>
                                            <option value="İptal Edildi">İptal Edildi</option>
                                            <option value="Diğer">Diğer</option>
                                            <option value="Bilinmiyor">Bilinmiyor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Fatura Durumu <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-check-box"></i></span></div>
                                        <select name="invoice[inv_status]" class="custom-select" required="">
                                            <option value="Draft">Draft</option>
                                            <option value="Published">Published</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-items table-responsive pt-3 pb-5">
                            <table class="table-input">
                                <thead>
                                <tr>
                                    <th>Hizmet Adı <span class="form-required">*</span></th>
                                    <th>Açıklama</th>
                                    <th>Hizmet Sayısı <span class="form-required">*</span></th>
                                    <th>Birim Fiyatı <span class="form-required">*</span></th>
                                    <th>Vergi</th>
                                    <th>Fiyat</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="item-row">
                                    <td class="">
                                        <textarea name="invoice[item][0][name]" class="item-name ui-autocomplete-input" required="" autocomplete="off"></textarea>
                                    </td>
                                    <td class="invoice-item">
                                        <textarea name="invoice[item][0][descr]" class="item-descr"></textarea>
                                    </td>
                                    <td class="">
                                        <textarea type="text" name="invoice[item][0][quantity]" class="item-quantity" required="">1</textarea>
                                    </td>
                                    <td class="">
                                        <textarea type="text" name="invoice[item][0][cost]" class="item-cost" required=""></textarea>
                                    </td>
                                    <td class="invoice-tax">
                                        <input type="hidden" name="invoice[item][0][taxprice]" class="item-tax-price" value="0" readonly="">
                                    </td>
                                    <td class="">
                                        <textarea type="text" name="invoice[item][0][price]" class="item-total-price" required readonly="readonly" ></textarea>
                                        <input type="hidden" class="item-price">
                                    </td>
                                    <td>
                                        <a class="badge badge-warning badge-sm badge-pill add-taxes m-1">Vergi Ekle</a>
                                        <a class="badge badge-danger badge-sm badge-pill delete m-1">Sil</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="p-2">
                                        <div class="add-items d-inline-block">
                                            <a class="btn btn-success btn-sm m-1"><i class="icon-plus mr-1"></i> Öğe Ekle</a>
                                        </div>
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Ara Toplam</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[subtotal]" class="form-transparent sub-total" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Vergi</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[tax]" class="form-transparent tax-total" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <div class="row align-items-center">
                                            <div class="col-8"><label>İndirim</label></div>
                                            <div class="col-4">
                                                <select name="invoice[discounttype]" class="form-control discount-type">
                                                    <option value="1">%</option>
                                                    <option value="2">Flat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[discount]" class="form-transparent discount-total" value="">
                                        <input type="hidden" class="discount_amount" name="invoice[discount_value]" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Toplam</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[amount]" class="form-transparent  total-amount" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Ödenen</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[paid]" class="form-transparent paid-amount" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Ödenecek Tutar</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[due]" class="form-transparent due-amount" value="" readonly="">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Müşteri Notu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-quote-left"></i></span></div>
                                        <textarea class="form-control" name="invoice[note]" rows="3">Siznle çalışmak güzeldi. </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Şartlar Ve Koşullar</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-notepad"></i></span></div>
                                        <textarea class="form-control" name="invoice[tc]" rows="3">lütfen ödeme yapınız</textarea>
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
            
            <div class="modal fade" id="addTax">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tax</h5>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-1" value="1" data-rate="5" data-name="VAT" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-1">VAT (5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-2" value="2" data-rate="7.5" data-name="VAT" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-2">VAT (7.5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-3" value="3" data-rate="10" data-name="VAT" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-3">VAT (10%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-4" value="4" data-rate="2.5" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-4">GST (2.5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-5" value="5" data-rate="5" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-5">GST (5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-6" value="6" data-rate="7.5" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-6">GST (7.5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-7" value="7" data-rate="10" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-7">GST (10%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-8" value="8" data-rate="12" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-8">GST (12%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-9" value="9" data-rate="15" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-9">GST (15%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-10" value="10" data-rate="18" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-10">GST (18%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-11" value="11" data-rate="18" data-name="Vat" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-11">Vat (18%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-12" value="12" data-rate="0" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-12">GST (0%)</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-pill add-modal-taxes">Add Taxes</button>
                        </div>
                    </div>
                </div>
            </div>
        
        
        </div>
    </div>
@endsection
