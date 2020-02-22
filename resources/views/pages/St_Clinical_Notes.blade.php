
@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Setting_active').addClass('active') ;
            $('#St_Clinical_Notes_text').addClass('text-white') ;
        });
    </script>
<div class="page-wrapper">
    <div class="page-body"><!-- Items list page start -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text d-inline-block">Notes</h2>
                    <div class="breadcrumbs d-inline-block">
                        <ul>
                            <li><a href="{{url('Dashboard')}}">Dashboard</a></li>
                            <li>Notes</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="dropdown d-inline-block mr-2">
                        <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"><i class="ti-download text-primary pr-2"></i> Export</a>
                        <ul class="dropdown-menu dropdown-menu-right export-button">
                            <li><a href="#" class="pdf"><i class="far fa-file-pdf pr-2"></i>PDF</a></li>
                            <li><a href="#" class="excel"><i class="far fa-file-excel pr-2"></i>Excel</a></li>
                            <li><a href="#" class="csv"><i class="ti-clipboard pr-2"></i>CSV</a></li>
                            <li><a href="#" class="print"><i class="ti-printer pr-2"></i>Print</a></li>
                            <li><a href="#" class="copy"><i class="ti-layers pr-2"></i>Copy</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addNote"><i class="ti-plus pr-2"></i> New Note</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row align-items-center pb-3"><div class="col-sm-6 text-left">
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Show
                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="-1">All</option>
                                        </select> entries</label>
                                </div></div><div class="col-sm-6 text-right">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                    
                                </div></div></div><div class="row"><div class="col-sm-12">
                                
                                <!-- datatable-table dataTable --->
                                <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 71px;">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-label="Note Type: activate to sort column ascending" style="width: 181px;">Note Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Note: activate to sort column ascending" style="width: 588px;">Note</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                         
                                    <tr role="row" class="odd">
                                        <td>1</td>
                                        <td class="text-primary">Problem</td>
                                        <td>Patient has fever</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Problem" data-note="Patient has fever" data-id="1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>2</td>
                                        <td class="text-primary">Problem</td>
                                        <td>Patient has fever</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Problem" data-note="Patient has fever" data-id="2" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td>3</td>
                                        <td class="text-primary">Problem</td>
                                        <td>Patient has stomach problem</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Problem" data-note="Patient has stomach problem" data-id="3" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>4</td>
                                        <td class="text-primary">Problem</td>
                                        <td>Patient has pain in both leg</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Problem" data-note="Patient has pain in both leg" data-id="4" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td>5</td>
                                        <td class="text-primary">Problem</td>
                                        <td>Patient has weakness.</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Problem" data-note="Patient has weakness." data-id="5" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>6</td>
                                        <td class="text-primary">Observation</td>
                                        <td>High fever</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Observation" data-note="High fever" data-id="6" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td>7</td>
                                        <td class="text-primary">Observation</td>
                                        <td>Eyes are reddish </td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Observation" data-note="Eyes are reddish " data-id="7" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>8</td>
                                        <td class="text-primary">Observation</td>
                                        <td>Swelling near neck</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Observation" data-note="Swelling near neck" data-id="8" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td>9</td>
                                        <td class="text-primary">Observation</td>
                                        <td>wound on knee</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Observation" data-note="wound on knee" data-id="9" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td>10</td>
                                        <td class="text-primary">Observation</td>
                                        <td>Injuries on hand</td>
                                        <td class="table-action">
                                            <a class="edit edit-note" data-type="Observation" data-note="Injuries on hand" data-id="10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row align-items-center pt-3">
                            <div class="col-sm-12 col-md-4">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                            </div><div class="col-sm-12 col-md-8 text-right dataTables_pager">
                                <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item first disabled" id="DataTables_Table_0_first">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">2</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">3</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">4</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">5</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">6</a>
                                        </li>
                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="8" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item last" id="DataTables_Table_0_last">
                                            <a href="" aria-controls="DataTables_Table_0" data-dt-idx="9" tabindex="0" class="page-link">
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADD EDIT MODAL -->
        <div class="modal fade" id="addNote" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Note</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="" method="post" siq_id="autopick_9647">
                        <div class="modal-body">
                            <input type="hidden" class="id" name="note[id]" value="">
                            <input type="hidden" name="_token" value="">
                            <div class="form-group">
                                <label class="col-form-label">Note Type <span class="form-required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="ti-tag"></i></span></div>
                                    <select class="custom-select type" name="note[type]">
                                        <option value="Problem">Problem</option>
                                        <option value="Observation">Observation</option>
                                        <option value="Diagnosis">Diagnosis</option>
                                        <option value="Investigation">Investigation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Note <span class="form-required">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="ti-paragraph"></i></span></div>
                                    <textarea class="form-control note" name="note[note]" placeholder="Enter Note . . ." required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save-alt pr-2"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                //New or Edit Payment type Modal *************
                $('body').on('click', '.edit-note', function () {
                    var ele = $(this);
                    $('#addNote .type').val(ele.data('type'));
                    $('#addNote .note').val(ele.data('note'));
                    $('#addNote .id').val(ele.data('id'));
                    $('#addNote .modal-title').text('Edit Note');
                    $('#addNote').modal('show');
                });

                $('#addNote').on('hidden.bs.modal', function (e) {
                    $('#addNote .modal-title').text('New Note');
                    $('#addNote input').not( "[name='_token']" ).val('');
                    $('#addNote textarea').val('');
                });
            });
        </script>
    
    </div>
</div>
@endsection
