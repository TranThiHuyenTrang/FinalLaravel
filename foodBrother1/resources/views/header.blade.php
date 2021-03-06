<header>
    <span class="nameWeb">Food Brother</span>
    <div class="right_contain">
        <div class="icon">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <i class="fa fa-twitch" aria-hidden="true"></i>
            <i class="fa fa-google-plus" aria-hidden="true"></i>
        </div>
        <div class="user">
        <a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white"></i></a>
            @if(Session::get('UserName'))
                <a href="{{ url('/loginForm') }}">{{Session::get('UserName') }}</a>
            @else
                <a href="{{ url('/loginForm') }}">Login</a><span>
            @endif
        </span>
        </div>
    </div>
</header>
<link rel="stylesheet" type="text/css" href="public/css/singlePage.css">
<script type="text/javascript">
        $(document).ready(function() {
           $(window).scroll(function(event) {
              var pos_body = $('html,body').scrollTop();
              // console.log(pos_body);
              if(pos_body>20){
                 $('.navi').addClass('co-dinh-menu');
              }
              else {
                 $('.navi').removeClass('co-dinh-menu');
              }
              if(pos_body>1200){
                 $('.back-to-top').addClass('hien-ra');
              }
              else{
                 $('.back-to-top').removeClass('hien-ra');
              }
           });
           $('.back-to-top').click(function(event) {
              $('html,body').animate({scrollTop: 0},1400);
           });
        });
</script>
<div class="navi">
    <img src="public/img_food/logo.png" alt="">
    <div class="md-Form mt-0">
        <input class="form-control" type="text" placeholder="search">
    </div>
    <ul>
       <ul>
            <li><a href="#home" onclick="toggle()">Trang chủ</a></li>
            <li><a href="#product" onclick="toggle()">Sản phẩm</a></li>
            <li><a href="#portfolio" onclick="toggle()">Danh mục</a></li>
            <li><a href="#contact" onclick="toggle()">Liên hệ</a></li>
        </ul>
    </ul>
    <div class="menu-icon">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="slidebar">
    <a href="#"><img src="public/img_food/logo.png" alt=""></a>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <ul class="social-icon">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
</div>
