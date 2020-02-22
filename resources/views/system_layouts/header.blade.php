<!--Header bölümü with logo -->
<div class="page-hdr ">
    <div class="row align-items-center">
        <div class="col-4 col-md-7 page-hdr-left">
            <!-- Logo Container -->
            <div id="logo">
                <div class="logo-icon">
                    <a href="#">
                        <img src="{{asset('css_js_img/media-7676846945e098ecd0e6a6.png')}}" alt="Icon">
                    </a>
                </div>
                <div class="logo">
                    <a href="#">
                        <img src="{{asset('css_js_img/logo/logo3.png')}}" width="95%" alt="Logo"> {{--asset('css_js_img/media-13067443605e049cf2882b1.png')--}}
                    </a>
                </div>
            </div>
            <div class="page-menu menu-icon pl-2">
                <a class="animated menu-close icon"><i class="far fa-hand-point-left"></i></a>
            </div>
            <div class="page-menu page-fullscreen">
                <a class="icon"><i class="fas fa-expand"></i></a>
            </div>
            <div class="page-search">
                <input type="text" placeholder="Search Patient by Name or Mobile Number ..." class="ui-autocomplete-input" autocomplete="off">
            </div>
        </div>
        <div class="col-8 col-md-5 page-hdr-right">
            <input type="hidden" class="common_date_format" value="dd-mm-yy">
            <input type="hidden" class="common_date_my_format" value="mm-yy">
            <input type="hidden" class="common_daterange_format" value="DD-MM-YYYY">
            <input type="hidden" class="common_daterange_my_format" value="MM-YYYY">
            <input type="hidden" class="site_url" value="">
            <input type="hidden" class="s_token" value="">
            <div class="page-hdr-desktop">
                <div class="page-menu">
                    <a href="{{url('/Dashboard')}}" class="animated icon"><i class="ti-home"></i></a>
                </div>
                <div class="page-menu menu-dropdown-wrapper menu-quick-links">
                    <a class="icon"><i class="ti-view-grid font-14"></i></a>
                    <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                        <div class="arrow arrow-right"></div>
                        <div class="menu-dropdown-inner">
                            <div class="menu-dropdown-head">Quick Links</div>
                            <div class="menu-dropdown-body p-0">
                                <div class="row m-0 box">
                                    <div class="col-6 p-0 box">
                                        <a href="{{url('/Patient_Add')}}"><i class="ti-heart-broken"></i><span>New Patient</span>
                                        </a>
                                    </div>
                                    <div class="col-6 p-0 box">
                                        <a href="{{url('/Appointments')}}"><i class="ti-calendar"></i><span>New Appointment</span>
                                        </a>
                                    </div>
                                    <div class="col-6 p-0 box">
                                        <a href="{{url('/Invoice_Add')}}"><i class="ti-receipt"></i><span>New Invoice</span>
                                        </a>
                                    </div>
                                    <div class="col-6 p-0 box">
                                        <a href="{{url('/Expense_Add')}}"><i class="ti-rocket"></i><span>New Expense</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-menu menu-dropdown-wrapper menu-user">
                    <a class="user-link"><div class="icon"><i class="ti-user"></i></div></a>
                    <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                        <div class="arrow arrow-right"></div>
                        <div class="menu-dropdown-inner">
                            <div class="menu-dropdown-head pb-3">
                                <div class="tbl-cell">
                                    <img src="{{asset('css_js_img/media-1771205195e049ca8ee997.jpg')}}" alt="Klinikal">
                                </div>
                                <div class="tbl-cell pl-2 text-left">
                                    <p class="m-0 font-18">Daniel Barnes</p>
                                    <p class="m-0 font-14">Doctor</p>
                                </div>
                            </div>
                            <div class="menu-dropdown-body">
                                <ul class="menu-nav">
                                    <li><a href="http://pepdev.com/theme-preview/klinikal/" target="_blank"><i class="ti-home"></i><span>Visit Website</span></a></li>
                                    <li><a href="{{url('/My_Profile')}}"><i class="ti-id-badge"></i><span>Profile</span></a></li>
                                    <li><a href="{{url('/My_Profile')}}"><i class="ti-key"></i><span>Change Password</span></a></li>
                                </ul>
                            </div>
                            <div class="menu-dropdown-footer text-right">
                                <a href="{{url('/')}}" class="btn btn-outline btn-primary btn-pill btn-outline-2x font-12 btn-sm">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-hdr-mobile">
                <div class="page-menu open-mobile-search">
                    <a href="#"><i class="ti-search"></i></a>
                </div>
                <div class="page-menu open-left-menu">
                    <a href="#"><i class="ti-view-list"></i></a>
                </div>
                <div class="page-menu open-page-menu-desktop">
                    <a href="#"><i class="ti-more"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End. Header bölümü with logo -->
