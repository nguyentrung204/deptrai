$( document ).ready(function() {
  
   
   search();
   
   
});


function search() {
	var url        = "post/search";
	var parameters = {};
	parameters.page = "2";

	$.ajax({
		method: "GET",
		url: url,
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		data: parameters,
		cache: false,
		success: function(data){
		   var $itemModel = $('#itemModel');
			
		   for (i = 0; i < data.list.length; i++) {
			    var item = data.list[i];
				console.log(item);
				var $itemElement = $itemModel.clone();
				$itemElement.removeAttr('id');
				$itemElement.removeClass('hide');
				$itemElement.find('.item-img a').attr('href', 'post/view/' + item.post_id);
				$itemElement.find('.item-img img').attr('src', item.post_img);
				
				$itemElement.find('.user-info .name').text(item.post_user);
				$itemElement.find('.user-info .photo').attr('src', item.post_user_img);
				$itemElement.find('.user-info .url').attr('title', item.post_user);
				
				$('#listItem').append($itemElement);
		   }
		   return data;
		}, error: function(data) {

		}
	});
}