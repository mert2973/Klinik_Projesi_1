@extends('system_layouts.master_sys')
@section('icerik')
<div class="page-wrapper">
    <div class="page-body"><div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">Hesabım</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="{{'/Dashboard'}}">Dashboard</a></li>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="ml-2">Hesabım</span>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right"></div>
            </div>
        </div>
        
        
        <div class="content">
            <div class="row">
                <form class="col-sm-7" action="" method="" siq_id="autopick_8732">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">Bilgilerim</div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Kullanıcı Adı<span class="form-required">*</span></label>
                                <input type="text" class="form-control" name="usr_name" value="{{Auth()->user()->usr_name}}" placeholder="User Name" required="" >
                            </div>
                            <div class="row content-input">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ad<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" name="name" value="{{Auth()->user()->name}}" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Soyad<span class="form-required">*</span></label>
                                        <input type="text" class="form-control" name="surname" value="{{Auth()->user()->surname}}" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row content-input">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="form-required">*</span></label>
                                        <input type="email" name="" class="form-control" value="{{Auth()->user()->email}}" placeholder="Email" readonly="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><text>*</text>Mobile <span class="form-required">*</span></label>
                                        <input type="number" class="form-control" name="mobile" value="{{Auth()->user()->phone}}" pattern=".{6,}" placeholder="Mobile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i>Kaydet</button>
                        </div>
                    </div>
                </form>
                <form class="col-sm-5" action="{{url('/sifre_yenile')}}" method="POST" >
                  @csrf
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">Şifreyi Değiştir</div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Şifre<span class="form-required">*</span></label>
                                <input type="password" class="form-control" value="{{Auth()->user()->password}}" name="old"   placeholder="**********"  readonly>
                            </div>
                            <div class="form-group">
                                <label>Yeni Şifre <span class="form-required">*</span></label>
                              <!--  <input type="password" class="form-control" name="new" pattern=".{4,}" title="şifreniz en az 4 haneli olmalıdır" placeholder="**********" required="">-->
                                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password"
                                       required  >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                  <strong>
                                      {{ $message }}
                                  </strong>
                                </span>
                                @enderror
                                <span class="form-text">Lütfen Yeni Şifreyi Giriniz (en az 4 haneli olmalıdır)!</span>
                            </div>
                            <div class="form-group">
                                <label>Şifreyi Doğrula <span class="form-required">*</span></label>
                               <!-- <input type="password" class="form-control" name="confirm" title="şifreniz en az 4 haneli olmalıdır" pattern=".{4,}" placeholder="**********" required="">-->
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                       required autocomplete="new-password" title="şifreniz en az 4 haneli olmalıdır" >
                            </div>
                        </div>
                        <div class="panel-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Footer -->
    
    </div>
</div>
@endsection
