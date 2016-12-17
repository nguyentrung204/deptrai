@extends('layouts.master2')

@section('title', trans('login.title'))

@section('content')


@section('js')

<script src="{{ URL::asset('public/js/post_list.js') }}"></script>

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
          <h2>Chúng tôi đang có <mark>1,256</mark> công việc ngay bây giờ !</h2>
          <h5 class="font-alt">Hãy tìm công việc phù hợp với bạn</h5>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Tên việc, lĩnh vực">
            </div>

            <div class="input-location">
              <input type="text" class="form-control" placeholder="Địa điểm, huyện, tỉnh, quận, thành phố">
            </div>

            <div class="btn-search">
              <button class="btn" type="submit">Tìm việc</button>
            </div>
          </form>
        </div>

      </div>
    </header>


<div id="content2" class="container fill">


  
<div id="tuyendung" style="padding: 10px 20px;">
     <ul class="row">
	
	 
		<li class="item col-md-12">
			<div class="col-md-3">
				<img src="{{ URL::asset('public/img/tuyendung/TD001.png') }}" class="img-thumbnail" alt="Cinque Terre" width="247" >
			</div>
			<div class="col-md-9">
			 <div class="info clearfix">
				  <div class="col-md-6">
				  <i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: 09/12/2017</span>
				  </div>
				  <div class="col-md-6 text-right">
				  <i class="fa fa-user-o" aria-hidden="true"></i> <span class="user">Người đăng: Nguyễn Ngọc Trung</span>
				  </div>
			   </div>
			
			   <div class="title">Tuyển 5 Nhân Viên Lau Dọn Văn Phòng (Mới)</div>
			   <div class="map"><i class="fa fa-map-marker" aria-hidden="true"></i> Tại Quận 3, TP.Hồ Chí Minh</div>
			   <div class="money"><i class="fa fa-usd" aria-hidden="true"></i> 500.000 ~ 1.500.000 VNĐ</div>
			   
			   
			   <div class="description">
					Không cần kinh nghiệm, có sức khỏe, trung thực, siêng năng, có ý thức kỉ luật tốt, có giấy tờ tùy thân đầy đủ. Cam kết thời gian làm việc đến Tết ( làm đến 27 tháng 12 âm lịch), nếu không đủ thời gian cam kết sẽ không được nhận đủ lương.
			   </div>
			</div>
		</li>
		<li class="item col-md-12">
			<div class="col-md-3">
				<img src="{{ URL::asset('public/img/tuyendung/TD002.jpg') }}" class="img-thumbnail" alt="Cinque Terre" width="247" >
			</div>
			<div class="col-md-9">
				<div class="info clearfix">
				  <div class="col-md-6">
				  <i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: 09/12/2017</span>
				  </div>
				  <div class="col-md-6 text-right">
				  <i class="fa fa-user-o" aria-hidden="true"></i> <span class="user">Người đăng: Quốc Tự Giám</span>
				  </div>
			   </div>
			
			   <div class="title">Tuyển Nhân Viên Trang Trí Cửa Tiệm (Cần gấp)</div>
			   <div class="map"><i class="fa fa-map-marker" aria-hidden="true"></i> Tại Quận 10, TP.Hồ Chí Minh</div>
			   <div class="money"><i class="fa fa-usd" aria-hidden="true"></i> 100.000 ~ 700.000 VNĐ</div>
			   
			   
			   <div class="description">
					Không cần kinh nghiệm, có sức khỏe, trung thực, siêng năng,  Cam kết thời gian làm việc đến Tết ( làm đến 27 tháng 12 âm lịch), nếu không đủ thời gian cam kết sẽ không được nhận đủ lương.
			   </div>
			</div>
		</li>
		<li class="item col-md-12">
			<div class="col-md-3">
				<img src="{{ URL::asset('public/img/tuyendung/TD003.jpg') }}" class="img-thumbnail" alt="Cinque Terre" width="247" >
			</div>
			<div class="col-md-9">
			   <div class="info clearfix">
				  <div class="col-md-6">
				  <i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: 09/12/2017</span>
				  </div>
				  <div class="col-md-6 text-right">
				  <i class="fa fa-user-o" aria-hidden="true"></i> <span class="user">Người đăng: Đào Duy Phúc</span>
				  </div>
			   </div>
			
			   <div class="title">Tuyển Giúp Việc Cho Người Già (Bao cơm & Chỗ ăn ở) </div>
			   <div class="map"><i class="fa fa-map-marker" aria-hidden="true"></i> Tại Quận Tân Bình, TP.Hồ Chí Minh</div>
			   <div class="money"><i class="fa fa-usd" aria-hidden="true"></i> 5.000.000 VNĐ</div>
			   
			   
			   <div class="description">
					Không cần kinh nghiệm, có sức khỏe, trung thực, siêng năng, có ý thức kỉ luật tốt, có giấy tờ tùy thân đầy đủ.gian làm việc đến Tết ( làm đến 27 tháng 12 âm lịch)
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