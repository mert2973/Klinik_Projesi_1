@extends('system_layouts.master_sys')
@section('icerik')
    
    <div class="page-wrapper">
        <div class="page-body">
          <div class="" id="app2">
              <ul>
                  <li v-for="isim in isimler" v-text="isim" >
                  
                  </li>
              </ul>
          </div>
        </div>
    </div>
   
    @endsection
