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
		
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/simple-line-icons/css/simple-line-icons.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/bootstrap-datetimepicker.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/build.css') }}" />
		
		<link type="text/css" href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet">
		@yield('css')
		<script src="{{ URL::asset('public/jquery/jquery-1.11.3.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/js/moment-with-locales.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/js/i18n/vi.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/js/jquery.validate.min.js') }}"></script>
		
		<script src="{{ URL::asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('public/js/coreRequest.js') }}"></script>
		<script src="{{ URL::asset('public/js/script.js') }}"></script>
		
		
		
<script type="text/javascript" src="{{ URL::asset('public/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/i18n/grid.locale-ja.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/validator/register_work.js ') }}"></script>
		
		@yield('js')

	</head>
	<body id="adminPage">
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="sayhi" class="navbar-brand" href="logout">Xin chào, <span><?php echo Auth::User()->name ?></span></a>
    </div>
     
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CÀI ĐẶT KHÁC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">DANH SÁCH</a></li>
            <li><a href="#">THÊM</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NHÂN SỰ <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/worker/">DANH SÁCH</a></li>
            <li><a href="newWorker">THÊM</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KHÁCH HÀNG <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">DANH SÁCH</a></li>
            <li><a href="#">THÊM</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TUYỂN DỤNG <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">DANH SÁCH</a></li>
            <li><a href="#">THÊM</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	    
		
			@yield('content')
		
		<div class="overlay" style="display:none;">
	   	  <img id="loading" src="{{ URL::asset('public/img/loading.gif') }}" />
	   </div>
	</body>
</html>