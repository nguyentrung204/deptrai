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
		<script src="{{ URL::asset('public/js/coreRequest.js') }}"></script>
		<script src="{{ URL::asset('public/js/script.js') }}"></script>
		<script>
			$( document ).ready(function() {
				$('.navbar-nav li a').click(function(e) {
					$('.navbar-nav li a').removeClass('active');
					var $this = $(this);
					if (!$this.hasClass('active')) {
						$this.addClass('active');
					}
				});
				
				$('li[menu=<?php echo $menu; ?>] a').addClass('active');
			});
		</script>
		@yield('js')

	</head>

	<nav class="navbar navbar-default navbar-project1">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a id="sayhi" class="navbar-brand" href=."/"><img id="logo" src="{{ URL::asset('public/img/unnamed.png') }} "/></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-bt" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li menu="trangchu"><a href="./">TRANG CHỦ<span class="sr-only">(current)</span></a></li>
					<li menu="gioithieu"><a href="gioithieu">GIỚI THIỆU</a></li>
					<li menu="dichvu"><a href="hinhanh">DỊCH VỤ</a></li>
					<li menu="khachhang"><a href="khachhang">KHÁCH HÀNG</a></li>
					<li menu="tuyendung"><a href="tuyendung">TUYỂN DỤNG</a></li>
					<li menu="lienhe"><a href="lienhe">LIÊN HỆ</a></li>


				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<body>
	   
	    
		<div id="content" class="container fill">
			@yield('content')
		</div>



		<footer class="site-footer">

			<!-- Top section -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<h6>LIÊN HỆ</h6>
						<div style="padding-left: 15px;margin: 10px 0px;">
							<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> &nbsp Trụ sở chính : 6 Bis Tôn Đức Thắng, P. Bến Nghé, Q. 1, Tp. HCM
							<br/>
							<i class="fa fa-phone fa-lg" aria-hidden="true"></i> &nbsp Điện thoại hỗ trợ : +84 (0) 909 973 818  - (08) 6680 9449
							<br/>
						</div>
						<p class="text-justify">An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow.</p>
					</div>

					<div class="col-xs-6 col-md-3">
						<h6>CÔNG TY</h6>
						<ul class="footer-links">
							<li><a href="page-about.html">Giới thiệu</a></li>
							<li><a href="page-typography.html">Hình ảnh</a></li>
							<li><a href="page-faq.html">Tuyển dụng</a></li>
							<li><a href="page-typography.html">Đối tác</a></li>
							<li><a href="page-contact.html">Liên hệ</a></li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<h6>DỊCH VỤ</h6>
						<ul class="footer-links">
							<li><a href="job-list.html">Nhân lực Vệ sinh</a></li>
							<li><a href="job-list.html">Nhân lực Điện tử</a></li>
							<li><a href="job-list.html">Nhân lực Xây dựng</a></li>
							<li><a href="job-list.html">Nhân lực Giáo dục</a></li>
							<li><a href="job-list.html">Nhân lực Buôn bán</a></li>
						</ul>
					</div>
				</div>

				<hr>
			</div>
			<!-- END Top section -->

			<!-- Bottom section -->
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">
						<p class="copyright-text">Copyrights © 2016 All Rights Reserved by <a href="#">Exodus</a>.</p>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<ul class="social-icons">
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END Bottom section -->

		</footer>
	</body>
</html>