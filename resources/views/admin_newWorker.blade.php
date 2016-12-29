@extends('layouts.admin')

@section('js')
{{--<script src="{{ URL::asset('public/js/validator/register_work.js') }}"></script>--}}
<script src="{{ URL::asset('public/js/register_worker.js') }}"></script>
{{--<script src="{{ URL::asset('public/ckeditor/ckeditor.js') }}"></script>--}}
@stop

@section('content')
	<div class="container">
	<div id="registerCt">
		<div class="alert alert-warning" role="alert">
		  Những trường bên dưới là bắt buộc. Vui lòng điền đầy đủ thông tin.
		</div>
		
		<div id="applicationError" class="alert alert-danger" role="alert" style="display: none">
		</div>
	
		<form id="registerForm" name="registerForm" method="post">
			<div class="form-group">
			    <label id="title-error" class="error" for="name"></label>
				<input type="text"  id="name" name="name" placeholder="Họ và tên">
			</div>

			<div class="form-group">
				<div class="radio  radio-inline">
				  <input id="male" type="radio" checked value="1" name="sex">
				  <label for="male">
					Nam
				  </label>
				</div>
				<div class="radio radio-inline">
				  <input id="female" type="radio" value="0" name="sex">
				  <label for="female">
					Nữ
				  </label>
				</div>
			</div>
			
			<div class="form-group">
		  		<label id="addressWork-error" class="error" for="address"></label>
		    	<input type="text" id="address" name="address" placeholder="Địa chỉ">
		  	</div>
			<div class="form-group">
		  		<label id="phoneWork-error" class="error" for="phone"></label>
		    	<input type="text" id="phone" name="phone" placeholder="Số điện thoại">
		  	</div>

			<label id="birthday-error" for="birthday"></label>
            <div class="form-group">
				<div class="input-group date" id="datetimepicker">
					<input type="text"id="birthday" name="birthday"  placeholder="Ngày tháng năm sinh">
					<span class="input-group-addon">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</span>
				</div>
			</div>

			<div class="form-group">
		  		<label id="email-error" class="error" for="email"></label>
		    	<input type="text" id="email" name="email" placeholder="Email">
		  	</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

		  	<div class="form-group text-center regist-btn">
		  		<button type="button" id="regist-btn" class="btn btn-success">
		  		   <i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp; Lưu &nbsp;
		  		</button>
		  	</div>
		</form>
	</div>
</div>
@stop