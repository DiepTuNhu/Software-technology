<div class="w3-top">
  <div class="w3-bar w3-theme-d5 w3-padding" id = "menu">
      <a href="{{route('page.index')}}" class="w3-bar-item w3-button w3-mobile ">Trang chủ</a>
      <a href="{{route('introduce')}}" class="w3-bar-item w3-button w3-mobile ">Giới thiệu</a>
      <div class="w3-dropdown-hover w3-mobile">
          <button class="w3-button ">Món ăn <i class="fa fa-caret-down"></i></button>
          <div class="w3-dropdown-content w3-bar-block w3-white">
            @foreach ($categories as $category)
            <a href="{{route('page.food',$category->id)}}" class="w3-bar-item w3-button w3-mobile">{{$category->name}}</a>
            @endforeach
              
          </div>
      </div>
      <a href="{{route('servicepoints')}}" class="w3-bar-item w3-button w3-mobile ">Địa điểm phục vụ</a>
      <a href="{{route('login')}}" class="w3-bar-item w3-button w3-mobile w3-right  w3-round-large">Đăng nhập</a>
  </div>
</div>


