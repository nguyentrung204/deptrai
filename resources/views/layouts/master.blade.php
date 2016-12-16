<!DOCTYPE html>
<html lang="vi">
	<head>
		<title>@yield('title')</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link type="text/css" href="{{ URL::asset('public/bootstrap/css/bootstrap.min.css') }}"  rel="stylesheet">
		<link type="text/css" href="{{ URL::asset('public/bootstrap/css/bootstrap-theme.min.css') }}"  rel="stylesheet">
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
		<link type="text/css"href='https://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Arimo|Quicksand:300,400,500,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
		<link type="text/css" href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet">
		@yield('css')
		<script src="{{ URL::asset('public/jquery/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ URL::asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('public/js/script.js') }}"></script>
		 <style>
       #map {
        height: 200px;
        width: 200px;
       }
    </style>
		<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_1fHC9e81cfWKZ1efETjiA4f_Xr_Uq3U&callback=initMap" />
		
		@yield('js')

	</head>
	<nav class="navbar navbar-project1 navbar-fixed-top">
	  <div class="container container-header">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="wrapper-container header-z">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#"><img id="logo" src="{{ URL::asset('public/img/unnamed.png') }} "</a>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse main-menu navbar-collapse navbar-right navbar-bt" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">TRANG CHỦ<span class="sr-only">(current)</span></a></li>
			<li><a href="#">GIỚI THIỆU</a></li>
			<li><a href="#">DỊCH VỤ</a></li>
			<li><a href="#">KHÁCH HÀNG</a></li>
			<li><a href="#">BÁO GIÁ</a></li>
			<li><a href="#">TUYỂN DỤNG</a></li>
			<li><a href="#">LIÊN HỆ</a></li>
		  </ul>
		 
		 
		
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<body>
	   
	    
		<div id="content" class="container fill">
			@yield('content')
		</div>
       
		
		
		<footer class="footer">
		  <div class="container">
			<div class="row">
                <div class="col-xs-6 col-md-6 column-footer footer_company">
					
					<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> &nbsp 6 Bis Tôn Đức Thắng, P. Bến Nghé, Q. 1, Tp. HCM
					<br/>
					<i class="fa fa-phone fa-lg" aria-hidden="true"></i> &nbsp (08) 6680 9449
				</div>
			<div class="col-xs-6 col-md-6 column-footer column-footer-1">
			
			  
			</div>
			
		  </div>
		</footer>
	</body>
</html>