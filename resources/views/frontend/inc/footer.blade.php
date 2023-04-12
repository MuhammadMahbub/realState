<!--Footer Section-->
<section class="main-footer">
    <footer class="bg-dark text-white">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <h6>About</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <p>About us short description goes here...</p>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h6>Our Quick Links</h6>
                         <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            <li><a href="javascript:;">Our Team</a></li>
                            <li><a href="javascript:;">Contact US</a></li>
                            <li><a href="javascript:;">Terms of services</a></li>
                            <li><a href="javascript:;">Our Blog</a></li>
                            <li><a href="javascript:;">Agent Resource Center</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h6>Contact</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-home me-3 text-primary"></i> 191 Mwai Kibaki Road, Kawe Beach, Dar es salaam.</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-envelope me-3 text-primary"></i> info@bps.com</a></li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-phone me-3 text-primary"></i> +255 763 210 607</a>
                            </li>
                             <li>
                                <a href="javascript:void(0);"><i class="fa fa-print me-3 text-primary"></i> +255 765 272 081</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled list-inline mt-3">
                            <li class="list-inline-item">
                              <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                <i class="fa fa-facebook bg-facebook"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                <i class="fa fa-twitter bg-info"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                <i class="fa fa-google-plus bg-danger"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                <i class="fa fa-linkedin bg-linkedin"></i>
                              </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h6>Subscribe Newsletter</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        {{-- @auth --}}
                            <form action="{{ route('subscribe') }}" method="post">
                            @csrf
                                <div class="input-group w-100">
                                    <input type="text" class="form-control br-tl-3  br-bl-3" name="email" placeholder="Email">
                                    <button type="submit" class="btn btn-primary br-tr-3  br-br-3"> Subscribe </button>
                                </div>
                            </form>
                        {{-- @endauth --}}
                        <h6 class="mb-0 mt-5">Payments</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        <ul class="footer-payments">
                            <li class="ps-0"><a href="javascript:;"><i class="fa fa-cc-amex text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-visa text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-credit-card-alt text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-mastercard text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-paypal text-muted" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark text-white p-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
                        Copyright © 2023 <a href="javascript:void(0);" class="fs-14 text-primary">Baobab Property Services</a>. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->