<!DOCTYPE html>
<!-- saved from url=(0068)http://pepdev.com/theme-preview/klinikal/admin/index.php?route=login -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Klinikal Hospital | Login</title>
    <link rel="icon" type="image/x-icon" href="http://pepdev.com/theme-preview/klinikal/public/uploads/media-16557374875e049cf2688e3.png">
    <link rel="stylesheet" href="{{asset('css_js_img/style.min.css')}}">
    <script async="" src="./Klinikal_Hospital _ Login_files/analytics.js"></script>
    <script type="text/javascript" id="zsiqscript" defer="" src="./Klinikal_Hospital _ Login_files/widget"></script>
    <script src="./Klinikal_Hospital _ Login_files/vendor.min.js"></script>
    <script src="./Klinikal_Hospital _ Login_files/custom.js"></script>
    <link rel="stylesheet" href="./Klinikal_Hospital _ Login_files/floatbutton_b7558_.css">
    <script src="./Klinikal_Hospital _ Login_files/floatbutton_889b9_.js"></script>

</head>
<body>
<div class="lgn-background" style="background-image: url('{{asset('css_js_img/login_resim/login_resim.jpg')}}');">
    <div class="lgn-wrapper">
        <div class="lgn-logo text-center">
            <a href="http://pepdev.com/theme-preview/klinikal/admin/">
                <img src="{{asset('css_js_img/logo/logo4.png')}}" width="70%" alt="Klinikal Hospital">
            </a>
        </div>
        <div class="lgn-title">Sign In</div>
        <div class="lgn-form">
            <form class="form-vertical" action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=login" method="post" siq_id="autopick_1604">
                <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                <div class="lgn-input form-group">
                    <label class="control-label">Username</label>
                    <input class="form-control" type="text" name="username" id="lgn-mail" placeholder="Enter your Username" autocomplete="off" required="">
                </div>
                <div class="lgn-input form-group">
                    <label class="control-label">Password</label>
                    <input type="password" name="password" id="lgn-pass" class="form-control" placeholder="Enter your Password" autocomplete="off" required="">
                    <div class="lgn-forgot text-right">
                        <a href="" class="text-primary">Forgot Password?</a>
                    </div>
                </div>
                <div class="lgn-input form-group">
                    <label class="control-label">What is 10 plus 1 =</label>
                    <input type="text" id="lgn-bot" class="form-control" placeholder="Answer" autocomplete="off" required="">
                </div>
                <div class="lgn-submit text-center">
                    <a type="submit" href="{{url('/Dashboard')}}" id="lgn-submit" class="btn btn-primary" name="login">Login</a>
                </div>
            </form>
        </div>
        <div class="pl-3 pr-3 pb-5 text-center login-autocomplete">
            <p>Please click on these buttons for autofill credentials.</p>
            <div class="btn-group pb-2">
                <a class="btn btn-primary btn-sm" data-username="admin" data-password="Test@123">Admin</a>
                <a class="btn btn-success btn-sm" data-username="sheldon" data-password="Test@123">Dean</a>
                <a class="btn btn-danger btn-sm" data-username="daniel" data-password="Test@123">Doctor</a>
                <a class="btn btn-warning btn-sm" data-username="penny" data-password="Test@123">Nurse</a>
                <a class="btn btn-info btn-sm" data-username="koothrappali" data-password="Test@123">Accountant</a>
            </div>
            <div class="btn-group">
                <a class="btn btn-secondary btn-sm" data-username="walter" data-password="Test@123">Pharmacist</a>
                <a class="btn btn-white btn-sm" data-username="donna" data-password="Test@123">Receptionist</a>
            </div>
        </div>
    </div>
</div>
<script>
    $('.login-autocomplete').on('click', 'a', function () {
        var data = $(this).data();
        $('#lgn-mail').val(data.username);
        $('#lgn-pass').val(data.password);
    });
</script>


<script type="text/javascript">
    var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq ||
        {widgetcode:"0ba558d15759772dd7df5094808b4af5b4023fb35cfcb79a2642d8251031b0bd", values:{},ready:function(){}};<!-- tema ile gelen widgetcode'u bf3ec7c5d71f363397a08de21ee450991fa23f56ab689cfdfd309bb347cdb3c4-->
    var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
    s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
<div id="zsiqwidget"></div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '', 'auto');<!-- UA-93901876-1 -->
    ga('send', ''); <!-- pageview -->
</script>



<div class="zsiq_floatmain zsiq_theme1 siq_bR siq_noanim siq_noanim" style="visibility: hidden; display: block; height: 60px;">
    <div id="zsiq_float" class="zsiq_float " style="font-family: inherit; display: inline-block;">
        <div class="zsiq_flt_rel"><em id="zsiq_agtpic" class="zsiq_user siqico-chat"></em>
            <div id="titlediv" class="zsiq_cnt zsiq_min zsiq_min">
                <div id="zsiq_maintitle" class="zsiq_ellips" title="We&#39;re Online!">We're Online!</div>
                <p id="zsiq_byline" class="zsiq_ellips" title="How may I help you today?">How may I help you today?</p>
            </div>
            <em id="zsiq_unreadcnt" class="zsiq_unrdcnt" style="display: none;"></em>
            <em id="zsiq_avcall" class="zsiqmin_unrdcnt zsiq_unrdcnt siqico-mincall" style="display: none;"></em>
        </div>
    </div>
</div>
<style id="zsiqcustomcss">
       .zsiq_flt_rel{
           background-color:#45a4ec !important;
       }
       .zsiq_seasonal .st2 {
           fill: #45a4ec !important;
        }
</style>

<!--
<div class="zls-sptwndw  siqembed siqtrans siqhide zsiq-mobhgt siq_rht zsiq_size2" embedtheme="1" style="visibility: hidden; top: -10000px; display: block;">
    <div id="siqcht" class="zls-prelative"><iframe id="siqiframe" seamless="seamless" height="460" width="100%" scrolling="no" src="./Klinikal_Hospital _ Login_files/saved_resource.html">
        
        </iframe>
    </div>
</div>  -->
</body>
</html>
