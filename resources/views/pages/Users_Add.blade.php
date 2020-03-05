@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#User').addClass('active') ;
            $('#Users').addClass('text-white') ;
        });
    </script>


    <div class="page-wrapper">
        <div class="page-body">
            <link rel="stylesheet" href="./Add User _ Klinikal Hospital_files/jquery.fancybox.min.css">
            <script src="./Add User _ Klinikal Hospital_files/jquery.fancybox.min.js"></script>
            <script>
                $("a.open-pdf").fancybox({
                    'frameWidth': 800,
                    'frameHeight': 800,
                    'overlayShow': true,
                    'hideOnContentClick': false,
                    'type': 'iframe'
                });
            </script>
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Kullanıcı Ekle</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="">Dashboard</a></li>
                                <i class="fa fa-angle-right font-13 ml-2" ></i>
                                <span class="ml-2"><a href="">Kullanıcılar</a></span>
                                <i class="fa fa-angle-right font-13 ml-2" ></i>
                                <span>Kullanıcı Ekle</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data" siq_id="autopick_4462">
                <input type="hidden" name="" value="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#user-info" data-toggle="tab"> Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#user-address" data-toggle="tab">Adres</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4">
                            <div class="tab-pane active" id="user-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Ad <span class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" name="user[firstname]" class="form-control" value="" placeholder="Enter First Name . . ." required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Soyad <span class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" name="user[lastname]" class="form-control" value="" placeholder="Enter Last Name . . ." required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Adresi <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                                </div>
                                                <input type="text" name="user[mail]" class="form-control" value="" placeholder="Enter Email Address . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                </div>
                                                <input type="text" name="user[mobile]" class="form-control" value="" placeholder="Enter Mobile Number . . ." required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Cinsiyet</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                                </div>
                                                <select name="user[gender]" class="custom-select">
                                                    <option value="Male">Erkek</option>
                                                    <option value="Female">Kadın</option>
                                                    <option value="Other">Diğer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group pb-3">
                                            <label class="d-block">Resim</label>
                                            <div class="image-upload">
                                                <a>Yükle</a>
                                            </div>
                                            <div class="saved-picture" style="display: none">
                                                <input type="hidden" name="user[picture]" value="">
                                            </div>
                                            <div class="saved-picture-delete" data-toggle="tooltip" data-placement="right" title="" style="display: none" data-original-title="Remove">
                                                <a class="ti-trash"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Doğum Tarihi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                </div>
                                                <input type="text" id="user-dob" name="user[dob]" class="form-control bg-white hasDatepicker" value="" placeholder="Enter Date of Birth . . ." autocomplete="off" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kan Grubu</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-heart-broken"></i></span>
                                                </div>
                                                <select name="user[bloodgroup]" class="custom-select">
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dotted-seprator mt-4 mb-5"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kullanıcı Rolü <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="ti-cloud-up"></i>
                                                    </span>
                                                </div>
                                                <select name="user_role" class="custom-select">
                                                    <option>Seçiniz</option>
                                                    @foreach(\App\Roles::get() as $roles)
                                                      @if($roles->id!=1 && $roles->id!=2 && $roles->id!=3)
                                                         <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                      @endif
                                                    @endforeach
                                                   <!-- <option value="2">Dean</option>
                                                    <option value="4">Nurse</option>
                                                    <option value="5">Accountant</option>
                                                    <option value="6">Pharmacist</option>
                                                    <option value="7">Receptionist</option>
                                                    <option value="8">Employee</option> -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kullanıcı Adı <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-cloud-up"></i></span>
                                                </div>
                                                <input type="text" name="user_name" class="form-control" value="" placeholder="Enter User Name . . ." required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Şifre <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-key"></i></span>
                                                </div>
                                                <input type="password" name="user[password]" class="form-control" placeholder="Bir şifre giriniz . . ." required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Şifre Tekrar <span class="form-required">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-key"></i></span>
                                                </div>
                                                <input type="password" name="user[cpassword]" class="form-control" placeholder="Şifreyi tekrar giriniz . . ." required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="user-address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Addres 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="user[address][address1]" class="form-control" value="" placeholder="Birinci adresi giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Addres 2</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                                <input type="text" name="user[address][address2]" class="form-control" value="" placeholder="İkinci adresi giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Şehir</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-map-alt"></i></span>
                                                </div>
                                                <input type="text" name="user[address][city]" class="form-control" value="" placeholder="Şehir adını giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ülke</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-map"></i></span>
                                                </div>
                                                <input type="text" name="user[address][country]" class="form-control" value="" placeholder="Ülke adını giriniz. . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Posta/Zip Kodu</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ti-pin"></i></span>
                                                </div>
                                                <input type="text" name="user[address][postal]" class="form-control" value="" placeholder="Posta/Zip kodu'nu giriniz . . .">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
                    </div>
                </div>
            </form>
        
            <!-- Footer -->
    
        </div>
    </div>
@endsection
