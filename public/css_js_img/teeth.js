$(document).ready(function () {
    "use strict"

    function teeth_autocomplete() {

        $(".proceses_name").autocomplete({

            source: '/get_medicine',
            //source: path.concat('/inv_items'),
            minLength: 1,
            focus: function( event, ui ) {
                $(this).parents('tr').find('.proceses_name').val( ui.item.name );
                return false;
            },
            select: function( event, ui ) {
                $(this).parents('tr').find('.proceses_name').val( ui.item.name );
                $(this).parents('tr').find('.proceses_exp').val( ui.item.description );
                $(this).parents('tr').find('.itm_id').val( ui.item.id );
                $(this).parents('tr').find('.itm_type').val( ui.item.type );
                return false;
            }
        })/*.autocomplete( "instance" )._renderItem = function( ul1, item1 ) {
            return  $( "<li>" )
                .append( "<div>" + item1.label + "<br>" + item1.price + "</div>" )
                .appendTo( ul1 );
        };*/
    }
    /* function teeth_autocomplete() { if active it could call items from get_medicine

           $(".proceses_name").autocomplete({
               source: '/get_medicine',
               minLength: 1,
               focus: function( event, ui ) {
                   $(this).parents('tr').find('.proceses_name').val( ui.item.value );
                   return false;
               },
               select: function( event, ui ) {
                   $(this).parents('tr').find('.proceses_name').val( ui.item.value );
                   // $(this).parents('tr').find('.proceses_exp').val( ui.item.description );
                   $(this).parents('tr').find('.itm_id').val( ui.item.id );
                   return false;
               }
           })
       } */

    $('body').on('keydown.autocomplete', '.proceses_name', function() {
        teeth_autocomplete();
    });
    if ($(".tooth-delete").length < 2) { $(".tooth-delete").show(); }
    else { $(".tooth-delete").show(); }

    $('body').on('click', '.tooth-delete', function() {
        $(this).parents('tr').remove();
        if ($(".tooth-delete").length < 2) $(".tooth-delete").show();
    });

 });
/**------------------------------**/

/*** Add tags to input **/
$(function () {
    /*----when will add new line ---- */
    $("#add-hzm").click(function () {
        var teeth_num = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // url points to a json file that contains an array of country names, see
            // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
            prefetch: {
                url: '/css_js_img/typehead/teeth_numbers.json',
            }
        });

        $('.teeth_num').tagsinput({
            //maxChars: 3,
            trimValue: true,
            typeaheadjs: {
                name: 'tooth_record',
                //displayKey: 'name',
                // valueKey: 'name',
                source: teeth_num.ttAdapter()
            }
        });
    });
    /**End. when will add new line **/
    /*-----For exist line---*/
    var teeth_num = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // url points to a json file that contains an array of country names, see
        // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
        prefetch: {
            url: '/css_js_img/typehead/teeth_numbers.json',
        }

    });
    $('.teeth_num').tagsinput({

        // maxChars: 3,
        trimValue: true,

        typeaheadjs: {
            name: 'tooth_record',
            //displayKey: 'name',
            // valueKey: 'name',
            source: teeth_num.ttAdapter()
        }

    });
    /*-----End.For exist line---*/

});
/***End. Add tags to input **/


