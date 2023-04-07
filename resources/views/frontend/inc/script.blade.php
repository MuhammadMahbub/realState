<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

<!-- JQuery js-->
<script src="{{asset('frontend')}}/assets/js/vendors/jquery-3.6.0.min.js"></script>

<!-- Bootstrap js -->
<script src="{{asset('frontend')}}/assets/plugins/bootstrap-5/popper.min.js"></script>
<script src="{{asset('frontend')}}/assets/plugins/bootstrap-5/js/bootstrap.min.js"></script>

<!--JQuery RealEstaterkline Js-->
<script src="{{asset('frontend')}}/assets/js/vendors/jquery.sparkline.min.js"></script>

<!-- Circle Progress Js-->
<script src="{{asset('frontend')}}/assets/js/vendors/circle-progress.min.js"></script>

<!-- Star Rating Js-->
<script src="{{asset('frontend')}}/assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Owl Carousel js -->
<script src="{{asset('frontend')}}/assets/plugins/owl-carousel/owl.carousel.js"></script>

<!--Horizontal Menu-->
<script src="{{asset('frontend')}}/assets/plugins/horizontal-menu/horizontal.js"></script>

<!--Counters -->
<script src="{{asset('frontend')}}/assets/plugins/counters/counterup.min.js"></script>
<script src="{{asset('frontend')}}/assets/plugins/counters/waypoints.min.js"></script>
<script src="{{asset('frontend')}}/assets/plugins/counters/numeric-counter.js"></script>

<!--JQuery TouchSwipe js-->
<script src="{{asset('frontend')}}/assets/js/jquery.touchSwipe.min.js"></script>

<!--Select2 js -->
<script src="{{asset('frontend')}}/assets/plugins/select2/select2.full.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/select2.js"></script>



<!-- sticky Js-->
<script src="{{asset('frontend')}}/assets//js/sticky.js"></script>

<!-- P-scroll bar Js-->
<script src="{{asset('frontend')}}/assets/plugins/pscrollbar/perfect-scrollbar.js"></script>

<!-- Swipe Js-->
<script src="{{asset('frontend')}}/assets/js/swipe.js"></script>

<!-- Scripts Js-->
<script src="{{asset('frontend')}}/assets/js/owl-carousel.js"></script>

<!-- themecolor Js-->
<script src="{{asset('frontend')}}/assets/js/themeColors.js"></script>

<!-- Typewritter Js-->
<script src="{{asset('frontend')}}/assets/js/typewritter.js"></script>

 {{-- tOASTR --}}
 <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Custom Js-->
<script src="{{asset('frontend')}}/assets/js/custom.js"></script>

<!-- Custom-switcher Js-->
<script src="{{asset('frontend')}}/assets/js/custom-switcher.js"></script>

@yield('scripts')


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

@if (Session::has('success'))
    <script>
    toastr.success("{!! Session::get('success') !!}")
    </script>
@endif

@if (Session::has('fail'))
    <script>
    toastr.error("{!! Session::get('fail') !!}")
    </script>
@endif