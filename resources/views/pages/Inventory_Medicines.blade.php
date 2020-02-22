@extends('system_layouts.master_sys')
@section('icerik')
   
    <script>
        $(document).ready(function () {
          // $('#Pharmacy_Rotate').addClass('rotate') ;
           $('#Pharmacy_active').addClass('active') ;
           $('#Inventory_Medicines_text').addClass('text-white') ;
        });
    </script>
    
    <div class="page-wrapper">
        <div class="page-body">
            <div class="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="page-title-text d-inline-block">Medicines</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Medicines</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="dropdown d-inline-block mr-2">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"><i class="ti-download text-primary pr-2"></i> Export</a>
                            <ul class="dropdown-menu dropdown-menu-right export-button">
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                                <li><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row align-items-center pb-3">
                                <div class="col-sm-6 text-left">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                        <label>Show
                                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="-1">All</option>
                                            </select> entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right"><div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><div class="col-sm-12">
                                    <!--- datatable-table dataTable --->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 10px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Medicine: activate to sort column ascending" style="width: 182px;">Medicine</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 61px;">Company</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Unit: activate to sort column ascending" style="width: 24px;">Unit</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Unit/Packing: activate to sort column ascending" style="width: 76px;">Unit/Packing</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 57px;">Category</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Storebox: activate to sort column ascending" style="width: 54px;">Storebox</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Reorderlevel: activate to sort column ascending" style="width: 76px;">Reorderlevel</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Live Stock: activate to sort column ascending" style="width: 37px;">Live Stock</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 57px;">Status</th></tr>
                                        </thead>
                                        <tbody>
                                   
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>
                                                <p class="text-primary mb-0">Amoxicillin</p>
                                                <p class="mb-0">Amoxicillin</p>
                                            </td>
                                            <td>Amoxicillin</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Capsule</td>
                                            <td>Box 8</td>
                                            <td>50</td>
                                            <td>100.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr><tr role="row" class="even">
                                            <td>2</td>
                                            <td>
                                                <p class="text-primary mb-0">Amikacin</p>
                                                <p class="mb-0">aminoglycosides</p>
                                            </td>
                                            <td>Amikacin</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>Box 5</td>
                                            <td>30</td>
                                            <td>100.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr><tr role="row" class="odd">
                                            <td>3</td>
                                            <td>
                                                <p class="text-primary mb-0">Seralazide</p>
                                                <p class="mb-0">Hydralazine &amp; Hydrochlorothiazideq</p>
                                            </td>
                                            <td>Aurobindo</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>box 2</td>
                                            <td>20</td>
                                            <td>50.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr><tr role="row" class="even">
                                            <td>4</td>
                                            <td>
                                                <p class="text-primary mb-0">Augmentin</p>
                                                <p class="mb-0">Amoxicillin and clavulanate potassium</p>
                                            </td>
                                            <td>Cipla</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>box 1</td>
                                            <td>20</td>
                                            <td>50.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr><tr role="row" class="odd">
                                            <td>5</td>
                                            <td>
                                                <p class="text-primary mb-0">Xanor</p>
                                                <p class="mb-0">Xanor</p>
                                            </td>
                                            <td>Xanor pvt ltd</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>box 3</td>
                                            <td>50</td>
                                            <td>50.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-warning">Reorderlevel</span>							</td>
                                        </tr><tr role="row" class="even">
                                            <td>6</td>
                                            <td>
                                                <p class="text-primary mb-0">Altace</p>
                                                <p class="mb-0">ramipril</p>
                                            </td>
                                            <td>Altace</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>box 2</td>
                                            <td>20</td>
                                            <td>50.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr><tr role="row" class="odd">
                                            <td>7</td>
                                            <td>
                                                <p class="text-primary mb-0">Ambien</p>
                                                <p class="mb-0">Ambien</p>
                                            </td>
                                            <td>Ambien</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>box 2</td>
                                            <td>100</td>
                                            <td>165.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr><tr role="row" class="even">
                                            <td>8</td>
                                            <td>
                                                <p class="text-primary mb-0">Norvasc</p>
                                                <p class="mb-0">amlodipine</p>
                                            </td>
                                            <td>Norvasc</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>box 2</td>
                                            <td>20</td>
                                            <td>200.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr><tr role="row" class="odd">
                                            <td>9</td>
                                            <td>
                                                <p class="text-primary mb-0">Celexa</p>
                                                <p class="mb-0">Celexa</p>
                                            </td>
                                            <td>Celexa</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>box 1</td>
                                            <td>50</td>
                                            <td>100.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr><tr role="row" class="even">
                                            <td>10</td>
                                            <td>
                                                <p class="text-primary mb-0">Amaryl</p>
                                                <p class="mb-0">glimepiride</p>
                                            </td>
                                            <td>Amaryl</td>
                                            <th>1</th>
                                            <td>10</td>
                                            <td>Tablet</td>
                                            <td>box 2</td>
                                            <td>100</td>
                                            <td>250.00</td>
                                            <td>
                                                <span class="badge badge-sm badge-primary">Normal</span>							</td>
                                        </tr></tbody>
                                    </table></div></div><div class="row align-items-center pt-3"><div class="col-sm-12 col-md-4"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last" id="DataTables_Table_0_last"><a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicines#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="uploadmedicine-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Import Medicines</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicine/upload" method="post" enctype="multipart/form-data" siq_id="autopick_6643">
                            <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Medicine Category</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                        <select name="category" class="custom-select">
                                            <option value="1">Tablet</option>
                                            <option value="2">Syrup</option>
                                            <option value="3">Capsule</option>
                                            <option value="4">Injection</option>
                                            <option value="5">Cream</option>
                                            <option value="6">Inhalers</option>
                                            <option value="7">Diaper</option>
                                            <option value="8">Evohaler</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="medicine" class="custom-file-input m-0" id="medicinefile" accept=".csv" required="">
                                            <label class="custom-file-label" for="medicinefile">Choose file (Only CSV file)</label>
                                        </div>
                                        <div class="input-group-append">
                                            <a href="http://pepdev.com/theme-preview/klinikal/admin/index.php?route=medicine/sample" class="input-group-text">Download Sample</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function(){

                    $("#medicinefile").on('change', function(e) {
                        if (e.target.files.length > 0) {
                            $(this).siblings('label').text(e.target.files[0].name);
                        }
                    });
                });
            
            </script>
        
        </div>
    </div>

@endsection
