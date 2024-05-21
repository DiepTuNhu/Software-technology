@extends('user.master')
@section('content')
@include('user.layout.search')
  <!-- CONTENT ---------------------------------------------------------------------------------------------------------------------- -->
  <div class="w3-main w3-content" style="max-width:1200px;margin-top:60px;">
    <div class="w3-row-padding" id="food">
        <div class="w3-panel w3-leftbar w3-border-green w3-theme-l2 w3-xxlarge w3-serif">
            <h4 style="text-transform: uppercase;">
                KẾT QUẢ TÌM KIẾM
            </h4>
        </div>
        <div class="w3-row-padding">   
          @foreach ($foods as $food)            
            <div class="w3-quarter card_monan" style="margin-bottom: 50px;">
                <a href="chitiet.html" class="w3-hover-none">
                    <div class="w3-card-4 w3-white two-line-limit w3-round-large">
                        <img src="admin/images/{{$food->images[0]->image}}" alt="" style="width:100%">
                        <div class="w3-container w3-justify">
                        <h4 class = "w3-center" style = "font-weight:bolder;">{{$food->name}}</h4>
                        <p class ="w3-justify">{!! html_entity_decode($food->description) !!}</p>
                    </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection