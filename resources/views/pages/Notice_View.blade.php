@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Noticeboard_active').addClass('active') ;
            $('#Noticeboard_text').addClass('text-text') ;
        });
    </script>
<div class="page-wrapper">
    <div class="page-body">
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">Notice View</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                            <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=noticeboard">Noticeboard</a></li>
                            <li>Notice View</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-head">
                <div class="panel-title">Seminar on medicines and health</div>
            </div>
            <div class="panel-body">
                <p class="mb-0">Please attend this seminar on every Sunday.  This seminar will be based on new arrival of medicines or new diseases etc.
                    
                    Not compulsory for everyone.
                    
                    Thanks </p>
            
            </div>
            <div class="panel-footer">
                <p class="mb-0">Start : 31-12-2019 End : 14-04-2021</p>
            </div>
        </div>
        
        <!-- Footer -->
    
    </div>
</div>

@endsection
