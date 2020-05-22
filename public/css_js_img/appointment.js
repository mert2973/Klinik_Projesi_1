/**
 * Appointment JS - Appointment js for klinikal theme
 * @version v3.0
 * @copyright 2019 Pepdev.
 */

var origin=window.location.origin;
 $(function() {
            $( "#name" ).autocomplete({
                minLength: 1,

                //source:"{{'/autoComplete_patients_list'}}",
                source: "/autoComplete_patients_list",
                select: function( event, get_id ) {
                    event.preventDefault();
                    $("#name").val('');
                    $("#name").val(get_id.item.name);
                    $("#surname").val(get_id.item.surname);
                    $("#email").val(get_id.item.email);
                    $("#phone").val(get_id.item.phone);
                    $("#patient_id").val(get_id.item.id);

                   // $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );

                    return false;
                }
            }).data("ui-autocomplete")._renderItem = function( ul, item ) {
                return $( "<li class='ui-autocomplete-row list-group-item  list-group-item-action font-weight-bold p-10 text-capitalize'></li>" )
                    .data( "item.autocomplete", item )
                    .append( item.label )
                    .appendTo( ul );
            };
        });

 $(document).ready(function () {
 	"use strict";

 	var today, disabledDays, weeklyHoliday, path = $('input.site_url').val();
    //National Holidays functions for Appointment Page
    function nationalDaysappointment(date) {
    	var d = new Date(date), month = '' + (d.getMonth() + 1), day = '' + d.getDate(), year = d.getFullYear(), date_string, i;
    	if (month.length < 2) { month = '0' + month; }
    	if (day.length < 2) { day = '0' + day; }

    	date_string = [year, month, day].join('-');
    	for (i = 0; i < disabledDays.length; i++) {
    		if (new Date(disabledDays[i]).toString() === new Date(date_string).toString()) {
    			return [true, 'ui-state-highlight', ''];
    		}
    	}
    	return [true];
    }
    //Weekly Holiday Function  for Appointment Page for Appointment Page
    function noWeekendsOrHolidaysAppointment(date) {
    	var day = date.getDay(),
    	noWeekend = [true];
    	noWeekend = [(day != weeklyHoliday['0'] && day != weeklyHoliday['1'] && day != weeklyHoliday['2'] && day != weeklyHoliday['3'] && day != weeklyHoliday['4'] && day != weeklyHoliday['5'] && day != weeklyHoliday['6'])];
    	return noWeekend[0] ? nationalDaysappointment(date) : [true, 'ui-state-highlight', ''];
    }

    function createAppointmentPopover(event) {
      /*  var status = '';
        if (event.status == '1') { status = 'Cancelled'; }
        else if (event.status == '2') { status = 'In Process'; }
        else if (event.status == '3') { status = 'Confirmed'; }
        else if (event.status == '4') { status = 'Completed'; }
        else { status = 'New'; } */

        return '<div ><span class="font-12">Tarih:</span> '+event.start.format($('.common_daterange_format').val())+' <span class="pl-4"> '+event.time+'</span> </div>'+
        '<div><span class="font-12">Doktor:</span> '+event.doctor+'</div><div><span class="font-12">Durum:</span> <span>'+event.status+'</span></div> ';
    }

    function openAppointmentSidebar() {
        var ele = $(this), body = $('body');
        body.css('overflow', 'hidden');
        body.append('<div class="overlay"></div>');
        setTimeout(function() {
           $('.appointmet-sidebar').css('right', '0');
         },10);
         $('#apnt-info #apt_times').html("");
         $('#doctors_list').val('');
         id_dr=0;
    }
    function openAppointmentSidebar_for_create(){
      var ele = $(this), body = $('body');
      body.css('overflow', 'hidden');
      body.append('<div class="overlay"></div>');
      setTimeout(function() {
         $('.appointmet-sidebar_create').css('right', '0');
       },10);
    }



    function closeAppointmentSidebar() {
        $('body').css('overflow', 'visible');
        $('.appointmet-sidebar').css('right', '-450px');
          $('.appointmet-sidebar_create').css('right', '-450px');
        $('#apnt-info input').val('');
        $('#apnt-info select').val('');

        $('#apnt-info .apnt-time').parent().show();
        $('#apnt-info .apnt-slot-time').attr('name', 'appointment[slot]');
        $('#apnt-info .apnt-time').attr('name', 'appointment[time]');
       $('#apnt-info .apnt-slot>div').remove();
        $('#apnt-info #apt_times').html(" ");

        setTimeout(function() { $('.overlay').remove(); }, 200);

    }


    function getAppointmentSlot(data) {
        $.ajax({
            type: 'post',
            url: path.concat('appointment/makeanappointment'),
            data: { date: data.date, department: data.department, day: data.day, doctor: data.doctor, _token: $('.s_token').val() },
            error: function () {
                $('.appointment-loading').hide();
                $('.apnt-slot').append('<div class="font-14 text-danger">Bağlantı Hatası Oluştu.</div> ');
            },
            success: function (response) {
                $('#apnt-info .apnt-slot>div').remove();
                $('#apnt-info .apnt-slot input').remove();
                $('#apnt-info .apnt-time').parent().hide();
                $('#apnt-info .apnt-slot-time').attr('name', '');
                $('#apnt-info .apnt-time').attr('name', '');
                $('.apnt-slot').append(response);
            }
        });
    }

    function initAppointmentDate(data) {
        disabledDays = JSON.parse(data.national).split(', ');
        weeklyHoliday = data.weekly;
        $('.apnt-date').datepicker({
            dateFormat: $('.common_date_format').val(),
            minDate: 0,
            maxDate: "+1M +10D",
            beforeShowDay: noWeekendsOrHolidaysAppointment,
            onSelect: function () {
                var curDate = $(this).datepicker('getDate');
                data.date = $.datepicker.formatDate("yy-mm-dd", curDate);
                data.day = curDate.getDay();
                getAppointmentSlot(data);
            }
        });
    }

    function createAppointmentDate() {
        var ele = $('#apnt-info .apnt-doctor');
        $('#apnt-info .apnt-slot>div').remove();
        $('#apnt-info .apnt-slot>input').remove();
        if (ele.find('option:selected').val() == '') {
            $('#apnt-info .apnt-department').val('');
            return false;
        } else {
            var data = ele.find('option:selected').data();
            data.doctor = ele.find('option:selected').val();
            $('#apnt-info .apnt-department').val(data.department);
            initAppointmentDate(data);
        }
    }

    $('body').on('click', '.sidebar-close, .overlay', function () {
        closeAppointmentSidebar();
    });

    $('body').on('click', '.appointment-sidebar', function () {
        openAppointmentSidebar();

    });

    function doctors(dr_id=""){
        //doctors_list

        const http=new XMLHttpRequest();
        http.open('GET','/doctors_list',true);
        http.onload=function(){
          if(this.status==200){
            let datam=JSON.parse(this.responseText);
            let verim='<option>Doktor seçiniz</option>';
            datam.forEach(item => {
              if(item.user_id==dr_id){ var selected="selected" ; }else{ var selected="" ; }

              verim +='<option  value="' +item.user_id+'"' + selected + '>'+
                      item.name +" "+item.surname + "("+  item.department+")" + " - " + item.phone +
                       '</option>'
            });
            $("#lst_dr").html(verim);
            $('.lst_dr').html(verim);
          }
        };
        http.send();
    }


  var id_dr;
    $("#apt_time_info").show();
    $("#doctors_list").on("change",function(){

    //  alert("chk select: "+chk);

       id_dr=  $(this).val();

       $("#apt_times").hide();

        $("#apt_time_info").show();
          var my_time=function(t){
          if(id_dr!=0){

          var day=t.getDay();
           let aa=""; var cnt=0;
           $.get('/doctor_apt_time',{the_dr_id:id_dr,day:day},

           function(data){
            let  itm=JSON.parse(data);

             itm.forEach(itms => {
               if(itms.holiday){
                // disable_days=[];
               }else {
                 aa+="<div><input name='apt_time' type='radio' id='for_time"+cnt+"' value='"+itms+"'required>"+
                 "<label for='for_time"+cnt+"'>"+itms+"</label> </div>";
                 cnt++;
               }

             });

             $("#apt_time_info").hide();
             $("#apt_times").html(aa).show();

           });


       }else{
         $("#apt_time_info").show();
       }

     }

          $('#default_datetimepicker').datetimepicker({
            //formatTime:'H:i',
            format:'d-m-Y',
            //formatDate:'d/m/Y',
          //  formatDate:'d.m.Y',
            timepicker:false,
            onChangeDateTime:my_time,
            onShow:my_time,
            dayOfWeekStart: 1,
           disabledWeekDays: [0],
          // allowTimes:times
           //inline:true
          });
    });

    $('#calendar').fullCalendar({
        lang:"tr",
        events: path.concat('/events_calendar'), // {{url('/events_calendar')}}
        editable:true,
        selectable:true,
        header:{
         left:'prev,next today',
         center:'title',
         right:'month,agendaWeek,agendaDay'
       },
        //header: {left: 'prev,next today',center: 'title',right: 'listDay,listWeek,month'},
      //  views: {listDay: { buttonText: 'Today' },listWeek: { buttonText: 'Week' }},
        lazyFetching: true,
          loading: function (isLoading, view) {
              var ele = $('#calendar').parent('.panel-body');
              if (isLoading) {
                  $(ele).block({
                      message: '<div class="font-16"><div class="ti-reload spinner mr-2 d-inline-block"></div>Yükleniyor ...</div>',
                      overlayCSS: {backgroundColor: '#fff',opacity: 0.8,cursor: 'wait'},
                      css: {border: 0,padding: '10px 15px',color: '#fff',width: 'auto',backgroundColor: '#333'},
                  });
              } else {
                  ele.unblock()
              }
          },
        defaultDate: moment().format("YYYY-MM-DD"),
        eventLimit: true,
        eventMouseover: function (event, jsEvent) {
            var id=event.apt_id;
            $(this).popover({
                container: '#calendar',
                html: true,
                title: "<div class='row' ><div class='col-lg-8'>"+event.title +"</div><div class='col-lg-4'><a href='/Appointments/"+id+"/edit' class='ti-pencil-alt pl-4 '></a></div></div>",
                content: createAppointmentPopover(event),
            }).popover('toggle');
        },

        /* eventMouseout: function (event, jsEvent, view) {
             $(this).popover('dispose');
         }, */

        eventClick: function (event, jsEvent, view) {
            $(this).popover('dispose');
          $('#apnt-info .apnt-id').val(event.apt_id);
          $('#apnt-info .patient-name').val(event.title);
          $('#apnt-info .patient-mail').val(event.email);
          $('#apnt-info .patient-mobile').val(event.mobile);
          $('#apnt-info .apnt-doctor').val(event.doctor_id);
          $('#apnt-info .patient_id').val(event.patient_id);
          $('#apnt-info .patient_name').val(event.p_name);
          $('#apnt-info .patient_surname').val(event.p_surname);
          $('#apnt-info .apnt-doctor_name').val(event.doctor);
          $('#apnt-info .apnt-department').val(event.department_id);
          $('#apnt-info .apnt-date').val(event.start.format($('.common_daterange_format').val()));
          $('#apnt-info .apnt-time').val(event.time);
          $('#apnt-info .apnt-slot-time').val(event.slot);
          $('#apnt-info .apnt-status').val(event.status);
          $('#apt_sidebar_form').get(0).setAttribute('action', origin+"/Appointments/"+event.apt_id);
            //createAppointmentDate();
            var dr_id=event.doctor_id;
            doctors(dr_id);
            //doctors_apt(dr_id);
            openAppointmentSidebar();
        },
        dayClick: function (date, event, view) {

            if (date.format('YYYY-MM-DD') >= new moment().format('YYYY-MM-DD')) {
              //  openAppointmentSidebar();
                  openAppointmentSidebar_for_create();
                  doctors();
            }
            return false;
        }

    });

     $("html").on("mouseup", function (e) {
         var l = $(e.target);
         if (l[0].className.indexOf("popover") == -1) {
             $(".popover").each(function () {
                 $(this).popover("hide");
             });
         }
     });

    $('#apnt-info .apnt-doctor').on('change', function () {
        $('#apnt-info .apnt-date').datepicker('destroy');
        $('#apnt-info .apnt-date').val('');

        $('#apnt-info .apnt-time').parent().show();
      $('#apnt-info .apnt-slot-time').attr('name', 'appointment[slot]');
        $('#apnt-info .apnt-time').attr('name', 'appointment[time]');

        createAppointmentDate();
    });

    if (typeof $('#appointment-info .apnt-doctor option:selected').val() !== "undefined" && $('#appointment-info .apnt-doctor option:selected').val() !== "") {
    	createAppointmentDate();
    }

    $('.apnt-user').on('click','.edit', function () {
        var ele = $('.apnt-user-input');
        if (ele.css('display') === "none") { ele.slideDown(); }
        else { ele.slideUp(); }
    });

    //Notes Search
    $('.notes-form').on('click', '.input-group span', function () {
        var ele = $(this), ele_input = ele.parents('.input-group').find('input'), content = ele_input.val(), name = ele_input.data('name');
        if (content === "") { return false; }
        $('.notes-'+name).find('.descr ul').append('<li>'+content+'<input type="hidden" name="notes[notes]['+name+'][]" value="'+content+'"> <span class="ti-close delete"></span></li>');
        ele_input.val('');
    });

    $('.notes-container').on('click','.delete', function () {
        $(this).parent('li').remove();
    });

    $(".notes-form .input-group input").autocomplete({
        source: function(request, response) {
            $.getJSON(path.concat('notes/search'), { term: request['term'], type: this.element[0].dataset.name }, response);
        },
        minLength: 3,
        focus: function() {return false;},
        select: function( event, ui ) {
            $(this).val(ui.item.label);
            return false;
        }
    });
});
