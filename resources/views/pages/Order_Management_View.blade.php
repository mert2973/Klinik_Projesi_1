@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            // $('#Pharmacy_Rotate').addClass('rotate') ;
            $('#Account_active').addClass('active') ;
            // $('#Invoices_active').addClass('active') ;
            $('#Order_Management_text').addClass('text-white') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
            @if (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                        <span aria-hidden="true" style="line-height: 0.6">&times;</span>
                    </button>
                    <strong>{{ session('warning') }}</strong>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                        <span aria-hidden="true" style="line-height: 0.6">&times;</span>
                    </button>
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Alış Faturası - İnceleme</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2"><a href="{{url('/Order_Management.index')}}">Alış Faturası</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Alış Faturası- İnceleme</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a data-toggle="modal" class="btn btn-success btn-sm" data-target="#invoiceMail"><i class="ti-envelope mr-2"></i>Email Gönder</a>
                        <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=invoice/pdf&amp;id=1" class="btn btn-danger btn-sm" target="_blank"><i class="far fa-file-pdf mr-2"></i>PDF/Print</a>
                        <a href="{{route('Sales_Invoices.edit',1)}}" class="btn btn-primary btn-sm"><i class="ti-pencil-alt mr-2"></i>Düzenle</a>
                        <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addPayment"><i class="ti-wallet mr-2"></i>Ödeme Ekle</a>
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
                                            <div class="name">{{ $order_inv[0]["c_legal_name"]}}</div>
                                            <div class="text">{{$order_inv[0]["adress1"]}} - {{$order_inv[0]["c_phone"]}} </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="title">Alış Faturası</div>
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
                                            <div class="title">Tedarikçi : {{$order_inv_sub["spp_name"]}}</div><!-- Pepdev Team-->
                                            <div class="text">{{$order_inv_sub["spp_email"]}}</div>
                                            <div class="text">{{$order_inv_sub["spp_phone"]}}</div>
                                            
                                        </td>
                                        <td class="info v-aling-bottom">
                                            <table class="text-right">
                                                <tbody>
                                                <tr>
                                                    <td class="text">Fatura No</td>
                                                    <td class="text w-min-130">
                                                        @if($id_inv<10)
                                                            {{"F-0000"}}{{$id_inv}}
                                                        @elseif($id_inv<100)
                                                            {{"F-000"}}{{$id_inv}}
                                                        @elseif($id_inv<1000)
                                                            {{"F-00"}}{{$id_inv}}
                                                        @elseif($id_inv>=10000 || $id_inv<=10000)
                                                            {{"F-"}}{{$id_inv}}
                                                        @endif
                                                    </td>
                                                </tr>
                                          
                                                <tr>
                                                    <td class="text">Sipariş Tarihi</td>
                                                    <td class="text w-min-130">{{Carbon\Carbon::parse($order_inv_sub["order_date"])->format('d/m/Y')}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text">Teslim Tarihi</td>
                                                    <td class="text w-min-130">{{Carbon\Carbon::parse($order_inv_sub["delivery_date"])->format('d/m/Y')}}</td>
                                                </tr>
                                              
                                                <tr>
                                                    <td class="text">Ödeme Tipi</td>
                                                    <td class="text w-min-130">{{--$order_inv_sub["method"]--}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text">Ödeme Durumu</td>
                                                    <td class="text w-min-130">{{--$order_inv_sub["status"]--}}</td>
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
                                        <th class="w-min-290">Siparişler</th>
                                        <th style="width: 70px">Miktar</th>
                                        <th style="width: 100px">Teslim Alınan</th>
                                        <th style="width: 70px">Kalan</th>
                                        <th>Birim Fiyat</th>
                                        <th>Vergi</th>
                                        <th>Tutar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order_inv_items as $itms)
                                        <tr>
                                            <td class="title">
                                                <p>{{$itms["itm_name"]}}</p>
                                                <span>{{$itms["itm_dscr"]}}</span>
                                            </td>
                                            <td>{{$itms["quantity"]}}</td>
                                            <td>{{$itms["delivery_qty"]}}</td>
                                            <td>{{$itms["remaning_qty"]}}</td>
                                            <td>{{$itms["purchaseprice"] }}</td>
                                            <td class="tax">{{$itms["total_tax"] }}</td>
                                            <td>{{$itms["total_price"]}}</td>
                                        </tr>
                                    @endforeach
                                    <tr class="total">
                                        <td rowspan="6" colspan="5" class="blank">
                                        </td>
                                        <td class="title">Ara Toplam</td>
                                        <td class="value">{{$order_inv_sub["subtotal"]}} TL</td>
                                    </tr>
                                    <tr class="total">
                                        <td class="title">Vergi</td>
                                        <td class="value">{{$order_inv_sub["tax"]}} TL</td>
                                    </tr>
                                    <tr class="total">
                                        <td class="title">İndirim</td>
                                        @if($order_inv_sub["discounttype"]==2)
                                            <td class="value">{{$order_inv_sub["discount"]}} TL </td>
                                        @else
                                            <td class="value">{{$order_inv_sub["discounttype"]}} {{$order_inv_sub["discount"]}}  </td>
                                        @endif
                                    </tr>
                                    <tr class="total">
                                        <td class="title">Toplam</td>
                                        <td class="value">{{$order_inv_sub["amount"]}} TL</td>
                                    </tr>
                                    
                                    <tr class="total">
                                        <td class="title">Ödenen</td>
                                        <td class="value">{{$order_inv_sub["paid"]}} TL</td>
                                    </tr>
                                    <tr class="total">
                                        <td class="title">Kalan</td>
                                        <td class="value">{{$order_inv_sub["due"]}} {{"TL"}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="note">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="block align-top">
                                            <span>NOT</span>
                                            <p>{{$order_inv_sub["note"]}} </p>
                                        </td>
                                        <td class="block align-top">
                                            <span>Şartlar Ve Koşullar</span>
                                            <p>{{--$order_inv_sub["tc"]--}}</p>
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
                                        <span class="panel-title-text">Ödeme Geçmişi</span>
                                    </div>
                                    <div class="panel-action">
                                        <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addPayment"><i class="ti-wallet mr-1"></i> Ödeme Ekle</a>
                                    </div>
                                </div>
                                <div class="panel-body table-responsive pl-2 pr-2">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Ödeme Tarihi</th>
                                            <th>Ödeme Tipi</th>
                                            <th>Ödenen</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $payments=""; @endphp
                                        @foreach($history_payment as $payments)
                                            @php $date=Carbon\Carbon::parse($payments->paid_date)->format("d/m/Y H:i"); @endphp
                                            <tr>
                                                <td class="pl-1">{{$date}}</td>
                                                <td>{{$payments->method}}</td>
                                                <td>{{$payments->credit}} TL</td><!-- paid-->
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2" class="text-right">Toplam Ödeme</td>
                                            <td>{{$order_inv_sub["paid"]}} TL</td>
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
                            <h5 class="modal-title">Ödeme Ekle</h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <form action="{{url("add_payment_history_for_purchase")}}" method="post" ><!-- siq_id="autopick_106" -->
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="payment[names]" value="{{$order_inv_sub["spp_name"]}}">
                                <input type="hidden" name="payment[spp_id]" value="{{$order_inv_sub["supplier_id"]}}">
                                <div class="form-group">
                                    <label class="col-form-label">Hesap Seçiniz</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-credit-card"></i></span></div>
                                        <select name="payment[casing]" class="custom-select" required="">
                                            <option value="">Hesap Seçiniz</option>
                                            @foreach($casings as $csh)
                                                <option value="{{$csh->id}}">{{$csh->service_name."/".$csh->branch_name."/".$csh->currency}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-form-label">Ödeme Tipi</label>
                                    <select name="payment[method]" class="custom-select" required="">
                                        <option value="Banka Transferi">Banka Transferi</option>
                                        <option value="Nakit Ödeme">Nakit Ödeme</option>
                                        <option value="Kredi Kartı Ödemesi">Kredi Kartı Ödemesi</option>
                                        <!--<option value="4">Cheque</option> -->
                                        <option value="Otomatik Ödeme">Otomatik Ödeme</option>
                                        <option value="Dijital Para ödemesi">Dijital Para ödemesi</option>
                                        <option value="Paypal">Paypal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Ödenecek Miktar(TL)</label>
                                    <input type="text" class="form-control" name="payment[paid]" value="" placeholder="Amount" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Ödeme Tarihi</label>
                                    <input type="text" class="form-control date hasDatepicker" name="payment[date]" value="" placeholder="Payment Date" required="" id="default1_datetimepicker"><!-- id="dp1582289978851" -->
                                </div>
                                <input type="hidden" name="payment[id]" value="{{$id_inv}}">
                            
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Kaydet</button>
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
                            <form action="" class="dropzone dz-clickable" id="attach-file-upload"><div class="dz-default dz-message"><span>Drop files here or click here to upload.<br><br> Only Image and PDF allowed.</span></div></form>
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
            <!--  <link href="./Invoice_View _ Klinikal Hospital_files/summernote-bs4.css" rel="stylesheet">
              <script type="text/javascript" src="./Invoice_View _ Klinikal Hospital_files/summernote-bs4.min.js"></script>
              <script type="text/javascript" src="./Invoice_View _ Klinikal Hospital_files/klinikal.summernote.js"></script> -->
        
        
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#default1_datetimepicker').datetimepicker({
                formatTime:'H:i',
                format:"d-m-Y H:i",
                formatDate:'d.m.Y',
                // onChangeDateTime:logic,
                //onShow:logic,
                dayOfWeekStart: 1,
                disabledWeekDays: [0],
            });
        });
    
    </script>
@endsection
