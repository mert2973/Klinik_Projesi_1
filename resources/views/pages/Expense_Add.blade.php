@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Expenses_active').addClass('active') ;
            $('#Expenses_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body"><div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Add Expense</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2"><a href="{{url('/Expenses')}}">Expenses</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Add Expense</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            
            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=expense/add" method="post" enctype="multipart/form-data" siq_id="autopick_393">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" name="expense[name]" class="form-control" value="" placeholder="Enter Purchase By . . ." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Amount <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" name="expense[amount]" class="form-control" value="" placeholder="Enter Purchase Amount . . ." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                        </div>
                                        <input type="text" name="expense[date]" class="form-control date bg-white hasDatepicker" value="18-02-2020" placeholder="Enter Purchase Date . . ." readonly="" autocomplete="off" required="" id="dp1582020986809">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Expense Type <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-notepad"></i></span>
                                        </div>
                                        <select class="custom-select" name="expense[expensetype]" required="">
                                            <option value="1">Salaries and wages	</option>
                                            <option value="2">Utility expenses	</option>
                                            <option value="3">Administration expenses</option>
                                            <option value="4">IT and Internet Expense</option>
                                            <option value="5">Office Supplies</option>
                                            <option value="6">Health Care</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Method <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-wallet"></i></span>
                                        </div>
                                        <select name="expense[method]" class="custom-select" required="">
                                            <option value="1">Bank Transfer</option>
                                            <option value="2">Cash Payments</option>
                                            <option value="3">Credit card payments</option>
                                            <option value="4">Cheque</option>
                                            <option value="5">Direct debit payments</option>
                                            <option value="6">Digital currencies</option>
                                            <option value="7">Paypal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ti-paragraph"></i></span>
                                        </div>
                                        <textarea name="expense[description]" class="form-control" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="expense[id]" value="">
                    </div>
                    <div class="panel-footer">
                        <div class="content-submit text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Attach File Modal -->
            <div id="attach-file" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Upload Receipt</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=attach/documents" class="dropzone dz-clickable" id="attach-file-upload"><div class="dz-default dz-message"><span>Drop files here or click here to upload.<br><br> Only Image and PDF allowed.</span></div></form>
                        </div>
                    </div>
                </div>
            </div>
            
            <link rel="stylesheet" href="./Expense_Add _ Klinikal Hospital_files/jquery.fancybox.min.css">
            <script src="./Expense_Add _ Klinikal Hospital_files/jquery.fancybox.min.js"></script>
            <script>
                $(document).ready(function () {
                    $("a.open-pdf").fancybox({
                        'frameWidth': 800,
                        'frameHeight': 900,
                        'overlayShow': true,
                        'hideOnContentClick': false,
                        'type': 'iframe'
                    });

                    $("#attach-file-upload").dropzone({
                        addRemoveLinks: true,
                        acceptedFiles: "image/*,application/pdf",
                        maxFilesize: 2,
                        dictDefaultMessage: 'Drop files here or click here to upload.<br /><br /> Only Image and PDF allowed.',
                        init: function() {
                            var attachmentDropzone = this;
                            this.on("sending", function(file, xhr, formData) {
                                formData.append("id", );
                                formData.append("type", 'expense');
                                formData.append("_token", $('.s_token').val());
                            });

                            this.on("success", function(file, xhr){
                                var response = JSON.parse(xhr);
                                if (response.error === false) {
                                    if (response.ext === "pdf") {
                                        $('.attachment-container').append('<div class="attachment-image attachment-pdf">'+
                                            '<a href="../public/uploads/attachments/'+response.name+'" class="open-pdf">'+
                                            '<img class="img-thumbnail" src="../public/images/pdf.png" alt="">'+
                                            '</a>'+
                                            '<input type="hidden" name="report_name" value="'+response.name+'">'+
                                            '<div class="attachment-delete" data-toggle="tooltip" title="" data-original-title="Delete"><a class="ti-close"></a></div>'+
                                            '</div>');
                                    } else {
                                        $('.attachment-container').append('<div class="attachment-image">'+
                                            '<a data-fancybox="gallery" href="../public/uploads/attachments/'+response.name+'">'+
                                            '<img class="img-thumbnail" src="../public/uploads/attachments/'+response.name+'" alt="">'+
                                            '</a>'+
                                            '<div class="attachment-delete" data-toggle="tooltip" title="" data-original-title="Delete"><a class="ti-close"></a></div>'+
                                            '<input type="hidden" name="report_name" value="'+response.name+'">'+
                                            '</div>');
                                    }
                                    toastr.success('File uploaded successfully.', 'Success');
                                    $('#attach-file').modal('hide');
                                } else {
                                    toastr.error(response.message, 'Error');
                                }
                                attachmentDropzone.removeFile(file);
                            });
                        }
                    });

                    $('.attachment-container').on('click', '.attachment-delete a', function () {
                        var ele = $(this),
                            name = ele.parents('.attachment-image').find('input').val();
                        $.ajax({
                            type: 'POST',
                            url: 'index.php?route=attach/documents/delete',
                            data: {name: name, type: 'expense', id: '', _token: $('.s_token').val()},
                            error: function() {
                                toastr.error('File could not be deleted', 'Server Error');
                            },
                            success: function(response) {
                                response = JSON.parse(response);
                                if (response.error === false) {
                                    ele.parents('.attachment-image').remove();
                                    toastr.success(response.message, 'Success');
                                } else {
                                    toastr.error(response.message, 'Error');
                                }
                            }
                        });
                    });
                });
            </script>
            
        </div>
    </div>


    @endsection
