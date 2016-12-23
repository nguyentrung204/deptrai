<!DOCTYPE html>
<html lang="vi">
	<head>
		<title></title>
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
		<script src="{{ URL::asset('public/jquery/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ URL::asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('public/js/coreRequest.js') }}"></script>
		<script src="{{ URL::asset('public/js/script.js') }}"></script>
	
		<style>
		
			#loginForm td {
				padding: 3px 10px;
			}
			
			#loginForm input[type=text], #loginForm input[type=password] {
				width: 250px;
			}
		</style>
	</head>
	<body>
		<div class="container" style="padding-top:20px">
		@if(count($errors) > 0)
		<div>
		Có lỗi này ra
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
		<div>
		@endif
		
			<form id="loginForm" method="post" action="#">
				<table>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" id="email" /></td>
					</tr>
					<tr>
						<td>Mật khẩu:</td>
						<td><input type="password" name="password" id="password" /></td>
					</tr>
					<tr>
					    <td></td>
						<td><input type="submit" value="Đăng nhập" /> &nbsp <input type="submit" value="Quên Mật khẩu" /></td>
					</tr>
					
				</table>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</div>
	</body>
</html>