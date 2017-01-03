@extends('layouts.master2')

@section('title', trans('login.title'))

@section('content')


@section('js')

	<script src="{{ URL::asset('public/js/tuyendung.js') }}"></script>

<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>

@stop







<header class="site-header size-lg text-center" style="background-image: url({{ URL::asset('public/img/bg-banner1.jpg') }}) ;   ">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>Chúng tôi đang có <mark>567</mark> công việc ngay bây giờ !</h2>
          <h5 class="font-alt">Hãy tìm công việc phù hợp với bạn</h5>
          <br><br><br>
          <form class="header-job-search hidden-xs">
            <div class="input-keyword">
              <input type="text" class="form-control" id="titleTxt" placeholder="Tên việc, lĩnh vực">
            </div>

            <div class="input-location">
              <input type="text" class="form-control" id="addressTxt" placeholder="Địa điểm, huyện, tỉnh, quận, thành phố">
            </div>

            <div class="btn-search">
              <button class="btn" type="button">Tìm việc</button>
            </div>
          </form>
			<form class="header-job-search-xs visible-xs-block">
				<div class="col-xs-12 input-keyword">
					<input type="text" class="form-control" placeholder="Tên việc, lĩnh vực">
				</div>

				<div class="col-xs-12 input-location">
					<input type="text" class="form-control" placeholder="Địa điểm, huyện, tỉnh, quận, thành phố">
				</div>

				<div class="col-xs-12 btn-search">
					<button class="btn" type="button">Tìm việc</button>
				</div>
			</form>
        </div>

      </div>
    </header>


<div id="content2" class="container fill">


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div id="tuyendung" style="padding: 10px 20px;">

	<div id="notFound" class="alert alert-danger" style="display:none;    margin-top: 45px;">
		<strong>Thông báo:</strong> Chúng tôi không tìm thấy việc nào phù hợp với từ khóa bạn đang cần tìm
	</div>

     <ul class="row">


		<li class="item col-md-12 clearfix hidden">
			<div class="col-md-3 col-sm-12 text-center">
				<a class="viewDetail" href="tuyendung/"><img src="" class="img-thumbnail" alt="Cinque Terre" width="100%" ></a>
			</div>
			<div class="col-md-9 col-sm-12 clearfix  ">
			 <div class="info clearfix hidden-sm hidden-xs">
				  <div class="col-md-6">
				  <i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: <span class="dateVal"></span></span>
				  </div>
				  <div class="col-md-6 text-right">
				  <i class="fa fa-user-o" aria-hidden="true"></i> <span class="user">Người đăng: <span class="userVal"></span></span>
				  </div>
			   </div>
			
			   <div class="title"></div>
			   <div class="map"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="addressVal"></span></div>
			   <div class="money"><i class="fa fa-usd" aria-hidden="true"></i>

				   <span class="salaryVal">

				   </span>

			   </div>
				<div class="money visible-sm-block visible-xs-block"><i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: </span></div>
				<div class="money visible-sm-block visible-xs-block"><i class="fa fa-user-o" aria-hidden="true"></i><span class="user"> Người đăng: <span class="userVal"></span></span></div>
			   
			   
			   <div class="description">

			   </div>
			</div>
		</li>


	 </ul>
	<ul class="hidden">


		<li id="example" class="item col-md-12 clearfix hidden">
			<div class="col-md-3 col-sm-12 text-center">
				<a class="viewDetail" href="tuyendung/"><img src="" class="img-thumbnail" alt="Cinque Terre" width="100%" ></a>
			</div>
			<div class="col-md-9 col-sm-12 clearfix  ">
				<div class="info clearfix hidden-sm hidden-xs">
					<div class="col-md-6">
						<i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: <span class="dateVal"></span></span>
					</div>
					<div class="col-md-6 text-right">
						<i class="fa fa-user-o" aria-hidden="true"></i> <span class="user">Người đăng: <span class="userVal"></span></span>
					</div>
				</div>

				<div class="title"></div>
				<div class="map"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="addressVal"></span></div>
				<div class="money"><i class="fa fa-usd" aria-hidden="true"></i>

				   <span class="salaryVal">

				   </span>

				</div>
				<div class="money visible-sm-block visible-xs-block"><i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: </span></div>
				<div class="money visible-sm-block visible-xs-block"><i class="fa fa-user-o" aria-hidden="true"></i><span class="user"> Người đăng: <span class="userVal"></span></span></div>


				<div class="description">

				</div>
			</div>
		</li>


	</ul>
	 <div id="readmore" class="text-center">
		<button type="button" class="btn btn-default"><i class="fa fa-angle-double-down fa-lg" aria-hidden="true"></i> &nbsp Xem thêm nhiều việc khác nữa ... </button>
	 </div>
	 
</div>
</div>

@stop