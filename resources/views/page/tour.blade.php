@extends('master')
@section('content')
<head>
    <title>TOUR ĐÃ ĐẶT</title>
</head>
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/about-us') }}">TOUR ĐÃ ĐẶT</a></li>
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
		<div>
            <div>
                LỊCH SỬ ĐẶT TOUR
               <div>
                <div class="row">
                    <div>
                        @if(count($tours)<>0)
                        @section('count-number')
                            {{ $count = 1 }}
                        @endsection
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">SĐT</th>
                                <th scope="col">Tour</th>
                                <th scope="col">Ngày đi</th>
                                <th scope="col">Ngày về</th>
                                <th scope="col">SL</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Trạng thái</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($tours as $tour)
                              <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $tour->name }}</td>
                                <td>{{ $tour->email }}</td>
                                <td>{{ $tour->phone }}</td>
                                <td>{{ $tour->titleTour }}</td>
                                <td>{{ \Carbon\Carbon::parse($tour->check_in)->format('d/m/Y')}}</td>
                                <td>{{ \Carbon\Carbon::parse($tour->check_out)->format('d/m/Y')}}</td>
                                <td>{{ $tour->quantity }}</td>
                                <td>{{ number_format($tour->price) }}VNĐ</td>
                                <td>{{ $tour->status }}</td>
                                @if ($tour->status=="Đang chờ cuộc gọi xác nhận và vé")
                                <td>
                                    <form class="form" action="{{route('cancel-tour',$tour->id)}}" method="post">
                                        @csrf
                                        <button class="btn-dlt">Hủy</button></td>
                                    </form>
                                @endif
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        @else
                            <div>Bạn chưa đặt bất kỳ tour nào.</div>
                        @endif
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
