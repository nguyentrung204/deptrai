@extends('layouts.master2')

@section('title', trans('login.title'))

@section('content')


@section('js')

<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Taviraj:400,700,700i" rel="stylesheet">

@stop

<header class="site-header size-lg text-center" style="background-image: url({{ URL::asset('public/img/slider_4.jpg') }}); background-position: 0px -192px;">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>Hân hạnh đón tiếp Quý khách hàng !</h2>
          <h5 class="font-alt">Hãy hợp tác với chúng tôi ngay hôm nay.</h5>
          <br><br><br>
		  <div class="btn-search btn-lienhe hidden">
              <button class="btn" type="submit">Đăng ký</button>
          </div>
        </div>

      </div>
    </header>
	
	
	<div id="khachhang" class="container fill">
		<div class="vip clearfix">
		<h2><i class="fa fa-commenting-o" aria-hidden="true"></i> &nbsp Ý kiến khách hàng </h2>
		<div class="descript col-md-12 col-sm-12 col-xs-12 col-lg 12">Nhờ hoạt động đầu tư kiên định, phát triển đội ngũ nhân viên và các phương pháp đã được kiểm chứng trên thực tế, dẫn đến đạt được độ an toàn lao động cao và sự suất sắc trong hoạt động. Mức độ hài lòng của khách hàng luôn vượt quá sự mong đợi là đích đến cuối cùng của chúng tôi.

