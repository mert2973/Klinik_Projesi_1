<!DOCTYPE html>
<!-- saved from url=(0068)http://pepdev.com/theme-preview/klinikal/admin/index.php?route=login -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
   <!-- <title>Klinikal Hospital | Login</title> -->
    <title name="" content="">{{ config('ayar.title') }} </title>
    <link rel="icon" type="image/x-icon" href="http://pepdev.com/theme-preview/klinikal/public/uploads/media-16557374875e049cf2688e3.png">
    <link rel="stylesheet" href="{{asset('css_js_img/style.min.css')}}">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('css_js_img/login_register/login_register.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css_js_img/login_register/login_register.css')}}">
    
    <!-- icons--->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{asset('themify-icons/themify-icons.css')}}">
    <!--End. icons--->
</head>
<body>
<div class="lgn-background" style="background-image: url('{{asset('css_js_img/login_resim/login_resim.jpg')}}');">
    <div class="lgn-wrapper">
        <div class="lgn-logo text-center">
            <a href="http://pepdev.com/theme-preview/klinikal/admin/">
                <img src="{{asset('css_js_img/logo/logo4.png')}}" width="50%" alt="Klinikal Hospital">
            </a>
        </div>
        <div class="lgn-title">Oturum Aç</div>
        <div class="lgn-form " id="login_form">
            <form class="form-vertical" action="{{route('login')}}" method="POST">
                @csrf
                <div class="lgn-input form-group">
                    <label class="control-label" style="line-height: 1.6">E-posta</label>
                   <!-- <input class="form-control" type="text" name="email"  placeholder="Email" autocomplete="on" required=""> -->
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="lgn-input form-group">
                    <label class="control-label" style="line-height: 1.6">Şifre</label>
                   <!-- <input type="password" name="password"  class="form-control" placeholder="Şifre" autocomplete="off" required="">-->
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="lgn-forgot text-right">
                        <a href="" class="text-primary">Hesabını mı unuttun?</a>
                    </div>
                </div>
                
                <div class="lgn-submit text-center">
                    <button type="submit"   class="btn btn-primary" >Giriş Yap</button>
                    <button type="button" class="btn btn-info " id="register_form_btn">Yeni Hesap Aç</button>
                </div>
        
            </form>
        </div>
        <div class="lgn-form collapse " id="register_form">
            <form class="form-vertical" action="{{route('register')}}" method="POST">
                @csrf
                <div class="lgn-input form-group">
                    <label class="control-label">Ad <i class="ti ti-star text-red"></i></label>
                    <!--<input class="form-control form-control-sm" type="text" name="ad"  placeholder="Ad" autocomplete="on"   required="">-->
                    <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>
                         {{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="lgn-input form-group ">
                    <label class="control-label">Soyad <i class="ti ti-star text-red"></i></label>
                   <!-- <input class="form-control form-control-sm" type="text" name="Soyad"  placeholder="Adınızı Giriniz"  autocomplete="on" required="">-->
                    <input id="surname" type="text" class="form-control form-control-sm @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="name" autofocus>
                    @error('surname')
                    <span class="invalid-feedback" role="alert">
                      <strong>
                         {{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="lgn-input form-group">
                    <label class="control-label">Kullanıcı Adı <i class="ti ti-star text-red"></i></label>
                    <!--<input class="form-control form-control-sm" type="text" name="username" placeholder="Kullanıcı Adı" autocomplete="on" required="">-->
                    <input id="usr_name" type="text" class="form-control form-control-sm @error('usr_name') is-invalid @enderror" name="usr_name" value="{{ old('usr_name') }}" required autocomplete="name" autofocus>
                    @error('usr_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>
                         {{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="lgn-input form-group">
                    <label class="control-label">E-Mail <i class="ti ti-star text-red"></i></label>
                    <!--<input class="form-control form-control-sm" type="email" name="email"  placeholder="Email" autocomplete="on" required=""> -->
                    <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>
                       {{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="lgn-input form-group">
                    <label class="control-label">Şifre <i class="ti ti-star text-red"></i></label>
                   <!-- <input class="form-control form-control-sm" type="password" name="email"  placeholder="Şifre" autocomplete="on" required="">-->
                    <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>
                          {{ $message }}
                      </strong>
                    </span>
                    @enderror
                </div>
                <div class="lgn-input form-group">
                    <label class="control-label">Şifre Tekrar <i class="ti ti-star text-red"></i></label>
                   <!-- <input class="form-control form-control-sm" type="password" name="email"  placeholder="Şifre" autocomplete="on" required=""> -->
                    <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="lgn-input form-group">
                    <label class="control-label">Üyelik Türü <i class="ti ti-star text-red"></i></label>
                    <select class="form-control form-control-sm" required="required" name="uyelik_turu">
                         <option value="">Seçiniz</option>
                        @foreach(\App\Roles::get() as $list )
                         @if($list->id!=1 && $list->id!=3 && $list->id!=4)
                          <option value="{{$list->id}}">{{$list->name}}</option>
                         @endif
                        @endforeach
                        
                    </select>
                </div>
               
                <div class="lgn-submit text-center">
                    <a type="button" href="/"   class="btn btn-primary" name="login">Üye Girişi</a> <!--id="log_in_btn" -->
                    <button type="submit"  id="lgn-submit" class="btn btn-primary " name="login">Kayıt Ol</button>
                </div>
        
            </form>
            @if ($errors->has('password') || $errors->has('email'))
                <script>
                    $(document).ready(function () {
                        $('#register_form_btn').click();
                    });
                </script>
            @endif
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


</body>
</html>
