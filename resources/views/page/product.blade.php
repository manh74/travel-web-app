@extends('master')
@section('content')
@include('blocks.alert')
<head>
    <title>Tour</title>
</head>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/products') }}">TOUR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="product-area shop-sidebar shop section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar">
                        <div class="single-widget category">
                            <h3 class="title">TẤT CẢ CÁC TOUR</h3>
                            <ul class="categor-list">
                                @foreach($type_products as $type_prds)
                                <li><a href="{{route('type-product',$type_prds->id)}}">{{$type_prds->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="single-widget recent-post">
                            <h3 class="title">TOUR ĐƯỢC ĐẶT NHIỀU NHẤT</h3>
                            @foreach ($best_tour_ordered as $tours)
                            <div class="single-post first">
                                <div class="image">
                                    <a href="{{route('product-detail',$tours->id)}}">
                                        <img src="{{ URL::asset($tours->image) }}" alt="{{ $tours->title }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5><a href="{{route('product-detail',$tours->id)}}">{{ $tours->title }}</a></h5>
                                    <p class="price">{{ number_format($tours->price) }}đ</p>
                                    <ul class="reviews">
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                        <li class="yellow"><i class="ti-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach

                        </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-12">
                @if(Request::is('products') || Request::is('products/ord-by-*'))
                <div class="row">
                    <div class="col-12">
                        <div class="shop-top">
                            <div class="shop-shorter">
                                <div class="single-shorter">
                                        <form method="get" action="">
                                            <label>SẮP XẾP THEO :</label>
                                            <select name="event_edit" class="form-control form-control-lg"
                                                onChange="window.location.href='' + 'products/' +  this.options[this.selectedIndex].value">
                                                <option  value="ord-by-name">Tên</option>
                                                <option value="ord-by-price">Giá</option>
                                                <option value="ordered-a-lot">Được đặt nhiều</option>
                                            </select>
                                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                @endif
                @if($products->count()<>0)
                <br>
                <div>Có tất cả <b>{{ $products->count() }}</b> tour.</div>
                @endif
                <div class="row">
                    @if($products->count()<>0)
                    @foreach($products as $prds)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('product-detail',$prds->id)}}">
                                    <img height="200px" src="{{ URL::asset($prds->image) }}" alt="{{$prds->title}}">
                                    <img class="hover-img" src="{{ URL::asset($prds->image) }}" alt="{{$prds->title}}">
                                    @foreach($type_products as $type_prds)
                                        @switch($prds->id_type)
                                        @case($type_prds->id)
                                            <span class="new">{{$type_prds->name}}</span>
                                            @break
                                            @default
                                        @endswitch
                                    @endforeach
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a title="Xem thêm" href="{{route('product-detail',$prds->id)}}"><i class=" ti-eye"></i><span>Xem thêm</span></a>
                                        </div>
                                    <div class="product-action-2">
                                        <a title="Đặt tour" href="{{ url('book-tour-histories',$prds->id) }}">Đặt tour</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('product-detail',$prds->id)}}">{{$prds->title}}</a></h3>
                                <div class="product-price">
                                    <div class="spacing">
                                        <span><i class="ti-money"></i>Giá:</span>
                                        <span>
                                            @if($prds->on_sale<>0)
                                            <b style="text-decoration: line-through;">
                                                {{number_format($prds->price)}}đ
                                            </b>
                                            <b style="color: red">
                                                {{' '.number_format($prds->price - (($prds->price*$prds->on_sale)/100))}}đ
                                            </b>
                                            @else
                                                <b style="color: red">
                                                    {{number_format($prds->price)}}đ
                                                </b>
                                            @endif
                                        </span>
                                    </div>
                                    <div class="spacing">
                                        <span><i class="ti-alarm-clock"></i>Khởi hành:</span>
                                        <span>{{\Carbon\Carbon::createFromFormat('H:i:s',$prds->departure_time)->format('h:i')}}-{{ \Carbon\Carbon::parse($prds->departure_date)->format('d/m/Y')}}</span>
                                    </div>
                                    <div class="spacing">
                                        <span><i class="fa fa-calendar"></i>Lịch trình:</span>
                                        <span>{{$prds->schedule}}</span>
                                    </div>
                                    <div class="spacing">
                                        <span><i class="fa fa-user"></i>Số chỗ còn lại:</span>
                                        <span>{{$prds->number_people}}</span>
                                    </div>
                                    <div class="spacing">
                                        <form class="form" action="{{route('add-to-favorite',$prds->id)}}" method="post">
											@csrf <button style="padding: 0;
                                            border: none;
                                            background: none;" type="submit"><i class=" ti-heart" style="color: red"></i><span>Yêu thích</span></button>
                                        </form>
                                        <form class="form" action="{{route('bookTour',$prds->id)}}" method="get">
											@csrf
                                            <button type="submit" class="btn btn-danger">BOOK NGAY</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div>Không có sản phẩm nào.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="inner">
                        <h4>NHẬN THÔNG BÁO TỪ CHÚNG TÔI</h4>
                        <p> Nhập email của bạn tại đây để có thể nhận được những thông báo mới nhất từ chúng tôi.</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Email của bạn" required="" type="email">
                            <button class="btn">GỬI</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
