@extends('system_layouts.master_sys')
@section('icerik')
    
    <div class="page-wrapper">
        <div class="page-body">
            <div class="text-danger font-weight-bold">Bu Sayfa İçin Giriş Yetkiniz Bulunmamaktadır. Lütfen Master Doktor dan Giriş Yetkisi Alınız</div>
            @php  header('refresh:2;url=/Dashboard'); @endphp
        </div>
    </div>
    
    @endsection
