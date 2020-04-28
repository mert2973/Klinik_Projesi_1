$(document).ready(function () {
    "use strict"

    function teeth_autocomplete() {

        $(".proceses_name").autocomplete({

            source: path.concat('/inv_items'),
            minLength: 1,
            focus: function( event, ui ) {
                $(this).parents('tr').find('.proceses_name').val( ui.item.name );
                return false;
            },
            select: function( event, ui ) {
                $(this).parents('tr').find('.proceses_name').val( ui.item.name );
                $(this).parents('tr').find('.proceses_exp').val( ui.item.description );
                $(this).parents('tr').find('.itm_id').val( ui.item.id );
                return false;
            }
        })/*.autocomplete( "instance" )._renderItem = function( ul1, item1 ) {
            return  $( "<li>" )
                .append( "<div>" + item1.label + "<br>" + item1.price + "</div>" )
                .appendTo( ul1 );
        };*/
    }

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
$(document).ready(function () {
"use strict";

    var count=0;
    $('#add-hzm').click(function () {
        if ($(".tooth-delete").length < 1) { $(".tooth-delete").show(); }
        else { $(".tooth-delete").show(); }
        // var count = $('.medicine-table .medicine-row:last .prescription-name').attr('name').split('[')[2];
        // count = parseInt(count.split(']')[0]) + 1;
        count +=1;
        $(".tooth-row-hzm:last").after('<tr class="tooth-row-hzm">'+

            '<td><input class="form-control proceses_name" name="teeth[tooth]['+count+'][name]" value="" placeholder="İşlem adı"><input type="hidden" class="itm_id" name="teeth[tooth]['+count+'][itm_id]"></td>'+
            '<td><input class="form-control " name="teeth[tooth]['+count+'][piece]" value="" placeholder="Adet"></td>'+
            '<td><textarea class="form-control proceses_exp" name="teeth[tooth]['+count+'][exp]" rows="2" cols="5" placeholder="Açıklama"></textarea></td>'+
            '<td > <input type="text" value="" name="teeth[tooth]['+count+'][tooth]" class="form-control " id="teeth_num'+count+'"> </td>'+
            '<td><button value="'+count+'" class="table-action-button tooth-delete" id="del_row0'+count+'"><i class="ti-trash text-danger"></i></button></td>'+
            '</tr>');
/* autocomplete **/
/* autocomplete **/
        /**** Coculation of Teeth ****/
        $("#teeth_num"+count).keydown(function () {
            if($(this).val().startsWith("D")==false){
                $(this).val("D");
            }
        });
        $("#teeth_num"+count).keyup(function () {
            var chk=  $(this).val().slice(1);
            var ch= $.isNumeric(chk);
            if(ch==false){
                var e= chk.slice(0,0);
                $(this).val("");
                $(this).val("D"+e);
            }
        });
        $("#teeth_num"+count).focusout(function () {
            var num= $(this).val();
            var num2=num.slice(1);

            if(num2>0 && num2<33 ){
                if($(this).val().startsWith("D")==false){
                    $(this).val("D"+num);
                    $("#Tooth"+num).css("fill","#e8ea54");
                }else{
                    $("#Tooth"+num2).css("fill","#e8ea54");
                }
            }else{
                $(this).val("");
                alert("Lütfen 1-32 arasında sayı giriniz");
            }
        });
        /***Delete***/
        $("#del_row0"+count).click(function (){
            var p=$(this).val();
            $("#teeth_num"+p).click();
        });
        /***End.Delete***/
        /**when click on number of teeth (on table)***/
        $("#teeth_num"+count).click(function (){
            // alert(count);
            var count0=0;
            const src1=[""];
            if($(this).val().slice(1)!=""){
                var teeth1=$(this).val();
                var teeth=$(this).val().slice(1);

                for(var i=1;i<=1000;i++){
                    var  y=$("#teeth_num"+i).val();
                    src1.push(y);
                    if(y==null){
                        break;
                    }
                }
                for(var a=1;a<src1.length;a++) {
                    if (src1[a]==teeth1) {
                        count0 += 1;
                    }
                }
                if(count0<2){// chk if there are more than two values then dont remove the color
                    $("#Tooth"+teeth).css("fill","#ffffff");
                }
            }

        });
        /**End.when click on number of teeth ***/

        /**** Coculation of Teeth ****/
    });

});
