
<!DOCTYPE html>
<html>

<head>
  <title>Attendance Management System</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="_token" content="gBSGcAScoQr4AzRLw6TbaMpOAihYGsrnBXfk7Hdk">
  <link rel="shortcut icon" href="https://www.kingpabel.com/attendance-management-system/favicon.png">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- material design icon -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.5.55/css/materialdesignicons.min.css">


  <!-- common css -->
  <link rel="stylesheet" href="https://www.kingpabel.com/attendance-management-system/css/theme-app.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css">
  <!-- end common css -->


  <link rel="stylesheet" href="https://www.kingpabel.com/attendance-management-system/css/style.css">

  <style>[wire\:loading] {display: none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}</style>
  <link rel="stylesheet" href="https://www.kingpabel.com/attendance-management-system/css/extended-table-style.css">
</head>

<body>

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
      <li class="nav-item active d-none d-lg-flex">
        <a href="https://www.kingpabel.com/attendance-management-system/report" class="nav-link nav-text-color">
          <i class="mdi mdi-elevation-rise nav-text-color"></i>Report</a>
      </li>
      <li class="nav-item d-none d-md-flex">
        <a href="https://www.kingpabel.com/attendance-management-system/leave" class="nav-link nav-text-color">
          <i class="mdi mdi-clipboard-alert-outline nav-text-color"></i>Leave</a>
      </li>

      <li wire:initial-data="{&quot;id&quot;:&quot;LBH1V6adiYLup9r0kUID&quot;,&quot;name&quot;:&quot;punch-counter&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;sync&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;counter&quot;:null,&quot;readyToLoad&quot;:false},&quot;children&quot;:[],&quot;checksum&quot;:&quot;c4996f014906d78bcfa59c8c5a2b0591c6947b83a66cd59de24e2b26026769e6&quot;}" wire:id="LBH1V6adiYLup9r0kUID" class="nav-item d-none d-md-flex">
    </li>
    </ul>

    <ul class="navbar-nav navbar-nav-right">

      <li wire:initial-data="{&quot;id&quot;:&quot;ObFZ6Z7EiUVqjjEyDyBX&quot;,&quot;name&quot;:&quot;header-notification&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false},&quot;children&quot;:[],&quot;checksum&quot;:&quot;9b448a85e0fd5d09d0ff8f8bfa986d86cce7cd66876b05cb8487e7195c619c5d&quot;}" wire:id="ObFZ6Z7EiUVqjjEyDyBX" class="nav-item dropdown" id="nav-c-noti" wire:init="$set('readyToLoad', 'true')">


    <div class="spinner-border spinner-border-sm nav-text-color" wire:loading role="status">
        <span class="sr-only"></span>
    </div>


    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown"
        wire:loading.remove>
        <i class="mdi mdi-bell-outline nav-text-color"></i>
            </a>

    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
        aria-labelledby="notificationDropdown" wire:loading.remove>

        <h6 class="p-3 mb-0 nowrap">
            No New Notification Found
        </h6>

            </div>
</li>

       <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">

    <a class="nav-link d-flex align-items-center dropdown-toggle nav-text-color" id="LanguageDropdown" href="#"
        data-toggle="dropdown" aria-expanded="false">
        <div class="d-inline-flex mr-3">
            <i class="flag-icon flag-icon-us nav-text-color"></i>
        </div>
        <span
            class="profile-text font-weight-normal nav-text-color">English</span>
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
    <a class="nav-link dropdown-toggle nav-text-color" id="UserDropdown" href="#" data-toggle="dropdown"
        aria-expanded="false">
        <span class="profile-text d-none d-md-inline-flex"> user !</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown auth-user-dropdown" aria-labelledby="UserDropdown">
        <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/update-info">
            <i class="mdi-18px mdi mdi-square-edit-outline"></i> Update Info
        </a>
        <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/update-password">
            <i class="mdi-18px mdi mdi-shield-key-outline"></i> Update Password
        </a>
        <a class="dropdown-item" href="https://www.kingpabel.com/attendance-management-system/logout"
            onclick="event.preventDefault(); $('#signout-form').submit();"><i class="mdi-18px mdi mdi-logout"></i>
            Sign Out</a>
    </div>

    <form id="signout-form" action="https://www.kingpabel.com/attendance-management-system/logout" method="POST" style="display: none;">
        <input type="hidden" name="_token" value="gBSGcAScoQr4AzRLw6TbaMpOAihYGsrnBXfk7Hdk">    </form>
