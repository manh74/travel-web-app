@extends('master')
@section('content')
@include('blocks.alert')
<head>
    <title>Kết quả tìm kiếm</title>
</head>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/products') }}">Kết quả tìm kiếm</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="product-area shop-sidebar shop section">
    <div class="container">
        <div class="row">
                @if (Session::get('search') <> '')
                @if($products->count()<>0)
                <br>
                @if($products->count()==1)
                <div>Có tất cả <b>{{ $products->count() }}</b> tour được tìm thấy.</div>
                @else
                <div>Có tất cả <b>{{ $products->count() }}</b> tours được tìm thấy.</div>
                @endif
                @endif
                <div class="row">
                    @if($products->count()<>0)
                    @foreach($products as $prds)
                    <div class="col-lg-3 col-md-6 col-12">
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
                                        <a title="Đặt tour" href="#">Đặt tour</a>
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
                </div>
                    {{ $products->links() }}
                    @else
                        <div>Không tìm thấy bất kì sản phẩm nào với từ khóa "<b>{{ Session::get('search') }}</b>".</div>
                    @endif
                @else
                    <div>Vui lòng nhập từ khóa để tìm kiếm tour.</div>
                @endif
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
