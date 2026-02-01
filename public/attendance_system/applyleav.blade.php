
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

      <li wire:initial-data="{&quot;id&quot;:&quot;zm6pyt9ipDF6axxVXcWo&quot;,&quot;name&quot;:&quot;punch-counter&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;sync&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;counter&quot;:null,&quot;readyToLoad&quot;:false},&quot;children&quot;:[],&quot;checksum&quot;:&quot;91a2cfc59d02565a9089854f0944d3e0ce83f60067c9c510785c2372bca02df2&quot;}" wire:id="zm6pyt9ipDF6axxVXcWo" class="nav-item d-none d-md-flex">
    </li>
    </ul>

    <ul class="navbar-nav navbar-nav-right">

      <li wire:initial-data="{&quot;id&quot;:&quot;lBLrC8Jn6uM5Cb1DFiEM&quot;,&quot;name&quot;:&quot;header-notification&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false},&quot;children&quot;:[],&quot;checksum&quot;:&quot;46c2daa084b3952b4de0a3f45450fa3d0fb486f2ba6fba15c6fcba29f6997f9a&quot;}" wire:id="lBLrC8Jn6uM5Cb1DFiEM" class="nav-item dropdown" id="nav-c-noti" wire:init="$set('readyToLoad', 'true')">


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
      <div wire:initial-data="{&quot;id&quot;:&quot;rcySUOMdushEq4u01qGu&quot;,&quot;name&quot;:&quot;punch-sidebar&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;sync&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;punchIn&quot;:null},&quot;children&quot;:[],&quot;checksum&quot;:&quot;e920f02c145e0562a78379512b32e5509c0d3022f2c5267240c41a75d9f28f4c&quot;}" wire:id="rcySUOMdushEq4u01qGu" class="nav-link">
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

     <li class="nav-item active">
    <a class="nav-link" data-toggle="collapse" href="#leave" aria-expanded="true"
        aria-controls="leave">
        <i class="menu-icon mdi mdi-fingerprint-off"></i>
        <span class="menu-title">Leave</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse show" id="leave">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item active">
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
     <li class="nav-item ">
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

              <div wire:initial-data="{&quot;id&quot;:&quot;cuBZR8n4SxFazbsKjfoE&quot;,&quot;name&quot;:&quot;leave-apply&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;date&quot;:null,&quot;leave_category_id&quot;:null,&quot;description&quot;:null},&quot;children&quot;:[],&quot;checksum&quot;:&quot;dd6cae5b9e6cdab46088a349a92b1ea2d4878553a4fe28cde7c1129478f43ae6&quot;}" wire:id="cuBZR8n4SxFazbsKjfoE" class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="apply" class="forms-sample">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right" for="dateInput">
                            Leave Date
                        </label>
                        <div class="col-sm-5">
                            <input wire:model.lazy="date"
                                class="form-control datepicker " id="dateInput"
                                placeholder="Leave Date..." type="text" required>
                                                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right" for="categoryInput">
                            Leave Category
                        </label>
                        <div class="col-sm-5">

                            <select wire:model.lazy="leave_category_id" id="categoryInput"
                                class="form-control " required>
                                <option value="">--- Please Select a Category ---</option>
                                                                <option value="b2b56140-8945-4c3f-aaaa-08665ecf144d">
                                    skdvbcdskjlvb z
                                </option>
                                                                <option value="91cf6c9c-d94e-46d4-8583-a3475172d3ea">
                                    fdsffd
                                </option>
                                                                <option value="a5937802-ef37-4747-85f4-76778dd6e5a7">
                                    ammar
                                </option>
                                                                <option value="49fa8173-a213-493a-8221-58efe475bb8d">
                                    xjzvcscklv z
                                </option>
                                                                <option value="c5c6e173-9de4-497a-a980-06e716d82127">
                                    vacation
                                </option>
                                                                <option value="23d39306-a33c-4999-bfc5-9ec9f3c1e339">
                                    casual leave
                                </option>
                                                            </select>


                                                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right" for="descriptionInput">
                            Leave Description
                        </label>
                        <div class="col-sm-5">
                            <textarea wire:model.lazy="description" id="descriptionInput" class="form-control " cols=" 30" rows="10" placeholder="Leave Description"></textarea>
                                                    </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-3">
                            <button class="btn btn-success ml-2 btn-fw" type="submit">
                                <i wire:loading wire:target="apply" class="spinner-border spinner-border-sm"
                                    role="status" aria-hidden="true"></i>
                                <i wire:loading.remove wire:target="apply"
                                    class="mdi mdi-plus-box-outline"></i>Apply
                            </button>
                        </div>
                    </div>

                </form>
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/themes/material_blue.css"
    integrity="sha512-p4SZ7//0ozl0jClVxqCB6mmKBhc19T/4qtllgO0SDCFMSparygHBQLBl25+18UbRpuA9gkCca0/1ifiLGSekOg=="
    crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js"
    integrity="sha512-/0FOmq5fA1cCPM7zk0sx/43nQD5dhBFtS3SqDE2ZAMsxVG2mg3lKNObZL7t5IUP3m1mGJSwkrhFNdjJwKKOo5Q=="
    crossorigin="anonymous"></script><script>
    flatpickr('.datepicker', {
            mode: "multiple",
            dateFormat: "Y-m-d"
    });
</script>
</body>

</html>
