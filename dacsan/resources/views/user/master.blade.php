<!DOCTYPE html>
<html>
    <head>
        <title>Giới thiệu đặc sản Trà Vinh</title>
        <meta charset="UTF-8">
        <base href="{{asset('')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green.css">
        <link rel="stylesheet" href="giaodien/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-hvL8kSKjVBaUbZIq9r6K8pZ5PaWU2AEp+nS8Hr3NPd7iGqnM1PMR2D66g5y5f2Gg" crossorigin="anonymous"/>
<<<<<<< HEAD
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
=======
>>>>>>> aad9120012ee8c98bea2552970dc4b57ae51951a
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Merienda&display=swap');
          h1{
              font-family: 'Merienda', cursive;
          }
          .card_monan a{
              text-decoration: none;
          }
          #search {
              display: flex;
              justify-content: center;
              align-items: center;
          }
          .search {
              display: flex;
              align-items: center;
          }
      </style>
      </head>
    <body>
    @include('user.header')  
    @yield('content')
    @include('user.footer')
    </body>
    <script>
        var myIndex = 0;
        carousel();   
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        </script>
</html>