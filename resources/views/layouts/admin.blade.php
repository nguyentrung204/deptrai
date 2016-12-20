<!DOCTYPE html>
<html lang="vi">
	<head>
		<title>@yield('title')</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link type="text/css" href="{{ URL::asset('public/bootstrap/css/bootstrap.min.css') }}"  rel="stylesheet">
		<link type="text/css" href="{{ URL::asset('public/bootstrap/css/bootstrap-theme.min.css') }}"  rel="stylesheet">
		<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link type="text/css"href='https://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Arimo|Quicksand:300,400,500,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
		<link type="text/css" href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet">
		@yield('css')
		<script src="{{ URL::asset('public/jquery/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ URL::asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('public/js/script.js') }}"></script>

		
		@yield('js')

	</head>
	<nav class="navbar navbar-project1 ">
	  <div class="container container-header">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="wrapper-container header-z">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="/deptrai"><img id="logo" src="{{ URL::asset('public/img/unnamed.png') }} "</a>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse main-menu navbar-collapse navbar-right navbar-bt" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			  <li menu="trangchu"><a href="/deptrai"><span class="sr-only">(current)</span></a></li>
			  <li menu="gioithieu"><a href="/deptrai/gioithieu">GIỚI THIỆU</a></li>
			  <li menu="dichvu"><a href="/deptrai/hinhanh">DỊCH VỤ</a></li>
			  <li menu="khachhang"><a href="/deptrai/khachhang">KHÁCH HÀNG</a></li>
			  <li menu="baogia"><a href="/deptrai">BÁO GIÁ</a></li>
			  <li menu="tuyendung"><a href="/deptrai/tuyendung">TUYỂN DỤNG</a></li>
			  <li menu="lienhe"><a href="/deptrai/lienhe">LIÊN HỆ</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<body>
	   
	    
		
			@yield('content')
		
       
	   
	
	   
		
		
		
	</body>
</html>