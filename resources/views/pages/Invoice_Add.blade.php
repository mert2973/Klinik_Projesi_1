@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Invoices_active').addClass('active') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
            <script type="text/javascript" src="{{asset('css_js_img/invoice.js')}}"></script>
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Invoice Add</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2 text-linkedin"><a href="{{url('/Invoices')}}" >Invoices</a></span>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Invoice Add</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right"></div>
                </div>
            </div>
            
            <form action="{{url('/Invoices')}}" method="get" siq_id="autopick_8816">
                <div class="panel panel-default">
                    <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                    <input type="hidden" name="invoice[id]" value="">
                    <input type="hidden" name="invoice[appointment_id]" value="">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Patient Name <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                        <input type="text" name="invoice[name]" class="form-control patient-name ui-autocomplete-input" value="" placeholder="Seach Patient Name or Enter . . ." required="" autocomplete="off">
                                        <input type="hidden" name="invoice[patient_id]" class="form-control patient-id" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Patient Email Address <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                        <input type="text" name="invoice[email]" class="form-control patient-mail" value="" placeholder="Enter Patient Email Address . . ." required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Patient Mobile No.</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-mobile"></i></span></div>
                                        <input type="text" name="invoice[mobile]" class="form-control patient-mobile" value="" placeholder="Enter Patient Mobile No . . .">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Doctor</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-heart-broken"></i></span></div>
                                        <input type="text" name="invoice[doctor]" class="form-control patient-doctor ui-autocomplete-input" value="Daniel Barnes" placeholder="Search Doctor . . ." readonly="" autocomplete="off">
                                        <input type="hidden" name="invoice[doctor_id]" class="form-control patient-doctor-id" value="1" readonly="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Invoice Date <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="ti-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="date" name="invoice[invoicedate]" class="form-control " value="18-02-2020" placeholder="Invoice Date" required="" id="">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Due Date <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-calendar"></i></span></div>
                                        <input type="date" name="invoice[duedate]" class="form-control date hasDatepicker" value="18-02-2020" placeholder="Due Date" required="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Payment Method</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-credit-card"></i></span></div>
                                        <select name="invoice[method]" class="custom-select" required="">
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
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Payment Status <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-check-box"></i></span></div>
                                        <select name="invoice[status]" id="" class="custom-select" required="">
                                            <option value="Paid">Paid</option>
                                            <option value="Partially Paid">Partially Paid</option>
                                            <option value="Unpaid">Unpaid</option>
                                            <option value="Pending">Pending</option>
                                            <option value="In Process">In Process</option>
                                            <option value="Cancelled">Cancelled</option>
                                            <option value="Other">Other</option>
                                            <option value="Unknown">Unknown</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Invoice Status <span class="form-required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-check-box"></i></span></div>
                                        <select name="invoice[inv_status]" class="custom-select" required="">
                                            <option value="0">Draft</option>
                                            <option value="1">Published</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-items table-responsive pt-3 pb-5">
                            <table class="table-input">
                                <thead>
                                <tr>
                                    <th>Item Name <span class="form-required">*</span></th>
                                    <th>Item Description</th>
                                    <th>Quantity <span class="form-required">*</span></th>
                                    <th>Unit Cost <span class="form-required">*</span></th>
                                    <th>Tax</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="item-row">
                                    <td class="">
                                        <textarea name="invoice[item][0][name]" class="item-name ui-autocomplete-input" required="" autocomplete="off"></textarea>
                                    </td>
                                    <td class="invoice-item">
                                        <textarea name="invoice[item][0][descr]" class="item-descr"></textarea>
                                    </td>
                                    <td class="">
                                        <textarea type="text" name="invoice[item][0][quantity]" class="item-quantity" required="">1</textarea>
                                    </td>
                                    <td class="">
                                        <textarea type="text" name="invoice[item][0][cost]" class="item-cost" required=""></textarea>
                                    </td>
                                    <td class="invoice-tax">
                                        <input type="hidden" name="invoice[item][0][taxprice]" class="item-tax-price" value="0" readonly="">
                                    </td>
                                    <td class="">
                                        <textarea type="text" name="invoice[item][0][price]" class="item-total-price" readonly=""></textarea>
                                        <input type="hidden" class="item-price">
                                    </td>
                                    <td>
                                        <a class="badge badge-warning badge-sm badge-pill add-taxes m-1">Add Taxes</a>
                                        <a class="badge badge-danger badge-sm badge-pill delete m-1">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="p-2">
                                        <div class="add-items d-inline-block">
                                            <a class="btn btn-success btn-sm m-1"><i class="icon-plus mr-1"></i> Add Item</a>
                                        </div>
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Sub Total</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[subtotal]" class="form-transparent sub-total" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Tax</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[tax]" class="form-transparent tax-total" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <div class="row align-items-center">
                                            <div class="col-8"><label>Discount</label></div>
                                            <div class="col-4">
                                                <select name="invoice[discounttype]" class="form-control discount-type">
                                                    <option value="1">%</option>
                                                    <option value="2">Flat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[discount]" class="form-transparent discount-total" value="">
                                        <input type="hidden" class="discount_amount" name="invoice[discount_value]" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Total</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[amount]" class="form-transparent  total-amount" value="" readonly="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Paid</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[paid]" class="form-transparent paid-amount" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="blank">
                                    </td>
                                    <td colspan="2" class="total-line">
                                        <label>Due</label>
                                    </td>
                                    <td colspan="2" class="total-value">
                                        <input type="text" name="invoice[due]" class="form-transparent due-amount" value="" readonly="">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Customer Note</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-quote-left"></i></span></div>
                                        <textarea class="form-control" name="invoice[note]" rows="3">It's great to work with you. </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Terms Conditions</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-notepad"></i></span></div>
                                        <textarea class="form-control" name="invoice[tc]" rows="3">Please pay us your amount in 15 days. Otherwise 12% interest will be applied.  </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                    </div>
                </div>
            </form>
            
            <div class="modal fade" id="addTax">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tax</h5>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-1" value="1" data-rate="5" data-name="VAT" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-1">VAT (5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-2" value="2" data-rate="7.5" data-name="VAT" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-2">VAT (7.5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-3" value="3" data-rate="10" data-name="VAT" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-3">VAT (10%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-4" value="4" data-rate="2.5" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-4">GST (2.5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-5" value="5" data-rate="5" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-5">GST (5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-6" value="6" data-rate="7.5" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-6">GST (7.5%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-7" value="7" data-rate="10" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-7">GST (10%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-8" value="8" data-rate="12" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-8">GST (12%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-9" value="9" data-rate="15" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-9">GST (15%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-10" value="10" data-rate="18" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-10">GST (18%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-11" value="11" data-rate="18" data-name="Vat" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-11">Vat (18%)</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" class="custom-control-input" id="inv-taxes-12" value="12" data-rate="0" data-name="GST" name="modaltax">
                                <label class="custom-control-label" for="inv-taxes-12">GST (0%)</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-pill add-modal-taxes">Add Taxes</button>
                        </div>
                    </div>
                </div>
            </div>
        
        
        </div>
    </div>
@endsection