</li>
    </ul>

  </div>
</nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">

    <li class="nav-item nav-profile not-navigation-link">
      <div wire:initial-data="{&quot;id&quot;:&quot;fiMLVvb9W1t8zk2jmruI&quot;,&quot;name&quot;:&quot;punch-sidebar&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;sync&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;punchIn&quot;:null},&quot;children&quot;:[],&quot;checksum&quot;:&quot;c3424a612e9f8e95552f7fd36feb486052f817a94271c8992929d248830fc042&quot;}" wire:id="fiMLVvb9W1t8zk2jmruI" class="nav-link">
        <a href="#" wire:click.prevent="punch" class="btn btn-success btn-block">
        <i wire:loading wire:target="punch" class="spinner-border spinner-border-sm" role="status"
            aria-hidden="true"></i>
        <i wire:loading.remove wire:target="punch" class="mdi mdi-account-arrow-left"></i>Punch In
    </a>
    </div>    </li>
     <li class="nav-item ">
    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/dashboard">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
    </a>
</li>
     <li class="nav-item ">
    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/holiday">
                <i class="menu-icon mdi mdi-beach"></i>
                <span class="menu-title">Holiday</span>
    </a>
</li>

     <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#leave" aria-expanded=""
        aria-controls="leave">
        <i class="menu-icon mdi mdi-fingerprint-off"></i>
        <span class="menu-title">Leave</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse " id="leave">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item ">
    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/leave/apply">
                <span class="menu-title">Apply</span>
    </a>
</li>
       <li class="nav-item ">
    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/leave">
                <span class="menu-title">All</span>
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
     <li class="nav-item active">
    <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/report">
                <i class="menu-icon mdi mdi-format-list-bulleted-square"></i>
                <span class="menu-title">Report</span>
    </a>
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
                    <div class="bcca-breadcrumb-item">Individual</div>
<div class="bcca-breadcrumb-item">Report</div>
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

          <div wire:initial-data="{&quot;id&quot;:&quot;3nV8zUVqGLOTQaMwZXHT&quot;,&quot;name&quot;:&quot;report-table&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;getUser&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false,&quot;dateRange&quot;:&quot;December 14, 2025 to January 13, 2026&quot;,&quot;pagination&quot;:10,&quot;user&quot;:&quot;6fbaaaff-d29d-4f16-8d76-e6e3a7b76802&quot;,&quot;page&quot;:1},&quot;children&quot;:[],&quot;checksum&quot;:&quot;b337dcfc047cf0570ae966371d4dec4a7619d2bb8c8abbcd0537e62eecc930b5&quot;}" wire:id="3nV8zUVqGLOTQaMwZXHT" class="row">


        <div class="col-lg-12 grid-margin" wire:init="$set('readyToLoad', 'true')">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <div class="fluid-container">
                    <div class="row font-85-p">
                        <div class="col-sm-12 col-lg-3">
                            <label>
                                Show
                                <select aria-controls="example"
                                    class="custom-select custom-select-sm form-control form-control-sm width-auto"
                                    wire:model="pagination">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                entries
                            </label>
                        </div>

                        <div class="col-sm-12 col-lg-6 text-right mt-1">
                            <a href="https://www.kingpabel.com/attendance-management-system/report/download?user=6fbaaaff-d29d-4f16-8d76-e6e3a7b76802&amp;dateRange=December%2014%2C%202025%20to%20January%2013%2C%202026&amp;format=xlsx"
                                target="_blank" class="btn btn-secondary">Excel</a>
                            <a href="https://www.kingpabel.com/attendance-management-system/report/download?user=6fbaaaff-d29d-4f16-8d76-e6e3a7b76802&amp;dateRange=December%2014%2C%202025%20to%20January%2013%2C%202026&amp;format=csv"
                                target="_blank" class="btn btn-secondary">CSV</a>
                            <a href="https://www.kingpabel.com/attendance-management-system/report/download?user=6fbaaaff-d29d-4f16-8d76-e6e3a7b76802&amp;dateRange=December%2014%2C%202025%20to%20January%2013%2C%202026&amp;format=pdf"
                                target="_blank" class="btn btn-secondary">PDF</a>
                        </div>

                        <div class="col-sm-12 col-lg-3 text-right">
                            <input type="text" class="form-control livewire-table-input-search"
                                placeholder="Search by Date Range..." value="December 14, 2025 to January 13, 2026">
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-lg-12 table-responsive" wire:loading>

    <table class="table table-bordered with-drop-button">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>In Time</th>
                <th>Out Time</th>
                <th>Worked</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody class="loading-transition-background">
                        <tr>
                <td><span class="loading-transition">297</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">959</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">17</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">748</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">71</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">137</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">206</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">983</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">205</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                        <tr>
                <td><span class="loading-transition">912</span></td>
                <td><span class="loading-transition">____________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">____________________</span></td>
                <td><span class="loading-transition">________</span></td>
                <td><span class="loading-transition">_____</span></td>
            </tr>
                    </tbody>
    </table>
