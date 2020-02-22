
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Klinik</title>
    <link rel="icon" type="image/x-icon" href="http://pepdev.com/theme-preview/klinikal/public/uploads/media-16557374875e049cf2688e3.png">
    <!-- Include css files -->
    <link rel="stylesheet" type="text/css" href="{{asset('css_js_img/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css_js_img/chart.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css_js_img/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css_js_img/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{--asset('css_js_img/floatbutton_34175_.css')--}}"> <!-- invoice için eklenmişti-->

    <link rel="stylesheet" type="text/css" href="{{--asset('css_js_img/embedpostload_43aa0_.css')--}}">
     <link rel="stylesheet" type="text/css" href="{{--asset('css_js_img/embedtheme1_83dcc_.css')--}}">
    <!-- Include js files -->
    <script async="" src="{{asset('css_js_img/analytics.js')}}"></script>
    <script type="text/javascript" id="zsiqscript" defer="" src="{{asset('css_js_img/widget')}}"></script>
    <script type="text/javascript" src="{{asset('css_js_img/vendor.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css_js_img/admin.js')}}"></script>
    
    
    <script type="text/javascript" src="{{asset('css_js_img/summernote/summernote-bs4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css_js_img/summernote/klinikal.summernote.js')}}"></script>
    
    <script type="text/javascript" src="{{--asset('css_js_img/floatbutton_8a683_.js')--}}"></script> <!-- invoice için eklenmişti-->
    
  
    
    <style type="text/css">/* Chart.js */
        @keyframes chartjs-render-animation{
            from{opacity:.99}to{opacity:1}}
           .chartjs-render-monitor{
               animation:chartjs-render-animation 1ms
           }
          .chartjs-size-monitor,.chartjs-size-monitor-expand,
           .chartjs-size-monitor-shrink{
              position:absolute;
              direction:ltr;left:0;top:0;right:0;bottom:0;
              overflow:hidden;pointer-events:none;
              visibility:hidden;
              z-index:-1
          }
        .chartjs-size-monitor-expand>div{
            position:absolute;width:1000000px;height:1000000px;left:0;top:0
        }
        .chartjs-size-monitor-shrink>div{
            position:absolute;width:200%;height:200%;left:0;top:0
         }
    </style>
   
    
    <!-- icons--->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{asset('themify-icons/themify-icons.css')}}">
    <!--End. icons--->
    
</head>

<body style="">
<!-- wrapper -->
<div class="wrapper ">
  <div id="main-wrapper" class=" menu-dark">
    @include('system_layouts.left_menu')
    @include('system_layouts.header')
    @yield('icerik')
  </div>
</div>

<script type="text/javascript" src="{{asset('css_js_img/appointment.js')}}"></script>
<script type="text/javascript" src="{{asset('css_js_img/Chart.min.js')}}"></script>


<script type="text/javascript" src="{{--asset('css_js_img/wmsliteapi.js')--}}"></script>
<!-- siqchatwindow1_f3a64_.js kaldırıldığında takvim görüntüsü düzeliyor ama appointment eklenmiyor --->
<script type="text/javascript" src="{{--asset('css_js_img/siqchatwindow1_f3a64_.js')--}}"></script>
<script type="text/javascript" src="{{--asset('css_js_img/floatbutton_1de78_.js')--}}"></script>
<script type="text/javascript" src="{{--asset('css_js_img/resource_648f1_.js')--}}"></script>




