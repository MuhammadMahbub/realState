
@include('backend.inc.header')

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        @include('backend.inc.sidebar')

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <!-- Toastr -->
        <div class="container-fluid">
            <br/>
            
            <div class="row">
                <div class="col-lg-10">
                    <h4><strong>Welcome Back, {{ Auth::user()->name ?? 'N/A' }}</strong></h4>
                    <p>You are Assigned as a : 
                        @if (Auth::user()->role == 1)
                            Admin    
                        @elseif (Auth::user()->role == 2)
                            Agent
                        @elseif (Auth::user()->role == 3)
                            Tenant
                        @elseif (Auth::user()->role == 4)
                            Landlord
                        @elseif (Auth::user()->role == 5)
                            Contractor
                        @elseif (Auth::user()->role == 6)
                            Service Provider
                        @endif
                    </p>
                </div>

                @yield('breadcrumb')
                
            </div>
            
            <br/>
            

                @yield('content')

         

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> &copy<script>document.write(new Date().getFullYear());</script> Baobab Property Services
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    @include('backend.inc.footer')