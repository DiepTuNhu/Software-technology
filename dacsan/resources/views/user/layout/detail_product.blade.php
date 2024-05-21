@extends('user.master')
@section('content')
   @include('user.layout.search') 
   <div class="w3-row">
    <div class="w3-col l2 m3 s4"><p></p></div>
    <div class="w3-col l8 m6 s4 w3-container" style="margin-top: 50px;">
        <div class="container">
            <div class="card">
                <div class="w3-row">
                    <div class="w3-panel w3-leftbar w3-border-green  w3-xxlarge w3-serif">
                        <h4 class = "w3-left" style = "text-transform:uppercase; font-weight:bolder;">{{$food->name}}</h4>
                    </div>
                    <div class="w3-col s4 w3-padding-16">
                        <img src="admin/images/{{$food->images[0]->image}}" alt="" style="width:100%">
                    </div>
                    <div class="w3-col s8">
                        <div class=" w3-left" style = "padding-left:30px;">
                            <p style="font-weight: bolder; line-height:1.5"><b>Nguyên liệu chính:</b></p>
                            <ul type = "square" class="mx-3">
                                @foreach ($food->ingredient as $ingredient)
                                    <li>{{$ingredient->name}}</li>
                                @endforeach
                               
                            </ul>
                            <p style="text-align:justify;"><b>Tầm giá tham khảo: </b>{{$food->price}} đồng/{{$food->unit}}</p>
                        </div>
                    </div>
                    <div class="w3-col ">
                        <h3 style="font-weight:bolder;">Chi tiết món ăn: </h3>
                        <div class="w3-panel w3-round-xlarge w3-pale-green w3-padding-16">
                            <p style = "text-align:justify; line-height:1.5">{!! html_entity_decode($food->description) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="w3-panel w3-leftbar w3-border-green  w3-xxlarge w3-serif">
                    <h2 class = "w3-left" style = "text-transform:uppercase; font-weight:bolder;">ĐỊA ĐIỂM PHỤC VỤ</h2>
                </div>
                <div class="w3-quarter" style="margin-bottom: 50px;">
                    <a style="text-decoration:none" href="chitiet_diadiem.html">
                        <div class="w3-container w3-row">
                            <img style="width:100%" src="admin/images/{{$food->servicePoint[0]->image}}">
                            <h6 class="card-title w3-center" style = "font-weight:bolder;"></h6>
                        </div> 
                    </a> 
                </div>         
            </div>
        </div>
    </div>
    <div class="w3-col l2 m3 s4"><p></p></div>
</div>
@endsection