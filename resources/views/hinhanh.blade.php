@extends('layouts.master2')

@section('title', trans('login.title'))

@section('content')


@section('js')

<script src="{{ URL::asset('public/js/post_list.js') }}"></script>
<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$(document).ready(function() {
    $(".thumbnail-classic").on("click", function(e) {
        var $this = $(this);
        $('#imagepreview').attr('src', $this.find("img")[0].src); // here asign the image to the modal when the user click the enlarge link
        $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
    });
})

</script>

@stop




<header class="site-header size-lg text-center" style="background-image: url({{ URL::asset('public/img/business-parallax.jpg') }})">
      <div class="container">
        
		
		<div class="row row-edge">
<div class="col-xs-12 col-sm-4 col-md-4  motopress-margin-top-20 motopress-margin-bottom-25">
<div class="row row-edge  ">
<div class="col-md-12">
<div class="icon-align center  "><span style="" class="box-icon-wrap normal  "><div class="aligncenter"><span class="fa fa-coffee cherry-icon center  icon-314"></span></div></span></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:20px;"></div><div class="cherry-spacer   visible-sm-block" style="height:20px;"></div><div class="cherry-spacer   visible-xs-block" style="height:20px;"></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12">
<div class="cherry-counter style-4 color-white" data-delay="10" data-time="1000"><span class="count">1000</span></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12">
<div class="motopress-text-obj">
<p style="text-align: center;"><span style="color: #ffffff;">Coffee Cups</span></p>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4  motopress-margin-top-20 motopress-margin-bottom-25">
<div class="row row-edge  ">
<div class="col-md-12">
<div class="icon-align center  "><span style="" class="box-icon-wrap normal  "><div class="aligncenter"><span class="fa fa-puzzle-piece cherry-icon center  icon-197"></span></div></span></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:20px;"></div><div class="cherry-spacer   visible-sm-block" style="height:20px;"></div><div class="cherry-spacer   visible-xs-block" style="height:20px;"></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12">
<div class="cherry-counter style-4 color-white" data-delay="10" data-time="1000"><span class="count">74</span></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12">
<div class="motopress-text-obj">
<p style="text-align: center;"><span style="color: #ffffff;">Projects Done</span></p>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4  motopress-margin-top-20 motopress-margin-bottom-25">
<div class="row row-edge  ">
<div class="col-md-12">
<div class="icon-align center  "><span style="" class="box-icon-wrap normal  "><div class="aligncenter"><span class="fa fa-group cherry-icon center  icon-841"></span></div></span></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xs-pull-0 col-sm-pull-0 col-md-pull-0 col-lg-pull-0 col-xs-push-0 col-sm-push-0 col-md-push-0 col-lg-push-0">
<div class="cherry-spacer   hidden-xs hidden-sm" style="height:20px;"></div><div class="cherry-spacer   visible-sm-block" style="height:20px;"></div><div class="cherry-spacer   visible-xs-block" style="height:20px;"></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12">
<div class="cherry-counter style-4 color-white" data-delay="10" data-time="1000"><span class="count">99</span></div>
</div>
</div>
<div class="row row-edge  ">
<div class="col-md-12">
<div class="motopress-text-obj">
<p style="text-align: center;"><span style="color: #ffffff;">Happy Customers</span></p>
</div>
</div>
</div>
</div>
</div>
		

      </div>
    </header>





<div id="hinhanh" class="container fill">


  <div class="row">
 

 
<div class="col-lg-12 offset-top-34">
<div data-isotope-layout="fitRows" data-isotope-group="gallery" class="isotope isotope--loaded" >
<div data-photo-swipe-gallery="gallery" class="row">
<div data-filter="*" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-02-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div data-filter="Marketing" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-03-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div data-filter="Marketing" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-04-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div data-filter="Marketing" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-05-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div data-filter="Business" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-10-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div data-filter="Business" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-15-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div data-filter="Clients" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-16-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div data-filter="Clients" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-18-1170x600.jpg' ) }}" alt="">
</figure></a>
</div>
<div data-filter="Clients" class="col-xs-12 col-sm-6 col-md-4 isotope-item hover01" ><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="#">
<figure><img width="370"  src="{{ URL::asset('public/img/hinhanh/portfolio-20-1170x600.jpg' ) }}" alt="">
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