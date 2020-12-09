<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tours</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

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
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Tour Gia Đình</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Tour Trăng Mật</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Tour Nổi Bật</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Tour Khuyến Mãi</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                <div class="row">
                    @foreach ($tour as $prds)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('product-detail',$prds->id)}}">
                                    <img height="300px" src="{{ URL::asset($prds->image) }}" alt="{{$prds->title}}">
                                </a>
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
                                        <form class="form" action="{{route('delete-tour', $prds->id)}}" method="post">
                                            @csrf
                                            <button type="submit" name="edit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <form class="form" action="{{route('editTour', $prds->id)}}" method="get">
                                            @csrf
                                            <button type="submit" name="edit" class="btn btn-info">Edit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    @endforeach
                    <br>
                    <br>
                   </div>
                </div>
            </main>
            <br>
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
