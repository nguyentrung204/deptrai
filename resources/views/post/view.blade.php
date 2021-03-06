@extends('layouts.master')

@section('title', trans('login.title'))



@section('js')

<meta property="fb:app_id" content="233300430056576" />
<meta property="fb:admins" content="100000948639194"/>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId=233300430056576";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	
	function share() {

	  
	  FB.ui({
  method: 'feed',
  link: '{{ URL::asset('post/view') }}/<?php echo $post_id ?>',
  caption: 'An example caption',
}, function(response){});
	}
</script>

@stop

@section('info')



@stop

@section('content')
    
	<div class="detail-container">
		<div class="text-center">
			<div class="entry-time"> <i class="fa fa-calendar-check-o"></i> Ngày <?php echo $post_date ?></div>
			<h2 class="entry-title" > <?php echo $post_title ?> </h2>
			<div class="entry-meta">
				<ul class="entry-meta-list plain-list">
					<li><i class="fa fa-thumbs-o-up"></i> <a href="#" rel="category tag">192 <span class="icontext">Thích</span></a></li>
					<li><i class="fa fa-eye"></i> 1,534 <span class="icontext">Lượt xem</span></li>
					<li><i class="fa fa-user"></i> <?php echo $post_user ?></li>
				</ul>
			</div>
		</div>
		
		<iframe width="860" height="80" src="http://mp3.zing.vn/embed/song/ZW70EIUE?start=true" frameborder="0" allowfullscreen="true"></iframe>
		
		<object width="300" height="286">  <param name="movie" value="http://www.nhaccuatui.com/m/jPfxPscuomcC" />  <param name="quality" value="high" />  <param name="wmode" value="transparent" />  <param name="allowscriptaccess" value="always" /> <param name="allowfullscreen" value="true"/> <param name="flashvars" value="autostart=true" />  <embed src="http://www.nhaccuatui.com/m/jPfxPscuomcC" flashvars="target=blank&autostart=true" allowscriptaccess="always" allowfullscreen="true" quality="high" wmode="transparent" type="application/x-shockwave-flash" width="300" height="286"></embed></object>
		
		<div class="content"><?php echo $post_content ?></div>	
		<footer class="entry-footer post-footer">
			<div class="row">												
				<div class="links" >
					<span class="fbshare cursor" onclick="share();">Share <i class="fa fa-facebook-square"></i></span>
				</div>
			</div> 
		</footer>
    </div>
	
	

	<div class="detail-container comment" style="margin-top: 20px;">
		<div id="fb-root"></div>
		<div class="fb-comments" data-href="{{ URL::asset('post/view') }}/<?php echo $post_id ?>" data-numposts="5"></div>
	</div>
	
	
		
@stop


	




