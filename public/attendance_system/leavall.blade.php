<!DOCTYPE html>
<html>

<head>
    <title>Attendance Management System</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="0uWmlwaxZmQCxJv6GpXXN4VneCYbobf4dih8P5w3">
    <link rel="shortcut icon" href="https://www.kingpabel.com/attendance-management-system/favicon.png">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- material design icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.5.55/css/materialdesignicons.min.css">


    <!-- common css -->
    <link rel="stylesheet" href="https://www.kingpabel.com/attendance-management-system/css/theme-app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css">
    <!-- end common css -->


    <link rel="stylesheet" href="https://www.kingpabel.com/attendance-management-system/css/style.css">

    <style>
        [wire\:loading] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

    </style>
    <link rel="stylesheet" href="https://www.kingpabel.com/attendance-management-system/css/extended-table-style.css">
    <link rel="stylesheet" href="https://www.kingpabel.com/attendance-management-system/css/menu-resolver.css">
</head>

<body data-base-url="https://www.kingpabel.com/attendance-management-system">

    <div class="container-scroller" id="app">
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="https://www.kingpabel.com/attendance-management-system/dashboard">
                    <img src="https://www.kingpabel.com/attendance-management-system/logo.png" alt="logo" />
                </a>

                <a class="navbar-brand brand-logo-mini" href="https://www.kingpabel.com/attendance-management-system/dashboard">
                    <img src="https://www.kingpabel.com/attendance-management-system/logo.png" alt="logo" />
                </a>
            </div>

            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end nav-bg-color">


                <button class="navbar-toggler navbar-toggler align-self-center nav-text-color" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>


                <ul class="navbar-nav navbar-nav-left header-links">
                    <li class="nav-item d-none d-xl-flex">
                        <a href="https://www.kingpabel.com/attendance-management-system/user" class="nav-link nav-text-color">
                            <i class="mdi mdi-account-multiple-plus nav-text-color"></i>User
                        </a>
                    </li>
                    <li class="nav-item active d-none d-lg-flex">
                        <a href="https://www.kingpabel.com/attendance-management-system/report" class="nav-link nav-text-color">
                            <i class="mdi mdi-elevation-rise nav-text-color"></i>Report
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-nav-right">


                    <li wire:initial-data="{&quot;id&quot;:&quot;VTcqGmtisrrb4HS4tz9W&quot;,&quot;name&quot;:&quot;header-notification&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false},&quot;children&quot;:[],&quot;checksum&quot;:&quot;e2cc3ab040b147089f602fa34a18fd2dc6d79fcf61fbf99654b9b1f855f4ef5e&quot;}" wire:id="VTcqGmtisrrb4HS4tz9W" class="nav-item dropdown" id="nav-c-noti" wire:init="$set('readyToLoad', 'true')">


                        <div class="spinner-border spinner-border-sm nav-text-color" wire:loading role="status">
                            <span class="sr-only"></span>
                        </div>


                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown" wire:loading.remove>
                            <i class="mdi mdi-bell-outline nav-text-color"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown" wire:loading.remove>

                            <h6 class="p-3 mb-0 nowrap">
                                No New Notification Found
                            </h6>

                        </div>
                    </li>

                    <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">

                        <a class="nav-link d-flex align-items-center dropdown-toggle nav-text-color" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="d-inline-flex mr-3">
                                <i class="flag-icon flag-icon-us nav-text-color"></i>
                            </div>
                            <span class="profile-text font-weight-normal nav-text-color">English</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                            <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/lang/en">
                                <i class="flag-icon flag-icon-us nav-text-color"></i> English
                            </a>
                            <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/lang/hi">
                                <i class="flag-icon flag-icon-in nav-text-color"></i> हिन्दी
                            </a>
                            <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/lang/es">
                                <i class="flag-icon flag-icon-es nav-text-color"></i> Español
                            </a>
                            <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/lang/fr">
                                <i class="flag-icon flag-icon-fr nav-text-color"></i> French
                            </a>
                        </div>
                    </li>


                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle nav-text-color" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text d-none d-md-inline-flex"> Admin !</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown auth-user-dropdown" aria-labelledby="UserDropdown">
                            <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/update-info">
                                <i class="mdi-18px mdi mdi-square-edit-outline"></i> Update Info
                            </a>
                            <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/update-password">
                                <i class="mdi-18px mdi mdi-shield-key-outline"></i> Update Password
                            </a>
                            <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/logout" onclick="event.preventDefault(); $('#signout-form').submit();"><i class="mdi-18px mdi mdi-logout"></i>
                                Sign Out</a>
                        </div>

                        <form id="signout-form" action="https://www.kingpabel.com/attendance-management-system/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="0uWmlwaxZmQCxJv6GpXXN4VneCYbobf4dih8P5w3"> </form>
                    </li>

                </ul>

            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
                <ul class="nav">

                    <li class="nav-item nav-profile not-navigation-link">
                        <div class="nav-link">
                            <a href="https://www.kingpabel.com/attendance-management-system/user?add_user=1" class="btn btn-success btn-block">Add New User <i class="mdi mdi-plus"></i>
                            </a>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/dashboard">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/user">
                            <i class="menu-icon mdi mdi-account-multiple-plus"></i>
                            <span class="menu-title">User</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/designation">
                            <i class="menu-icon mdi mdi-account-tie-outline"></i>
                            <span class="menu-title">Designation</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/holiday">
                            <i class="menu-icon mdi mdi-beach"></i>
                            <span class="menu-title">Holiday</span>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="collapse" href="#leave" aria-expanded="true" aria-controls="leave">
                            <i class="menu-icon mdi mdi-fingerprint-off"></i>
                            <span class="menu-title">Leave</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse show" id="leave">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/leave">
                                        <span class="menu-title">All</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/leave/category">
                                        <span class="menu-title">Category</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/notice">
                            <i class="menu-icon mdi mdi-clipboard-text-outline"></i>
                            <span class="menu-title">Notice</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="" aria-controls="report">
                            <i class="menu-icon mdi mdi-format-list-bulleted-square"></i>
                            <span class="menu-title">Report</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse " id="report">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item ">
                                    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/report">
                                        <span class="menu-title">Individual Report</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/report/summary">
                                        <span class="menu-title">Summary Report</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body sticky-breadcrumb">
                                    <div class="bcca-breadcrumb float-left">
                                        <div class="bcca-breadcrumb-item">Leave</div>
                                        <div class="bcca-breadcrumb-item">
                                            <a href="dashboard">Dashboard</a>
                                        </div>
                                    </div>

                                    <div class="float-right breadcrumb-external-button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div wire:initial-data="{&quot;id&quot;:&quot;iSHbnJIc1CYGB4AybUqU&quot;,&quot;name&quot;:&quot;leave-list&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;destroy&quot;,&quot;refresh&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false,&quot;pagination&quot;:10,&quot;dateRange&quot;:null,&quot;page&quot;:1,&quot;filter&quot;:[]},&quot;children&quot;:[],&quot;checksum&quot;:&quot;2e4d188799b0cf0d0d56ad65976e607c77181dc6d289f2032e00a7d17e86e263&quot;}" wire:id="iSHbnJIc1CYGB4AybUqU" class="row" wire:init="$set('readyToLoad', 'true')">
                        <div class="col-lg-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <div class="fluid-container">
                                        <div class="row font-85-p" wire:ignore>
                                            <div class="col-sm-12 col-lg-3">
                                                <label>
                                                    Show
                                                    <select aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm width-auto" wire:model="pagination">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    entries
                                                </label>
                                            </div>

                                            <div class="col-sm-12 col-lg-6 text-right">
                                                <select aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm width-auto col-lg-4" x-data="{users:[]}" x-init="() => {axios.get('https://www.kingpabel.com/attendance-management-system/user/json').then(({data})=> users=data.data)}" wire:model.lazy="filter.user_id">
                                                    <option value="">--- User ---</option>
                                                    <template x-for="(user, index) in users" :key="index">
                                                        <option :value="user.id" x-text="user.name">
                                                        </option>
                                                    </template>
                                                </select>

                                                <select aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm width-auto col-lg-4" x-data="{categories:[]}" x-init="() => {axios.get('https://www.kingpabel.com/attendance-management-system/leave/category/json').then(({data})=>categories=data.data)}" wire:model.lazy="filter.leave_category_id">
                                                    <option value="">--- Category ---</option>
                                                    <template x-for="(category, index) in categories" :key="index">
                                                        <option :value="category.id" x-text="category.name">
                                                        </option>
                                                    </template>
                                                </select>

                                                <select aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm width-auto col-lg-4" x-data="{statuses:[]}" x-init="() => {axios.get('https://www.kingpabel.com/attendance-management-system/leave/status/json').then(({data})=>statuses=data.data)}" wire:model.lazy="filter.leave_status_id">
                                                    <option value="">--- Status ---</option>
                                                    <template x-for="(status, index) in statuses" :key="index">
                                                        <option :value="status.id" x-text="status.name">
                                                        </option>
                                                    </template>
                                                </select>
                                            </div>

                                            <div class="col-sm-12 col-lg-3 text-right">
                                                <input type="text" class="form-control livewire-table-input-search" placeholder="Search by Date Range..." aria-controls="example">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 table-responsive" wire:loading>

                                                <table class="table table-bordered with-drop-button">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>User</th>
                                                            <th>Category</th>
                                                            <th>Status</th>
                                                            <th>Date</th>
                                                            <th>Description</th>
                                                            <th>Options</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="loading-transition-background">
                                                        <tr>
                                                            <td><span class="loading-transition">201</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">____</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">____________________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">262</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">_____</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">______________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">106</span></td>
                                                            <td><span class="loading-transition">___________</span></td>
                                                            <td><span class="loading-transition">____</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">________________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">844</span></td>
                                                            <td><span class="loading-transition">________</span></td>
                                                            <td><span class="loading-transition">____</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">___________________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">503</span></td>
                                                            <td><span class="loading-transition">________</span></td>
                                                            <td><span class="loading-transition">_______</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">___________________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">584</span></td>
                                                            <td><span class="loading-transition">________</span></td>
                                                            <td><span class="loading-transition">____</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">___________________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">102</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">_______</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">_________________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">54</span></td>
                                                            <td><span class="loading-transition">_________</span></td>
                                                            <td><span class="loading-transition">_______</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">__________________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">92</span></td>
                                                            <td><span class="loading-transition">___________</span></td>
                                                            <td><span class="loading-transition">______</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">____________________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="loading-transition">155</span></td>
                                                            <td><span class="loading-transition">____________</span></td>
                                                            <td><span class="loading-transition">______</span></td>
                                                            <td><span class="loading-transition">__________</span></td>
                                                            <td><span class="loading-transition">__________</span> </td>
                                                            <td><span class="loading-transition">______________</span></td>
                                                            <td><span class="btn btn-sm loading-transition">_____</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 table-responsive" wire:loading.remove>

                                                <table class="table table-bordered with-drop-button">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>User</th>
                                                            <th>Category</th>
                                                            <th>Status</th>
                                                            <th>Date</th>
                                                            <th>Description</th>
                                                            <th>Options</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                            © 2026 kingpabel & made with
                            <i class="mdi mdi-heart text-danger"></i>
                        </span>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    <!-- base js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <!-- end base js -->

    <!-- plugin js -->
    <!-- end plugin js -->

    <!-- common js -->
    <script src="https://www.kingpabel.com/attendance-management-system/assets/js/off-canvas.js"></script>
    <script src="https://www.kingpabel.com/attendance-management-system/assets/js/hoverable-collapse.js"></script>
    <script src="https://www.kingpabel.com/attendance-management-system/assets/js/misc.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.4.1/dist/alpine.min.js" defer></script>
    <script src="https://www.kingpabel.com/attendance-management-system/livewire/livewire.js?id=d7d975b5d122717a1ee0" data-turbolinks-eval="false"></script>
    <script data-turbolinks-eval="false">
        if (window.livewire) {
            console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
        }
        window.livewire = new Livewire();
        window.livewire_app_url = 'https://www.kingpabel.com/attendance-management-system';
        window.livewire_token = '0uWmlwaxZmQCxJv6GpXXN4VneCYbobf4dih8P5w3'; /* Make Alpine wait until Livewire is finished rendering to do its thing. */
        window.deferLoadingAlpine = function(callback) {
            window.addEventListener('livewire:load', function() {
                callback();
            });
        };
        document.addEventListener("DOMContentLoaded", function() {
            window.livewire.start();
        });
        var firstTime = true;
        document.addEventListener("turbolinks:load", function() {
            /* We only want this handler to run AFTER the first load. */
            if (firstTime) {
                firstTime = false;
                return;
            }
            window.livewire.restart();
        });
        document.addEventListener("turbolinks:before-cache", function() {
            document.querySelectorAll('[wire\\:id]').forEach(function(el) {
                const component = el.__livewire;
                const dataObject = {
                    data: component.data
                    , events: component.events
                    , children: component.children
                    , checksum: component.checksum
                    , locale: component.locale
                    , name: component.name
                    , errorBag: component.errorBag
                    , redirectTo: component.redirectTo
                , };
                el.setAttribute('wire:initial-data', JSON.stringify(dataObject));
            });
        });

    </script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        window.livewire.on('toastrNoti', param => {
            toastr[param['type']](param['message'], '', {
                progressBar: true
            });
        });

    </script> <!-- end common js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/themes/material_blue.css" integrity="sha512-p4SZ7//0ozl0jClVxqCB6mmKBhc19T/4qtllgO0SDCFMSparygHBQLBl25+18UbRpuA9gkCca0/1ifiLGSekOg==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js" integrity="sha512-/0FOmq5fA1cCPM7zk0sx/43nQD5dhBFtS3SqDE2ZAMsxVG2mg3lKNObZL7t5IUP3m1mGJSwkrhFNdjJwKKOo5Q==" crossorigin="anonymous"></script>

    <script type="text/javascript">
        flatpickr(".livewire-table-input-search", {
            mode: 'range'
            , dateFormat: "F j, Y"
            , onClose: function(selectedDates, dateStr, instance) {
                if (window.livewire.find('iSHbnJIc1CYGB4AybUqU').get('dateRange') != dateStr) {
                    if (dateStr.includes('to')) {
                        window.livewire.find('iSHbnJIc1CYGB4AybUqU').set('dateRange', dateStr);
                    } else if (window.livewire.find('iSHbnJIc1CYGB4AybUqU').get('dateRange')) {
                        window.livewire.find('iSHbnJIc1CYGB4AybUqU').set('dateRange', '');
                    }
                }
            }
        })

    </script>
</body>

</html>
