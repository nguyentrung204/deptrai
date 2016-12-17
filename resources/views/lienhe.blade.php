@extends('layouts.master2')

@section('title', trans('login.title'))

@section('content')


@section('js')
    <script>
        var map;
        function initMap() {
            var myLatLng = {lat: 10.784618, lng: 106.705216};

            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 10.784000, lng: 106.705000},
                zoom: 17
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: ''
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhDC7Yfx4Lgk5jEcz84V69iMO_XvpS42o&callback=initMap"
            async defer>
    </script>

@stop
<div id="map"></div>
<div class="container">
    <div class="row" id="contact">
        <div id="contactInfo" class="col-md-4">
            <div>
                <label>
                    <h3>Mạng xã hội</h3>
                </label>
            </div>
            <div class="w-socials size_big align_left">
                <div class="w-socials-list"><div class="w-socials-item facebook">
                        <a id="social-facebook" class="w-socials-item-link" target="_blank" href="https://www.facebook.com/ElluminatiIndia">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="w-socials-item twitter">
                        <a id="social-twitter" class="w-socials-item-link" target="_blank" href="https://twitter.com/elluminatiIndia">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div  class="w-socials-item gplus">
                        <a id="social-google-plus" class="w-socials-item-link" target="_blank" href="https://plus.google.com/+ElluminatiIn/posts">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div>
                <label>
                    <h3>Thông tin liên hệ</h3>
                </label>
            </div>
            <div style="padding-left: 30px">
                <div style="margin-bottom: 15px">
                    <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> &nbsp 6 Bis Tôn Đức Thắng, P. Bến Nghé, Q. 1, Tp. HCM
                </div>
                <div>
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i> &nbsp (08) 6680 9449
                </div>

            </div>
        </div>
        <div id="contactMessage" style="padding-right: 40px" class="col-md-8">
            <div>
                <label>
                    <h3>Gửi câu hỏi</h3>
                </label>
            </div>
            <div>
                Chúng tôi sẽ trả lời cho bạn trong vòng 24h làm việc
            </div>
            <form style="margin-top: 20px">
                <div class="form-group">
                    <label>Họ và tên (bắt buộc)</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Email (bắt buộc)</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </form>
        </div>
        <div class="col-md-12" id="sendBtn">
            <button class="btn">Gửi</button>
        </div>
    </div>
</div>
@stop