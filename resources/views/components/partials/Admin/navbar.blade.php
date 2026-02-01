    {{-- <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
        <ul class="nav">

            <li class="nav-item nav-profile not-navigation-link">
                <div class="nav-link">
                    <a href="https://www.kingpabel.com/attendance-management-system/user?add_user=1" class="btn btn-success btn-block">Add New User <i class="mdi mdi-plus"></i>
                    </a>
                </div>
            </li>

            <li class="nav-item active">
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

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#leave" aria-expanded="" aria-controls="leave">
                    <i class="menu-icon mdi mdi-fingerprint-off"></i>
                    <span class="menu-title">Leave</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse " id="leave">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item ">
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
    </nav> --}}




    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="https://www.kingpabel.com/attendance-management-system/dashboard">
                <img src="{{ asset('attendance_system/assets/logo.png') }}" alt="logo" />
            </a>

            <a class="navbar-brand brand-logo-mini" href="https://www.kingpabel.com/attendance-management-system/dashboard">
                <img src="{{ asset('attendance_system/assets/logo.png') }}" alt="logo" />
            </a>
        </div>

        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end nav-bg-color">


            <button class="navbar-toggler navbar-toggler align-self-center nav-text-color" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>


            <ul class="navbar-nav navbar-nav-left header-links">
                <li class="nav-item d-none d-xl-flex">
                    <a href="{{ route('users.index') }}" class="nav-link nav-text-color">
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


                <li wire:initial-data="{&quot;id&quot;:&quot;QDFTJtZtAHdxYm2gb3jY&quot;,&quot;name&quot;:&quot;header-notification&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false},&quot;children&quot;:[],&quot;checksum&quot;:&quot;d48f50aab4a5b8fe38dffee748e4b31d1e86d12c2f5b9ace964af15e9c62f4cb&quot;}" wire:id="QDFTJtZtAHdxYm2gb3jY" class="nav-item dropdown" id="nav-c-noti" wire:init="$set('readyToLoad', 'true')">


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
                        <span class="profile-text d-none d-md-inline-flex">
                            {{ Auth::user()->name }} !
                            @if (Auth::user()->hasRole('admin'))
                            (Admin)
                            @elseif(Auth::user()->hasRole('super-admin'))
                            (Super Admin)
                            @endif
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown auth-user-dropdown" aria-labelledby="UserDropdown">

                        <!-- Update Info -->
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="mdi-18px mdi mdi-square-edit-outline"></i> Update Info
                        </a>

                        <!-- Update Password -->
                        <a class="dropdown-item" href="{{ route('profile.update') }}">
                            <i class="mdi-18px mdi mdi-shield-key-outline"></i> Update Password
                        </a>

                        <!-- Dashboard Link (only for admin/super-admin) -->
                        @if (Auth::user()->hasAnyRole(['admin', 'super-admin']))
                        <a class="dropdown-item" href="{{ route('dashboard') }}">
                            <i class="mdi-18px mdi mdi-view-dashboard"></i> Dashboard
                        </a>
                        @endif

                        <!-- Sign Out -->
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('signout-form').submit();">
                            <i class="mdi-18px mdi mdi-logout"></i> Sign Out
                        </a>

                    </div>

                    <form id="signout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>


            </ul>

        </div>
    </nav>
