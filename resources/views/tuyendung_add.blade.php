@extends('layouts.admin')

@section('js')
<script src="{{ URL::asset('public/js/validator/register_work.js') }}"></script>
<script src="{{ URL::asset('public/js/register_work.js') }}"></script>
<script src="{{ URL::asset('public/ckeditor/ckeditor.js') }}"></script>
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
				<input type="text"  id="name" name="title" placeholder="Tiêu đề">
			</div>
			
			
			
			<div class="form-group">
				<div class="radio  radio-inline">
				  <input id="isSalary" type="radio" checked value="1" name="isSalary">
				  <label for="isSalary">
					Có ngay mức giá
				  </label>
				</div>
				<div class="radio radio-inline">
				  <input id="notSalary" type="radio" value="0" name="isSalary">
				  <label for="notSalary">
					Khác
				  </label>
				</div>
			</div>
			
			

			<label id="salaryFrom-error" class="error " for="salaryFrom"></label>
			<label id="salaryTo-error" class="error" for="salaryTo"></label>
			<div class="form-inline form-group">
				<div class="form-group">
					
					<input type="text"  id="salaryFrom" class="salaryInput" name="salaryFrom" placeholder="Giá từ">
				</div>
				<div class="form-group">
					<input type="text"  id="salaryTo" class="salaryInput" name="salaryTo" placeholder="~ đến">
				</div>
			</div>
			
			<div class="form-group">
					<label id="department-error" class="error" for="department"></label>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-th-list" aria-hidden="true"></i>
						</span>
						<div class="input-group-btn ">
							<button type="button" class="btn btn-default dropdown-toggle salaryInput" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span id="currencySelected">Chọn Đơn vị tiền tệ</span> <span class="caret"></span></button>
							<ul class="currency-pull dropdown-menu dropdown-menu-left">
								<li data="VND"><a href="javascript:void(0);">VND</a></li>
								<li data="USD"><a href="javascript:void(0);">USD</a></li>
								<li data="EURO"><a href="javascript:void(0);">EURO</a></li>
								<li data="YEN"><a href="javascript:void(0);">YEN</a></li>
								<li role="separator" class="divider"></li>
								<li data=""><a href="javascript:void(0);">Chọn Đơn vị tiền tệ</a></li>
							</ul>
							<input type="hidden" name="currency" />
						</div>
					</div>
				</div>
			
			<div class="form-group">
			    <label id="noneSalary-error" class="error" for="noneSalary"></label>
				<input type="text"  id="noneSalary" class="disabled" readonly name="noneSalary" placeholder="Thoả thuận, Không công,...">
			</div>
			
			<div class="form-group">
		  		<label id="addressWork-error" class="error" for="addressWork"></label>
		    	<input type="text"  id="addressWork" name="addressWork" placeholder="Địa điểm làm việc">
		  	</div>

			<label id="workDate-error" class="error workDate-error" for="workDate"></label>
			<label id="workEndDate-error" class="error workEndDate-error" for="workEndDate"></label>
			<div class="form-inline form-group">
            <div class="form-group">

				<div class="input-group date" id="datetimepicker2">
					<input type="text"  id="workDate" name="workDate"  placeholder="Ngày có thể làm việc">
			  		<span class="input-group-addon">
		        		<i class="fa fa-calendar" aria-hidden="true"></i>
		      		</span>
				</div>
			</div>
			<div class="form-group">

				<div class="input-group date" id="datetimepicker1">
					<input type="text"  id="workEndDate" name="workEndDate"  placeholder="Ngày kết thúc công việc">
			  		<span class="input-group-addon">
		        		<i class="fa fa-calendar" aria-hidden="true"></i>
		      		</span>
				</div>
			</div>
				</div>

			
			<div class="form-group">
		  		<label id="age-error" class="error" for="age"></label>
		    	<input type="text"  id="age" name="age" placeholder="Độ tuổi (Vui lòng nhập số, ví dụ : 20 hoặc 18~20)">
		  	</div>
			
			<div class="form-group">
		  		<label id="totalPerson-error" class="error" for="totalPerson"></label>
		    	<input type="text"  id="totalPerson" name="totalPerson" placeholder="Số lượng người cần tuyển (Vui lòng nhập số, ví dụ: 5 hoặc 5~10)">
		  	</div>

			<div class="form-group">
				<div class="radio  radio-inline">
					<input id="isStatus" type="radio" checked value="1" name="isStatus">
					<label for="isStatus">
						Hiển thị
					</label>
				</div>
				<div class="radio radio-inline">
					<input id="isHide" type="radio" value="0" name="isStatus">
					<label for="isHide">
						Ẩn
					</label>
				</div>
			</div>
			
			<div class="form-group">
		  		<label id="path-error" class="error" for="path"></label>
		    	<input type="text"  id="path" name="path" placeholder="Địa chỉ hình ảnh (chiều rộng ảnh: 247px)">
		  	</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-md-3">
						<img id="imgThub" src="http://localhost/deptrai/public/img/sample.png" class="img-thumbnail" alt="Cinque Terre" width="247">
					</div>
				</div>
			</div>
			
			<div class="form-group">
		  		<div class="checkbox">
               		<input id="checkbox3" value="1" name="registed" class="styled" type="checkbox">
                    <label for="checkbox3">
                    	Khách hàng đã đăng ký
                    </label>
                </div>
		  	</div>
			
			<div class="form-group">
				<label id="idcustomer-error" class="error" for="idcustomer"></label>
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
				  <input type="text"  id="idcustomer" class="disabled" readonly name="idcustomer" placeholder="ID Khách hàng (hoặc Số điện thoại)">
			    </div>
			  </div>
			
			<div class="form-group">
				<label id="customername-error" class="error" for="customername"></label>
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></div>
				  <input type="text"  id="customername" name="customername" class="registInput" placeholder="Tên Công ty / Cá nhân">
			    </div>
			  </div>
			
		  	
			
			<div class="form-group">
				<label id="address-error" class="error" for="address"></label>
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></div>
				  <input type="text"  id="address" name="address" class="registInput" placeholder="Địa chỉ">
			    </div>
			  </div>
			
			<div class="form-group">
				<label id="email-error" class="error" for="email"></label>
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-envelope-open-o fa-lg" aria-hidden="true"></i></div>
			      <input type="text"  id="email" name="email" class="registInput" placeholder="Email">
			    </div>
			  </div>
			  
			  <div class="form-group">
			  <label id="phone-error" class="error" for="phone"></label>
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></div>
			      
		    	<input type="text"  id="phone" name="phone" class="registInput" placeholder="Số điện thoại">
			    </div>
			  </div>
			  <div class="form-group">
				<label id="description-error" class="error" for="description"></label>
				<div class="input-group">
				<input type="text"  id="description" name="description"  placeholder="Nhập Mô tả vào đây">
                </div>
			
			<div class="form-group">
				<label id="content-error" class="error" for="content"></label>
				<div class="input-group">
				<textarea name="content" id="content" rows="10" cols="80" placeholder="Nhập nội dụng vào đây">
                </div>
				</textarea>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
			</div>
		
			
			
			
		  	<div class="form-group text-center regist-btn">
		  		<button type="button" id="regist-btn" class="btn btn-success">
		  		   <i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp; ĐĂNG VIỆC LÀM &nbsp;
		  		</button>
		  	</div>
		</form>
	</div>
</div>
@stop