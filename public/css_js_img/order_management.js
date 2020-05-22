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
    var total_qty=0;
    $('.item-qty').each(function(i) {
        item_qty = $(this).val();
         total_qty += Number(item_qty);
    });
    var total_delivery=0;
    $(".delivery_qty").each(function () {
         var d=$(this).val();
         total_delivery += Number(d);
    });
    var total_remaining=0;
    $(".remaning_qty").each(function () {
       var r=$(this).val();
        total_remaining += Number(r);
    });

    var taxtotal = 0;
    $('.item-tax-price').each(function(i) {
        taxprice = $(this).val();
        if (!isNaN(taxprice)) { taxtotal += Number(taxprice); }
    });
   // var paid_amount=$(".paid-money").val();
    taxprice = roundNumber(taxtotal, 2);
    var amount = +after_discount + +taxprice;

    $('.total_qty').val(total_qty);
    $('.total_delvery').val(total_delivery);
    $('.total_remning').val(total_remaining);
    $('.total-price').val(total);
    $('.total-tax').val(taxprice);
    $('.total-amount').val(amount);
    $('.discount-amount').val(discount);
   // $('.due-money').val(roundNumber(amount-paid_amount,2));
}

function updatePrice() {
    $('.item-row').each(function(){
        var row = $(this),
            price = row.find('.item-purchaseprice').val() * row.find('.item-qty').val(),
            remaining_qty = row.find('.item-qty').val()-row.find('.delivery_qty').val() ,
            k=row.find('.remaning_qty').val(remaining_qty),
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

function initDatepicker() {
    $('.exp-date').datepicker({dateFormat:"dd-mm-YY"});
}

function initAutocomplete() {
    $(".product_name").autocomplete({
        minLength: 1,

       // source: '/get_medicine/',
        source: function(request, response) {
            $.getJSON("/get_medicine", { order_request: request.term }, response);
        },
        focus: function( event, ui ) {
            $(this).parents('tr').find('.product_name').val( ui.item.value );
            return false;
        },
        select: function( event, ui ) {
            $(this).parents('tr').find('.product_name').val( ui.item.value );
            $(this).parents('tr').find('.item-id').val( ui.item.id );
            return false;
        }
    });
}

function item_html_order(count) {

    var item_html_order = '<tr class="item-row">'+
        '<td>'+
        '<textarea class="product_name " name="purchase[items]['+count+'][name]" required></textarea>'+
        '<input type="hidden" class="item-id" name="purchase[items]['+count+'][medicine_id]" required>'+
        '<input type="hidden" name="purchase[items]['+count+'][id]" required>'+
        '</td>'+

        '<td>'+
        '<textarea class="item-qty" name="purchase[items]['+count+'][qty]" required></textarea>'+
        '</td>'+
        '<td>'+
        '<textarea class="delivery_qty" name="purchase[items]['+count+'][delivery_qty]" required="">0</textarea>'+
        '</td>'+
        '<td>'+
        '<textarea class="remaning_qty" name="purchase[items]['+count+'][remaning_qty]" readonly required=""></textarea>'+
        '</td>'+
        '<td>'+
        '<textarea class="item-purchaseprice" name="purchase[items]['+count+'][purchaseprice]" required=""></textarea>'+
        '</td>'+

        '<td class="invoice-tax">'+
        '<input type="hidden" class="item-tax-price" name="purchase[items]['+count+'][taxprice]" value="0" readonly>'+
        '</td>'+
        '<td>'+
        '<textarea class="bg-white item-price" name="purchase[items]['+count+'][price]" required readonly></textarea>'+
        '</td>'+
        '<td>'+
        '<a class="badge badge-warning badge-sm badge-pill add-taxes m-1 second">Vergi Ekle</a>'+
        '<a class="badge badge-danger badge-sm badge-pill delete m-1">Sil</a>'+
        '</td>'+
        '</tr>';

    if (count === 0) {
        $(".purchase-items tbody").prepend(item_html_order);
    } else {
        $(".purchase-items .item-row:last").after(item_html_order);
    }
}
function item_html_order_add(count) {

    var item_html_order = '<tr class="item-row">'+
        '<td>'+
        '<textarea class="product_name " name="purchase[items1]['+count+'][name]" required></textarea>'+
        '<input type="hidden" class="item-id" name="purchase[items1]['+count+'][medicine_id]" required>'+
        '<input type="hidden" name="purchase[items1]['+count+'][id]" required>'+
        '</td>'+

        '<td>'+
        '<textarea class="item-qty" name="purchase[items1]['+count+'][qty]" required></textarea>'+
        '</td>'+

        '<td>'+
        '<textarea class="item-purchaseprice" name="purchase[items1]['+count+'][purchaseprice]" required=""></textarea>'+
        '</td>'+

        '<td class="invoice-tax">'+
        '<input type="hidden" class="item-tax-price" name="purchase[items1]['+count+'][taxprice]" value="0" readonly>'+
        '</td>'+
        '<td>'+
        '<textarea class="bg-white item-price" name="purchase[items1]['+count+'][price]" required readonly></textarea>'+
        '</td>'+
        '<td>'+
        '<a class="badge badge-warning badge-sm badge-pill add-taxes m-1 second">Vergi Ekle</a>'+
        '<a class="badge badge-danger badge-sm badge-pill delete m-1">Sil</a>'+
        '</td>'+
        '</tr>';

    if (count === 0) {
        $(".purchase-items tbody").prepend(item_html_order);
    } else {
        $(".purchase-items .item-row:last").after(item_html_order);
    }
}

$(document).ready(function () {
    "use strict";
    $(".delete_tax").on("click",function () {
        $(this).parents("p").remove();
    });
    $('body').click(function () {
        updatePrice();
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
    /*--check if  click on record tax or new one--*/
    var check_tax_palce=1;
    $(".first").click(function () {
        check_tax_palce=1;
    });
    $("body").on("click",".second",function () {
        check_tax_palce=0;
    });
    /*--End.check if  click on record tax or new one--*/
    $('body').on('click', '.add-modal-taxes', function () {
        $('.tax-modal-open p').remove();

        var ele_target  = $('.tax-modal-open').parents('.item-row'),
            price = ele_target.find('.item-purchaseprice').val() * ele_target.find('.item-qty').val(),
            count = ele_target.find('.product_name').attr('name').split('[')[2];
        count = parseInt(count.split(']')[0]);

        $("input:checkbox[name=modaltax]:checked").each(function(index, element){
            var ele = $(this), name = ele.siblings("label").text(), id = ele.val(), rate = ele.data('rate'),
                tax_amount = roundNumber(rate * price * 0.01, 2);

            if(check_tax_palce==0){ /*- call it for new row -*/
                $('.tax-modal-open').prepend('<p class="badge badge-light badge-sm badge-pill">'+
                    name+
                    '<input type="text" class="single-tax-price w-50" name="purchase[items]['+count+'][tax]['+index+'][tax_price]" value="'+tax_amount+'" readonly>'+
                    '<input type="hidden" class="invoice-tax-id" name="purchase[items]['+count+'][tax]['+index+'][id]" value="'+id+'">'+
                    '<input type="hidden" name="purchase[items]['+count+'][tax]['+index+'][name]" value="'+name+'">' +
                    '<input type="hidden" class="invoice-tax-rate" name="purchase[items]['+count+'][tax]['+index+'][rate]" value="' +rate+'">' +
                    '<button type="button" class="font-14 text-red text-right delete_tax2">x</button>'+
                    '</p>');
            }else if(check_tax_palce==1){ /*- call it for exist row -*/
                $('.tax-modal-open').prepend('<p class="badge badge-light badge-sm badge-pill">'+
                    name+
                    '<input type="text" class="single-tax-price w-50" name="purchase[items1]['+count+'][tax1]['+index+'][tax_price]" value="'+tax_amount+'" readonly>'+
                    '<input type="hidden" class="invoice-tax-id" name="purchase[items1]['+count+'][tax1]['+index+'][id]" value="'+id+'">'+
                    '<input type="hidden" name="purchase[items1]['+count+'][tax1]['+index+'][name]" value="'+name+'">' +
                    '<input type="hidden" class="invoice-tax-rate" name="purchase[items1]['+count+'][tax1]['+index+'][rate]" value="' +rate+'">' +
                    '<button type="button" class="font-14 text-red text-right delete_tax2">x</button>'+
                    '</p>');

            }
            $(".delete_tax2").on("click",function () {
                $(this).parents("p").remove();
            });
        });
        updatePrice();
        $('.tax-modal-open').removeClass('tax-modal-open');
        $('#addTax').modal('hide')
    });

    $('.purchase-items').on('click', '.add-items_order', function () {
        if($(".item-row").length === 0) {
            item_html_order(0);
        } else {
            var count = $('.purchase-items table tr.item-row:last .product_name').attr('name').split('[')[2];
            count = parseInt(count.split(']')[0]) + 1;
            item_html_order(count);
        }
        initAutocomplete();
        initDatepicker();
        bind();
    });
    $('.purchase-items').on('click', '.add-items_order_add', function () {
        if($(".item-row").length === 0) {
            item_html_order_add(0);
        } else {
            var count = $('.purchase-items table tr.item-row:last .product_name').attr('name').split('[')[2];
            count = parseInt(count.split(']')[0]) + 1;
            item_html_order_add(count);
        }
        initAutocomplete();
        initDatepicker();
        bind();
    });

    $('.purchase-items').on('click', '.delete', function () {
        var ele = $(this);
        ele.parents('.item-row').remove();
        bind();
        return false;
    });

    initAutocomplete();
    initDatepicker();
    bind();


});
