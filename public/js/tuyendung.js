var isSearchClick = false;
var searchCondition = {};

$( document ).ready(function() {

	search();
	
	$('applicationError').hide();
	
			$('#readmore button').off('click').on(
					'click',
					function() {
						search();

					});

	$('.btn-search button').off('click').on(
		'click',
		function() {
			isSearchClick = true;
			search();

		});
});

function search() {

	var data = {
		"offset" : 0,
		'_token': $('input[name=_token]').val(),
		'titleTxt': '',
		'addressTxt': ''
	};

	if (isSearchClick) {
		data.offset = 0;
		data.addressTxt = $('#addressTxt').val();
		data.titleTxt = $('#titleTxt').val();
	} else {
		data.offset = searchCondition.offset || 0;
		data.addressTxt=searchCondition.addressTxt|| '';
		data.titleTxt =searchCondition.titleTxt ||'';
	}






	$.ajaxSend("tuyendung/getListAjax", data, function(result) {
		if (result.error) {
			if (result.data.model != null) {
				if (result.data.model.type == 'application-error') {
					$('#applicationError').text(result.data.model.error);
					$('#applicationError').show();
				}
			} else {

			}
		} else {
			$('#tuyendung .row').html('');
			if (result.jobList.length > 0) {
				$('#notFound').hide();
				searchCondition = data;
				searchCondition.offset += result.jobList.length;
				if (searchCondition.offset == result.total) {
					$('#readmore button').hide();
				} else {
					$('#readmore button').show();
				}

				var li= $('#example').clone().removeClass('hidden');



				for (var i=0; i< result.jobList.length; i++) {
					li = li.clone();
					li.find('img').prop('src', result.jobList[i].path);
					li.find('.dateVal').text(result.jobList[i].created_at);
					li.find('.addressVal').text(result.jobList[i].address);
					li.find('.userVal').text(result.jobList[i].name);
					li.find('.title').text(result.jobList[i].title);
					li.find('.viewDetail').prop("href" + result.jobList[i].id);
					li.find('.salaryVal').text(result.jobList[i].salaryVal);
					li.find('.description').text(result.jobList[i].description);





					$('#tuyendung .row').append(li);

				}

			} else {
				$('#readmore button').hide();
				$('#notFound').show();
			}
			isSearchClick = false;
		}
	}, function() {
		alert('có lỗi xảy ra.');
		isSearchClick = false;
	}, function() {


	});

}