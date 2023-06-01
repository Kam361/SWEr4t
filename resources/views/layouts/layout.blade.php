<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" {{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- fullCalendar -->
    <link rel="stylesheet" href=" {{ asset('plugins/fullcalendar/main.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href=" {{ asset('css/adminlte.min.css') }} ">
</head>

<body class="hold-transition sidebar-mini">
    <div class="container-fluid">

        <div class="col">
            <!-- Navbar -->
            <div class="wrapper">
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link clicked" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('index') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                {{--
                            </div> --}}
                        </li>
                    </ul>

                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Navbar Search -->
                        <li class="nav-item">
                            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                                <i class="fas fa-search"></i>
                            </a>
                            <div class="navbar-search-block">
                                <form class="form-inline">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control form-control-navbar" type="search"
                                            placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-navbar" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Messages Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-comments"></i>
                                <span class="badge badge-danger navbar-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src=" {{ asset('/img/user1-128x128.jpg') }}" alt="User Avatar"
                                            class="img-size-50 mr-3 img-circle">
                                        <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                                Brad Diesel
                                                <span class="float-right text-sm text-danger"><i
                                                        class="fas fa-star"></i></span>
                                            </h3>
                                            <p class="text-sm">Call me whenever you can...</p>
                                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Message End -->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src=" {{ asset('/img/user8-128x128.jpg') }} " alt="User Avatar"
                                            class="img-size-50 img-circle mr-3">
                                        <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                                John Pierce
                                                <span class="float-right text-sm text-muted"><i
                                                        class="fas fa-star"></i></span>
                                            </h3>
                                            <p class="text-sm">I got your message bro</p>
                                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Message End -->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src=" {{ asset('/img/user3-128x128.jpg') }} " alt="User Avatar"
                                            class="img-size-50 img-circle mr-3">
                                        <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                                Nora Silvester
                                                <span class="float-right text-sm text-warning"><i
                                                        class="fas fa-star"></i></span>
                                            </h3>
                                            <p class="text-sm">The subject goes here</p>
                                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Message End -->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                            </div>
                        </li>
                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-bell"></i>
                                <span class="badge badge-warning navbar-badge">15</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <span class="dropdown-item dropdown-header">15 Notifications</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                                    <span class="float-right text-muted text-sm">3 mins</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-users mr-2"></i> 8 friend requests
                                    <span class="float-right text-muted text-sm">12 hours</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> 3 new reports
                                    <span class="float-right text-muted text-sm">2 days</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                                <i class="fas fa-expand-arrows-alt"></i>
                            </a>
                        </li>
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href=" {{ route('index') }}" class="brand-link">
                        <img src=" {{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                            class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">AdminLTE 3</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src=" {{ asset('img/user2-160x160.jpg') }} " class="img-circle elevation-2"
                                    alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block">Alexander Pierce</a>
                            </div>
                        </div>

                        <!-- SidebarSearch Form -->
                        <div class="form-inline">
                            <div class="input-group" data-widget="sidebar-search">
                                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-sidebar">
                                        <i class="fas fa-search fa-fw"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                                <li class="nav-item menu-open">
                                    <a href="{{ route('index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Dashboard
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('index1') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard v1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('index2') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard v2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('index3') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Dashboard v3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href=" {{ asset('widgets') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Widgets
                                            <span class="right badge badge-danger">New</span>
                                        </p>
                                    </a>
                                </li> --}}
                                <li class="nav-item menu-open">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-copy"></i>
                                        <p>
                                            Users
                                            <i class="fas fa-angle-left right"></i>
                                            {{-- <span class="badge badge-info right">6</span> --}}
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('dashboard.users') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Show All users</p>
                                            </a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href=" {{ asset('layout/top-nav-sidebar') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Top Navigation + Sidebar</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('layout/boxed') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Boxed</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('layout/fixed-sidebar') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Fixed Sidebar</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('layout/fixed-sidebar-custom') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('layout/fixed-topnav') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Fixed Navbar</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('layout/fixed-footer') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Fixed Footer</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('layout/collapsed-sidebar') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Collapsed Sidebar</p>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </li>
                                {{--
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-chart-pie"></i>
                                        <p>
                                            Charts
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href=" {{ asset('charts/chartjs') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>ChartJS</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('charts/flot') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Flot</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('charts/inline') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Inline</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('charts/uplot') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>uPlot</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-tree"></i>
                                        <p>
                                            UI Elements
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href=" {{ asset('UI/general') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>General</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('UI/icons') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Icons</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('UI/buttons') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Buttons</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('UI/sliders') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Sliders</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('UI/modals') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Modals & Alerts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('UI/navbar') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Navbar & Tabs</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('UI/timeline') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Timeline</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('UI/ribbons') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Ribbons</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>
                                            Forms
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href=" {{ asset('forms/general') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>General Elements</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('forms/advanced') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Advanced Elements</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('forms/editors') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Editors</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('forms/validation') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Validation</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Tables
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href=" {{ asset('tables/simple') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Simple Tables</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('tables/data') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>DataTables</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('tables/jsgrid') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>jsGrid</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-header">EXAMPLES</li>
                                <li class="nav-item">
                                    <a href=" {{ asset('calendar') }}" class="nav-link active">
                                        <i class="nav-icon far fa-calendar-alt"></i>
                                        <p>
                                            Calendar
                                            <span class="badge badge-info right">2</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href=" {{ asset('gallery') }}" class="nav-link">
                                        <i class="nav-icon far fa-image"></i>
                                        <p>
                                            Gallery
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href=" {{ asset('kanban') }}" class="nav-link">
                                        <i class="nav-icon fas fa-columns"></i>
                                        <p>
                                            Kanban Board
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-envelope"></i>
                                        <p>
                                            Mailbox
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href=" {{ asset('mailbox/mailbox') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Inbox</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('mailbox/compose') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Compose</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('mailbox/read-mail') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Read</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-book"></i>
                                        <p>
                                            Pages
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/invoice') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Invoice</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/profile') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Profile</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/e-commerce') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>E-commerce</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/projects') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Projects</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/project-add') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Project Add</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/project-edit') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Project Edit</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/project-detail') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Project Detail</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/contacts') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Contacts</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/faq') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>FAQ</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Contact us</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-plus-square"></i>
                                        <p>
                                            Extras
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Login & Register v1
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href=" {{ asset('examples/login') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Login v1</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href=" {{ asset('examples/register') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Register v1</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href=" {{ asset('examples/forgot-password') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Forgot Password v1</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href=" {{ asset('examples/recover-password') }}"
                                                        class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Recover Password v1</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Login & Register v2
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href=" {{ asset('examples/login-v2') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Login v2</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href=" {{ asset('examples/register-v2') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Register v2</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href=" {{ asset('examples/forgot-password-v2') }}"
                                                        class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Forgot Password v2</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href=" {{ asset('examples/recover-password-v2') }}"
                                                        class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Recover Password v2</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/lockscreen') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Lockscreen</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/legacy-user-menu') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Legacy User Menu</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/language-menu') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Language Menu</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/404') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Error 404</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/500') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Error 500</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/pace') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Pace</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('examples/blank') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Blank Page</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href=" {{ asset('/starter') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Starter Page</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-search"></i>
                                        <p>
                                            Search
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href=" {{ asset('search/simple') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Simple Search</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Enhanced</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-header">MISCELLANEOUS</li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon fas fa-ellipsis-h"></i>
                                        <p>Tabbed IFrame Plugin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon fas fa-file"></i>
                                        <p>Documentation</p>
                                    </a>
                                </li>
                                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-circle nav-icon"></i>
                                        <p>Level 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                            Level 1
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Level 2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Level 2
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Level 3</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Level 3</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Level 3</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Level 2</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-circle nav-icon"></i>
                                        <p>Level 1</p>
                                    </a>
                                </li>
                                <li class="nav-header">LABELS</li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <p class="text">Important</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Warning</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Informational</p>
                                    </a>
                                </li>
                                --}}
                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                </aside>
            </div>
            <section class="content">
                @yield("content")
            </section>
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a
                        href=" {{ asset('https://adminlte.io')}}">AdminLTE.io</a>.</strong>
                All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src=" {{ asset('plugins/jquery/jquery.min.js') }} "></script>
        <!-- Bootstrap -->
        <script src=" {{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
        <!-- jQuery UI -->
        <script src=" {{ asset('plugins/jquery-ui/jquery-ui.min.js') }} "></script>
        <!-- AdminLTE App -->
        <script src=" {{ asset('js/adminlte.min.js') }} "></script>
        <!-- fullCalendar 2.2.5 -->
        <script src=" {{ asset('     plugins/moment/moment.min.js') }} "></script>
        <script src=" {{ asset('plugins/fullcalendar/main.js') }} "></script>
        <!-- AdminLTE for demo purposes -->
        <script src=" {{ asset('js/demo.js') }} "></script>
        <!-- Page specific script -->
        <script>
            $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
        </script>

    </div>
</body>

</html>
