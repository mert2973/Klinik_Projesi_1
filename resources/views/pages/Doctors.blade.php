@extends('system_layouts.master_sys')
@section('icerik')
    <script>
        $(document).ready(function () {
            $('#Doctors_active').addClass('active') ;
            $('#Doctors_text').addClass('text-text') ;
        });
    </script>
    <div class="page-wrapper">
        <div class="page-body">
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
                        <h2 class="page-title-text d-inline-block">Doktorlar</h2>
                        <div class="breadcrumbs d-inline-block">
                            <ul>
                                <li><a href="{{url('/Dashboard')}}">Dashboard</a></li>
                                <i class="fa fa-angle-right font-12 ml-2" ></i>
                                <span class="ml-2">Doktorlar</span>
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
                        <a href="{{url('/Doctor_Add')}}" class="btn btn-primary btn-sm"><i class="ti-plus pr-2"></i>Yeni Doktor Ekle</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row align-items-center pb-3">
                                <div class="col-sm-6 text-left">
                                  <!--  <div class="dataTables_length" id="DataTables_Table_0_length">
                                        <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="-1">All</option>
                                            </select> entries</label>
                                    </div>  -->
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Ara:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- datatable-table dataTable -->
                                    <table class="table table-middle table-bordered table-striped  no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 17px;">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Picture: activate to sort column ascending" style="width: 123px;">Fotoğraf</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Doctor Info: activate to sort column ascending" style="width: 151px;">Doktor Bilgisi</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 57px;">Cinsiyet</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 78px;">Kullanıcı Adı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 92px;">Branşı</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Priority: activate to sort column ascending" style="width: 55px;">Öncelik</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 52px;">Durum</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 52px;"></th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($info_dr as $doctor)
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            @if($doctor->gender=="Erkek")
                                            <td class="table-img"><img class="img-thumbnail rounded" src="{{asset('css_js_img/doktors_img/media-1771205195e049ca8ee997.jpg')}}" alt="Image"></td>
                                            @elseif($doctor->gender=="Kadın")
                                                <td class="table-img"><img class="img-thumbnail rounded" src="{{asset('css_js_img/doktors_img/media-14789594495e049ca8efcdf.jpg')}}" alt="Image"></td>
                                            @else
                                               <td class="table-img"><img class="img-thumbnail rounded" src="{{asset('css_js_img/doktors_img/a.jpg')}}" alt="Image"></td>
                                             @endif
                                            <td>
                                                <p class="m-0 text-primary">{{$doctor->name}} {{$doctor->surname}}</p>
                                                <p class="m-0">{{$doctor->email}}</p>
                                                <p class="m-0">{{$doctor->phone}}</p>
                                            </td>
                                            <td>{{$doctor->gender}}</td>
                                            <td>{{$doctor->usr_name}}</td>
                                            <td>{{$doctor->department}}</td>
                                            <td>1</td>
                                            <td>
                                                <span class="label label-success">@if($doctor->status==1) {{"Aktif"}} @else {{"Pasif"}}  @endif</span>
                                            </td>
                                            <td class="table-action">
                                                <a href="{{url('/Doctor_Edit',with(['dr_id'=>$doctor->user_id]))}}" class="text-primary edit" data-toggle="tooltip" title="" data-original-title="Düzenle">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                                <button type="button" value="{{$doctor->user_id}}"  class="table-delete text-danger  " data-toggle="tooltip"  data-original-title="Sil" id="del_dr<?php del_dr(1); ?>">
                                                    <i class="ti-trash font-16 "></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row align-items-center pt-3">
                                <div class="col-sm-12 col-md-4">
                                  <!--  <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div>-->
                                </div>
                                <div class="col-sm-12 col-md-8 text-right dataTables_pager">
                                    <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item active">
                                               @if(Auth::user()->the_role()=="Doktor(Master)" || Auth::user()->the_role()=="Admin")
                                                {{$info_dr->links()}}
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Delete Modal -->
            <div id="delete-card" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">Silme İşlemini Doğrula </h5>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="delete-card-ttl mb-0">Doktor'un Bilgilerini Silmek İstediğinizden Emin misinz?</p>
                            <p class="delete-card-ttl mb-0 text-danger font-13">Bu silme işlemi ile birlikte, Doktor'a ait hasta randevu, reçete işlemleri de silinecektir.</p>
                        </div>
                        <div class="modal-footer">
                            <form action="" class="delete-card-button" method="post" id="from_del">
                                @csrf
                                <button type="submit" class="btn btn-danger" name="delete">Sil</button>
                            </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                   var org=window.location.origin;
                   var del_dr="@php function del_dr($id){return $id; } @endphp";
                   $("#del_dr,del_dr").click(function () {
                     var dr=  $(this).val();
                     $("#from_del").get(0).setAttribute("action",org+"/Doctor_Delete/"+dr);
                   });
                });
            </script>
        </div>
    </div>
    
    @endsection
