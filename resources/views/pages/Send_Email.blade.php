@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Email_active').addClass('active') ;
            $('#Send_Email_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Send Email</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                                <li>Send Email</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=send/email" class="row" method="post" siq_id="autopick_5710">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                            <input type="text" name="receiver[name]" class="form-control" placeholder="Enter Name . . ." required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address <span class="form-required">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                            <input type="text" name="receiver[email]" class="form-control" placeholder="Enter Email Address . . ." required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subject <span class="form-required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="ti-comment"></i></span></div>
                                    <input type="text" name="receiver[subject]" class="form-control" placeholder="Enter Subject . . ." required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="receiver[message]" class="summernote" style="display: none;"></textarea>
                               
                            </div>
                        </div>
                        <div class="panel-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
            
            <!-- include summernote css/js-->
            <link href="./Send_Email _ Klinikal Hospital_files/summernote-bs4.css" rel="stylesheet">
            <script type="text/javascript" src="./Send_Email _ Klinikal Hospital_files/summernote-bs4.min.js"></script>
            <script type="text/javascript" src="./Send_Email _ Klinikal Hospital_files/klinikal.summernote.js"></script>
        
        
        </div>
    </div>
    
    @endsection
