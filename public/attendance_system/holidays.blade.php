
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


      <li wire:initial-data="{&quot;id&quot;:&quot;9Zwg5OQehkJE7EySwJHf&quot;,&quot;name&quot;:&quot;header-notification&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false},&quot;children&quot;:[],&quot;checksum&quot;:&quot;e0eaabd879b262bb67e194e405116a25b75b6065c9b0f031b4cc8234c29d3733&quot;}" wire:id="9Zwg5OQehkJE7EySwJHf" class="nav-item dropdown" id="nav-c-noti" wire:init="$set('readyToLoad', 'true')">


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
     <li class="nav-item active">
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

     <li class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded=""
        aria-controls="report">
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
</nav>      <div class="main-panel">
        <div class="content-wrapper">

                    <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body sticky-breadcrumb">
                  <div class="bcca-breadcrumb float-left">
                    <div class="bcca-breadcrumb-item">Holiday</div>
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

          <div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">


                <form @submit.prevent="save" x-data="{
                        loading: false,
                        moreNumber: 1,
                        holiday:[''],
                        addMoreDom: [],
                        bulkDay: '',
                        bulkMonth: '',
                        months: [ 'January', 'February' , 'March' , 'April' , 'May' , 'June' , 'July' , 'August' , 'September' , 'October' , 'November' , 'December'],
                        days: [ 'Sunday', 'Monday' , 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday'],
                        addMore: function(){
                            for (let i=0; i < this.moreNumber; i++) {
                                this.addMoreDom.push(this.randomKey); this.holiday.push('');
                            }
                        },
                        randomKey: function(){
                            return [...Array(10)].map(_=>(Math.random()*36|0).toString(36)).join('');
                        },
                        save: function(){
                            this.loading = true;
                            axios.post('https://www.kingpabel.com/attendance-management-system/holiday', this.holiday)
                            .then(({data})=> {
                                this.loading = false;
                                window.livewire.emit('toastrNoti', data);
                                this.moreNumber = 1;
                                this.holiday = [''];
                                this.addMoreDom = [];
                            })
                            .catch(({response}) => {
                                this.loading = false;
                                if(response.status == 422){
                                    toastr[response.data.type](response.data.message, '', {progressBar : true});
                                }else{
                                    toastr.error('Something Went Wrong. Try Again Later', '', {progressBar : true});
                                }
                            })
                        },
                        getDaysOfMonth: function (month, day) {
                            var year = new Date().getFullYear();
                            var firstDateOfMonth = new Date(year, month, 1);
                            var dayFirst = firstDateOfMonth.getDay();
                            var date = (7 + day - dayFirst) % 7 + 1;

                            var dates = [];
                            firstDateOfMonth.setDate(date);
                            do {
                                let tempDate = new Date(firstDateOfMonth);
                                dates.push(this.months[tempDate.getMonth()] +' '+ tempDate.getDate() + ', '+tempDate.getFullYear());
                                date += 7;
                                firstDateOfMonth.setDate(date);
                            } while (firstDateOfMonth.getMonth() == month);

                            return dates;
                        },
                        addBulkDay: function(){
                            if(this.bulkMonth && this.bulkDay){
                                this.getDaysOfMonth(this.bulkMonth, this.bulkDay).forEach(function(date) {
                                    this.addMoreDom.push(this.randomKey);
                                    this.holiday.push(date);
                                }.bind(this));
                                $('#bulkDropDown').dropdown('hide');
                            }else{
                                toastr.error('Day & Month Both are Required', '', {progressBar : true})
                            }
                        }
                    }">
                    <div class="form-row align-items-center content-center">

                        <div class="col-sm-3 my-1">
                            <input type="text" class="form-control datepicker" required x-model="holiday[0]"
                                placeholder="2020-01-01...">
                        </div>

                        <template x-for="(dom, index) in addMoreDom" :key="dom">
                            <div class="col-sm-3 my-1 input-group">
                                <input type="text" class="form-control datepicker" required x-model="holiday[index+1]"
                                    placeholder="2020-01-01...">
                                <div class="input-group-append pointer"
                                    @click="addMoreDom.splice(index, 1); holiday.splice(index+1, 1)">
                                    <span class="input-group-text p-2 bg-light text-danger">
                                        <i class="mdi mdi-18px mdi-delete-forever-outline"></i>
                                    </span>
                                </div>
                            </div>
                        </template>

                        <div class="col-sm-3 my-1 flex">

                            <div class="col-sm-8 input-group">

                                <div class="input-group-prepend">
                                    <button id="bulkDropDown" class="btn btn-outline-secondary dropdown-toggle p-2"
                                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        @click="bulkDay='';bulkMonth=''"></button>
                                    <div class="dropdown-menu bg-light" id="bulk-day-insert">
                                        <div class="p-2 flex">

                                            <label class="pt-1 pr-2">Every</label>
                                            <select class="form-control p-1 wdth-auto" x-model="bulkDay">
                                                <option value="">--- Day ---</option>
                                                <template x-for="(day, index) in days" :key="index">
                                                    <option :value="index" x-text="day"></option>
                                                </template>
                                            </select>

                                            <label class="pt-1 pl-2 pr-2">Of</label>
                                            <select class="form-control p-1 wdth-auto" x-model="bulkMonth">
                                                <option value="">--- Month ---</option>
                                                <template x-for="(month, index) in months" :key="index">
                                                    <option :value="index" x-text="month"></option>
                                                </template>
                                            </select>

                                            <button type="button" class="btn btn-inverse-primary h-2 ml-2"
                                                @click="addBulkDay">
                                                Add
                                            </button>

                                        </div>
                                    </div>
                                </div>

                                <div class="input-group-prepend pointer">
                                    <span @click="addMore"
                                        class="input-group-text p-2 bg-light text-primary font-weight-bold">
                                        Add More
                                    </span>
                                </div>

                                <select class="form-control p-0" x-model="moreNumber">
                                     <option value="1">1</option>  <option value="2">2</option>  <option value="3">3</option>  <option value="4">4</option>  <option value="5">5</option>                                 </select>

                            </div>

                            <button type="submit" class="btn btn-success flex" :disabled="loading">
                                <i x-show="loading" class="spinner-border spinner-border-sm" role="status"
                                    aria-hidden="true"></i>
                                <i x-show="!loading" class="mdi mdi-plus-box-outline"></i>Save
                            </button>

                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div wire:initial-data="{&quot;id&quot;:&quot;iJFLDNgWXExPnlvklBYX&quot;,&quot;name&quot;:&quot;holiday-list&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;toastrNoti&quot;,&quot;deleteHoliday&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false,&quot;fromDate&quot;:null,&quot;toDate&quot;:null,&quot;page&quot;:1},&quot;children&quot;:[],&quot;checksum&quot;:&quot;861d9afdf718831f0560d1dd036d3b7ee228d94ab22342e66811cbc8362e63f9&quot;}" wire:id="iJFLDNgWXExPnlvklBYX" wire:init="$set('readyToLoad', 'true')">

    <div class="row">

                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_____________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">_______________</span>
                </div>
            </div>
        </div>
                <div class="col-lg-2 grid-margin" wire:loading>
            <div class="card loading-transition-background">
                <div class="card-body p-2 flex holiday-info">
                    <span class="loading-transition">______________</span>
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
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.4.1/dist/alpine.min.js" defer></script>  <script src="https://www.kingpabel.com/attendance-management-system/livewire/livewire.js?id=d7d975b5d122717a1ee0" data-turbolinks-eval="false"></script><script data-turbolinks-eval="false">if (window.livewire) {console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')}window.livewire = new Livewire();window.livewire_app_url = 'https://www.kingpabel.com/attendance-management-system';window.livewire_token = '0uWmlwaxZmQCxJv6GpXXN4VneCYbobf4dih8P5w3';/* Make Alpine wait until Livewire is finished rendering to do its thing. */window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};document.addEventListener("DOMContentLoaded", function () {window.livewire.start();});var firstTime = true;document.addEventListener("turbolinks:load", function() {/* We only want this handler to run AFTER the first load. */if(firstTime) {firstTime = false;return;}window.livewire.restart();});document.addEventListener("turbolinks:before-cache", function() {document.querySelectorAll('[wire\\:id]').forEach(function(el) {const component = el.__livewire;const dataObject = {data: component.data,events: component.events,children: component.children,checksum: component.checksum,locale: component.locale,name: component.name,errorBag: component.errorBag,redirectTo: component.redirectTo,};el.setAttribute('wire:initial-data', JSON.stringify(dataObject));});});</script>
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
    crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
<script>
    $('body').on('focus',".datepicker", function(){
        flatpickr('.datepicker:not(.flatpickr-input)', {
            dateFormat: "F j, Y",
        });
    });

    $("#bulk-day-insert").click(function(e){
        e.stopPropagation();
    })
</script>
</body>

</html>
