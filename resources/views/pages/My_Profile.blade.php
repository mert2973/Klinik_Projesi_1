@extends('system_layouts.master_sys')
@section('icerik')
<div class="page-wrapper">
    <div class="page-body"><div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">My Profile</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                            <i class="fa fa-angle-right font-12 ml-2" ></i>
                            <span class="ml-2">My Profile</span>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right"></div>
            </div>
        </div>
        
        
        <div class="content">
            <div class="row">
                <form class="col-sm-7" action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=profile" method="post" siq_id="autopick_8732">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">Basic Info</div>
                        </div>
                        <div class="panel-body">
                            <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                            <input type="hidden" value="2" name="id">
                            <div class="form-group">
                                <label>User Name <span class="form-required">*</span></label>
                                <input type="text" class="form-control" name="username" value="daniel" placeholder="User Name" required="">
                            </div>
                            <div class="row content-input">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="form-required">*</span></label>
                                        <input type="text" class="form-control" name="firstname" value="Daniel" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="form-required">*</span></label>
                                        <input type="text" class="form-control" name="lastname" value="Barnes" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row content-input">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="form-required">*</span></label>
                                        <input type="text" name="email" class="form-control" value="daniel@pepdev.com" placeholder="Email" readonly="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><text>*</text>Mobile <span class="form-required">*</span></label>
                                        <input type="number" class="form-control" name="mobile" value="1234567890" pattern=".{6,}" placeholder="Mobile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                        </div>
                    </div>
                </form>
                <form class="col-sm-5" action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=profile/password" method="post" siq_id="autopick_3115">
                    <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                    <input type="hidden" value="2" name="id">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">Change Password</div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Current Password <span class="form-required">*</span></label>
                                <input type="password" class="form-control" name="old" pattern=".{6,}" title="Minimum 6 word required!" placeholder="**********" required="">
                            </div>
                            <div class="form-group">
                                <label>Password <span class="form-required">*</span></label>
                                <input type="password" class="form-control" name="new" pattern=".{8,}" title="Minimum 8 word required!" placeholder="**********" required="">
                                <span class="form-text">Please enter new password (min 8 words)!</span>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password <span class="form-required">*</span></label>
                                <input type="password" class="form-control" name="confirm" title="Minimum 8 word required!" pattern=".{8,}" placeholder="**********" required="">
                            </div>
                        </div>
                        <div class="panel-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Footer -->
    
    </div>
</div>
@endsection
