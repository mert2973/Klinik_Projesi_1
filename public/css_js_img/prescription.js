$(document).ready(function () {
   "use strict";
    function medicine_autocomplete() {
        $(".prescription-name").autocomplete({
            minLength: 0,
            source: 'ilaç isimlerini al',
            focus: function( event, ui ) {
                $(this).parents('tr').find('.prescription-name').val( ui.item.label );
                return false;
            },
            select: function( event, ui ) {
                $(this).parents('tr').find('.prescription-name').val( ui.item.label );
                $(this).parents('tr').find('.prescription-generic').val( ui.item.generic );
                return false;
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            return $( "<li>" )
                .append( "<div>" + item.label + "<br>" + item.generic + "</div>" )
                .appendTo( ul );
        };
    }

    $('body').on('keydown.autocomplete', '.prescription-name', function() {
        medicine_autocomplete();
    });
    if ($(".medicine-delete").length < 2) { $(".medicine-delete").show(); }
    else { $(".medicine-delete").show(); }

    $('body').on('click', '.medicine-delete', function() {
        $(this).parents('tr').remove();
        if ($(".medicine-delete").length < 2) $(".medicine-delete").show();
    });
    var count=0;
    $('#add-medicine').click(function () {
        if ($(".medicine-delete").length < 1) { $(".medicine-delete").show(); }
        else { $(".medicine-delete").show(); }
        // var count = $('.medicine-table .medicine-row:last .prescription-name').attr('name').split('[')[2];
        // count = parseInt(count.split(']')[0]) + 1;
        count +=1;
        $(".medicine-row:last").after('<tr class="medicine-row">'+

            '<td><input class="form-control prescription-name" name="prescription[medicine]['+count+'][name]" value="" placeholder="Medicine Name"></td>'+
            '<td><textarea class="form-control prescription-generic" name="prescription[medicine]['+count+'][generic]" rows="3" placeholder="Generic"></textarea></td>'+
            '<td><select name="prescription[medicine]['+count+'][dose]" class="form-control"><option value="1-0-0">1-0-0</option><option value="1-0-1">1-0-1</option><option value="1-1-1">1-1-1</option><option value="0-0-1">0-0-1</option><option value="0-1-0">0-1-0</option></select></td>'+
            '<td><select name="prescription[medicine]['+count+'][duration]" class="form-control"><option value="1">1 Gün</option><option value="2">2 Gün</option><option value="3">3 Gün</option><option value="4">4 Gün</option><option value="5">5 Gün</option><option value="6">6 Gün</option><option value="8">8 Gün</option><option value="10">10 Gün</option><option value="15">15 Gün</option><option value="20">20 Gün</option><option value="30">30 Gün</option><option value="60">60 Gün</option></select></td>'+
            '<td><textarea name="prescription[medicine]['+count+'][instruction]" class="form-control" rows="3" placeholder="Instruction"></textarea></td>'+
            '<td><a class="table-action-button medicine-delete"><i class="ti-trash text-danger"></i></a></td>'+
            '</tr>');
    });
});