</div>                        <div class="col-lg-12 table-responsive">
                            <table class="table table-bordered with-drop-button" wire:loading.remove>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>In Time</th>
                                        <th>Out Time</th>
                                        <th>Worked</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            1
                                        </td>
                                        <td>
                                                                                        13, Jan 2026
                                                                                    </td>
                                        <td>
                                            2026-01-13 09:56:51 AM
                                                                                    </td>
                                        <td>
                                            2026-01-13 09:56:55 AM
                                                                                    </td>
                                        <td>00:00:04</td>
                                        <td>
                                            Late                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            2
                                        </td>
                                        <td>
                                                                                        12, Jan 2026
                                                                                    </td>
                                        <td>
                                            2026-01-12 19:39:28 PM
                                                                                    </td>
                                        <td>
                                            2026-01-13 05:04:04 AM
                                                                                    </td>
                                        <td>09:24:36</td>
                                        <td>
                                            Late                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            3
                                        </td>
                                        <td>
                                                                                    </td>
                                        <td>
                                            2026-01-12 19:07:57 PM
                                                                                    </td>
                                        <td>
                                            2026-01-12 19:39:26 PM
                                                                                    </td>
                                        <td>00:31:29</td>
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            4
                                        </td>
                                        <td>
                                                                                    </td>
                                        <td>
                                            2026-01-12 18:20:02 PM
                                                                                    </td>
                                        <td>
                                            2026-01-12 19:07:51 PM
                                                                                    </td>
                                        <td>00:47:49</td>
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            5
                                        </td>
                                        <td>
                                                                                    </td>
                                        <td>
                                            2026-01-12 13:41:25 PM
                                                                                    </td>
                                        <td>
                                            2026-01-12 13:41:30 PM
                                                                                    </td>
                                        <td>00:00:05</td>
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            6
                                        </td>
                                        <td>
                                                                                        11, Jan 2026
                                                                                    </td>
                                        <td>
                                            2026-01-11 00:26:55 AM
                                                                                    </td>
                                        <td>
                                            2026-01-12 13:41:21 PM
                                                                                    </td>
                                        <td>13:14:26</td>
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            7
                                        </td>
                                        <td>
                                                                                        10, Jan 2026
                                                                                    </td>
                                        <td>
                                            2026-01-10 14:44:36 PM
                                                                                    </td>
                                        <td>
                                            2026-01-10 14:44:38 PM
                                                                                    </td>
                                        <td>00:00:02</td>
                                        <td>
                                            Late                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            8
                                        </td>
                                        <td>
                                                                                        07, Jan 2026
                                                                                    </td>
                                        <td>
                                            2026-01-07 17:38:07 PM
                                                                                    </td>
                                        <td>
                                            2026-01-08 16:00:00 PM
                                                                                    </td>
                                        <td>22:21:53</td>
                                        <td>
                                            Late                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            9
                                        </td>
                                        <td>
                                                                                    </td>
                                        <td>
                                            2026-01-07 10:47:43 AM
                                                                                    </td>
                                        <td>
                                            2026-01-07 16:00:00 PM
                                                                                    </td>
                                        <td>05:12:17</td>
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                        <tr>
                                        <td class="font-weight-medium">
                                            10
                                        </td>
                                        <td>
                                                                                    </td>
                                        <td>
                                            2026-01-07 06:31:21 AM
                                                                                    </td>
                                        <td>
                                            2026-01-07 06:31:29 AM
                                                                                    </td>
                                        <td>00:00:08</td>
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                    </tbody>
                            </table>

                        </div>

                    </div>

                                        <div class="row font-85-p">
                        <div class="col-sm-12 col-md-5">
                            <div class="liverwire-pagination-info" role="status" aria-live="polite">
                                Showing 1 to
                                10
                                of
                                53 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="livewire-pagination-number">
                                <ul class="pagination" role="navigation">

                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                <span class="page-link" aria-hidden="true">
                    <span class="d-none d-md-block">&lsaquo;</span>
                    <span class="d-block d-md-none">&laquo; Previous</span>
                </span>
            </li>





                                                                        <li class="page-item active d-none d-md-block" aria-current="page"><span class="page-link">1</span></li>
                                                                                <li class="page-item d-none d-md-block"><button type="button" class="page-link" wire:click="gotoPage(2)">2</button></li>
                                                                                <li class="page-item d-none d-md-block"><button type="button" class="page-link" wire:click="gotoPage(3)">3</button></li>
                                                                                <li class="page-item d-none d-md-block"><button type="button" class="page-link" wire:click="gotoPage(4)">4</button></li>
                                                                                <li class="page-item d-none d-md-block"><button type="button" class="page-link" wire:click="gotoPage(5)">5</button></li>
                                                                                <li class="page-item d-none d-md-block"><button type="button" class="page-link" wire:click="gotoPage(6)">6</button></li>


                    <li class="page-item">
                <button type="button" class="page-link" wire:click="nextPage" rel="next" aria-label="Next &raquo;">
                    <span class="d-block d-md-none">Next &raquo;</span>
                    <span class="d-none d-md-block">&rsaquo;</span>
                </button>
            </li>
            </ul>

                            </div>
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
  <!-- end base js -->

  <!-- plugin js -->
    <!-- end plugin js -->

  <!-- common js -->
  <script src="https://www.kingpabel.com/attendance-management-system/assets/js/off-canvas.js"></script>
  <script src="https://www.kingpabel.com/attendance-management-system/assets/js/hoverable-collapse.js"></script>
  <script src="https://www.kingpabel.com/attendance-management-system/assets/js/misc.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.4.1/dist/alpine.min.js" defer></script>  <script src="https://www.kingpabel.com/attendance-management-system/livewire/livewire.js?id=d7d975b5d122717a1ee0" data-turbolinks-eval="false"></script><script data-turbolinks-eval="false">if (window.livewire) {console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')}window.livewire = new Livewire();window.livewire_app_url = 'https://www.kingpabel.com/attendance-management-system';window.livewire_token = 'gBSGcAScoQr4AzRLw6TbaMpOAihYGsrnBXfk7Hdk';/* Make Alpine wait until Livewire is finished rendering to do its thing. */window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};document.addEventListener("DOMContentLoaded", function () {window.livewire.start();});var firstTime = true;document.addEventListener("turbolinks:load", function() {/* We only want this handler to run AFTER the first load. */if(firstTime) {firstTime = false;return;}window.livewire.restart();});document.addEventListener("turbolinks:before-cache", function() {document.querySelectorAll('[wire\\:id]').forEach(function(el) {const component = el.__livewire;const dataObject = {data: component.data,events: component.events,children: component.children,checksum: component.checksum,locale: component.locale,name: component.name,errorBag: component.errorBag,redirectTo: component.redirectTo,};el.setAttribute('wire:initial-data', JSON.stringify(dataObject));});});</script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>  <script>
    window.livewire.on('toastrNoti', param => {
        toastr[param['type']](param['message'], '', {progressBar : true});
    });
</script>  <!-- end common js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/themes/material_blue.css"
    integrity="sha512-p4SZ7//0ozl0jClVxqCB6mmKBhc19T/4qtllgO0SDCFMSparygHBQLBl25+18UbRpuA9gkCca0/1ifiLGSekOg=="
    crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js"
    integrity="sha512-/0FOmq5fA1cCPM7zk0sx/43nQD5dhBFtS3SqDE2ZAMsxVG2mg3lKNObZL7t5IUP3m1mGJSwkrhFNdjJwKKOo5Q=="
    crossorigin="anonymous"></script><script type="text/javascript">
    $('body').on('focus',".livewire-table-input-search", function(){
        flatpickr(".livewire-table-input-search:not(.flatpickr-input)", {
            mode:'range',
            dateFormat: "F j, Y",
            onClose: function(selectedDates, dateStr, instance){
                if('December 14, 2025 to January 13, 2026' != dateStr){
                    if (dateStr.includes('to')) {
                        window.livewire.find('3nV8zUVqGLOTQaMwZXHT').set('dateRange', dateStr)
                    } else{
                        instance.setDate('December 14, 2025 to January 13, 2026'.split(' to '));
                        window.livewire.find('3nV8zUVqGLOTQaMwZXHT').set('dateRange', 'December 14, 2025 to January 13, 2026');
                    }
                }
            }
        })
    });
</script>
</body>

</html>
