@extends('master')
@section('content')
<head>
    <title>Liên hệ</title>
</head>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index.html">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/contact') }}">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section class="section pb-5">
        <div class="row">
        <!--Grid column-->
            <div class="col-lg-5 mb-4">
            <!--Form with header-->
                <div class="card">
                    <div class="card-body">
                <!--Header-->
                    <div class="form-header blue accent-1">
                        <h2><i class=""></i> Chia sẻ với chúng tôi</h2>
                    </div>
                    <p>Chúng tôi sẻ hiểu mong muốn của bạn hơn</p>
                    <br>
                <!--Body-->
                    <div class="md-form">
                        <label for="form-name">Tên của bạn<span style="color:red;"> *</span></label>
                        <input type="text" id="form-name" class="form-control">
                    </div>
                    <div class="md-form">
                        <label for="form-email">Email của bạn<span style="color:red;"> *</span></label>
                        <input type="text" id="form-email" class="form-control">
                    </div>
                    <div class="md-form">
                        <div class="form-group">
                            <h4>Bình luận của bạn<span>*</span></h4>
                            <textarea name="message" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-light-blue"><h5>Gửi</h5></button>
                    </div>
                </div>
            </div> <!--Form with header-->
        </div>  <!--Grid column-->
    <!--Grid column-->
            <div class="col-lg-7">
                <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                    <iframe src="@foreach ($contacts as $ct)
                    {{ $ct->url }}
                @endforeach" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <br><br><br>
                <div class="row text-center">
                    <div class="col-md-4">
                        <a class=""><i class="ti-location-pin"></i></a>
                        @foreach ($contacts as $ct)
                            <p>{{ $ct->address }}</p>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <a class=""><i class="ti-mobile"></i></a>
                        @foreach ($contacts as $ct)
                            <p>{{ $ct->phone_number}}</p>
                            <p>{{ $ct->working_date }}</p>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <a class=""><i class="ti-email"></i></a>
                        @foreach ($contacts as $ct)
                            <p>{{ $ct->email }}</p>
                        @endforeach
                    </div>
                </div>
            </div> <!--Grid column-->
        </div>
    </section> <!--Section: Contact v.1-->
</div>

<div class="space50">&nbsp;</div>

@endsection
