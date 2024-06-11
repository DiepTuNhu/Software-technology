<div id="btntop" class="w3-bottom">
  <a href="#" id="backToTopBtn" class="w3-btn w3-round-large w3-border w3-theme-d5 w3-opacity w3-hover-opacity-off">
      <div class="fas fa-arrow-up"></div>
  </a>
</div>
<div class="w3-row w3-theme-d5">
  <div class="w3-col s3 w3-theme-d5 w3-center">
      <a href="./index.html"><img src="../../images/NTN.png" alt="" style="width: 100%"></a>
  </div>
  <div class="w3-col s4 ">
      <h4>Danh mục món ăn</h4>     
      <div class="w3-panel w3-xxlarge w3-serif">
          <ul style="font-size:15px">
            @foreach ($categories as $category)
                <li><a style="text-decoration:none" href="{{route('page.food',$category->id)}}" >{{$category->name}}</a></li>
            @endforeach
          </ul>
      </div>
  </div>
  <div class="w3-col s5">
      <h4>Địa điểm phục vụ</h4>      
      <div class="w3-panel w3-xxlarge w3-serif">
          <ul style="font-size:15px">
            @foreach ($service_points->take(4) as $sp)
                <li><a style="text-decoration:none" href="">{{$sp->name}}</a></li>
            @endforeach
          </ul>
      </div>
  </div>
</div>
<div class="w3-container w3-center w3-theme-d5 w3-border-top">&copy;copyrighted 2023 design by Diep Tu Nhu</div>