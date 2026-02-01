<!DOCTYPE html>
<html lang="en">

<x-partials.Admin.head />

<body data-base-url="https://www.kingpabel.com/attendance-management-system">

    <div class="container-scroller" id="app">

        <!-- TOP NAVBAR -->
        <x-partials.Admin.navbar />

        <!-- BODY -->
        <div class="container-fluid page-body-wrapper">

            <!-- SIDEBAR -->
            <x-partials.Admin.sidebar />

            <!-- MAIN PANEL -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <!-- BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body sticky-breadcrumb">
                                    <div class="bcca-breadcrumb float-left">
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

                    <!-- DASHBOARD CARDS -->
                    @yield('content')
                </div>

                <!-- FOOTER -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                            © 2026 Pakistan & made By Haddocksoft
                            <i class="mdi mdi-heart text-danger"></i>
                        </span>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    <x-partials.Admin.foot />

</body>
</html>
