<div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="{{ route('employee.index') }}" class="logo">
                    <img src="{{asset('assets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand"
                        height="20" />
                </a>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="gg-menu-right"></i>
                    </button>
                    <button class="btn btn-toggle sidenav-toggler">
                        <i class="gg-menu-left"></i>
                    </button>
                </div>
                <button class="topbar-toggler more">
                    <i class="gg-more-vertical-alt"></i>
                </button>
            </div>
            <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-secondary">
                    <li class="nav-item">
                        <a href="{{ route('index') }}" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>

                    </li>



                    <li class="nav-item">
                        <a href="{{ route('employee.create') }}">
                            <i class="fas fa-pen-square"></i>
                            <p>Add User</p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('city.index') }}">
                            <i class="fas fa-pen-square"></i>
                            <p>Cities</p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('country.index') }}">
                            <i class="fas fa-pen-square"></i>
                            <p>Countries</p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('state.index') }}">
                            <i class="fas fa-pen-square"></i>
                            <p>States</p>
                        </a>

                    </li>





                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
        <div class="main-header">
            <div class="main-header-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="{{asset('assets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand"
                            height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                <div class="container-fluid">
                    <nav
                        class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pe-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <form action="" class="d-flex align-items-center">

                                <input name="search"  type="text" placeholder="Search ..." class="position-relative form-control" value="{{ $_GET['search'] ?? '' }}" />
                                <span class="position-absolute end-0"><a href="{{ route('employee.index') }}"><i class="fa-solid fa-xmark mx-3"></i></a></span>



                            </form>
                        </div>
                    </nav>

                    <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                        <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="fa fa-search"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-search animated fadeIn">
                                <form class="navbar-left navbar-form nav-search">
                                    <div class="input-group">
                                        <input type="text" placeholder="Search ..." class="form-control" />
                                    </div>
                                </form>
                            </ul>
                        </li>


                        </li>

                        <li class="nav-item topbar-user dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="{{asset('assets/img/profile.jpg')}}" alt="..."
                                        class="avatar-img rounded-circle" />
                                </div>
                                <span class="profile-username">
                                    <span class="op-7">Hi,</span>
                                    <span class="fw-bold">{{auth()->user()->name}}</span>
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg">
                                                <img src="{{asset('assets/img/profile.jpg')}}" alt="image profile"
                                                    class="avatar-img rounded" />
                                            </div>
                                            <div class="u-text">
                                                <h4>{{auth()->user()->name}}</h4>
                                                <p class="text-muted">{{auth()->user()->email}}</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
