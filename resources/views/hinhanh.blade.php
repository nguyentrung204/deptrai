@extends('layouts.master2')

@section('title', trans('login.title'))

@section('content')


@section('js')

<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


</script>

<link rel="stylesheet" href="{{ URL::asset('public/css/colorbox.css') }}" />
		<script src="{{ URL::asset('public/js/jquery.colorbox-min.js') }}"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".thumbnail-classic").colorbox({rel:'group1'});
			});
		</script>


@stop




<header class="site-header size-lg text-center" style="background-image: url({{ URL::asset('public/img/beautiful_peninsula-wallpaper-1920x1080.jpg') }}) ; padding: 150px;">
      <div class="container">
        
		
		<div class="row row-edge">

</div>
		

      </div>
    </header>





<div id="hinhanh" class="container fill">


  <div class="row">
 

 
<div class="col-lg-12 offset-top-34">
<div data-isotope-layout="fitRows" data-isotope-group="gallery" class="isotope isotope--loaded" >
<div data-photo-swipe-gallery="gallery" class="row">
<div data-filter="*" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a title="Hình mọi người đang chơi đùa" class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-02-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-02-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a title="Hình mọi người đang nói chuyện" class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-03-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-03-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-04-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-04-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-05-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-05-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-10-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-10-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-15-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-15-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-16-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-16-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-18-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-18-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-20-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-20-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a title="Hình mọi người đang nói chuyện" class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-03-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-03-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-04-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-04-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-05-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-05-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-05-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-05-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-10-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-10-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div  class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic"  href="{{ URL::asset('public/img/hinhanh/portfolio-15-1170x600.jpg' ) }}">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-15-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>

</div>
</div>
</div>
</div>

</div>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Image preview</h4>
            </div>
            <div class="modal-body">
                <img src="" id="imagepreview" style="width: 400px; height: 264px;" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@stop