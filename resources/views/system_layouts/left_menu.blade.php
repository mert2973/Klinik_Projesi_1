
<!--left Menu Wrapper -->
<div class="menu-wrapper">
    <div class="menu">
        <ul>
            <li class="" id="Dashboard_active">
                <a href="{{url('Dashboard')}}">
                    <i class="ti-blackboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="" id="Patient_active">
                <a href="{{route('Patient.index')}}">
                    <i class="ti-heart-broken"></i>
                    <span>Hastalar</span>
                </a>
            </li>
            <li class="" id="Appointment_active">
                <a href="{{url('Appointments')}}">
                    <i class="ti-calendar"></i>
                    <span>Randevular</span>
                </a>
            </li>
           <!-- <li class="" id="Invoices_active">
                <a href="{{--url('Invoices')--}}">
                    <i class="ti-receipt"></i>
                    <span>Faturalar</span>
                </a>
            </li> -->
            <li class="" id="Prescription_active">
                <a href="{{url('Prescription')}}">
                    <i class="ti-agenda"></i>
                    <span>Reçeteler</span>
                </a>
            </li>
            <li class="has-sub " id="Account_active">
                <a>
                    <i class="ti-shopping-cart-full"></i>
                    <span>Muhasebe</span>
                    <i class="arrow " id="Pharmacy_Rotate"></i>
                </a>
                <ul class="sub-menu " >
                    <li>
                        <a href="{{url('Product_Stocks')}}" id="Product_Stocks_text">
                            <span>Ürünler</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('Order_Management.index')}}" id="Order_Management_text"><!-- satış faturası ekle den alındı -- yeni -->
                            <span>Sipariş Yönetimi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('no_page')}}" id="_text">
                            <span>Satın Alma</span>
                        </a>
                    </li>
                        <li class="has-sub " id="Invoices_active">
                            <a>
                               <!-- <i class="ti-receipt"></i>-->
                                <span class="Invoices_Text">Faturalar</span>
                                <i class="arrow " id="Pharmacy_Rotate"></i>
                            </a>
                            <ul class="sub-menu " >
                                <li class="pl-4">
                                    <a href="{{route('Invoices_Purchase.index')}}" id="Invoices_Purchase_text">
                                        <span> Alış Faturaları</span>
                                    </a>
                                </li>
                                <li class="pl-4">
                                    <a href="{{route('Sales_Invoices.index')}}" id="Invoices_Sale_text">
                                        <span> Satış Faturaları</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <li>
                        <a href="{{url('Suppliers')}}" id="Suppliers_text">
                            <span>Tedarikçiler</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('Casing.index')}}" id="Casing_text">
                            <span>Kasa/Banka</span>
                        </a>
                    </li>
               
                    
                </ul>
            </li>
            <li class="" id="Expenses_active">
                <a href="{{url('Expenses')}}" id="Expenses_text">
                    <i class="ti-unlink"></i>
                    <span>Masraflar</span>
                </a>
            </li>
       
            <li class="" id="Noticeboard_active">
                <a href="{{url('Noticeboard')}}" id="Noticeboard_text">
                    <i class="ti-announcement">
                    </i><span>Duyuru Panosu</span>
                </a>
            </li>
            <li class="" id="Doctors_active">
                <a href="{{url('Doctors')}}" id="Doctors_text">
                    <i class="ti-id-badge"></i>
                    <span>Doktorlar</span>
                </a>
            </li>
            <li class="has-sub" id="Email_active">
                <a>
                    <i class="ti-email">
                    </i>
                    <span>Email</span>
                    <i class="arrow"></i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('Send_Email')}}" id="Send_Email_text">
                            <span>Email Gönder</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-sub" id="User">
                <a>
                    <i class="ti-clipboard"></i>
                    <span>Kullanıcı</span>
                    <i class="arrow"></i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('/Users')}}" id="Users">
                            <span>Kullanıcılar</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/User_Roles')}}" id="Roles">
                            <span>Roller</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-sub" id="Setting_active">
                <a><i class="ti-settings"></i>
                    <span>Ayarlar</span>
                    <i class="arrow"></i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('St_System_Info')}}" id="St_System_Info_text">
                            <span>Sistem Bilgisi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('St_Taxes')}}" id="St_Taxes_text">
                            <span>Vergiler</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('St_Payment_Methods')}}" id="St_Payment_Methods_text">
                            <span>Ödeme Metodları</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('St_Payment_Gateway')}}" id="St_Payment_Gateway_text">
                            <span>Ödeme Sağlayıcısı</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('St_Clinical_Notes')}}" id="St_Clinical_Notes_text">
                            <span>Klinik Notlar</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('St_Invoice_Items.index')}}" id="St_Invoice_Items_text">
                            <span>Invoice Items</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/St_Expense_Type')}}" id="St_Expense_type_text">
                            <span>Gider Türü</span>
                        </a>
                    </li>
                   
                    
                </ul>
            </li>
            <li class="has-sub">
                <a>
                    <i class="ti-clipboard"></i>
                    <span>Blog</span>
                    <i class="arrow"></i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('Blogs')}}">
                            <span>Blogs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('Comment')}}">
                            <span>Comment</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--End. left Menu Wrapper -->
