<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tour Ordered Management</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html"><img src="{{ URL::asset('images/avatars/logo1.gif') }}" width="70px;"></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </div>

                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Enjoy Travel</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                About Tours
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('viewTour')}}">View Tours</a>
                                    <a class="nav-link" href="{{route('addTour')}}">Add Tour</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Manage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('tourOrdered')}}">History Book Tour</a>
                                    <a class="nav-link" href="{{route('user')}}">Users</a>
                                    <a class="nav-link" href="{{route('new')}}">News</a>
                                    <a class="nav-link" href="{{route('postNew')}}">Post New</a>
                                    <a class="nav-link" href="{{route('modify-contact')}}">Contacts</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <a href="{{ route('home') }}">
                            {{ __('Using as a customer') }}
                        </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">ENJOY TRAVEL</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Welcom to us</li>
                        </ol>
                    </div>
                </main>
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
                                                <th scope="col">Sửa</th>
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
                                                <td>
                                                    <form action="{{route('change-status',$tour->id)}}" method="post">
                                                        @csrf
                                                        <select onchange="this.form.submit()" name="change_to" id="" class="form-control" style="width: 100px">
                                                            <option value="Đang chờ cuộc gọi xác nhận và vé"selected>Đang chờ cuộc gọi xác nhận và vé</option>
                                                            <option value="Đã xác nhận và thanh toán"selected>Đã xác nhận và thanh toán</option>
                                                            <option value="Đã đi tour đi"selected>Đã đi tour đi</option>
                                                            <option value="Hoàn thành"selected>Hoàn thành</option>
                                                            <option value="Hủy"selected>Hủy</option>
                                                            <option value=""selected style="display: none"></option>
                                                        </select>
                                                    </form>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <div>Chưa có bất kỳ tour được đặt.</div>
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2020 - MON GROUP - All Rights Reserved</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
