@extends('layouts.master')

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


<div style="padding: 2px 3px;">
  <video width="100%" controls>
	  <source src="{{ URL::asset('/public/video/videohome.mp4')}}" type="video/mp4">
	  
	Your browser does not support the video tag.
	</video>
	
	
  </div>  
  
 <div id="khachhang" class="row" style="padding: 2px 3px;">
     
	<div class="box-title">
                <h3 class="title">Khách hàng của chúng tôi</h3>
                <p>Exodus là phần mềm quản lý bán hàng phổ biến nhất hiện nay. Với 15.000 cửa hàng đang sử dụng và hơn 500 cửa hàng đăng ký mới mỗi tháng.</p>
            </div>
			<div class="box-list-industry">
                <div class="col-md-3 col-xs-12 list-industry">
                    <div class="list-customer">
                        <div class="img-customer">
                            <img src="https://www.kiotviet.vn/wp-content/themes/kiotviet/images/aothun.jpg" width="" height="" alt="Aothun.vn">
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 list-industry">
                    <div class="list-customer">
                        <div class="img-customer">
                            <img src="https://www.kiotviet.vn/wp-content/themes/kiotviet/images/dalat.jpg" width="" height="" alt="Đặc sản Đà Lạt L’ang Farm">
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 list-industry">
                    <div class="list-customer">
                        <div class="img-customer">
                            <img src="https://www.kiotviet.vn/wp-content/themes/kiotviet/images/master.jpg" width="" height="" alt="Master Beef">
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 list-industry">
                    <div class="list-customer">
                        <div class="img-customer">
                            <img src="https://www.kiotviet.vn/wp-content/themes/kiotviet/images/cuulong.jpg" width="" height="" alt="Cửu Long Jewelry">
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 list-industry">
                    <div class="list-customer">
                        <div class="img-customer">
                            <img src="https://www.kiotviet.vn/wp-content/themes/kiotviet/images/vtc.jpg" width="" height="" alt="Dịch vụ truyền hình số VTC">
                        </div>
                        
                    </div>
                </div>
            </div>
         <a href="/deptrai/khachhang" id="company-readmore" class="btn">Xem thêm</a>
  </div>

@stop