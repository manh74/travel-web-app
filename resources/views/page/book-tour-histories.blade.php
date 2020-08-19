@extends('master')
@section('content')

<head>
    <title>Lịch sử đặt tour</title>
</head>
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="">LỊCH SỬ ĐẶT TOUR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="content">
        <br>
        <style>
        .error {
            color: red;
        }
        </style>
        <div>
        <span style="display:flex">
        <h4 style="font-size:50px,color: #ffc001;">Đặt tour</h4>
        <h4 style="margin-left:45%;font-size:50px,color:#ffc001;">Tour của bạn</h4>
        </span>
        </div>
                               
        <div>

            <form action="" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="space20">&nbsp;</div>
                        <div class="form-block">
                            <label for="name">Check In*</label>
                            <p @error('start_date') class="error" @enderror>
                                <input class="form-control" name="start_date" type="date" required>
                                @error('start_date')
                                {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="form-block">
                            <label for="name">Check Out*</label>
                            <p @error('end_date') class="error" @enderror>
                                <input class="form-control" name="end_date" type="date" required>
                                @error('end_date')
                                {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Name*</span>
                                    <p @error('name') class="error" @enderror>
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Enter your name">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Email*</span>
                                    <p @error('email') class="error" @enderror>
                                        <input class="form-control" type="text" name="email"
                                            placeholder="Enter your email">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Phone*</span>
                                    <p @error('phone') class="error" @enderror>
                                        <input class="form-control" type="text" name="phone"
                                            placeholder="Enter your name">
                                        @error('phone')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Note</span>
                                    <p @error('note') class="error" @enderror>
                                        <input class="form-control" type="text" name="note"
                                            placeholder="Enter your note">
                                        @error('note')
                                        {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row"style="margin-left:15px">
                        <div class="col-sm-6">
                            <div class="your-order">
                                
                                <br />
                                <div class="your-order-body" style="padding: 0px 10px">
                                    <div class="your-order-item">

                                        <div class="media">
                                            <img width="25%" src="{{ URL::asset($tours->image) }}"
                                                style="height:250px;width:350px;" alt="" class="pull-left">
                                            <div class="media-body" style="margin-left:10px">
                                                <p class="font-large"><a
                                                        href="{{ url('products-detail',$tours->id) }}">{{ ' ' }}{{$tours->title}}</a>
                                                </p>
                                                <p class="color-gray your-order-info">Đơn giá:
                                                    {{number_format($tours->price)}} đồng</p>
                                                <p class="color-gray your-order-info">Số lượng người:
                                                    <p @error('qty') class="error" @enderror>
                                                        <input type="text" name="qty" onKeyUp="updated(this);" />

                                                        @error('qty')
                                                        {{ $message }}
                                                        @enderror
                                                    </p>
                                                </p>

                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                        function updated(inputElement) {
                                            var a = inputElement.value;
                                            var target = document.getElementById('sum');
                                            if (target != null) {
                                                target.innerHTML = a * {{$tours -> price }} + "VNĐ";
                                            }
                                            document.getElementById("sum1").value = a * {{ $tours -> price}};
                                            
                                        }
                                        
                                        </script>
                                    </div>
                                    <div class="your-order-item">
                                        <input type="text" name="total" value="" id='sum1' hidden>
                                        <div class="cart-total text-right">Tổng tiền: <b class="cart-total-value"
                                                name="totalPrice" value="this" id="sum"></b> </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                           
                        </div> <!-- .your-order -->
                   
                  
                    
                    </div> 
                   
                </div>
                <button type="submit" class="btn btn-success"style="margin-left:60%">Book Now</button>
            </form>
            </div>
            <br/>
        </div> <!-- #content -->
    </div> <!-- .container -->
    @endsection