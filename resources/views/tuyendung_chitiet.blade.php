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
		  <input type="text" class="form-control" placeholder="Tên việc, lĩnh vực">
		</div>

		<div class="input-location">
		  <input type="text" class="form-control" placeholder="Địa điểm, huyện, tỉnh, quận, thành phố">
		</div>

		<div class="btn-search">
		  <button class="btn" type="submit">Tìm việc</button>
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
				<button class="btn" type="submit">Tìm việc</button>
			</div>
		</form>
	</div>
  </div>
</header>


<div id="content3" class="container fill">
	<div id="tuyendungchitiet" style="padding: 10px 20px;">
		 <div class="title colorbase">
			<?php echo $job->title; ?>
		 </div>
		
		
		
		 <div class="user text-center">
			<button type="button" class="btn btn-default"><i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp Trang tuyển dụng</button>
		 </div>
		 
		
		 
		 
		 <div class="clearfix">
			
			<div class="clearfix">
				<div class="col-sm-3 text-center">
					<div style="padding-top: 21px;">
					<img src="<?php echo $job->path ?>" class="img-thumbnail" alt="Cinque Terre" width="100%" >
					</div>
				</div>
				<div class="col-sm-9">
					<div class=" main-note">
						<i class="fa fa-circle-o " aria-hidden="true"></i> &nbsp <span class="date">Ngày đăng: <span class="colorbase"> <?php $date = new DateTime($job->created_at);echo $date->format('d/m/Y') ?></span>
						<br/>
						<i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp  Địa điểm làm việc: <span class="colorbase"> <?php echo $job->address ?></span>
						<br/>
						<i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp  Lương:
					   <span class="colorbase"><?php
						if ($job->isSalary != '1') {
							echo $job->noneSalary;
						}else {
							if ($job->salaryTo != 0) {
								echo number_format($job->salaryFrom) . ' ~ ' .  number_format($job->salaryTo) . ' ' .  $job->currency;
							} else {
								echo number_format($job->salaryFrom) . ' ' .  $job->currency;
							}
						}
					   ?></span></i>
						<br/>
						<i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp Số lượng cần tuyển: <span class="colorbase"> <?php echo $job->totalPerson ?></span>
						<br/>
						<i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp Độ tuổi: <span class="colorbase"> <?php echo $job->age ?></span>
						<br/>
						<i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp Thời gian làm việc: <span class="colorbase"> <?php echo $job->workDate ?> ~ <?php echo $job->workEndDate ?></span>
						<br/>
						<i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp Kinh nghiệm: <span class="colorbase"> không yêu cầu </span>
					</div>
				</div>
			</div>
			
			
			
			 <div class="col-md-12">
		
				   
		
				   
				   
					
					 <div class="body ">
						<i class="fa fa-envira" aria-hidden="true"></i> <b><?php echo $job->description; ?></b> <?php echo $job->content; ?>
						
						<p/>
						<div class="contactLink text-right"><b><i>(Nếu bạn cảm thấy công việc trên phù hợp, xin hãy <a href="#">liên hệ</a> với chúng tôi)</i></b></div>
					 </div>
				   
				   
			 </div>
		 </div>
		 
		 
			
		 
		 
		
		 
		 
	</div>
</div>

@stop