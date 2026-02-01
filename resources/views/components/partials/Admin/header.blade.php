<div>
    <div class="container-scroller" id="app">
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
                            <input type="hidden" name="_token" value="qFoWKOckLJZbK4ty7WxdBxUB3lpCpq8YSxb73W51">
                        </form>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
</div>