Sau đây là một số ý kiến khách hàng sử dụng dịch vụ của chúng tôi trong nhiều năm qua và được xem là bằng chứng cho chất lượng dịch vụ của chúng tôi.</div>
		</div>
		<ul class="row">
			<li class=" col-lg-6 col-md-12">
			<div class="cus clearfix">
			   <div class="avatar col-lg-5">
					<div class="img-all-ct" ><div class="img-ct">
						<img src="{{ URL::asset('public/img/khachhang/SD001.jpg') }}" /></div>
					</div>
					<div class="info text-center">
						<span class="name"><b class=""> Nguyễn Văn Long </b></span>
						<br/>
						<span class="other">Chung cư Terra Royal, Tại Quận 3, TP. Hồ Chí Minh</span>
					</div>
			   </div>
			   <div class="comment col-lg-7">
					<h3>“…Công ty dịch vụ mà chúng tôi có thể tin tưởng …”</h3>
					<div class="des">
						<p>“Làm việc trong một Khách sạn cao cấp như New World, chúng tôi luôn đòi hỏi những tiêu chuẩn và chất lượng vệ sinh khắt khe nhất từ các Công ty dịch vụ, và Exodus là một mà chúng tôi có thể tin tưởng. Họ luôn mang đến cho chúng tôi dịch vụ hòan hảo nhất. Dịch vụ Exodus thật tuyệt vời !”</p>
					</div>
			   </div>
			   </div>
			</li>
			<li class=" col-lg-6 col-md-12">
			<div class="cus clearfix">
			   <div class="avatar col-lg-5">
					<div class="img-all-ct" ><div class="img-ct">
						<img src="{{ URL::asset('public/img/khachhang/SD004.jpg') }}" width="190" /></div>
					</div>
					<div class="info text-center">
						<span class="name"><b class=""> (Mr). Nguyen Tien Dung </b></span>
						<br/>
						<span class="other">Movenpick Hotel Saigon - Executive Housekeeper</span>
					</div>
			   </div>
			   <div class="comment col-lg-7">
					<h3>“…Họ luôn sẵn sàng bất cứ khi nào chúng tôi cần …”</h3>
					<div class="des">
						<p>“Với tôi , Exodus là 1 công ty chuyên nghiệp và đáng tin cậy . Họ luôn sẵn sàng bất cứ khi nào chúng tôi cần . Nói chung , chúng tôi rất hài lòng và thỏa mãn với dịch vụ của họ. “</p>
					</div>
			   </div>
			   </div>
			</li>
			<li class=" col-lg-6 col-md-12">
			<div class="cus clearfix">
			   <div class="avatar col-lg-5">
					<div class="img-all-ct" ><div class="img-ct">
						<img src="{{ URL::asset('public/img/khachhang/SD005.png') }}" /></div>
					</div>
					<div class="info text-center">
						<span class="name"><b class=""> Ông Nguyễn Đông Thương </b></span>
						<br/>
						<span class="other">Từ Parkland Việt Nam - Housekeeping Supervisor</span>
					</div>
			   </div>
			   <div class="comment col-lg-7">
					<h3>“…thật sự hài lòng…”</h3>
					<div class="des">
						<p>“Đây là một công ty có sự phát triển rất nhanh và đã trở thành một trong những công ty hàng đầu trên thị trường Việt Nam hiện nay. Nếu bạn có bất cứ lo lắng nào về chất lượng vệ sinh, Exodus sẽ làm sạch chúng. Chắc chắn bạn sẽ thấy thật sự hài lòng với dịch vụ này.”</p>
					</div>
			   </div>
			   </div>
			</li>
			<li class="col-lg-6 col-md-12">
			   <div class="cus clearfix">
			   <div class="avatar col-lg-5">
					<div class="img-all-ct" ><div class="img-ct">
						<img src="{{ URL::asset('public/img/khachhang/SD007.jpg') }}" /></div>
					</div>
					<div class="info text-center">
						<span class="name"><b class=""> (Bạn). Nguyễn T.Thanh.Thảo </b></span>
						<br/>
						<span class="other">Từ Quận 10, TP. Hồ Chí Minh</span>
					</div>
			   </div> 
			   <div class="comment col-lg-7">
					<h3>“…xuất sắc trên mọi phương diện…”</h3>
					<div class="des">
						<p>“Xuất sắc trên mọi phương diện, tôi sẽ khuyên bạn bè và đồng nghiệp sử dụng dịch vụ của Exodus”</p>
					</div>
			   </div>
			   </div>
			</li>
			<li class="col-lg-6 col-md-12">
			   <div class="cus clearfix">
			   <div class="avatar col-lg-5">
					<div class="img-all-ct" ><div class="img-ct">
						<img src="{{ URL::asset('public/img/khachhang/SD009.jpg') }}" /></div>
					</div>
					<div class="info text-center">
						<span class="name"><b class=""> (Bà). Đỗ Thu Thủy </b></span>
						<br/>
						<span class="other">Từ DHL VNPT Express Limited - Ha Noi Branch</span>
					</div>
			   </div> 
			   <div class="comment col-lg-7">
					<h3>“……Exodus thực sự là công ty vệ sinh tốt nhất …”</h3>
					<div class="des">
						<p>“Chúng tôi đã sử dụng dịch vụ của Exodus được 4 năm. Và điều duy nhất mà tôi có thể nói đó là Exodus thực sự là công ty vệ sinh tốt nhất mà chúng tôi đã từng sử dụng”</p>
					</div>
			   </div>
			   </div>
			</li>
			<li class="col-lg-6 col-md-12">
			   <div class="cus clearfix">
			   <div class="avatar col-lg-5">
					<div class="img-all-ct" ><div class="img-ct">
						<img src="{{ URL::asset('public/img/khachhang/SD010.jpg') }}" /></div>
					</div>
					<div class="info text-center">
						<span class="name"><b class=""> (Anh). Trần Hải Nam </b></span>
						<br/>
						<span class="other">Chủ tiệm chuỗi nhà hàng cơm gà Hải Nam, Quận 5</span>
					</div>
			   </div> 
			   <div class="comment col-lg-7">
					<h3>“…rất hài lòng với kết quả đã đạt được…”</h3>
					<div class="des">
						<p>“Exodus rất chuyên nghiệp và dường như họ đang làm một công việc tuyệt vời. Tôi rất hài lòng với kết quả đã đạt được”</p>
					</div>
			   </div>
			   </div>
			</li>
		</ul>
		
		<div class="doitac">
		<h2><i class="fa fa-handshake-o" aria-hidden="true"></i> &nbsp Danh sách Khách Hàng & Đối Tác</h2>
			<ul class="row">
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B008.png') }}" /></div>
				</li>
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B001.png') }}" /></div>
				</li>
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B002.jpg') }}" /></div>
				</li>
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B003.png') }}" /></div>
				</li>
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B004.jpg') }}" /></div>
				</li>
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B009.jpg') }}" /></div>
				</li>
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B005.png') }}" /></div>
				</li>
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B006.jpg') }}" /></div>
				</li>
				<li class="col-lg-4 col-md-12">
					<div> <img src="{{ URL::asset('public/img/khachhang/doitac/B007.jpg') }}" /></div>
				</li>
				
			</ul>
		
		</div>
	</div>

@stop