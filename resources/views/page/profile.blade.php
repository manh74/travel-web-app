@extends('master')
@section('content')
<head>
    <title>Trang Cá Nhân</title>
</head>
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/about-us') }}">TRANG CÁ NHÂN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
@if(isset(Auth::user()->id))
<div class="container">
    <br>
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src="{{ URL::asset('images\avatars\avatar.png') }}" class="img-responsive" alt="">
				</div>

				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                        <div class="spacing">
                            <span><i class="ti-user"></i>Tên:</span>
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                        <div class="spacing">
                            <span><i class="ti-email"></i>Email:</span>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                        <div class="spacing">
                            <span><i class="ti-user"></i>Quyền sử dụng:</span>
                            <span>
                                @if (Auth::user()->is_admin==1)
                                    Admin
                                @else
                                    Khách hàng
                                @endif
                            </span>
                        </div>
                        <div class="spacing">
                            <span><i class="ti-lock"></i>Mật khẩu:</span>
                            <span>
                                <b><a style="color: red" href="{{ route('password.update') }}">{{ __('Đổi mật khẩu') }}</a></b>
                            </span>
                        </div>
					</div>
				</div>

				<div class="spacing">
                    <form class="form" action="{{route('favorite-tour')}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">TOUR YÊU THÍCH</button>
                    </form>
                    <form class="form" action="{{route('tours')}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">LỊCH SỬ ĐẶT TOUR CỦA BẠN</button>
                    </form>
				</div>

			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
               CÁC BÌNH LUẬN GẦN ĐÂY CỦA BẠN
               <div>
                <div class="row">
                    @foreach($comments as $cmt)
                    <div class="col-lg-4 col-md-6 col-12">
                        @if(count($comments)<>0)
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{ url('news',$cmt->id) }}">
                                    <img height="200px" src="{{ URL::asset($cmt->image) }}" alt="{{$cmt->title}}">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{ url('news',$cmt->id) }}">{{$cmt->title}}</a></h3>
                                <div class="product-price">
                                    <div class="spacing">
                                        <span><i class="ti-calendar"></i>Ngày đăng bài:</span>
                                        <span>{{ date('j F, Y', strtotime($cmt->new_day_post)) }}</span>
                                    </div>
                                    <div class="spacing">
                                        <span><i class="ti-comment"></i>Bình luận gần đây:</span>
                                        <span>{{ $cmt->last_comment_content }}</span>
                                    </div>
                                    <div class="spacing">
                                        <span><i class="ti-alarm-clock"></i>Thời gian:</span>
                                        <span>{{ date('j F, Y', strtotime($cmt->last_comment_date)) }}</span>
                                    </div>


                                </div>
                            </div>
                        </div>
                        @else
                            <div>Không có sản phẩm nào.</div>
                        @endif
                    </div>
                    @endforeach
                </div>
               </div>
            </div>
		</div>
    </div>
    <br>
</div>
@else
    @include('page/non-login')
@endif

@endsection
