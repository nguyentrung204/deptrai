$( document ).ready(function() {
   
   $('#content').summernote({
	    height: 300,
		minHeight: null,             
		maxHeight: null,
		focus: true,
		lang: 'vi-VN',
		onKeyup: function(e) {
			setContent();
		},
		onKeydown: function(e) {
			setContent();
		},
		onPaste: function(e) {
			setContent();
		}
	});
	
	$('.note-group-select-from-files').remove();
   
   $('#postType li').off('click').on('click', function(){
	  var type= $(this).attr('data');
	  var text = $(this).text();
	  
	  $(this).parents('.dropdown').find('.dropdown-text').text(text);
	  $( "#postEditForm" ).find('input, textarea').addClass('ignore');
	  $('label.error').remove();
	  $('.type1').hide();
	  $('.type2').hide();
	  $('.type3').hide();
	  
	  $('.note-editor').hide();
	  
	  if (type == '1') {
		  $('.type1').removeClass('ignore').show();
		  $('.type1').find('input, textarea').removeClass('ignore');
		  $('input[name=content]').removeClass('ignore').show();
		  $('.note-editor').show();
	  }
	  
	  if (type == '2') {
		  $('.type2').find('input, textarea').removeClass('ignore');
		  $('.type2').removeClass('ignore').show();
	  }
	  
	  if (type == '3') {
		  $('.type3').find('input, textarea').removeClass('ignore');
		  $('.type3').removeClass('ignore').show();
	  }
   });
   
   $( "#postEditForm" ).validate({
	  ignore: '.ignore',
	  rules: {
		title: {
		  required: true
		},
		imageLink: {
		  required: true,
		  url: true
		},
		mp3Link: {
		  required: true,
		  url: true
		},
		youtubeLink: {
		  required: true,
		  url: true
		},
		description: {
		  required: true
		},
		content: {
		  required: true
		},
		postType: {
		  required: true
		}
	  },
	  errorPlacement: function (error, element) {
		error.insertAfter($('span.'+ $(element).attr('name') +'-error'));
      }
	});
	
	$('#submitBtn').off('click').on('click', function(){
		setContent();
		
		$( "#postEditForm" ).submit();
	});
   
   $('#postType li[data=1]').trigger('click');
   
   function setContent() {
	   var sHTML = $('#content').code();
		var isEmpty = $('#content').summernote('isEmpty');
		if (isEmpty) {
			$('input[name=content]').val('');
		} else {
			$('input[name=content]').val(sHTML);
		}
		
		$('input[name=content]').trigger('keyup');
   }
   
});