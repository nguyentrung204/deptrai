@extends('layouts.master2')

@section('title', 'Giới thiệu')

@section('content')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Taviraj:400,700,700i" rel="stylesheet">
@stop
@section('js')


@stop

<header class="site-header size-lg text-center" style="padding: 220px;background-position: center;background-image: url({{ URL::asset('public/img/Anh-tap-the.png') }})">

</header>

<div id="about" class="container fill">
    <div class="row" id="about_title">
        <div>
            <label>
                <h1>Về chúng tôi</h1>
            </label>
        </div>
    </div>
    <div class="row" id="about_quote">
        <div>
            <p>“Hội thánh không biên giới, Mẹ của tất cả, loan báo nền văn hóa đón nhận và đồng hành để không ai bị xem là vô dụng, dư thừa và phế phẩm”</p>
        </div>
    </div>
    <div class="row" id="about_detail">
        <div class="detail-label-1"><label><h3>Giới thiệu</h3></label></div>
        <div class="detail-param">
            Nhu cầu dịch vụ gia tăng trong quá trình đô thị hóa
            Vốn đầu tư trong khả năng kiểm soát
            Huy động đội ngũ lao động từ nông thôn, đặc biệt là những phụ nữ trẻ không có trình độ học vấn và tay nghề
            Quy trình đào tạo đơn giản, thích ứng nhanh, vận hành hiệu quả
            Mô hình kinh doanh đơn giản, khả thi, đầy tiềm năng mở rộng và phát triển
        </div>
        <div class="detail-label-2"><label style="margin: 0"><h3 style="margin: 0"> <i class="fa fa-envira" aria-hidden="true"></i> &nbsp Sứ mệnh</h3></label></div>
        <div class="detail-param">
            -	Giúp người nghèo và cơ nhỡ sinh tồn
            -	 Xây dựng môi trường sống lành mạnh
            -	Đào tạo con người nhân ái
        </div>
        <div class="detail-label-2"><label style="margin: 0"><h3 style="margin: 0"><i class="fa fa-envira" aria-hidden="true"></i> &nbsp Tầm nhìn</h3></label></div>
        <div class="detail-param">
            -	Triển khai mô hình kinh doanh Không -Vì - Lợi - Nhuận cho cộng đồng
            -	Cung ứng việc làm cho người nghèo và cơ nhỡ
            -	Phát huy môi trường lao động thăng tiến công bình và nhân bản
        </div>
        <div class="detail-label-2"><label style="margin: 0"><h3 style="margin: 0"><i class="fa fa-building-o" aria-hidden="true"></i> &nbsp Dịch vụ vệ sinh hằng ngày</h3></label></div>
        <div class="detail-param">
            Bụi , khí carbon monoxide và amoniac chỉ là một vài trong số các chất có thể có trong không khí nhân viên của bạn hít thở mỗi ngày.
            Vì thế để mang lại hiệu quả và năng suốt làm viêc cho con người. UniCARE giới thiếu đến quý khách hàng dịch vụ vệ sinh hàng ngày.
            Với đội ngũ nhân viên được chứng nhận có thể đo mức độ của chất gây ô nhiễm không khí tại nơi làm việc của bạn.
            Chúng tôi mang đến các dịch vụ gồm:
            <ul style="padding-left: 30px">
                <li><span><i class="fa fa-check" aria-hidden="true"></i>&nbsp Vệ sinh văn phòng</span></li>
                <li><span><i class="fa fa-check" aria-hidden="true"></i>&nbsp Vệ sinh khách sạn</span></li>
                <li><span><i class="fa fa-check" aria-hidden="true"></i>&nbsp Vệ sinh nhà máy</span></li>
                <li><span><i class="fa fa-check" aria-hidden="true"></i>&nbsp Vệ sinh toà nhà</span></li>
                <li><span><i class="fa fa-check" aria-hidden="true"></i>&nbsp Vệ sinh bệnh viện</span></li>
            </ul>
        </div>
    </div>
</div>
@stop