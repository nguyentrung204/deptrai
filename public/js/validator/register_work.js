$(document).ready(function() {
	$.validator.addMethod("dateFormat",
		    function(value, element) {
		        return value.match(/^(0?[1-9]|[12][0-9]|3[0-1])[/., -](0?[1-9]|1[0-2])[/., -](19|20)?\d{2}$/);
		    },
		    "Please enter a date in the format!"
	);
	
	$.validator.addMethod("phoneFormat",
		    function(value, element) {
		        return value.match(/^\d{4}[-]\d{3}[-]\d{3}$/);
		    },
		    "Please enter phone in the format!"
	);
	
	$.validator.addMethod("checkSalary",
		    function(value, element) {
				if($('input[name=salaryType]:checked').val() == 1) {
					if ($.trim(value) == '') {
						return false;
					}
				} 
		        return true;
		    },
		    "Please enter phone in the format!"
	);
	
	$.validator.addMethod("checkNoneSalary",
		    function(value, element) {
				if($('input[name=salaryType]:checked').val() == 0) {
					if ($.trim(value) == '') {
						return false;
					}
				} 
		        return true;
		    },
		    "Please enter phone in the format!"
	);
	
	$.validator.addMethod("checkIdCustomer",
		    function(value, element) {
				if($('input[name=registed]').is(':checked')) {
					if ($.trim(value) == '') {
						return false;
					}
				} 
		        return true;
		    },
		    "Please enter phone in the format!"
	);
	
	$.validator.addMethod("checkCustomer",
		    function(value, element) {
				if(!$('input[name=registed]').is(':checked')) {
					if ($.trim(value) == '') {
						return false;
					}
				} 
		        return true;
		    },
		    "Please enter phone in the format!"
	);

	$.validator.addMethod("checkDateFromTo",
		function(value, element) {
			if($.trim(value) != '') {
				var d = value.split("/");
				var k = $('#workDate').val().split("/");

				var to = new Date(d[1] + '/' + d[0] + "/" + d[2]);
				var from =   new Date(k[1] + '/' + k[0] + "/" + k[2]);

				if (from > to) {
					return false;
				}
			}
			return true;
		},
		"Please enter phone in the format!"
	);


	
	
	
	
	
	$("#registerForm").validate({
	  rules: {
	    title: {
	    	required: true,
	    	maxlength: 200 
	    },
		salaryFrom : {
			checkSalary: true,
			maxlength: 50,
			number: true
		},
		salaryTo : {
			maxlength: 50,
			number: true
		},
	    currency: {
	        checkSalary: true,
	        maxlength: 10
	    },
		noneSalary: {
			checkNoneSalary: true,
			maxlength: 200
		},
		addressWork : {
			required: true,
			maxlength: 200
		},
	    workDate: {

	        dateFormat: true
	    },
		  workEndDate : {
			  checkDateFromTo : true,
			  dateFormat: true
		  },
		age: {
			required: false,
			digits: true
		},
		totalPerson: {
			required: false,
			digits: true
		},
		path: {
			required: true
		},
		idcustomer: {
			checkIdCustomer: true
		},
		customername: {
			checkCustomer : true,
	        maxlength: 200
		},
	    address: {
			checkCustomer : true,
	        maxlength: 200
	    },
	    email: {
	        checkCustomer : true,
	        email: true,
			maxlength: 100
	    },
	    phone: {
	        checkCustomer : true,
			maxlength: 20
	    },
		  description: {
			required: true,
			maxlength: 200
		},
	    content: {
	    	required: true,
			maxlength: 3000
	    }
	  },
	 messages: {
		title: {
	    	required: "Vui lòng nhập Tiêu đề",
	    	maxlength: "Chỉ cho phép nhập Tiêu đề dưới 200 ký tự" 
	    },
		salaryFrom : {
			checkSalary: "Vui lòng nhập Giá từ",
			maxlength: "Chỉ cho phép nhập Giá từ dưới 50 ký tự",
			number: "Giá từ phải là số"
		},
		salaryTo : {
			maxlength: "Chỉ cho phép nhập Giá đến dưới 50 ký tự",
			number: "Giá đến phải là số"
		},
	    currency: {
	        checkSalary: "Vui lòng chọn Đơn vị tiền tệ",
	        maxlength: "Chỉ chấp nhận Đơn vị tiền tệ dưới 10 ký tự"
	    },
		noneSalary: {
			checkNoneSalary: "Vui lòng nhập mô tả cho giá thành",
			maxlength: "Chỉ cho phép nhập mô tả dưới 200 ký tự"
		},
		addressWork : {
			required: "Vui lòng nhập Địa chỉ nơi làm việc",
			maxlength: "Chỉ cho phép nhập Địa chỉ dưới 200 ký tự"
		},
	    workDate: {
	        dateFormat: "Vui lòng nhập Ngày làm việc đúng định dạng"
	    },
		 workEndDate : {
			 checkDateFromTo: "Ngày bắt đầu phải nhỏ hơn Ngày kết thúc",
			 dateFormat: "Vui lòng nhập Ngày làm việc đúng định dạng"
		 },
		age: {
			required: "Vui lòng nhập Độ tuổi làm việc"
		},
		totalPerson: {
			digits: "Số lượng người phải là số"
		},
		path: {
			required: "Vui lòng nhập Url hình ảnh cho bài viết"
		},
		idcustomer: {
			checkIdCustomer: "Vui lòng nhập ID Khách hàng"
		},
		customername: {
			checkCustomer : "Vui lòng nhập Tên Khách hàng",
	        maxlength: "Chỉ cho phép nhập Tên Khách hàng dưới 200 ký tự"
		},
	    address: {
			checkCustomer : "Vui lòng nhập Địa chỉ",
	        maxlength: "Chỉ cho phép nhập Địa chỉ dưới 200 ký tự"
	    },
	    email: {
	        checkCustomer : "Vui lòng nhập Email",
	        email: "Vui lòng nhập đúng định dạng Email",
			maxlength: "Chỉ cho phép nhập Email dưới 100 ký tự"
	    },
	    phone: {
	        checkCustomer : "Vui lòng nhập Số điện thoại",
			maxlength: "Chỉ cho phép nhập Số điện thoại dưới 20 ký tự"
	    },
		 description: {
			required: "Vui lòng nhập Mô tả cho bài viết",
			maxlength: "Chỉ cho phép nhập nội dung dưới 200 ký tự"
		},
	    content: {
	    	required: "Vui lòng nhập Nội dung bài viết",
			maxlength: "Chỉ cho phép nhập nội dung dưới 3000 ký tự"
	    }
	 },
	 errorPlacement: function(error, element) {
		 var name = $(element).attr('name');
		 $('#' + name + '-error').text(error.text());
	 }
	});
});

