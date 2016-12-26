$( document ).ready(function() {
	

	
	$('applicationError').hide();
	
			$('#readmore button').off('click').on(
					'click',
					function() {
						var data = {
							"offset" : $('#tuyendung li').length
						};

						
						data.content = CKEDITOR.instances.content.getData();

						if ($('#registerForm').valid()) {

							$.ajaxSend("../admin/job/insert", data, function(result) {
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