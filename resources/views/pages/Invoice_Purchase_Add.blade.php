@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            // $('#Pharmacy_Rotate').addClass('rotate') ;
            $('#Account_active').addClass('active') ;
            $('#Invoices_active').addClass('active') ;
            $('#Invoices_Purchase_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Yeni Fatura Ekle</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{'Dashboard'}}">Dashboard</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicine/billing">Yeni Fatura Ekle</a></li>
                                <li>Yeni Fatura Ekle</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
        
            <form action="" method="post" siq_id="autopick_2111">
                <input type="hidden" name="_token" value="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name<span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="billing[name]" class="form-control patient-name ui-autocomplete-input" value="" placeholder="Name" autocomplete="off">
                                        <input type="hidden" name="billing[patient_id]" class="patient-id">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="billing[email]" class="form-control patient-mail" value="" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="billing[mobile]" class="form-control patient-mobile" value="" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Doctor</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <input type="text" name="billing[doctor]" class="form-control patient-doctor ui-autocomplete-input" value="" placeholder="Doctor" autocomplete="off">
                                        <input type="hidden" name="billing[doctor_id]" class="patient-doctor-id" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Payment Method</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <select name="billing[method]" class="custom-select" required="">
                                            <option value="1">Bank Transfer</option>
                                            <option value="2">Cash Payments</option>
                                            <option value="3">Credit card payments</option>
                                            <option value="4">Cheque</option>
                                            <option value="5">Direct debit payments</option>
                                            <option value="6">Digital currencies</option>
                                            <option value="7">Paypal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="billing-items table-responsive mb-4">
                            <table class="table table-input table-middle">
                                <thead>
                                <tr>
                                    <th>Name<span class="form-required">*</span></th>
                                    <th style="min-width: 100px;">Batch No<span class="form-required">*</span></th>
                                    <th>Expiry Date<span class="form-required">*</span></th>
                                    <th>Quantity * | Available Qty</th>
                                    <th>Sale Price<span class="form-required">*</span></th>
                                    <th>Tax</th>
                                    <th>Price<span class="form-required">*</span></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="item-row">
                                    <td>
                                        <input type="text" name="billing[items][0][name]" class="form-control item-name ui-autocomplete-input" required="" autocomplete="off">
                                        <input type="hidden" name="billing[items][0][medicine_id]" class="form-control item-medicine-id" required="">
                                        <input type="hidden" name="billing[items][0][new]" value="1">
                                    </td>
                                    <td>
                                        <select name="billing[items][0][batch]" class="custom-select item-batch" required=""></select>
                                        <input type="hidden" name="billing[items][0][batch_name]" class="item-batch-name">
                                    </td>
                                    <td>
                                        <input type="text" name="billing[items][0][expiry]" class="form-control item-expiry bg-white" required="" readonly="">
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" name="billing[items][0][qty]" class="form-control item-qty" required="">
                                            <div class="input-group-prepend"><span class="item-available-qty input-group-text">0</span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="billing[items][0][saleprice]" class="form-control item-sale" required="">
                                    </td>
                                    <td class="invoice-tax">
                                        <input type="hidden" class="item-tax-price" name="billing[items][0][taxprice]" readonly="">
                                    </td>
                                    <td>
                                        <input type="text" name="billing[items][0][price]" class="form-control bg-white item-price" required="" readonly="">
                                    </td>
                                    <td>
                                        <a class="badge badge-warning badge-sm badge-pill add-taxes m-1">Add Taxes</a>
                                        <a class="badge badge-danger badge-sm badge-pill delete m-1">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <div class="add-items d-inline-block">
                                            <a class="btn btn-success btn-sm m-1"><i class="icon-plus mr-1"></i> Add Item</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="3" class="total-line"><label class="p-2">Sub Total</label></td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="billing[subtotal]" class="form-transparent p-2 total-price" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="3" class="total-line"><label class="p-2">Tax</label></td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="billing[tax]" class="form-transparent p-2 total-tax" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="3" class="total-line">
                                        <div class="row align-items-center">
                                            <div class="col-8"><label class="p-2">Discount</label></div>
                                            <div class="col-4">
                                                <select name="billing[discounttype]" class="discount-type">
                                                    <option value="1">%</option>
                                                    <option value="2">Flat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="billing[discount]" class="form-transparent p-2 discount-total" value="">
                                        <input type="hidden" class="discount-amount" name="billing[discount_value]" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank"></td>
                                    <td colspan="3" class="total-line"><label class="p-2">Amount</label></td>
                                    <td colspan="4" class="total-value">
                                        <input type="text" name="billing[amount]" class="form-transparent p-2 total-amount" value="" readonly="">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Note</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                        <textarea name="billing[note]" class="form-control" placeholder="Enter Note or Comment . . ."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="billing[id]" value="">
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
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
                            <button type="button" class="btn btn-warning add-modal-taxes">Add Taxes</button>
                        </div>
                    </div>
                </div>
            </div>
        
            <script type="text/javascript">
                function roundNumber(number, decimals) {
                    var newString;
                    decimals = Number(decimals);
                    if (decimals < 1) {
                        newString = (Math.round(number)).toString();
                    } else {
                        var numString = number.toString();
                        if (numString.lastIndexOf(".") == -1) {
                            numString += ".";
                        }
                        var cutoff = numString.lastIndexOf(".") + decimals;
                        var d1 = Number(numString.substring(cutoff, cutoff + 1));
                        var d2 = Number(numString.substring(cutoff + 1, cutoff + 2));
                        if (d2 >= 5) {
                            if (d1 == 9 && cutoff > 0) {
                                while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
                                    if (d1 != ".") {
                                        cutoff -= 1;
                                        d1 = Number(numString.substring(cutoff, cutoff + 1));
                                    } else {
                                        cutoff -= 1;
                                    }
                                }
                            }
                            d1 += 1;
                        }
                        if (d1 == 10) {
                            numString = numString.substring(0, numString.lastIndexOf("."));
                            var roundedNum = Number(numString) + 1;
                            newString = roundedNum.toString() + '.';
                        } else {
                            newString = numString.substring(0, cutoff) + d1.toString();
                        }
                    }
                    if (newString.lastIndexOf(".") == -1) {
                        newString += ".";
                    }
                    var decs = (newString.substring(newString.lastIndexOf(".") + 1)).length;
                    for (var i = 0; i < decimals - decs; i++) newString += "0";
                    return newString;
                }

                function checkInputValue(ele_value, ele_class, error_field = 'Input') {
                    if(ele_value != '') {
                        if($.isNumeric(ele_value)) {
                            ele_value = parseFloat(ele_value);
                            if(ele_value >= 0) {
                                return true;
                            } else {
                                ele_class.val('');
                                toastr.error('Please enter numeric value in input box. field is not negative number', 'Error');
                            }
                        } else {
                            ele_class.val('');
                            toastr.error('Please enter numeric value in input box. field is only number', 'Error');
                        }
                    } else {
                        ele_class.val('');
                        //toastr.error('Please enter numeric value in input box', 'Error');
                    }
                }

                function updateTotal() {
                    var total = 0;
                    $('.item-price').each(function(i) {
                        price = $(this).val();
                        if (!isNaN(price)) { total += Number(price); }
                    });

                    var discount = Number($(".discount-total").val());
                    var after_discount = 0;

                    if ($('.discount-type').val() === "2") {
                        after_discount = total - discount;
                        after_discount = after_discount;
                    } else {
                        discount = discount * total * 0.01;
                        after_discount = total - discount;
                        after_discount = roundNumber(after_discount, 2);
                    }

                    var taxtotal = 0;
                    $('.item-tax-price').each(function(i) {
                        taxprice = $(this).val();
                        if (!isNaN(taxprice)) { taxtotal += Number(taxprice); }
                    });

                    taxprice = roundNumber(taxtotal, 2);
                    var amount = +after_discount + +taxprice;

                    $('.total-price').val(total);
                    $('.total-tax').val(taxprice);
                    $('.total-amount').val(amount);
                    $('.discount-amount').val(discount);
                }

                function updatePrice() {
                    $('.item-row').each(function(){
                        var row = $(this),
                            price = row.find('.item-sale').val() * row.find('.item-qty').val(),
                            tax_price = roundNumber(row.find('.item-tax').find(':selected').data( "rate" ) * price * 0.01, 2);
                        var tax = 0;
                        row.find('.invoice-tax p').each(function() {
                            var ele = $(this);
                            tax_amount = roundNumber(ele.find('.invoice-tax-rate').val() * price * 0.01, 2);
                            ele.find('.single-tax-price').val(tax_amount);
                            tax += Number($(this).find('input.invoice-tax-rate').val()) * price * 0.01;
                        });
                        tax_price = roundNumber(tax, 2);
                        price = Number(roundNumber(price, 2));

                        var unit_price = (+price) + (+tax_price);
                        isNaN(price) ? row.find('.item-price').val("N/A") : row.find('.item-price').val(price);
                        isNaN(tax_price) ? row.find('.item-tax-price').html("N/A") : row.find('.item-tax-price').val(tax_price);
                    });
                    updateTotal();
                }

                function bind() {
                    $(".item-purchaseprice").on('blur', updatePrice);
                    $(".item-qty").on('blur', updatePrice);
                    $(".discount-total").on('blur', updatePrice);
                    $("body").on('change', '.item-tax', updatePrice);
                    $("body").on('change', '.discount-type', updatePrice);
                }

                function initAutocomplete() {
                    $(".billing-items .item-name").autocomplete({
                        minLength: 0,
                        source: 'http://pepdev.com/theme-preview/klinikal/admin/index.php?route=getmedicine',
                        focus: function( event, ui ) {
                            $(this).parents('tr').find('.item-name').val( ui.item.label );
                            return false;
                        },
                        select: function( event, ui ) {
                            var ele = $(this), ele_parent = ele.parents('tr.item-row'),
                                path = 'http://pepdev.com/theme-preview/klinikal/admin/index.php?route=getbatch';
                            ele_parent.find('.item-name').val( ui.item.label );
                            ele_parent.find('.item-medicine-id').val( ui.item.id );
                            ele_parent.find('.item-batch option').remove();
                            $.ajax({
                                type: 'POST',
                                url: path,
                                data: { id: ui.item.id, _token: 'a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8' },
                                error: function() {
                                    toastr.error('No data Found', 'Server Error');
                                },
                                success: function(response) {
                                    response = JSON.parse(response);
                                    if (response.error == false) {
                                        ele_parent.find('.item-batch').append(response.result);
                                    } else {
                                        toastr.error(ui.item.label+' '+response.message, 'Warning');
                                    }
                                }
                            });

                            return false;
                        }
                    });
                }

                function itemHtml(count) {
                    var item_html = '<tr class="item-row">'+
                        '<td>'+
                        '<input type="text" name="billing[items]['+count+'][name]" class="form-control item-name" required>'+
                        '<input type="hidden" name="billing[items]['+count+'][medicine_id]" class="form-control item-medicine-id" required>'+
                        '<input type="hidden" name="billing[items]['+count+'][new]" value="1">'+
                        '</td>'+
                        '<td>'+
                        '<select name="billing[items]['+count+'][batch]" class="custom-select item-batch" required></select>'+
                        '<input type="hidden" name="billing[items]['+count+'][batch_name]" class="item-batch-name">'+
                        '</td>'+
                        '<td>'+
                        '<input type="text" name="billing[items]['+count+'][expiry]" class="form-control item-expiry bg-white" required readonly>'+
                        '</td>'+
                        '<td>'+
                        '<div class="input-group">'+
                        '<input type="text" name="billing[items]['+count+'][qty]" class="form-control item-qty" required>'+
                        '<div class="input-group-prepend"><span class="item-available-qty input-group-text">0</span></div>'+
                        '</div>'+
                        '</td>'+
                        '<td>'+
                        '<input type="text" name="billing[items]['+count+'][saleprice]" class="form-control item-sale" required>'+
                        '</td>'+
                        '<td class="invoice-tax">'+
                        '<input type="hidden" class="item-tax-price" name="billing[items]['+count+'][taxprice]" readonly>'+
                        '</td>'+
                        '<td>'+
                        '<input type="text" name="billing[items]['+count+'][price]" class="form-control bg-white item-price" required readonly>'+
                        '</td>'+
                        '<td>'+
                        '<a class="badge badge-warning badge-sm badge-pill add-taxes m-1">Add Taxes</a>'+
                        '<a class="badge badge-danger badge-sm badge-pill delete m-1">Delete</a>'+
                        '</td>'+
                        '</tr>';

                    if (count === 0) {
                        $(".billing-items tbody").prepend(item_html);
                    } else {
                        $(".billing-items .item-row:last").after(item_html);
                    }
                }

                $(document).ready(function () {
                    "use strict";

                    $('.billing-items').on('keyup', '.item-qty', function () {
                        var ele = $(this), value = ele.val(),
                            ele_parent = ele.parents('.item-row');
                        if (checkInputValue(value, ele)) {
                            var available = ele_parent.find('.item-available-qty').text();
                            var entered = ele_parent.find('.item-qty').val();
                            if (Number(entered) > Number(available) ) {
                                ele.val('');
                                toastr.error('Quantity must be less than Available Quantity', 'Error');
                            }
                        }
                    });

                    $(".patient-doctor").autocomplete({
                        source: 'http://pepdev.com/theme-preview/klinikal/admin/index.php?route=doctor/search',
                        minLength: 2,
                        focus: function() {return false;},
                        select: function( event, ui ) {
                            $('.patient-doctor').val(ui.item.label);
                            $('.patient-doctor-id').val(ui.item.id);
                            return false;
                        }
                    });

                    $('body').on('click', `.add-taxes, .invoice-tax p`, function () {
                        var ele = $(this).parents('.item-row').find('.invoice-tax');
                        ele.addClass('tax-modal-open');
                        ele.find('p').each(function() {
                            var id = $(this).find('.invoice-tax-id').val();
                            $('#addTax').find('#inv-taxes-'+id).prop('checked', true)
                        });
                        $('#addTax').modal('show');
                    });

                    $('#addTax').on('hidden.bs.modal', function (e) {
                        $('.tax-modal-open').removeClass('tax-modal-open');
                        $("#addTax input").prop("checked", false);
                    });

                    $('body').on('click', '.add-modal-taxes', function () {
                        $('.tax-modal-open p').remove();

                        var ele_target  = $('.tax-modal-open').parents('.item-row'),
                            price = ele_target.find('.item-purchaseprice').val() * ele_target.find('.item-qty').val(),
                            count = ele_target.find('.item-name').attr('name').split('[')[2];
                        count = parseInt(count.split(']')[0]);

                        $("input:checkbox[name=modaltax]:checked").each(function(index, element){
                            var ele = $(this), name = ele.siblings("label").text(), id = ele.val(), rate = ele.data('rate'),
                                tax_amount = roundNumber(rate * price * 0.01, 2);

                            $('.tax-modal-open').prepend('<p class="badge badge-light badge-sm badge-pill">'+
                                name+
                                '<input type="text" class="single-tax-price" name="billing[items]['+count+'][tax]['+index+'][tax_price]" value="'+tax_amount+'" readonly>'+
                                '<input type="hidden" class="invoice-tax-id" name="billing[items]['+count+'][tax]['+index+'][id]" value="'+id+'">'+
                                '<input type="hidden" name="billing[items]['+count+'][tax]['+index+'][name]" value="'+name+'">' +
                                '<input type="hidden" class="invoice-tax-rate" name="billing[items]['+count+'][tax]['+index+'][rate]" value="' +rate+'">' +
                                '</p>');
                        });
                        updatePrice();
                        $('.tax-modal-open').removeClass('tax-modal-open');
                        $('#addTax').modal('hide')
                    });

                    $('.billing-items').on('change', '.item-batch', function () {
                        var ele = $(this), ele_parent = ele.parents('tr.item-row'),
                            path = 'http://pepdev.com/theme-preview/klinikal/admin/index.php?route=getbatchdata';
                        if (ele.val() === "") {
                            ele_parent.find('.item-expiry').val('');
                            ele_parent.find('.item-qty').val('');
                            ele_parent.find('.item-available-qty').html('0');
                            ele_parent.find('.item-sale').val('');
                            return false;
                        } else {
                            ele_parent.find('.item-batch-name').val(ele.find('option:selected').text());
                            $.ajax({
                                type: 'POST',
                                url: path,
                                data: { medicine: ele_parent.find('.item-medicine-id').val(), batch: ele.val(), _token: 'a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8' },
                                error: function() {
                                    toastr.error('No data Found', 'Server Error');
                                },
                                success: function(response) {
                                    response = JSON.parse(response);
                                    if (response.error == false) {
                                        ele_parent.find('.item-expiry').val(response.result.expiry);
                                        ele_parent.find('.item-qty').val('');
                                        ele_parent.find('.item-available-qty').html(response.result.available_quantity);
                                        ele_parent.find('.item-sale').val(response.result.saleprice);
                                    } else {

                                        toastr.error(response.message, 'Warning');
                                    }
                                }
                            });
                        }
                    });

                    $('.billing-items').on('click', '.add-items', function () {
                        if($(".item-row").length === 0) {
                            itemHtml(0);
                        } else {
                            var count = $('.billing-items table tr.item-row:last .item-name').attr('name').split('[')[2];
                            count = parseInt(count.split(']')[0]) + 1;
                            itemHtml(count);
                        }
                        initAutocomplete();
                        bind();
                    });

                    $('.billing-items').on('click', '.delete', function () {
                        var ele = $(this);
                        ele.parents('.item-row').remove();
                        bind();
                        return false;
                    });

                    initAutocomplete();
                    bind();
                });
            </script>
        
            <!-- Footer -->
    
        </div>
    </div>
@endsection
