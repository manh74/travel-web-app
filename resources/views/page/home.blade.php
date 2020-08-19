@extends('master')
@section('content')
@include('blocks.alert')
<head>
    <title>Trang chủ</title>
</head>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li class="active"><a href="{{ url('/') }}">TRANG CHỦ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    @foreach($slide as $sl)
    @if($sl->id ==1)
    <div class="carousel-item active">
    @else
    <div class="carousel-item">
    @endif
      <img class="d-block w-100" src="{{ URL::asset($sl->image)}}"
        alt="{{ $sl->name}}" height="400px">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br/>
<div class="container">

    <div class="row">
    <div class="col-12 col-sm-3">

    <div class="card bg-light mb-3">
        <div class="card-header bg-success text-white text-uppercase">CÁC LOẠI TOUR DU LỊCH</div>
        <div class="card-body">
            <ul class="categor-list">
                @foreach($type_products as $type_prds)
                <li><a href="{{route('type-product',$type_prds->id)}}">{{$type_prds->name}}</a></li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    <br/>

    <div class="col">
        <br/>
        @if($last_tour->count()<>0)
        <h4 style="color:red">Tours trăng mật</h4>
        <div class="row">
            @if($last_tour->count()<>0)
            @foreach($last_tour as $prds)
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
                                <span><i class="ti-alarm-clock"></i>Lịch trình:</span>
                                <span>{{$prds->schedule}}</span>
                            </div>
                            <div class="spacing">
                                <form class="form" action="{{route('add-to-favorite',$prds->id)}}" method="post">
                                    @csrf <button style="padding: 0;
                                    border: none;
                                    background: none;" type="submit"><i class=" ti-heart" style="color: red"></i><span>Yêu thích</span></button>
                                </form>
                                <a href="{{ url('book-tour-histories',$prds->id) }}" ><button type="button" class="btn btn-danger">BOOK NGAY</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $last_tour->links() }}
            @else
                <div>Không có sản phẩm nào.</div>
            @endif
        </div>
        <br/>
        @endif
        @if($promotional_tour->count()<>0)
        <h4 style="color:red">Tours khuyến mãi</h4>
        <div class="row">
            @if($promotional_tour->count()<>0)
            @foreach($promotional_tour as $prds)
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
                                <span><i class="ti-alarm-clock"></i>Lịch trình:</span>
                                <span>{{$prds->schedule}}</span>
                            </div>
                            <div class="spacing">
                                <form class="form" action="{{route('add-to-favorite',$prds->id)}}" method="post">
                                    @csrf <button style="padding: 0;
                                    border: none;
                                    background: none;" type="submit"><i class=" ti-heart" style="color: red"></i><span>Yêu thích</span></button>
                                </form>
                                <a href="{{ url('book-tour-histories',$prds->id) }}" ><button type="button" class="btn btn-danger">Book ngay</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $promotional_tour->links() }}
            @else
                <div>Không có sản phẩm nào.</div>
            @endif
        </div>
        <br/>
        @endif
        @if($cheap_tour->count()<>0)
        <h4 style="color:red">Tours giá rẻ</h4>
        <div class="row">
            @if($cheap_tour->count()<>0)
            @foreach($cheap_tour as $prds)
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
                                <span><i class="ti-alarm-clock"></i>Lịch trình:</span>
                                <span>{{$prds->schedule}}</span>
                            </div>
                            <div class="spacing">
                                <form class="form" action="{{route('add-to-favorite',$prds->id)}}" method="post">
                                    @csrf <button style="padding: 0;
                                    border: none;
                                    background: none;" type="submit"><i class=" ti-heart" style="color: red"></i><span>Yêu thích</span></button>
                                </form>
                                <a href="{{ url('book-tour-histories',$prds->id) }}" ><button type="button" class="btn btn-danger">BOOK NGAY</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $cheap_tour->links() }}
            @else
                <div>Không có sản phẩm nào.</div>
            @endif
        </div>
        <br/>
        @endif
        @if($family_tour->count()<>0)
        <h4 style="color:red">Tours gia đình</h4>
        <div class="row">
            @if($family_tour->count()<>0)
            @foreach($family_tour as $prds)
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
                                <span><i class="ti-alarm-clock"></i>Lịch trình:</span>
                                <span>{{$prds->schedule}}</span>
                            </div>
                            <div class="spacing">
                                <form class="form" action="{{route('add-to-favorite',$prds->id)}}" method="post">
                                    @csrf <button style="padding: 0;
                                    border: none;
                                    background: none;" type="submit"><i class=" ti-heart" style="color: red"></i><span>Yêu thích</span></button>
                                </form>
                                <a href="{{ url('book-tour-histories',$prds->id) }}" ><button type="button" class="btn btn-danger">BOOK NGAY</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $family_tour->links() }}
            @else
                <div>Không có sản phẩm nào.</div>
            @endif
        </div>
        <br/>
        @endif
        @if($featured_tour->count()<>0)
        <h4 style="color:red">Tours nổi bật</h4>
        <div class="row">
            @if($featured_tour->count()<>0)
            @foreach($featured_tour as $prds)
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
                                <span><i class="ti-alarm-clock"></i>Lịch trình:</span>
                                <span>{{$prds->schedule}}</span>
                            </div>
                            <div class="spacing">
                                <form class="form" action="{{route('add-to-favorite',$prds->id)}}" method="post">
                                    @csrf <button style="padding: 0;
                                    border: none;
                                    background: none;" type="submit"><i class=" ti-heart" style="color: red"></i><span>Yêu thích</span></button>
                                </form>
                                <a href="{{ url('book-tour-histories',$prds->id) }}" ><button type="button" class="btn btn-danger">BOOK NGAY</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $featured_tour->links() }}
            @else
                <div>Không có sản phẩm nào.</div>
            @endif
        </div>
         @endif
    </div>
    </div>
</div>
</div>
<br/>
</div>
</div>
@endsection
