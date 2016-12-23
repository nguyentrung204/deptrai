$( document ).ready(function() {
	
		$('#datetimepicker2').datetimepicker({
			locale: 'vi',
			format: 'DD/MM/YYYY'
		});
		
		$('input[name=registed]').off('click').on('click', function() {
			if($('input[name=registed]').is(':checked')) {
				$(".registInput").addClass('disabled').prop('readonly', true);
				$("#idcustomer").removeClass('disabled').prop('readonly', false);
			} else {
				$(".registInput").removeClass('disabled').prop('readonly', false);
				$("#idcustomer").addClass('disabled').prop('readonly', true);
			}
		});
		
		$('input[name=registed]').trigger('click');
		
		$('input[name=salaryType]').off('click').on('click', function() {
			if($('input[name=salaryType]:checked').val() == 1) {
				$(".salaryInput").removeClass('disabled').prop('readonly', false);
				$("#noneSalary").addClass('disabled').prop('readonly', true);
			} else {
				$(".salaryInput").addClass('disabled').prop('readonly', true);
				$("#noneSalary").removeClass('disabled').prop('readonly', false);
			}
		});
		
		$('#path').off('focusout').on('focusout', function() {
			if ($('#path').val() == '') {
				$('#imgThub').attr('src', 'http://localhost/deptrai/public/img/sample.png')
			} else {
				$('#imgThub').attr('src', $('#path').val())
			}
			
		});
		
		
		
		
	
	$('.currency-pull li').off('click').on('click', function() {
		$('input[name=currency]').val($(this).attr('data'));
		$('#currencySelected').text($.trim($(this).text()));
	});
	
	$('applicationError').hide();
	
			$('#regist-btn').off('click').on(
					'click',
					function() {
						var data = {
							"single" : "0"
						};
						$.each($('#registerForm').serializeArray(), function(i,
								field) {
							data[field.name] = field.value;
						});
						
						data.content = CKEDITOR.instances.content.getData();

						if ($('#registerForm').valid()) {
							console.log(data);
							$.ajaxSend("deptrai/admin/job/insert", data, function(result) {
								if (result.error) {
									if (result.data.model != null) {
										if (result.data.model.type == 'application-error') {
											$('#applicationError').text(result.data.model.error);
											$('#applicationError').show();
										} 
									} else {
										$('label.error').text('');
										$('#registerForm input').addClass('valid');
										$.each(result.data, function(key, value) {
											$('input[name=' + key + ']')
													.removeClass('valid').addClass(
															'error');
											$('#' + key + '-error').text(value).show();
										});
									}
								} else {
									$.transitionTo('/demo/index', null);
								}
							}, function() {
								alert('có lỗi xảy ra.')
							});
						}
					});
});