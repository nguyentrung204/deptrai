﻿@extends('layouts.master')

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

	<div class="alert alert-warning alert-dismissible fade in" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	  <strong>Mẹo :</strong> Website sẽ chạy tốt hơn với trình duyệt Chrome, tải phiên bản mới nhất <a target="_blank" href="https://www.google.com/chrome/browser/desktop/index.html">tại đây</a>.
	</div>

  <ol id="listItem" class="list-item clearfix">
    <li id="itemModel" class="item-group col-md-3 col-sm-4 col-xs-6 clear-fix hide">
	  <div class="item">
        <div class="item-shot">
          <div class="item-img">
		    <a href="#">
		        <img src="" width="200px" height="150px" />
			</a>
		  </div>
          <ul class="tools clear-fix">
		    <li class="fav">
			  <a title="View fans of this shot" href="#">204</a>
		    </li>
		    <li class="cmnt">
			  <span>6</span>
		    </li>
		    <li class="views">
			  <span>928</span>
		    </li>
		  </ul>
		  <div class="extras">
			<span rel="tipsy" class="attachments-mark" original-title="This shot has attachments" style="display: inline;">
              <img width="16" data-toggle="tooltip" data-placement="left" title="Tooltip on top" height="16" alt="Attachments" src="https://d13yacurqjgara.cloudfront.net/assets/icon-attach-16-2x-09bed42f07f474e403420377d95f54c8.png">
            </span>
          </div>
		  
        </div>
      </div>
	  <h2>
        <span class="user-info">
          <a class="url" rel="contact" title="" href="#"><img class="photo" src="" alt=""> <span class="name"></span></a>
        </span>
      </h2>
	</li>
  </ol>
  
  <nav>
   <ul class="pager">
    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> {{trans('captions.C0007')}}</a></li>
    <li class="next"><a href="#">{{trans('captions.C0006')}} <span aria-hidden="true">&rarr;</span></a></li>
   </ul>
  </nav>
  


@stop