<script>
    ctx = document.getElementById("appointment-chart").getContext("2d")
    gradient = ctx.createLinearGradient(0, 0, 0, 240);
    gradient.addColorStop(0, Chart.helpers.color('#0abb87').alpha(1).rgbString());
    gradient.addColorStop(1, Chart.helpers.color('#f2feff').alpha(.2).rgbString());

    var appointemt_chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec","Jan","Feb"],
            datasets: [{
                fill: true,
                label: "Appointment",
                backgroundColor: gradient,
                borderColor: '#0abb87',

                pointBackgroundColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                pointBorderColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                pointHoverBackgroundColor: "#0abb87",
                pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.2).rgbString(),

                data: [0,0,0,0,0,0,0,0,0,0,2,1]            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            legend: false,
            scales: {
                xAxes: [{
                    categoryPercentage: 0.35,
                    barPercentage: 0.70,
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    },
                    gridLines: {
                        color: "#d9dffa",
                        drawBorder: false,
                        offsetGridLines: false,
                        drawTicks: false,
                        borderDash: [3, 4],
                        zeroLineWidth: 1,
                        zeroLineColor: "#d9dffa",
                        zeroLineBorderDash: [3, 4]
                    },
                    ticks: {
                        display: true,
                        beginAtZero: true,
                        fontColor: "#afb4d4",
                        fontSize: 13,
                        padding: 10
                    }
                }],
                yAxes: [{
                    categoryPercentage: 0.35,
                    barPercentage: 0.70,
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: 'Value'
                    },
                    gridLines: {
                        color: "#d9dffa",
                        drawBorder: false,
                        offsetGridLines: false,
                        drawTicks: false,
                        borderDash: [3, 4],
                        zeroLineWidth: 1,
                        zeroLineColor: "#d9dffa",
                        zeroLineBorderDash: [3, 4]
                    },
                    ticks: {
                        display: true,
                        beginAtZero: true,
                        fontColor: "#afb4d4",
                        fontSize: 13,
                        padding: 10
                    }
                }]
            },
            title: {
                display: false
            },
            hover: {
                mode: 'index'
            },
            tooltips: {
                enabled: true,
                intersect: false,
                mode: 'nearest',
                bodySpacing: 5,
                yPadding: 10,
                xPadding: 10,
                caretPadding: 0,
                displayColors: false,
                backgroundColor: "#067554",
                titleFontColor: '#ffffff',
                cornerRadius: 4,
                footerSpacing: 0,
                titleSpacing: 0
            },
            plugins: {
                labels: []
            }
        }
    });
</script>
<!-- Footer -->
<script type="text/javascript">
    /*chat için */
    var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq ||
        {widgetcode:"0ba558d15759772dd7df5094808b4af5b4023fb35cfcb79a2642d8251031b0bd", values:{},ready:function(){}}; /* tema ile gelen widgetcode'u bf3ec7c5d71f363397a08de21ee450991fa23f56ab689cfdfd309bb347cdb3c4*/
    var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
    s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
  
 </script>
<div id="zsiqwidget"></div>
<script>
    /*şimdilik bir işlevi yok
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93901876-1', 'auto');
    ga('send', 'pageview');
    */
</script>

<ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul>
<div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
<ul id="ui-id-2" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul>
<div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
<input type="file" multiple="multiple" class="dz-hidden-input" accept="image" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">

<!--
<div class="zsiq_floatmain zsiq_theme1 siq_bR" style="visibility: hidden; display: block;">
    <div id="zsiq_float" class="zsiq_float " style="font-family:inherit">
        <div class="zsiq_flt_rel"><em id="zsiq_agtpic" class="zsiq_user siqico-chat"></em>
            <div id="titlediv" class="zsiq_cnt"><div id="zsiq_maintitle" class="zsiq_ellips" title="We&#39;re Online!">We're Online!</div>
                <p id="zsiq_byline" class="zsiq_ellips" title="How may I help you today?">How may I help you today?</p>
            </div>
            <em id="zsiq_unreadcnt" class="zsiq_unrdcnt" style="display: none;"></em>
            <em id="zsiq_avcall" class="zsiqmin_unrdcnt zsiq_unrdcnt siqico-mincall" style="display: none;"></em>
        </div>
    </div>
</div> -->

<style id="zsiqcustomcss">
    
    .zsiq_flt_rel{
        background-color:#45a4ec !important;
    }
    .zsiq_seasonal .st2 {
        fill: #45a4ec !important;
    }
</style>

<!-- kaldırılınca chat penceresi açılıyor
<div class="zls-sptwndw  siqembed siqtrans siqhide zsiq-mobhgt siq_rht zsiq_size2" embedtheme="1"
     style="visibility: hidden; top: -10000px; display: block;">
    <div id="siqcht" class="zls-prelative">
        <iframe id="siqiframe" seamless="seamless" height="460" width="100%" scrolling="no"
                src="{{--asset('css_js_img/saved_resource.html')--}}">
        </iframe>
    </div>
</div>  -->


</body>
</html>
