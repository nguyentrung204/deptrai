@extends('layouts.admin')
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
			    <label id="title-error" class="error" for="title"></label>
				<input type="text"  id="name" name="title" placeholder="Tiêu đề">
			</div>
			<div class="form-inline">
		  	<div class="form-group">
		  	    <label id="salaryfrom-error" class="error" for="salaryfrom"></label>
				<input type="text"  id="salaryfrom" name="salaryfrom" placeholder="Giá từ">
            </div>
			<div class="form-group">
		  	    <label id="salaryto-error" class="error" for="salaryto"></label>
				<input type="text"  id="salaryto" name="salaryto" placeholder="~ đến">
            </div>
			<div class="form-group">
		  		<label id="department-error" class="error" for="department"></label>
			  	<div class="input-group">
			  		<span class="input-group-addon">
		        		<i class="fa fa-th-list" aria-hidden="true"></i>
		      		</span>
			  		<div class="input-group-btn">
			        	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span id="departmentSelected">Chọn Đơn vị tiền tệ</span> <span class="caret"></span></button>
			        	<ul class="department-pull dropdown-menu dropdown-menu-left">
							<li data=""><a href="javascript:void(0);">VND</a></li>
							<li data=""><a href="javascript:void(0);">USD</a></li>
							<li data=""><a href="javascript:void(0);">EURO</a></li>
							<li data=""><a href="javascript:void(0);">YEN</a></li>
			          		<li role="separator" class="divider"></li>
			          		<li data=""><a href="javascript:void(0);">Chọn Đơn vị tiền tệ</a></li>
			        	</ul>
			        	<input type="hidden" name="department" />
			      	</div>
			    </div>
		    </div>
			</div>
			
			<div class="form-group">
		  		<label id="address-error" class="error" for="address"></label>
		    	<input type="text"  id="address" name="address" placeholder="Địa điểm làm việc">
		  	</div>
			
            <div class="form-group">
	            <label id="birthday-error" class="error birthday-error" for="birthday"></label>
			  	<div class="input-group date" id="datetimepicker2">
			    	<input type="text"  id="birthday" name="birthday"  placeholder="Ngày có thể làm việc">
			  		<span class="input-group-addon">
		        		<i class="fa fa-calendar" aria-hidden="true"></i>
		      		</span>
			  	</div>
		  	</div>
			
			<div class="form-group">
		  		<label id="idcustomer-error" class="error" for="idcustomer"></label>
		    	<input type="text"  id="idcustomer" name="idcustomer" placeholder="Độ tuổi (Vui lòng nhập số, ví dụ : 20 hoặc 18~20)">
		  	</div>
			
			<div class="form-group">
		  		<label id="totalperson-error" class="error" for="totalperson"></label>
		    	<input type="text"  id="totalperson" name="totalperson" placeholder="Số lượng người cần tuyển (Vui lòng nhập số, ví dụ: 5 hoặc 5~10)">
		  	</div>
			
			<div class="form-group">
		  		<div class="checkbox checkbox-success">
               		<input id="checkbox3" value="1" name="single" class="styled" type="checkbox">
                    <label for="checkbox3">
                    	Khách thuê đã đăng ký
                    </label>
                </div>
		  	</div>
			
			<div class="form-group">
		  		<label id="idcustomer-error" class="error" for="idcustomer"></label>
		    	<input type="text"  id="idcustomer" name="idcustomer" placeholder="ID Khách hàng">
		  	</div>
			
			<div class="form-group">
		  		<label id="address-error" class="error" for="address"></label>
		    	<input type="text"  id="address" name="address" placeholder="Tên Công ty / Cá nhân">
		  	</div>
			
		  	<div class="form-group">
		  		<label id="address-error" class="error" for="address"></label>
		    	<input type="text"  id="address" name="address" placeholder="Địa chỉ">
		  	</div>

			<div class="form-group">
		  		<label id="email-error" class="error" for="email"></label>
		    	<input type="text"  id="email" name="email" placeholder="Email">
		  	</div>
			
			<div class="form-group">
		  		<label id="phone-error" class="error" for="phone"></label>
		    	<input type="text"  id="phone" name="phone" placeholder="Số điện thoại">
		  	</div>
			
		  	<div class="form-group text-center regist-btn">
		  		<button type="button" id="regist-btn" class="btn btn-success">
		  		   <i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp; ĐĂNG KÝ &nbsp;
		  		</button>
		  	</div>
		</form>
	</div>
</div>
@stop