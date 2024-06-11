@extends('user.master')
@section('content')
   @include('user.layout.search') 
   <div class="w3-row">
    <div class="w3-col l2 m3 s4"><p></p></div>
    <div class="w3-col l8 m6 s4" style="margin-top: 50px;">
        <div class="container">
        <div class="w3-row">
            <div class="w3-panel w3-leftbar w3-border-green  w3-xxlarge w3-serif">
                <h3 style = "text-transform:uppercase; font-weight:bolder;">{{$service_point->name}}</h3>
            </div>
            <div class="w3-col s3 w3-padding-16">
                <img src="admin/images/{{$service_point->image}}" alt="" style="width:100%">
            </div>

            <div class="w3-col s9 w3-panel ">
                <div class="w3-panel">
                    
                    <ul type = "square">
                        <li><p style="text-align:justify;"><b>Địa chỉ: </b>{{$service_point->address}}</p></li>
                        <li><p style="text-align:justify;"><b>Giờ phục vụ: </b>Giờ mở cửa:{{$service_point->open_time}} - Giờ đóng cửa:{{$service_point->close_time}} </p></li>
                        @if (!empty($service_point->phone))
                            <li><p style="text-align:justify;"><b>Số điện thoại: </b>{{ $service_point->phone }}</p></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="w3-left">
                <h3><b>Giới thiệu chung:</b></h3>
                <div style="text-align:justify;">{!! html_entity_decode($service_point->description) !!}</div> 
            </div>   
        </div>
        </div>
    </div>
      <div class="w3-col l2 m3 s4"><p></p></div>
    </div>
@endsection