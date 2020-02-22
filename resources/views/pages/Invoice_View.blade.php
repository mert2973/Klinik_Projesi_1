@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Invoices_active').addClass('active') ;
        });
    </script>
<div class="page-wrapper">
    <div class="page-body"><div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">Invoice View</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                            <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=invoices">Invoices</a></li>
                            <li>Invoice View</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <a data-toggle="modal" class="btn btn-success btn-sm" data-target="#invoiceMail"><i class="ti-envelope mr-2"></i>Send Email</a>
                    <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=invoice/pdf&amp;id=1" class="btn btn-danger btn-sm" target="_blank"><i class="far fa-file-pdf mr-2"></i>PDF/Print</a>
                    <a href="{{url('/Invoice_Edit')}}" class="btn btn-primary btn-sm"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addPayment"><i class="ti-wallet mr-2"></i>Add Payment</a>
                    <a data-toggle="modal" class="btn btn-info btn-sm" data-target="#attach-file"><i class="ti-clip"></i></a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8 col-lg-12 col-xl-8">
                <div class="inv-template mb-4">
                    <div class="inv-template-bdy table-responsive p-4">
                        <div class="company table-responsive">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="info">
                                        <div class="logo"><img src="{{asset('css_js_img/logo/logo4.png')}}" alt="logo"></div>
                                        <div class="name">Klinikal Pvt Ltd</div>
                                        <div class="text">Address Line 11, Address Line 2, City, Country - 0123456</div>
                                    </td>
                                    <td class="text-right">
                                        <div class="title">Invoice</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="meta table-responsive">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="bill-to v-aling-bottom">
                                        <div class="heading">Bill To</div>
                                        <div class="title">Patient Name</div><!-- Pepdev Team-->
                                        <div class="text">patient@gmail.com</div>
                                        <div class="text">12345567763</div>
                                    </td>
                                    <td class="info v-aling-bottom">
                                        <table class="text-right">
                                            <tbody>
                                            <tr>
                                                <td class="text">#</td>
                                                <td class="text w-min-130">INV-00001</td>
                                            </tr>
                                            <tr>
                                                <td class="text">Invoice Date</td>
                                                <td class="text w-min-130">07-01-2020</td>
                                            </tr>
                                            <tr>
                                                <td class="text">Due Date</td>
                                                <td class="text w-min-130">03-01-2020</td>
                                            </tr>
                                            <tr>
                                                <td class="text">Due Amount</td>
                                                <td class="text w-min-130">$110</td>
                                            </tr>
                                            <tr>
                                                <td class="text">Payment Method</td>
                                                <td class="text w-min-130">Bank Transfer</td>
                                            </tr>
                                            <tr>
                                                <td class="text">Status</td>
                                                <td class="text w-min-130">Partially Paid</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="w-min-280">Items &amp; Description</th>
                                    <th>Qty</th>
                                    <th>Unit Cost</th>
                                    <th>Tax</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="title">
                                        <p>Health check up</p>
                                        <span>Body checkup and diagnosis.</span>
                                    </td>
                                    <td>1</td>
                                    <td>$40.00</td>
                                    <td class="tax">
                                    </td>
                                    <td>$40.00</td>
                                </tr>
                                <tr>
                                    <td class="title">
                                        <p>Injection Charges</p>
                                        <span>Injection Charges</span>
                                    </td>
                                    <td>10</td>
                                    <td>$5.00</td>
                                    <td class="tax">
                                    </td>
                                    <td>$50.00</td>
                                </tr>
                                <tr>
                                    <td class="title">
                                        <p>Intensive care unit</p>
                                        <span>An intensive care unit or intensive therapy unit or intensive treatment unit or critical care unit</span>
                                    </td>
                                    <td>1</td>
                                    <td>$46.00</td>
                                    <td class="tax">
                                    </td>
                                    <td>$46.00</td>
                                </tr>
                                <tr class="total">
                                    <td rowspan="5" colspan="3" class="blank">
                                    </td>
                                    <td class="title">Sub Total</td>
                                    <td class="value">$136.00</td>
                                </tr>
                                <tr class="total">
                                    <td class="title">Tax</td>
                                    <td class="value">$0.00</td>
                                </tr>
                                <tr class="total">
                                    <td class="title">Discount</td>
                                    <td class="value">$13.60</td>
                                </tr>
                                <tr class="total">
                                    <td class="title">Total</td>
                                    <td class="value">$122.40</td>
                                </tr>
                                <tr class="total">
                                    <td class="title">Paid</td>
                                    <td class="value">$12.4</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="note">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="block align-top">
                                        <span>Customer Note</span>
                                        <p>It's great to work with you. </p>
                                    </td>
                                    <td class="block align-top">
                                        <span>Terms &amp; Conditions</span>
                                        <p>Please pay us your amount in 15 days. Otherwise 12% interest will be applied.  </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-12 col-xl-4">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-12">
                        <div class="panel panel-default">
                            <div class="panel-head">
                                <div class="panel-title">
                                    <span class="panel-title-text">Payment History</span>
                                </div>
                                <div class="panel-action">
                                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addPayment"><i class="ti-wallet mr-1"></i> Add Payment</a>
                                </div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Method</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>03-01-2020</td>
                                        <td>Cash Payments</td>
                                        <td>$12.40</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right">Total</td>
                                        <td>$ 12.4</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12">
                        <div class="panel panel-default">
                            <div class="panel-head">
                                <div class="panel-title">
                                    <span class="panel-title-text">Attachments</span>
                                </div>
                                <div class="panel-action">
                                    <a data-toggle="modal" class="btn btn-info btn-sm" data-target="#attach-file"><i class="ti-clip"></i></a>
                                </div>
                            </div>
                            <div class="panel-wrapper">
                                <div class="attachment-container">
                                    <p class="p-3 text-danger text-center">No doument found !!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Payment Modal -->
        <div id="addPayment" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Payments</h5>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=addpayment" method="post" siq_id="autopick_106">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-form-label">Payment Method</label>
                                <select name="payment[method]" class="custom-select" required="">
                                    <option value="">Payment Method</option>
                                    <option value="1">Bank Transfer</option>
                                    <option value="2">Cash Payments</option>
                                    <option value="3">Credit card payments</option>
                                    <option value="4">Cheque</option>
                                    <option value="5">Direct debit payments</option>
                                    <option value="6">Digital currencies</option>
                                    <option value="7">Paypal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Amount ($)</label>
                                <input type="text" class="form-control" name="payment[amount]" value="110" placeholder="Amount" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Payment Date</label>
                                <input type="text" class="form-control date hasDatepicker" name="payment[date]" value="21-02-2020" placeholder="Payment Date" required="" id="dp1582289978851">
                            </div>
                            <input type="hidden" name="payment[invoice]" value="1">
                            <input type="hidden" name="payment[email]" value="support@pepdev.com">
                            <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Attach File Modal -->
        <div id="attach-file" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Uplaod Attachments</h5>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="1">
                        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=attach/documents" class="dropzone dz-clickable" id="attach-file-upload"><div class="dz-default dz-message"><span>Drop files here or click here to upload.<br><br> Only Image and PDF allowed.</span></div></form>
                    </div>
                </div>
            </div>
        </div>
        
        <link rel="stylesheet" href="./Invoice_View _ Klinikal Hospital_files/jquery.fancybox.min.css">
        <script src="./Invoice_View _ Klinikal Hospital_files/jquery.fancybox.min.js"></script>
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
                            formData.append("id", 1);
                            formData.append("type", 'invoice');
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
                        data: {name: name, type: 'invoice', id: '1', _token: $('.s_token').val()},
                        error: function() {
                            toastr.error('File could not be deleted', 'Server Error');
                        },
                        success: function(data) {
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
        <!-- Sent Email -->
        <div id="invoiceMail" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Send Invoice</h5>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=invoice/sentmail" method="post" enctype="multipart/form-data" siq_id="autopick_6107">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>To</label>
                                    <input type="text" class="form-control" value="Pepdev Team" placeholder="To" readonly="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>BCC</label>
                                    <input type="email" class="form-control" name="mail[bcc]" value="" placeholder="BCC">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="mail[subject]" value="Invoice Reminder" placeholder="Subject" required="">
                            </div>
                            <div class="form-group">
                                <label>Attach PDF?</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="mail[attachPdf]" class="custom-control-input" value="1" id="mailPdf" checked="">
                                    <label class="custom-control-label" for="mailPdf"><i class="icon-paper-clip ml-2"></i> invoice-1.pdf</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Message</label>
                                <textarea name="mail[message]" class="mail-summernote" placeholder="Message" style="display: none;"></textarea>
                               
                            </div>
                            <input type="hidden" name="mail[id]" value="1">
                            <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- include summernote css/js-->
        <link href="./Invoice_View _ Klinikal Hospital_files/summernote-bs4.css" rel="stylesheet">
        <script type="text/javascript" src="./Invoice_View _ Klinikal Hospital_files/summernote-bs4.min.js"></script>
        <script type="text/javascript" src="./Invoice_View _ Klinikal Hospital_files/klinikal.summernote.js"></script>
    
    
    </div>
</div>
@endsection
