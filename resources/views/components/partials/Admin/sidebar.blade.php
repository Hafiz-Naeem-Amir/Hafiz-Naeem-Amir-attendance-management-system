<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
    <ul class="nav">

        <li class="nav-item nav-profile not-navigation-link">
            <div class="nav-link">
                <a href="{{route('users.create')}}" class="btn btn-success btn-block">Add New User <i class="mdi mdi-account-plus"></i>
                </a>
            </div>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/dashboard">
                <i class="menu-icon mdi mdi-view-dashboard"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="" aria-controls="users">
                <i class="menu-icon mdi mdi-account-multiple"></i>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="users">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('users.index')}}">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">All User</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('users.create')}}">
                            <i class="mdi mdi-account-plus menu-icon"></i>
                            <span class="menu-title">Add User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#roles" aria-expanded="" aria-controls="roles">
                <i class="menu-icon mdi mdi-shield-account"></i>
                <span class="menu-title">Roles</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="roles">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('roles.index')}}">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">All Roles</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('roles.create')}}">
                            <i class="mdi mdi-account-plus menu-icon"></i>
                            <span class="menu-title">Add Roles</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#permissions" aria-expanded="" aria-controls="permissions">
                <i class="menu-icon mdi mdi-lock-outline"></i>
                <span class="menu-title">Permissions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="permissions">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('permissions.index')}}">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">All Permissions</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('permissions.create')}}">
                            <i class="mdi mdi-account-plus menu-icon"></i>
                            <span class="menu-title">Add Permissions</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#empolyees" aria-expanded="" aria-controls="empolyees">
                <i class="menu-icon mdi mdi-account-box-multiple"></i>
                <span class="menu-title">Empolyee</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="empolyees">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('employees.index')}}">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">All Empolyee</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('employees.create')}}">
                            <i class="mdi mdi-account-plus menu-icon"></i>
                            <span class="menu-title">Add Empolyee</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#franchise" aria-expanded="" aria-controls="franchise">
                <i class="menu-icon mdi mdi-storefront-outline"></i>
                <span class="menu-title">Franchise</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="franchise">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('franchises.index')}}">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">All Franchise</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('franchises.create')}}">
                            <i class="mdi mdi-account-plus menu-icon"></i>
                            <span class="menu-title">Add Franchise</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="{{route('designation.index')}}">
                <i class="menu-icon mdi mdi-account-tie"></i>
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
                <i class="menu-icon mdi mdi-calendar-clock"></i>
                <span class="menu-title">Leave</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="leave">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('leaves.index')}}">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">All</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('leaves.apply')}}">
                            <i class="mdi mdi-folder-plus menu-icon"></i>
                            <span class="menu-title">Apply</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/notice">
                <i class="menu-icon mdi mdi-clipboard-text"></i>
                <span class="menu-title">Notice</span>
            </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="" aria-controls="report">
                <i class="menu-icon mdi mdi-chart-bar"></i>
                <span class="menu-title">Report</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="report">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/report">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">Individual Report</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.kingpabel.com/attendance-management-system/report/summary">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">Summary Report</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get current URL
        var currentUrl = window.location.href;

        // Select all sidebar links
        var navLinks = document.querySelectorAll('#sidebar .nav-link');

        navLinks.forEach(function(link) {
            if (link.href === currentUrl) {
                // Add Bootstrap active class
                link.classList.add('active');

                // If inside a collapse, open the collapse
                var parentCollapse = link.closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.classList.add('show');

                    // Add 'active' to parent toggle link
                    var parentToggle = document.querySelector('[data-toggle="collapse"][href="#' + parentCollapse.id + '"]');
                    if (parentToggle) {
                        parentToggle.classList.add('active');
                        parentToggle.setAttribute('aria-expanded', 'true');
                    }
                }
            }
        });
    });

</script>
