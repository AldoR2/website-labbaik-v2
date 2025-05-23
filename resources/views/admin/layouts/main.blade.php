<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>UKM LABBAIK</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/logo_labbaik.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="brand-logo navbar-brand" href="">
                    <h2 class="fw-bold" style="color: black; font-weight: bold; font-family: Pacifico">Labbaik</h2>
                    {{-- <img
                        src="{{ URL::asset('assets/images/logo_labbaik.png') }}" alt="logo"
                        style="object-fit: cover" /> --}}
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">
                    <img src="{{ asset('assets/images/Logo_labbaik.png') }}" alt="" width="100px"
                        class="py-2" />

                    {{-- <img
                        src="{{ URL::asset('assets/images/logo-mini.svg') }}" alt="logo" /> --}}
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                {{-- <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0"
                                placeholder="Search projects">
                        </div>
                    </form>
                </div> --}}
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{ URL::asset('assets/images/logo_labbaik.png') }}" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            {{-- <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cached me-2 text-success"></i> Profile </a>
                            <div class="dropdown-divider"></div> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     Swal.fire({
                                    title: '<span>Do you want to logout ?</span>',
                                    icon: 'question',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Yes',
                                    cancelButtonText: 'Cancel',
                                    width:'400px'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('logout-form').submit();
                                    }
                                });">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="count-symbol bg-warning"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('style/assets/images/faces/face4.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message
                                    </h6>
                                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('style/assets/images/faces/face2.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a
                                        message</h6>
                                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('style/assets/images/faces/face3.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture
                                        updated</h6>
                                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                        </div>
                    </li> --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                    </li> --}}
                    {{-- <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-format-line-spacing"></i>
                        </a>
                    </li> --}}
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('admin.partials.sidebar')
            <!-- partial -->
            <div class="main-panel content-wrapper">
                <div class="card mt-3">
                    @yield('content')
                </div>
                {{-- <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Overview <i
                                        class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{ asset('style/assets/images/dashboard/circle.svg') }}"
                                        class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Weekly Sales <i
                                            class="mdi mdi-chart-line mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">$ 15,0000</h2>
                                    <h6 class="card-text">Increased by 60%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{ asset('style/assets/images/dashboard/circle.svg') }}"
                                        class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Weekly Orders <i
                                            class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">45,6334</h2>
                                    <h6 class="card-text">Decreased by 10%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{ asset('style/assets/images/dashboard/circle.svg') }}"
                                        class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Visitors Online <i
                                            class="mdi mdi-diamond mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">95,5741</h2>
                                    <h6 class="card-text">Increased by 5%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                                        <div id="visit-sale-chart-legend"
                                            class="rounded-legend legend-horizontal legend-top-right float-right">
                                        </div>
                                    </div>
                                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Traffic Sources</h4>
                                    <canvas id="traffic-chart"></canvas>
                                    <div id="traffic-chart-legend"
                                        class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Tickets</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Assignee </th>
                                                    <th> Subject </th>
                                                    <th> Status </th>
                                                    <th> Last Update </th>
                                                    <th> Tracking ID </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/faces/face1.jpg" class="me-2"
                                                            alt="image"> David Grey
                                                    </td>
                                                    <td> Fund is not recieved </td>
                                                    <td>
                                                        <label class="badge badge-gradient-success">DONE</label>
                                                    </td>
                                                    <td> Dec 5, 2017 </td>
                                                    <td> WD-12345 </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/faces/face2.jpg" class="me-2"
                                                            alt="image"> Stella Johnson
                                                    </td>
                                                    <td> High loading time </td>
                                                    <td>
                                                        <label class="badge badge-gradient-warning">PROGRESS</label>
                                                    </td>
                                                    <td> Dec 12, 2017 </td>
                                                    <td> WD-12346 </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/faces/face3.jpg" class="me-2"
                                                            alt="image"> Marina Michel
                                                    </td>
                                                    <td> Website down for one week </td>
                                                    <td>
                                                        <label class="badge badge-gradient-info">ON HOLD</label>
                                                    </td>
                                                    <td> Dec 16, 2017 </td>
                                                    <td> WD-12347 </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/faces/face4.jpg" class="me-2"
                                                            alt="image"> John Doe
                                                    </td>
                                                    <td> Loosing control on server </td>
                                                    <td>
                                                        <label class="badge badge-gradient-danger">REJECTED</label>
                                                    </td>
                                                    <td> Dec 3, 2017 </td>
                                                    <td> WD-12348 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Updates</h4>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                            <i class="mdi mdi-account-outline icon-sm me-2"></i>
                                            <span>jack Menqu</span>
                                        </div>
                                        <div class="d-flex align-items-center text-muted font-weight-light">
                                            <i class="mdi mdi-clock icon-sm me-2"></i>
                                            <span>October 3rd, 2018</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 pe-1">
                                            <img src="assets/images/dashboard/img_1.jpg"
                                                class="mb-2 mw-100 w-100 rounded" alt="image">
                                            <img src="assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded"
                                                alt="image">
                                        </div>
                                        <div class="col-6 ps-1">
                                            <img src="assets/images/dashboard/img_2.jpg"
                                                class="mb-2 mw-100 w-100 rounded" alt="image">
                                            <img src="assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="d-flex mt-5 align-items-top">
                                        <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3"
                                            alt="image">
                                        <div class="mb-0 flex-grow">
                                            <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                                            <p class="mb-0 font-weight-light">It is a long established fact that a
                                                reader will be distracted by the readable content of a page.</p>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="mdi mdi-heart-outline text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Project Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Due Date </th>
                                                    <th> Progress </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Herman Beck </td>
                                                    <td> May 15, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success"
                                                                role="progressbar" style="width: 25%"
                                                                aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Messsy Adam </td>
                                                    <td> Jul 01, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger"
                                                                role="progressbar" style="width: 75%"
                                                                aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 3 </td>
                                                    <td> John Richards </td>
                                                    <td> Apr 12, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-warning"
                                                                role="progressbar" style="width: 90%"
                                                                aria-valuenow="90" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 4 </td>
                                                    <td> Peter Meggik </td>
                                                    <td> May 15, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-primary"
                                                                role="progressbar" style="width: 50%"
                                                                aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Edward </td>
                                                    <td> May 03, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger"
                                                                role="progressbar" style="width: 35%"
                                                                aria-valuenow="35" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Ronald </td>
                                                    <td> Jun 05, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info"
                                                                role="progressbar" style="width: 65%"
                                                                aria-valuenow="65" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-white">Todo</h4>
                                    <div class="add-items d-flex">
                                        <input type="text" class="form-control todo-list-input"
                                            placeholder="What do you need to do today?">
                                        <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                            id="add-task">Add</button>
                                    </div>
                                    <div class="list-wrapper">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Meeting with Alisa
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Call John
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Create invoice
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Print Statements
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Prepare for
                                                        presentation </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Pick up kids from
                                                        school </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('admin.partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    @stack('script');
    <!-- End custom js for this page -->
</body>

</html>
