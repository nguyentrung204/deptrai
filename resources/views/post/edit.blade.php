@extends('layouts.master')

@section('title', trans('login.title'))

@section('css')

<link href="{{ URL::asset('public/css/post_edit.css') }}" rel="stylesheet">
<link href="{{ URL::asset('public/editor/summernote.css') }}" rel="stylesheet">

@stop

@section('js')

<script src="{{ URL::asset('public/editor/summernote.js') }}"></script>
<script src="{{ URL::asset('public/editor/lang/summernote-vi-VN.js') }}"></script>


<script src="{{ URL::asset('public/jquery-validation-1.14.0/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('public/jquery-validation-1.14.0/localization/messages_vi.min.js') }}"> </script>

<script src="{{ URL::asset('public/js/post_edit.js') }}"></script>

@stop

@section('content')

	<div class="detail-container">
	    <form id="postEditForm" method="post" action="#">
		    <div class="control-form">
				<button type="button" id="submitBtn" class="btn btn-default btn-group" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Đăng bài</button>
				<button type="button" class="btn btn-default btn-group" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Xem trước</button>
				<div class="dropdown btn-group">
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<span class="dropdown-text">Tin Tức</span>
					<span class="caret"></span>
				  </button>
				  <ul id="postType" class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li data="1"><a href="javascript:void(0);">Tin Tức</a></li>
					<li data="2"><a href="javascript:void(0);">Youtube</a></li>
					<li data="3"><a href="javascript:void(0);">Zing Mp3 /  Nhạc của tui</a></li>
				  </ul>
				  <input type="hidden" value="1" name="postType" />
				</div>
			</div>
		
			<input type="text" class="form-control type2 type1 type3" name="title" placeholder="Tiêu đề">
			<span class="title-error"></span>
			
			<div class="input-group type1 type3">
			  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-picture-o"></i></span>
			  <input type="text" name="imageLink" class="form-control"  placeholder="URL hình ảnh" aria-describedby="basic-addon1"> 
			</div>
			<span class="imageLink-error"></span>
		
			<div class="input-group type2">
			  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-youtube-play"></i></span>
			  <input type="text" name="youtubeLink" class="form-control"  placeholder="URL youtube" aria-describedby="basic-addon1"> 
			</div>
			<span class="youtubeLink-error"></span>

			<div class="input-group type3">
			  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-music"></i></span>
			  <input type="text" name="mp3Link"  class="form-control" placeholder="Link mp3.zing.vn hoặc nhaccuatui.com " aria-describedby="basic-addon1"> 
			</div>
			<span class="mp3Link-error"></span>

			<div class="input-group type1">
			  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-link"></i></span>
			  <input type="text" name="postLink" class="form-control" placeholder="Nguồn bài viết" aria-describedby="basic-addon1"> 
			</div>
			<span class="postLink-error"></span>

			<textarea class="form-control type1" name="description" rows="3" placeholder="Mô tả"></textarea>
			<span class="description-error"></span>
			
			<div id="content" class="type1 hide"></div>
			<input type="text" name="content" class="hide" />
			<span class="content-error"></span>
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
		
		
		
		
    </div>
		
@stop


