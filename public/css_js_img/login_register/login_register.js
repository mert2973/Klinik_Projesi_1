
$(document).ready(function () {
      "use strict";
    $('#register_form_btn').click(function () {
       $('#login_form').hide();
       $('#register_form').addClass('in')

    }) ;
    $('#log_in_btn').click(function () {
       $('#login_form').show();
       $('#register_form').removeClass('in');

    });
});
