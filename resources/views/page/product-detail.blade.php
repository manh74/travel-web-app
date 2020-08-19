@extends('master')
@section('content')
<head>
    <title>Chi tiết sản phẩm</title>
</head>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/products') }}">TOUR<i class="ti-arrow-right"></i></a></li>
                        <li class="active">
                            @foreach($products as $prds)
                             <a href="{{ url('/products') }}">{{$prds->title}}</a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style -->
<section class="product-area shop-sidebar shop section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">TẤT CẢ SẢN PHẨM</h3>
                            <ul class="categor-list">
                                @foreach($type_products as $type_prds)
                                <li><a href="{{route('type-product',$type_prds->id)}}">{{$type_prds->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="single-widget recent-post">
                            <h3 class="title">TOUR GẦN ĐÂY</h3>
                            @foreach ($products_rlv as $prds_rlv)
                                <div class="single-post first">
                                    <div class="image">
                                        <a href="{{route('product-detail',$prds_rlv->id)}}"><img src="{{ URL::asset($prds_rlv->image) }}" alt="#"></a>
                                    </div>
                                    <div class="content">
                                        <h5><a href="{{route('product-detail',$prds_rlv->id)}}">{{ $prds_rlv->title }}</a></h5>
                                        <a href="{{route('product-detail',$prds_rlv->id)}}"><p class="price">{{ number_format($prds_rlv->price)."VNĐ" }}</p></a>
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
                            <div class="container">
                                <small>
                                    {!! $products_rlv->links() !!}
                                </small>

                            </div>


                        </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-12">
                @foreach($products as $prds)
                <h1>{{$prds->title}}</h1>
                <br>
                <p>
                    <i class="fa fa-quote-left"></i>
                        {{$prds->summarize}}
                    <i class="fa fa-quote-right"></i>
                </p>
                <br>
                <div class="container">
                    <div class="row">
                      <div class="col">
                        <img src="{{ URL::asset($prds->image) }}" alt="">
                      </div>
                      <div class="col">
                        <div>
                            <div class="spacing">
                                <h5><i class="ti-money"></i>Giá:</h5>
                                @if($prds->on_sale<>0)
                                <span style="text-decoration: line-through;">{{number_format($prds->price)}}đ</span>
                                @else
                                <h6 style="color: rgb(253, 11, 11)">{{number_format($prds->price)}}đ<span style="color:  rgb(59, 58, 58)">/1 người</span></h6>
                                @endif
                            </div>
                                 @if($prds->on_sale<>0)
                                 <div class="spacing">
                                    <h5><i class="ti-money"></i>Sale:</h5>
                                    <h6 style="color: rgb(253, 11, 11)">{{number_format($prds->price - (($prds->price*$prds->on_sale)/100))}}đ <span style="color: rgb(59, 58, 58)">/1 người</span></h6>
                                </div>
                                @endif


                            <div class="spacing">
                                <h5><i class="ti-alarm-clock"></i>Lịch trình:</h5>
                                <span>{{$prds->schedule}}</span>
                            </div>


                        </div>
                      </div>
                </div>

                <div>
                    {!!$prds->content!!}
                </div>

                <br>
                <div class="col-12 spacing">

                    <form class="form" action="{{route('add-to-favorite',$prds->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn fvr"><span>Yêu thích</button>
                    </form>
                    <form class="form-group button" action="{{route('bookTour',$prds->id)}}" method="get">
                        @csrf
                        <button type="submit" class="btn book">ĐẶT NGAY</button>
                    </form>
                </div>
               @endforeach
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
