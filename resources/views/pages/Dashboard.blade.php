@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Dashboard_active').addClass('active') ;
        });
    </script>
    
    <div class="page-wrapper">
        <div class="page-body">
            
            
            <!-- Takvim --->
            <div class="panel panel-default">
                <div class="panel-body" style="position: static; zoom: 1;">
                    <div id="calendar" class="fc fc-unthemed fc-ltr">
                       <!-- <div class="fc-toolbar fc-header-toolbar">
                            <div class="fc-left">
                                <div class="fc-button-group">
                                    <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
                                        <span class="fc-icon fc-icon-left-single-arrow"></span></button>
                                    <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
                                        <span class="fc-icon fc-icon-right-single-arrow"></span>
                                    </button>
                                </div>
                                <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button>
                            </div><div class="fc-right"><div class="fc-button-group">
                                    <button type="button" class="fc-listDay-button fc-button fc-state-default fc-corner-left">Today</button>
                                    <button type="button" class="fc-listWeek-button fc-button fc-state-default">Week</button>
                                    <button type="button" class="fc-month-button fc-button fc-state-default fc-corner-right fc-state-active">month</button>
                                </div></div><div class="fc-center"><h2>February 2020</h2></div><div class="fc-clear">
                            </div>
                        </div>
                        <div class="fc-view-container" style="">
                            <div class="fc-view fc-month-view fc-basic-view" style="">
                                <table>
                                    <thead class="fc-head">
                                    <tr>
                                        <td class="fc-head-container fc-widget-header">
                                            <div class="fc-row fc-widget-header">
                                                <table>
                                                    <thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span>
                                                        </th>
                                                        <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody class="fc-body">
                                    <tr>
                                        <td class="fc-widget-content">
                                            <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 748px;">
                                                <div class="fc-day-grid fc-unselectable">
                                                    <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 124px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2020-01-26"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2020-01-27"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2020-01-28"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2020-01-29"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2020-01-30"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2020-01-31"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-02-01"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                <tr>
                                                                    <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2020-01-26"><span class="fc-day-number">26</span></td>
                                                                    <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2020-01-27"><span class="fc-day-number">27</span></td>
                                                                    <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2020-01-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2020-01-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2020-01-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2020-01-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-sat fc-past" data-date="2020-02-01"><span class="fc-day-number">1</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-warning fc-event-solid-warning fc-event-gradient"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">PepDev Team</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 124px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-02-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-02-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-02-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-02-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-02-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-02-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-02-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2020-02-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-mon fc-past" data-date="2020-02-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-tue fc-past" data-date="2020-02-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-wed fc-past" data-date="2020-02-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-thu fc-past" data-date="2020-02-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-fri fc-past" data-date="2020-02-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-sat fc-past" data-date="2020-02-08"><span class="fc-day-number">8</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 124px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-02-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2020-02-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2020-02-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2020-02-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2020-02-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2020-02-14"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2020-02-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2020-02-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-mon fc-past" data-date="2020-02-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-tue fc-past" data-date="2020-02-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-wed fc-past" data-date="2020-02-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-thu fc-past" data-date="2020-02-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-fri fc-past" data-date="2020-02-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-sat fc-past" data-date="2020-02-15"><span class="fc-day-number">15</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-warning fc-event-solid-warning fc-event-gradient"><div class="fc-content"><span class="fc-time">10:15a</span> <span class="fc-title">PepDev Team</span></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 124px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2020-02-16"></td><td class="fc-day fc-widget-content fc-mon fc-today fc-state-highlight" data-date="2020-02-17"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2020-02-18"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2020-02-19"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2020-02-20"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2020-02-21"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2020-02-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2020-02-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-mon fc-today fc-state-highlight" data-date="2020-02-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-tue fc-future" data-date="2020-02-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-02-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-02-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-fri fc-future" data-date="2020-02-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-sat fc-future" data-date="2020-02-22"><span class="fc-day-number">22</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 124px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2020-02-23"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2020-02-24"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2020-02-25"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2020-02-26"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2020-02-27"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2020-02-28"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2020-02-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2020-02-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-mon fc-future" data-date="2020-02-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-tue fc-future" data-date="2020-02-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-02-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-02-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-fri fc-future" data-date="2020-02-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-sat fc-future" data-date="2020-02-29"><span class="fc-day-number">29</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 128px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2020-03-01"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2020-03-02"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2020-03-03"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2020-03-04"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2020-03-05"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2020-03-06"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2020-03-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2020-03-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2020-03-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2020-03-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2020-03-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2020-03-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2020-03-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2020-03-07"><span class="fc-day-number">7</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div>
                        -->
                    </div>
                </div>
            </div>
            <!-- End Takvim --->
            
            <div class="row">
                <!-- Appointment Grafik --->
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">Appointments</div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                                            <div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="appointment-chart" width="1400" height="630" style="display: block; height: 315px; width: 700px;" class="chartjs-render-monitor"></canvas>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget-1 p-0">
                                        <div class="content">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="title">Appointments</h5>
                                                    <span class="descr">In last 12 Months</span>
                                                </div>
                                                <div class="col text-right">
                                                    <div class="number text-primary">3</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="title">Appointments</h5>
                                                    <span class="descr">In last Months</span>
                                                </div>
                                                <div class="col text-right">
                                                    <div class="number text-danger">2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="title">Completed</h5>
                                                    <span class="descr">In last 12 Months</span>
                                                </div>
                                                <div class="col text-right">
                                                    <div class="number text-warning">0</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="title">Completed</h5>
                                                    <span class="descr">In last Months</span>
                                                </div>
                                                <div class="col text-right">
                                                    <div class="number text-warning">0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End. Appointment Grafik --->
                <!-- Notices --->
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">Notices</div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row align-items-center pb-3">
                                        <div class="col-sm-6 text-left">
                                            <div class="dataTables_length" id="DataTables_Table_0_length">
                                                <label>Show
                                                    <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option><option value="25">25</option><option value="50">50</option>
                                                        <option value="75">75</option><option value="-1">All</option>
                                                    </select>
                                                    entries</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            
                                            <!-- datatable-table dataTable -->
                                            <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 7px;">#</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 92px;">Title</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 525px;">Description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending" style="width: 26px;">Start Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End Date: activate to sort column ascending" style="width: 26px;">End Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 35px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                                </thead>
                                                <tbody>
                                                <tr role="row" class="odd">
                                                    <td>1</td>
                                                    <td class="text-primary">Seminar on medicines and health</td>
                                                    <td>Please attend this seminar on every Sunday.  This seminar will
                                                        be based on new arrival of medicines or new diseases etc. Not compulsory for everyone. Thanks
                                                    </td>
                                                    <td>31-12-2019</td>
                                                    <td>14-04-2021</td>
                                                    <td><span class="label label-success">Active</span>                                    </td>
                                                    <td class="table-action">
                                                        <a class="text-primary edit" href="{{url('Notice_View')}}"><i class="ti-layout-media-center-alt"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row align-items-center pt-3">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-8 text-right dataTables_pager"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="DataTables_Table_0_first"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i></a></li><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="fa fa-angle-right"></i></a></li><li class="paginate_button page-item last disabled" id="DataTables_Table_0_last"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End. Notices --->
            </div>
            
            <!-- Takvim sidebar -->
            <div class="sidebar sidebar-right appointmet-sidebar">
                <div class="sidebar-hdr">
                    <div class="sidebar-close"><i class="ti-close"></i></div>
                    <h3 class="title">Appointment</h3>
                </div>
                <form class="sidebar-bdy" action="" method="get" siq_id="autopick_5117">
                    <input type="hidden" name="_token" value="a37c23e576049c2e86e5b09056b820f5a205da8c448f38e15ab09d2fa1edf3b588681a537df8abc56c1ff242dbef8129443905deb043c1d1166301b083bf52e8">
                    <div id="apnt-info">
                        <input type="hidden" class="apnt-id" name="appointment[id]">
                        <div class="form-group mb-2">
                            <label>Name <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[name]" class="form-control patient-name ui-autocomplete-input" placeholder="Enter Name . . ." required="" autocomplete="off">
                                <input type="hidden" name="appointment[patient_id]" class="form-control patient-id">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Email Address <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[mail]" class="form-control patient-mail" placeholder="Enter Email Address . . ." required="">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Mobile Number <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[mobile]" class="form-control patient-mobile" placeholder="Enter Mobile Number . . ." required="">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Doctor <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <select name="appointment[doctor]" class="custom-select apnt-doctor" required="">
                                    <option value="">Select Doctor</option>
                                    <option value="2" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-17, 2020-02-13, 2020-02-18, 2020-03-13, 2020-03-17, 2020-04-16, 2020-04-28&quot;">Melissa Bates (Gynaecology)</option>
                                    <option value="7" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25, 2020-01-15, 2020-01-20&quot;">Linda Adams (Gynaecology)</option>
                                    <option value="8" data-department="1" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Janet Collins (Gynaecology)</option>
                                    <option value="10" data-department="1" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Emily Rasberry (Gynaecology)</option>
                                    <option value="11" data-department="1" data-weekly="[4,5,6]" data-national="&quot;2000-12-25&quot;">Nancy Allen (Gynaecology)</option>
                                    <option value="1" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25, 2019-12-31, 2020-01-16, 2020-01-21, 2020-02-19&quot;">Daniel Barnes (Orthology)</option>
                                    <option value="4" data-department="2" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Steve Soeren (Orthology)</option>
                                    <option value="6" data-department="2" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Barbara Baker (Orthology)</option>
                                    <option value="3" data-department="3" data-weekly="[0]" data-national="&quot;2000-12-25&quot;">Cheri Aria (Dermatologist)</option>
                                    <option value="9" data-department="5" data-weekly="[6,0]" data-national="&quot;2000-12-25&quot;">Vedhraj Jain (Ayurvedic)</option>
                                </select>
                                <input type="hidden" class="apnt-department" name="appointment[department]" value="">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Date <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <!-- apnt-date --->
                                <input type="text" name="appointment[date]" class="form-control " value="" placeholder="Select Date . . ." required="" autocomplete="off" id="datepicker">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Time <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-timer"></i></span>
                                </div>
                                <input type="text" name="appointment[time]" class="form-control apnt-time" value="" required="" readonly="">
                                <input type="hidden" name="appointment[slot]" class="apnt-slot-time" value="" required="">
                            </div>
                            <div class="apnt-slot"></div>
                        </div>
                        <div class="form-group">
                            <label>Status <span class="form-required">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-check-box"></i></span>
                                </div>
                                <select name="appointment[status]" class="custom-select apnt-status" required="">
                                    <option value="2">In Process</option>
                                    <option value="3">Confirmed</option>
                                    <option value="4">Completed</option>
                                    <option value="1">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-ftr text-right">
                        <a href="#" class="btn btn-default">View</a>
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!--End. Takvim sidebar -->
        
        </div>
    </div>
    @endsection
