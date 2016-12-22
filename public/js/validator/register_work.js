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
	
	$("#registerForm").validate({
	  rules: {
	    title: {
	    	required: true,
	    	maxlength: 200 
	    },
		salaryfrom : {
			required: true,
			maxlength: 200 
		}
		
	    sex: {
	        required: true,
	        number: true,
	        maxlength: 1
	    },
	    workDate: {
	        required: true,
	        dateFormat: true
	    },
	    address: {
	        required: true,
	        maxlength: 200
	    },
	    email: {
	        required: true,
	        email: true 
	    },
	    phone: {
	        required: true,
	        phoneFormat: true
	    },
	    department: {
	    	required: true,
	    	number: true
	    }
	  },
	 messages: {
		name: {
			required: "Vui lòng nhập Họ & Tên",
			maxlength: "Họ & Tên không nhập quá 200 ký tự", 
	    },
	    sex: {
	        required: "Vui lòng chọn Giới tính",
	        number: "Kiễu Giới tính không chính xác",
	        maxlength: "Giới tính không chính xác"
	    },
	    birthday: {
	        required: "Vui lòng nhập Ngày sinh",
	        dateFormat: "Ngày sinh phải theo định dạng dd/MM/yyyy",
	    },
	    address: {
	        required: "Vui lòng nhập Thường trú",
	        maxlength: "Thường trú không nhập quá 200 ký tự", 
	    },
	    email: {
	        required: "Vui lòng nhập Địa chỉ mail",
	        email: "Địa chỉ mail không đúng định dạng" 
	    },
	    phone: {
	        required: "Vui lòng nhập Số điện thoại",
	        phoneFormat: "Vui lòng nhập số điện thoại theo định dạng 1234-567-890"  
	    },
	    department: {
	    	required: "Vui lòng chọn Phòng ban",
	    	number: "Phòng ban không chính xác", 
	    }
	 },
	 errorPlacement: function(error, element) {
		 var name = $(element).attr('name');
		 $('#' + name + '-error').text(error.text());
	 }
	});
});

