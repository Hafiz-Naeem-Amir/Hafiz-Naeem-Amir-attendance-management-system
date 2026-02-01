
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


      <li wire:initial-data="{&quot;id&quot;:&quot;WzfEJyhdAOe6wGZJz72G&quot;,&quot;name&quot;:&quot;header-notification&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false},&quot;children&quot;:[],&quot;checksum&quot;:&quot;a97743203a55691730e31731e5b267095c9b9e98f1a2d576cf6d12e4b20b6663&quot;}" wire:id="WzfEJyhdAOe6wGZJz72G" class="nav-item dropdown" id="nav-c-noti" wire:init="$set('readyToLoad', 'true')">


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
        <span class="profile-text d-none d-md-inline-flex"> Admin !</span>
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
        <input type="hidden" name="_token" value="0uWmlwaxZmQCxJv6GpXXN4VneCYbobf4dih8P5w3">    </form>
</li>

    </ul>

  </div>
</nav>    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">

    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <a href="https://www.kingpabel.com/attendance-management-system/user?add_user=1" class="btn btn-success btn-block">Add New User <i
            class="mdi mdi-plus"></i>
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

     <li class="nav-item active">
    <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="true"
        aria-controls="report">
        <i class="menu-icon mdi mdi-format-list-bulleted-square"></i>
        <span class="menu-title">Report</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse show" id="report">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item active">
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
</nav>      <div class="main-panel">
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

          <div wire:initial-data="{&quot;id&quot;:&quot;zzg1fjcsVYRdMjxlYeHd&quot;,&quot;name&quot;:&quot;report-table&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;getUser&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false,&quot;dateRange&quot;:&quot;December 14, 2025 to January 13, 2026&quot;,&quot;pagination&quot;:10,&quot;user&quot;:null,&quot;page&quot;:1},&quot;children&quot;:{&quot;6jVg9bU&quot;:{&quot;id&quot;:&quot;SSjDKOkC4JlhLrYnnrC3&quot;,&quot;tag&quot;:&quot;div&quot;}},&quot;checksum&quot;:&quot;e55c4fbe0accfeb58824fb2ccad0b913cb59e46d6639953f020394f6f8811c55&quot;}" wire:id="zzg1fjcsVYRdMjxlYeHd" class="row">

        <div wire:initial-data="{&quot;id&quot;:&quot;SSjDKOkC4JlhLrYnnrC3&quot;,&quot;name&quot;:&quot;user-select&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;user&quot;:null},&quot;children&quot;:[],&quot;checksum&quot;:&quot;7cd995882bb8a334f120f65004c422363e87031aacac31331ef57cf5816cb00d&quot;}" wire:id="SSjDKOkC4JlhLrYnnrC3" class="col-lg-12 grid-margin">
    <div class="card">
        <div class="card-body" style="padding: 1rem 1.81rem;">

            <form wire:submit.prevent="showReport">
                <div class="form-row align-items-center content-center">

                    <div class="col-sm-3 my-1 form-group">
                        <select wire:model.lazy="user" class="form-control" required>
                            <option value="">--- Please Select User ---</option>
                                                        <option value="ed683609-51e1-4e6d-a8aa-f125625d24b2">ftghy
                            </option>
                                                        <option value="6fbaaaff-d29d-4f16-8d76-e6e3a7b76802">user
                            </option>
                                                        <option value="24edc124-b21f-422d-ab55-9c55e81290f4">រស់​ ឈុនលី
                            </option>
                                                        <option value="8c2a073c-4b16-4636-aa79-c0307de9677b">duvan navarrete
                            </option>
                                                        <option value="46c97a55-22ac-49f6-ade1-6ec4481fd19e">Thiha
                            </option>
                                                        <option value="3cb5907f-2ae2-4a8b-990a-6b2649d8cd10">Sultan Ghazi
                            </option>
                                                        <option value="8f65a50e-9a77-464a-8e70-7708e418bf41">Alex Armijo
                            </option>
                                                        <option value="8b951150-0bd2-47e9-92ab-10f74ec4e944">Hasan
                            </option>
                                                        <option value="0883ec4f-fa6c-4afd-8cdd-69819b481679">Mustafa
                            </option>
                                                        <option value="45bc787c-cfe4-4565-b946-e35c05e3c194">saqib
                            </option>
                                                        <option value="54866067-61a0-4708-80a7-cbc7e0dba87f">kjssgxaus
                            </option>
                                                        <option value="2d6c3299-24af-4e9c-846f-bb8e59c17b6b">vineet
                            </option>
                                                        <option value="eb8776c2-8877-403c-8b10-5794bfccc3f0">TeacheR1
                            </option>
                                                        <option value="90383cc5-02ae-4c18-a525-775c59f476aa">Allan Deer
                            </option>
                                                        <option value="183a6469-6db4-4d96-9eff-0bd0491f573c">Programm3r
                            </option>
                                                        <option value="2fc46c37-45c6-45c5-bac0-c4acde5953e9">sachin
                            </option>
                                                        <option value="6ebdfc42-caaa-4cd3-9a06-07987226eca0">anil
                            </option>
                                                        <option value="db1ef74d-e483-453a-bfe0-1d453a0a01e1">test
                            </option>
                                                        <option value="2867ae69-55c7-4bc6-ac8c-e99a30552cb9">Pityu
                            </option>
                                                        <option value="a8a8e523-c190-4d72-bf11-5f8c5022d92e">Gianluca Rizzo
                            </option>
                                                        <option value="82895805-b8f0-4ddf-9ce1-29b08c0aa5b4">Syed Ashhad
                            </option>
                                                        <option value="4b278eb6-7698-4d00-a55c-b408c4684f0a">samir
                            </option>
                                                        <option value="0886b409-0888-430b-83dd-8d549944ede0">alam
                            </option>
                                                        <option value="546273dd-36d8-4cc3-a006-3f4d4318bbf9">behrozkhan
                            </option>
                                                        <option value="4605aab7-f50a-441f-bdea-9b74e7282f08">janki testing
                            </option>
                                                        <option value="bd6beaa9-51c7-4240-a8a1-acf6c04bf1d1">Magdi22
                            </option>
                                                        <option value="56532517-3323-4623-a64b-e684c647aa90">temchak
                            </option>
                                                        <option value="40955d65-4cfc-4802-9355-5f063d42b151">jean
                            </option>
                                                        <option value="697b950d-33ba-47e0-b134-9061192ab4c1">test
                            </option>
                                                        <option value="8bf7b56c-5b9f-4b2b-8f1a-45593374f31a">Ahmed Ahmed Hassan
                            </option>
                                                        <option value="7920aa08-c342-416b-9769-78b9e06fdb29">longheng
                            </option>
                                                        <option value="803eaecd-730d-43c7-a9bf-b787aeebb060">Szeto
                            </option>
                                                        <option value="852e4393-ea3f-4bfd-922a-4ef456da3ded">jijisha
                            </option>
                                                        <option value="4ef60773-87c1-4fdf-b6d8-0b3d4455d709">maddy
                            </option>
                                                        <option value="55d24e1e-24f1-488e-8da7-b6de4a02c5bd">Angel Rivera
                            </option>
                                                        <option value="a6aad4d0-78c8-472c-bba8-2acfbac1a052">tttsdas
                            </option>
                                                        <option value="37db2355-00a4-4956-95b7-cacee31c44bb">jyothsna baddiga
                            </option>
                                                        <option value="98b9db51-d0b9-46cc-ba24-025e1276b6fd">刘珂强
                            </option>
                                                        <option value="fc30f4d2-5df5-4925-a3a0-f518174423a7">jose
                            </option>
                                                        <option value="6ef5a33a-1b18-498c-a21b-8cd4e2097cb6">jilali
                            </option>
                                                        <option value="d141ccbb-9b8e-4639-bf11-a63cd16b4d66">test23
                            </option>
                                                        <option value="d7b401c0-8ff4-4472-b8e8-e62553fc2cd7">Ismail Aliyu
                            </option>
                                                        <option value="90dc3248-1591-4cb3-affc-95c098ce2287">banik4130
                            </option>
                                                        <option value="fd31da48-62e7-4941-9b58-e4c83f824cf0">Dharmik
                            </option>
                                                        <option value="a3d13e97-e5d5-4352-85fa-922a829b84d3">test ted
                            </option>
                                                        <option value="0cbffb22-d6a9-49cd-a4b6-ba3d9dcb103b">johny
                            </option>
                                                        <option value="2cc497b1-3c20-4bb1-8350-20e47de2686e">Cedric
                            </option>
                                                        <option value="4ef8ffc3-1ae0-43af-bcc5-565adc88ff2b">Anastasia Burch
                            </option>
                                                        <option value="29c2d737-eaa1-4792-aac2-cae34955825c">abc
                            </option>
                                                        <option value="d1c57dcf-f92b-4dd9-bdd6-7366784f1158">Brent
                            </option>
                                                        <option value="a716ad6c-6245-4972-8966-00b08516ad4e">AKbar
                            </option>
                                                        <option value="96ae7d04-1441-48f8-bcf5-c9e100f3d08c">Prakash
                            </option>
                                                        <option value="344d3973-8b60-4351-94bb-5bfc862a8781">deneme
                            </option>
                                                        <option value="a42f5200-41e5-44a2-aef2-3d7288aa1c62">Abdou SEYE
                            </option>
                                                        <option value="5472990d-843a-4614-99ca-9e787c249c59">savan
                            </option>
                                                        <option value="a0da9a2d-e094-4810-9589-434260605afa">Ahmed Mcf
                            </option>
                                                        <option value="965492b6-105e-4f54-941b-74525938c8b4">rakesh raj
                            </option>
                                                        <option value="2412f6f6-5d61-469b-998d-e61f49af8080">sdfas
                            </option>
                                                        <option value="31065373-59be-43aa-a141-e7c3d6de775a">Usama Abbasi
                            </option>
                                                        <option value="c619b172-d8f8-42b6-9ed7-b5c61bf5cfed">roberttest
                            </option>
                                                        <option value="774704da-aa0d-4413-893d-456b8c13f2a2">Avye Bright
                            </option>
                                                        <option value="71de7240-934b-4d8f-9849-55628012bac6">mehul
                            </option>
                                                        <option value="541db435-f9d0-437a-847e-796535ce6f8a">salim fr
                            </option>
                                                        <option value="cdb1501b-1d35-4ffd-a362-f7ec545c09e4">employees1
                            </option>
                                                        <option value="b31c5afc-932f-43f7-b991-8a1ca2aa1c2e">aku
                            </option>
                                                        <option value="55869e54-ea5a-4331-b952-6bb9738271d2">Roy
                            </option>
                                                        <option value="67a5c268-efb5-49b2-9f41-c941a984b755">Sunil
                            </option>
                                                        <option value="b54438d1-1bd2-451d-9f6f-cda9a472e535">yousef
                            </option>
                                                        <option value="74388bba-e72e-4a3c-bf81-8b1177db8b5d">Ouelid
                            </option>
                                                        <option value="604c7202-4805-453e-9ce3-a2cef6948a0e">liente
                            </option>
                                                        <option value="3c34db18-1f2e-4168-8f2e-20d383d14e7b">mubashir
                            </option>
                                                        <option value="ded13092-cfae-44cf-9e30-642bce1ecbe3">uttam patel
                            </option>
                                                        <option value="482df0c8-541b-4cf1-bb6b-542635f0c77c">Djcuna
                            </option>
                                                        <option value="347fcae6-cc2b-4cbb-97c6-8609195b64f2">tka
                            </option>
                                                        <option value="4a38c039-92b7-4cb9-a568-5572b57ca694">mar
                            </option>
                                                        <option value="bdc79e66-9718-4680-84fa-f264f45a915a">demo abhi
                            </option>
                                                        <option value="d78372d5-ab71-4812-84dc-9ad99e6c8902">Ali
                            </option>
                                                        <option value="465211c4-8ab9-432a-9ff6-e3248ff36795">Shamsad Shanin
                            </option>
                                                        <option value="2b8d79aa-91d2-4285-92eb-6d31fa7733fd">Matt Stanley
                            </option>
                                                        <option value="b98f277f-e7e0-4430-ad97-8503a09683c6">asdfsdafasf
                            </option>
                                                        <option value="b28dc1db-d587-45fe-8a82-408f71effc96">ff
                            </option>
                                                        <option value="81374b5c-b6cc-4494-a0f1-50ae377500dd">my testing
                            </option>
                                                        <option value="4093b19f-300a-4d7c-94e2-209d7a169c84">mok
                            </option>
                                                        <option value="387449a6-61f4-4135-aa21-a21f732bd65e">dsad
                            </option>
                                                        <option value="80d4951f-533e-4aa4-a11f-1c6f9f2a68bd">Chloe Saunders
                            </option>
                                                        <option value="74fa8096-230f-4821-8490-43cb9dd320fa">Ruel
                            </option>
                                                        <option value="f9dae45c-cd59-43c6-baee-1d375c22e005">Amites
                            </option>
                                                        <option value="384087b2-3d90-4dd8-8860-6f5348264526">Mango
                            </option>
                                                        <option value="7ab37019-a134-4854-b889-fb1d919394f2">Anil Kumar
                            </option>
                                                        <option value="2b9ff45c-f75c-439b-a220-a04d61031828">Rhonda Kelley
                            </option>
                                                        <option value="dd917f04-0693-48db-80df-de6e5336806e">Dev
                            </option>
                                                        <option value="ec205268-c381-429b-9485-97bcb0ff0266">jama
                            </option>
                                                        <option value="7cc5ea05-013a-48c7-a6c2-3cfd146c6153">abc
                            </option>
                                                        <option value="058351d0-a42d-4924-b852-47bbcac275b3">TEST
                            </option>
                                                        <option value="32704b04-cda9-447f-9262-39b937099783">abc
                            </option>
                                                        <option value="3f9cd846-3d62-434a-88cc-b1c7a89471ba">s
                            </option>
                                                        <option value="fb18f4c4-9c5d-40d0-8afb-c2437566052c">İrem
                            </option>
                                                        <option value="78982a5b-9906-41db-9921-f466e6c7463f">Anis Mulani
                            </option>
                                                        <option value="702773dd-3ec4-4358-b278-4f69d1004c39">Kelly-Ann Moore
                            </option>
                                                        <option value="5416ea5b-ffd7-4b73-a11b-016d724f016c">Roshan Gupta
                            </option>
                                                        <option value="0da3fce1-6968-4b8c-80cd-7c15ec028562">nice
                            </option>
                                                        <option value="b2687e06-e866-49fc-b07a-0a3486cb8bcb">alex coleman
                            </option>
                                                        <option value="59c573e5-5fda-4a05-bf11-c08535d96d16">chary
                            </option>
                                                        <option value="3a73ef9b-8374-4b9f-814e-e7554b852f47">mohamed
                            </option>
                                                        <option value="9416c2a9-70a5-422b-9585-2c472f890f9d">tesy
                            </option>
                                                        <option value="6d7415df-9aaf-4e4e-838d-e748b612934c">axa
                            </option>
                                                        <option value="754a5e59-3920-4e3c-9da7-cbfa419b4deb">testy
                            </option>
                                                        <option value="b63bb333-ca82-44b0-99a0-4f25ad7fa843">laraib
                            </option>
                                                        <option value="2a111318-2478-4e9a-98f3-d7c548b6ea3e">test
                            </option>
                                                        <option value="56371379-5fa4-4b73-bd7e-b424460cb26a">Test
                            </option>
                                                        <option value="ddb97502-9373-4e1c-a99c-8f38be25068c">shaheer ahmed khan
                            </option>
                                                        <option value="b95dc133-af60-4769-9c83-6e81c72a504c">Firoz Ahmed
                            </option>
                                                        <option value="cec23f39-018f-4e27-87c2-7b8790663094">kiruthika
                            </option>
                                                        <option value="faf51e5b-fd67-4bc5-86d8-999a2350c0a7">Señor Juan perez
                            </option>
                                                        <option value="6b3136a8-d015-4fc1-972d-abb8f75e2625">Yaseen
                            </option>
                                                        <option value="26228ccb-ce49-43d4-97c8-0bdf7a023626">Rahul Mishra
                            </option>
                                                        <option value="dc952919-790f-4f70-b2b8-5ed582a6c5a3">Sanderken
                            </option>
                                                        <option value="e848bf93-64f2-4e91-9b16-a866e9db9ac2">kumail
                            </option>
                                                        <option value="b5f04a12-8f1a-4a81-afdd-d8f5cf752f0a">023063
                            </option>
                                                        <option value="0f69ed70-8302-4e0b-bd5a-c4af44297e7d">jim
                            </option>
                                                        <option value="e78fe7d9-d4f8-4848-9b72-119cf03f5fb3">azain
                            </option>
                                                        <option value="355a66b9-9531-4613-bee6-8d1ef6dca4c8">Fika
                            </option>
                                                        <option value="aa746ac7-14c8-4bed-82ee-35fa50ca70a8">test
                            </option>
                                                        <option value="47683f19-8924-4563-a614-65a479682723">111Sambe
                            </option>
                                                        <option value="9ab82dbd-25ef-4b80-9cde-9e4fcb4314da">Irek
                            </option>
                                                        <option value="c35e6d1f-6906-4264-af78-c495aa3a2b2f">Rifaz
                            </option>
                                                        <option value="8479ae6d-26c8-46b8-b5c8-283eb36b06ca">ABhinash
                            </option>
                                                        <option value="61542105-f013-48e6-973d-3dd36a068854">sathish
                            </option>
                                                        <option value="8cb146ca-2508-42d3-8429-aea4523f445e">decode
                            </option>
                                                        <option value="a3716221-d4ee-4024-99bd-585b8d8a5b7b">Dex
                            </option>
                                                        <option value="827302a1-0037-4a75-9b51-418110d1ea80">ABC testing
                            </option>
                                                        <option value="bec1717c-f41e-4d7a-83b7-ec0d865dc742">Kutub Uddin Shihab
                            </option>
                                                        <option value="ebe4e372-7472-4d00-a60c-afe5b710ffac">JAMES
                            </option>
                                                        <option value="9a55bf25-34f6-419a-9596-292f59682e39">Asit Poddar
                            </option>
                                                        <option value="41234415-bb35-4909-b0c1-72a5ce4edc5f">Rohit Gupta
                            </option>
                                                        <option value="6c13b98d-dec9-4adb-a41d-cd339d1cd255">AAAAAAAA
                            </option>
                                                        <option value="972e009c-77e8-4960-bef8-4f514a4b77dd">tapiwa
                            </option>
                                                        <option value="b97fe3d1-a067-4421-a5ef-95721e050377">Daniel Alberto Siancas Huaman
                            </option>
                                                        <option value="04c63c8e-d355-48c2-a9bf-13ad2f40b848">jor
                            </option>
                                                        <option value="b197a902-51a6-410c-89bc-b259322f3b0b">Cora Chan
                            </option>
                                                        <option value="3a39dfaf-0a71-4a60-ae56-4d5ab2b02c3b">kk
                            </option>
                                                        <option value="3f638500-7be1-4448-88a8-ec1d1443cda2">Dev
                            </option>
                                                        <option value="dd0070b2-d749-4499-ab46-a2d142ceca2c">Billo
                            </option>
                                                        <option value="8899d3fa-9f54-4273-b07e-141f8ed961d4">konamika
                            </option>
                                                        <option value="d44fd15b-7a72-4331-b982-b5829f1c6b3a">george
                            </option>
                                                        <option value="60f9fe17-9655-44f0-b2dd-8d2b703b17aa">oljkhgusgZ
                            </option>
                                                        <option value="7a406cfd-9308-4f2c-a30e-366b35facfab">JANE
                            </option>
                                                        <option value="4e1bcb6d-37ba-4b67-abf6-7139f8ad2e7e">Moose sadsf
                            </option>
                                                        <option value="2c715a6f-3e50-4a11-a339-243e69a3f8d0">xuan
                            </option>
                                                        <option value="e78fe586-3a11-4837-b770-85bcbba5fb66">Ahmad
                            </option>
                                                        <option value="8bf9a9b0-8967-48a9-9da6-ba383e61480b">Pushpa
                            </option>
                                                        <option value="21e0a638-4407-4ad9-8293-08598c44f203">reckless
                            </option>
                                                        <option value="ac7309a0-18c0-40fc-a4b3-0d8b726dbc6a">Mitul Vasoya
                            </option>
                                                        <option value="4e663354-ec9a-4e7a-8ad1-5a4b145be799">isaac
                            </option>
                                                        <option value="52d5a0ef-a058-4d21-b801-b989cce91469">youssef
                            </option>
                                                        <option value="06499690-9bfc-4790-869e-0c52602b23a8">Pooja Agrawal
                            </option>
                                                        <option value="9a49521e-0804-4fa1-b823-45e88328e6ec">Shivam Agrawal
                            </option>
                                                        <option value="b6a0316c-5c36-4d5f-8489-be23dcfac208">abhishek
                            </option>
                                                        <option value="05088b52-70a4-4178-bee3-bbd59e12b559">cfnbcf
                            </option>
                                                        <option value="2bc67e75-0da4-448e-a9f1-749cafaa346f">Zaid Anwar new
                            </option>
                                                        <option value="a7624b55-18a7-4c1c-9ae9-b4203af07681">1122
                            </option>
                                                        <option value="b7328d4e-70b6-4717-8b64-696efe6b3eb0">hello
                            </option>
                                                        <option value="c68bfd52-2d6d-4f5c-a80d-4b04124279cd">zz
                            </option>
                                                        <option value="c544cfb4-b0cf-4673-a01f-8e67c793dd22">Caleb Nkunze
                            </option>
                                                        <option value="686c46ba-777e-4c7b-b3d5-6319781074c3">Brayan Marcelo Marcelo Cangas Vasquez
                            </option>
                                                        <option value="e801d873-d143-4c26-b57b-7f4d7c59babb">sample
                            </option>
                                                        <option value="a5cf3c68-0b3f-4a8e-a667-1ae051f1f76e">Muhangyi John
                            </option>
                                                        <option value="029e0a9e-3021-46f2-b9ed-3788e5cd9d61">Josh
                            </option>
                                                        <option value="f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4">jui
                            </option>
                                                        <option value="470e8975-4a51-4504-9cf9-d524e4c438bd">galbb
                            </option>
                                                        <option value="bb9ee236-d58b-41ad-bc7f-802877d19b5a">sherbel
                            </option>
                                                        <option value="07cceb0d-8e42-4540-9f7c-ce5dcd960d89">Demo
                            </option>
                                                        <option value="f2024904-f297-42dc-9c97-383c745e74e4">RJK MEHEDI
                            </option>
                                                        <option value="6c9b3677-4366-47bd-90f1-fe5fa30820b4">Pepito
                            </option>
                                                        <option value="30737a33-fcb5-4e8a-81de-807423cd1fa8">Prueba1
                            </option>
                                                        <option value="0cc2ebeb-6e89-4a7c-9791-14919df21084">sokvireak
                            </option>
                                                        <option value="0b278254-5342-41b2-8be9-c03b3460051f">sneha pawar
                            </option>
                                                    </select>
                    </div>

                    <div class="col-sm-3 my-1 flex">
                        <button class="btn btn-success ml-2 btn-fw" type="submit">
                            <i wire:loading wire:target="showReport" class="spinner-border spinner-border-sm"
                                role="status" aria-hidden="true"></i>
                            <i wire:loading.remove wire:target="showReport"
                                class="mdi mdi-format-list-bulleted-square"></i>Report
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
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.4.1/dist/alpine.min.js" defer></script>  <script src="https://www.kingpabel.com/attendance-management-system/livewire/livewire.js?id=d7d975b5d122717a1ee0" data-turbolinks-eval="false"></script><script data-turbolinks-eval="false">if (window.livewire) {console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')}window.livewire = new Livewire();window.livewire_app_url = 'https://www.kingpabel.com/attendance-management-system';window.livewire_token = '0uWmlwaxZmQCxJv6GpXXN4VneCYbobf4dih8P5w3';/* Make Alpine wait until Livewire is finished rendering to do its thing. */window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};document.addEventListener("DOMContentLoaded", function () {window.livewire.start();});var firstTime = true;document.addEventListener("turbolinks:load", function() {/* We only want this handler to run AFTER the first load. */if(firstTime) {firstTime = false;return;}window.livewire.restart();});document.addEventListener("turbolinks:before-cache", function() {document.querySelectorAll('[wire\\:id]').forEach(function(el) {const component = el.__livewire;const dataObject = {data: component.data,events: component.events,children: component.children,checksum: component.checksum,locale: component.locale,name: component.name,errorBag: component.errorBag,redirectTo: component.redirectTo,};el.setAttribute('wire:initial-data', JSON.stringify(dataObject));});});</script>
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
                        window.livewire.find('zzg1fjcsVYRdMjxlYeHd').set('dateRange', dateStr)
                    } else{
                        instance.setDate('December 14, 2025 to January 13, 2026'.split(' to '));
                        window.livewire.find('zzg1fjcsVYRdMjxlYeHd').set('dateRange', 'December 14, 2025 to January 13, 2026');
                    }
                }
            }
        })
    });
</script>
</body>

</html>
