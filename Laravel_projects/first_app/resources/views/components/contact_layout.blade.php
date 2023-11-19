<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    <link rel="icon" href="{{asset('Etrain/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Etrain/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('Etrain/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('Etrain/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('Etrain/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('Etrain/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Etrain/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('Etrain/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('Etrain/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12">
                <x-main_nav/>
            </div>
        </div>
    </div>
</header>
  <!-- Header part end-->
    {{$slot}}

<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{asset('Etrain/js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('Etrain/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('Etrain/js/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{asset('Etrain/js/jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('Etrain/js/swiper.min.js')}}"></script>
<script src="{{asset('Etrain/js/jquery.nice-select.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('Etrain/js/masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{asset('Etrain/js/owl.carousel.min.js')}}"></script>
<!-- contact js -->
<script src="{{asset('Etrain/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('Etrain/js/jquery.form.js')}}"></script>
<script src="{{asset('Etrain/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('Etrain/js/mail-script.js')}}"></script>
<script src="{{asset('Etrain/js/contact.js')}}"></script>

<!-- slick js -->
<script src="{{asset('Etrain/js/slick.min.js')}}"></script>
<script src="{{asset('Etrain/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('Etrain/js/waypoints.min.js')}}"></script>
<!-- custom js -->
<script src="{{asset('Etrain/js/custom.js')}}"></script>
</body>

</html>