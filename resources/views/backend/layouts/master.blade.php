
@include('backend.inc.header')

{{-- toastr --}}
{{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}

        <!--**********************************
            Sidebar start
        ***********************************-->
        
        @include('backend.inc.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->
                                
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
            
            @yield('breadcrumb')
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 wid-100">
                        <div class="row">
                            
                            @yield('count_section')

                        </div>
                    </div>
                    
                    @yield('content')
                    
                </div>

                @yield('list_section')
                
            </div>
        </div>
            
        <!--**********************************
            Content body end
        ***********************************-->
            
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright  2023 © Baobab Property Services</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
            Support ticket button start
        ***********************************-->
        
        <!--**********************************
            Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    

    @include('backend.inc.footer')