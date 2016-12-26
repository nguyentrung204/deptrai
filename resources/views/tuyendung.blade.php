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


<div id="content2" class="container fill">


  
<div id="tuyendung" style="padding: 10px 20px;">
     <ul class="row">

		 <?php for ($x = 0; $x < count($jobList); $x++) { ?>
		<li class="item col-md-12 clearfix">
			<div class="col-md-3 col-sm-12 text-center">
				<img src="<?php echo $jobList[$x]->path ?>" class="img-thumbnail" alt="Cinque Terre" width="100%" >
			</div>
			<div class="col-md-9 col-sm-12 clearfix  ">
			 <div class="info clearfix hidden-sm hidden-xs">
				  <div class="col-md-6">
				  <i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: <?php $date = new DateTime($jobList[$x]->created_at);echo $date->format('d/m/Y') ?></span>
				  </div>
				  <div class="col-md-6 text-right">
				  <i class="fa fa-user-o" aria-hidden="true"></i> <span class="user">Người đăng: <?php echo $jobList[$x]->name ?></span>
				  </div>
			   </div>
			
			   <div class="title"><?php echo $jobList[$x]->title ?></div>
			   <div class="map"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $jobList[$x]->address ?></div>
			   <div class="money"><i class="fa fa-usd" aria-hidden="true"></i>
				   <?php
				   	if ($jobList[$x]->isSalary != '1') {
						echo $jobList[$x]->noneSalary;
					}else {
						if ($jobList[$x]->salaryTo != 0) {
				    		echo number_format($jobList[$x]->salaryFrom) . ' ~ ' .  number_format($jobList[$x]->salaryTo) . ' ' .  $jobList[$x]->currency;
						} else {
							echo number_format($jobList[$x]->salaryFrom) . ' ' .  $jobList[$x]->currency;
						}
					}
				   ?>

			   </div>
				<div class="money visible-sm-block visible-xs-block"><i class="fa fa-calendar-check-o " aria-hidden="true"></i> <span class="date">Ngày đăng: <?php echo $jobList[$x]->created_at ?></span></div>
				<div class="money visible-sm-block visible-xs-block"><i class="fa fa-user-o" aria-hidden="true"></i><span class="user"> Người đăng: <?php echo $jobList[$x]->name ?></span></div>
			   
			   
			   <div class="description">
				   <?php echo $jobList[$x]->description ?>
			   </div>
			</div>
		</li>
		 <?php } ?>

	 </ul>
	 <div id="readmore" class="text-center">
		<button type="button" class="btn btn-default"><i class="fa fa-angle-double-down fa-lg" aria-hidden="true"></i> &nbsp Xem thêm nhiều việc khác nữa ... </button>
	 </div>
	 
</div>
</div>

@stop