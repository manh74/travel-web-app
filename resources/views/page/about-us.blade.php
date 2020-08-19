@extends('master')
@section('content')
<head>
    <title>Giới thiệu</title>
</head>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/about-us') }}">GIỚI THIỆU</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
        <div class="space50">&nbsp;</div>
        <div class="row">
            <div class="col-sm-8">
                <h5>Năm 2020 hứa hẹn sẽ tiếp tục là một năm thành công cho thị trường du lịch nói chung và công ty du lịch EnjoyTravel nói riêng.
                    Enjoy Travel cam kết là một trong những đơn vị tiên phong triển khai các sản phẩm du lịch mới, tuyến điểm mới với giá thành hấp dẫn, cạnh tranh hơn nữa.
                    Song song với đó, chúng tôi luôn lắng nghe nhu cầu du lịch của du khách để không ngừng đổi mới, đa dạng hóa sản phẩm dịch vụ, đáp ứng kỳ vọng của khách hàng.
                </h5>
                <br>
                <img src="{{ URL::asset('images/infors/about.png') }}" style="width: 75%; margin-left: 100px;">
                <div class="space10">&nbsp;</div>
                <h5>Với đội ngũ hơn 100 nhân sự trẻ trung, năng động và nhiệt huyết, Enjoy Travel hiện đã xuất hiện tại khắp mọi miền Tổ quốc, trên các tỉnh thành như: Hà Nội, thành phố Hồ Chí Minh, Đà Nẵng, Tuyên Quang, Thanh Hóa, Bắc Ninh, Quảng Ninh và Bắc Kạn. Không chỉ dừng lại ở đó, EnjoyTravel đang tiếp tục mở rộng các đại lý bán nhằm tạo điều kiện thuận lợi nhất cho khách hàng trong giao dịch và tư vấn các dịch vụ, tour tuyến một cách tốt nhất và chu đáo nhất.<h5>
                <div class="space10">&nbsp;</div>
                <h5>Chất lượng dịch vụ là tiêu chuẩn được chúng tôi đặt lên hàng đầu để phục vụ khách tốt nhất. Chúng tôi hiểu rằng, mỗi chuyến đi du khách đều mong được gửi gắm vào đó những niềm vui, trải nghiệm, khám phá miền đất mới, kiến thức mới đồng thời lưu giữ những bức hình đẹp. Bởi vậy sứ mệnh đặt ra đối với chúng tôi chính là mang đến cho mỗi hành trình những dịch vụ đạt chuẩn, những khám phá mới nhất cho từng du khách và luôn là “sự lựa chọn tin cậy” cho khách hàng như khẩu hiệu của EnjoyTravel.</h5>
            </div>
            <div class="col-sm-4">
                <img src="{{ URL::asset('images/infors/about1.jpg') }}" width="400px;">
                <div class="space50">&nbsp;</div>
                <img src="{{ URL::asset('images/infors/about2.jpg') }}" width="400px;">
                <div class="space50">&nbsp;</div>
                <img src="{{ URL::asset('images/infors/about3.jpg') }}" width="400px;">
                <div class="space50">&nbsp;</div>
                <img src="{{ URL::asset('images/infors/about4.jpg') }}" width="400px;">
            </div>
        </div>
    </div>
</div>
<div class="space50">&nbsp;</div>

@endsection
