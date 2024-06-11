@extends('user.master')
@section('content')
@include('user.layout.search')
  <!-- CONTENT ---------------------------------------------------------------------------------------------------------------------- -->
  <div class="w3-main w3-content" style="max-width:1200px;margin-top:60px;">
    <div class="w3-row-padding" id="food">
        <div class="w3-panel w3-leftbar w3-border-green w3-theme-l2 w3-xxlarge w3-serif">
            <h4 style = "text-transform:uppercase;">ĐIỂM PHỤC VỤ</h4>
        </div>
        <div class="w3-row-padding">   
          @foreach ($service_point as $sp)            
            <div class="w3-col w3-quarter card_monan" style="margin-bottom: 50px;">
                <a href="{{route('page.detail_service_point',['id'=>$sp->id])}}" class="w3-hover-none">
                    <div class="w3-card-4 w3-white two-line-limit w3-round-large">
                        <img src="admin/images/{{$sp->image}}" alt="" style="width:100%">
                        <div class="w3-container w3-justify">
                        <h4 class = "w3-center" style = "font-weight:bolder;">{{$sp->name}}</h4>
                        <p class ="mt-0 w3-justify">{!! html_entity_decode($sp->description) !!}</p>
                    </div>
                    </div>
                </a>  
            </div>
            @endforeach
 
        </div>
        

    </div>
    {{$service_point->links()}}
    
</div>

@endsection