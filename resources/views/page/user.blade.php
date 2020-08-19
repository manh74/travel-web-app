<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            color:green;
            width: 150px;
        }
        .btn{
            display: flex;
            width: 60px;
            padding: 1px;
            /* margin: 1px; */
            text-align: center;
        }
        td, img{
            width:100px;
        }
        .container {
            display: flex;
            max-width: 960px;
            max-height: 1000px;
            margin: 0 auto;
            padding: 5px;
        }
        .item {
            margin: 5px;
            color: white;
            height: 50px;
            text-align: center;
            line-height: 50px;
        }
    </style>
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

                    <div class="column">
                        <div class="col-lg-12">
                            <center>
                                <div>
                                    <h2>Users Management</h2>
                                    <table>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach ($user as $user)
                                            <tr>
                                                <td>{!! $user['id'] !!}</td>
                                                <td>{!! $user['name'] !!}</td>
                                                <td>{!! $user['email'] !!}</td>
                                                <td>
                                                    @if ($user['is_admin']<>0)
                                                    Admin
                                                    @else
                                                    Customer
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{route('change-role',$user->id)}}" method="post">
                                                        @csrf
                                                        <select onchange="this.form.submit()" name="change_to" id="" class="form-control" style="width: 150px">
                                                            <option value="1"
                                                            @if ($user['is_admin']<>0)
                                                                selected
                                                                @endif>Admin</option>
                                                            <option value="0"
                                                            @if ($user['is_admin']==0)
                                                                selected
                                                                @endif>Customer</option>
                                                            <option value="" style="display: none"></option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form class="form" action="{{route('delete-user', $user->id)}}" method="post">
                                                        @csrf
                                                        <button type="submit" name="edit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </center>
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
