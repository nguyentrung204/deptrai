@extends('layouts.master2')

@section('title', trans('login.title'))

@section('content')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Taviraj:400,700,700i" rel="stylesheet">
@stop
@section('js')


@stop

<header class="site-header size-lg text-center" style="padding: 220px;;background-image: url({{ URL::asset('public/img/Anh-tap-the.png') }})">

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
            Được thành lập từ năm 1995, là một trong những công ty chuyên cung cấp dịch vụ vệ sinh công nghiệp đầu tiên tại Việt Nam.
            UniCARE luôn tiên phong trong việc ứng dụng các công nghệ, giải pháp mới nhất đến từ Nhật Bản trong lĩnh vực vệ sinh công nghiệp.
            Năm 2008, UniCARE đã hoàn thành tiêu chuẩn ISO 9001:2000 do tổ chức TUV xác nhận cho việc cung cấp dịch vụ uy tín, chất lượng và chuyên nghiệp.
            Ngoài ra, để tiếp tục nhấn mạnh cho triết lý kinh doanh “Uy Tín và Chuyên Nghiệp”, tập trung vào sự phát triển của các dịch vụ đặc biệt cho khách hàng,
            UniCARE đã hoàn thành việc chuyển đổi và áp dụng hệ thống chất lượng theo tiêu chuẩn ISO.
        </div>
        <div class="detail-label-2"><label style="margin: 0"><h3 style="margin: 0"> <i class="fa fa-envira" aria-hidden="true"></i> &nbsp Sứ mệnh</h3></label></div>
        <div class="detail-param">
            Công ty dịch vụ vệ sinh UniCARE liên tục duy trì sự sáng tạo và phấn đấu cung cấp dịch vụ chất lượng cao với chi phí hợp lý.
            Đem lại lợi ích cả về vật chất lẫn tinh thần không những cho người lao động mà còn cả khách hàng và toàn xã hội.
        </div>
        <div class="detail-label-2"><label style="margin: 0"><h3 style="margin: 0"><i class="fa fa-envira" aria-hidden="true"></i> &nbsp Tầm nhìn</h3></label></div>
        <div class="detail-param">
            Trở thành một tập đoàn hàng đầu tại Việt Nam cũng như trong khu vực trong lĩnh vực dịch vụ vệ sinh,
            đồng thời tạo ra một quan điểm phát triển bền vững.
            <br>
            Tăng cường đầu tư, nghiên cứu và không ngừng nâng cao cải tiến chất lượng dịch vụ làm sạch công nghiệp,
            đảm bảo nhu cầu khách hàng luôn được đáp ứng nhanh nhất, chu đáo nhất, hiệu quả nhất với chi phí hợp lý nhất.

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