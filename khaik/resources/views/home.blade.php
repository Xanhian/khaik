<!DOCTYPE html>
<html lang="en">

@include('layouts.head')


<body class="fixed-bottom-bar">
    <header class="section-header">
        <section class="header-main shadow-sm bg-white">
            @include('layouts.topnavigation')
            <!-- container.// -->
        </section>
        <!-- header-main .// -->
    </header>
    <div class="osahan-home-page">
        <div class="bg-primary p-3 d-none n">
            <div class="text-white">
                <div class="title d-flex align-items-center">

                    <h4 class="font-weight-bold m-0 ">Khaik</h4>
                    <a class="text-white font-weight-bold ml-auto" data-toggle="modal" data-target="#exampleModal" href="#">Filter</a>
                </div>
            </div>
            <div class="input-group mt-3 rounded shadow-sm overflow-hidden">
                <div class="input-group-prepend">
                    <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
                </div>
                <input type="text" class="shadow-none border-0 form-control" placeholder="Search for restaurants or dishes">
            </div>
        </div>
        <!-- Filters -->

        <!-- offer sectio slider -->

        <div class="container">
            <!-- Trending this week -->
            <div class="pt-4 pb-2 title d-flex align-items-center">
                <h5 class="m-0"> Discovery<h5>

            </div>
            <!-- slider -->

            @include('components.discover')



            <div class="container">
                <div class="cat-slider">
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/Fries.png" class="img-fluid mb-2">
                            <p class="m-0 small">Fries</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/Pizza.png" class="img-fluid mb-2">
                            <p class="m-0 small">Pizza</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/Burger.png" class="img-fluid mb-2">
                            <p class="m-0 small">Burger</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/Sandwich.png" class="img-fluid mb-2">
                            <p class="m-0 small">Sandwich</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/Coffee.png" class="img-fluid mb-2">
                            <p class="m-0 small">Coffee</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/Steak.png" class="img-fluid mb-2">
                            <p class="m-0 small">Steak</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/ColaCan.png" class="img-fluid mb-2">
                            <p class="m-0 small">ColaCan</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/Breakfast.png" class="img-fluid mb-2">
                            <p class="m-0 small">Breakfast</p>
                        </a>
                    </div>
                    <div class="cat-item px-1 py-3">
                        <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="trending.html">
                            <img alt="#" src="img/icons/Salad.png" class="img-fluid mb-2">
                            <p class="m-0 small">Salad</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container">

                <!-- Most popular -->
                <div class="py-3 title d-flex align-items-center">
                    <h5 class="m-0">Restaurants</h5>
                    <!-- <a class="font-weight-bold ml-auto" href="most_popular.html">26 places <i class="feather-chevrons-right"></i></a> -->
                </div>
                <!-- Most popular -->

                <div class="most_popular">
                    <div class="row">

                        @include('components.restaurants')




                    </div>

                </div>


            </div>

            <!-- Footer -->
            <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
                <div class="row">
                    <div class="col selected">
                        <a href="home.html" class="text-danger small font-weight-bold text-decoration-none">
                            <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
                            Home
                        </a>
                    </div>
                    <div class="col">
                        <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                            <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                            Trending
                        </a>
                    </div>
                    <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                        <div class="bg-danger rounded-circle mt-n0 shadow">
                            <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                                <i class="feather-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                            <p class="h4 m-0"><i class="feather-heart"></i></p>
                            Favorites
                        </a>
                    </div>
                    <div class="col">
                        <a href="profile.html" class="text-dark small font-weight-bold text-decoration-none">
                            <p class="h4 m-0"><i class="feather-user"></i></p>
                            Profile
                        </a>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <footer class="section-footer border-top bg-dark">
                <div class="container">
                    <section class="footer-top padding-y pt-4">
                        <div class="row">
                            <aside class="col-md-4 footer-about">
                                <article class="d-flex pb-3">
                                    <div><img alt="#" src="img/logo_web.png" class="logo-footer mr-3"></div>
                                    <div>
                                        <h6 class="title text-white">About Us</h6>
                                        <p class="text-muted">Some short text about company like You might remember the Dell computer commercials in which a youth reports.</p>
                                        <div class="d-flex align-items-center">
                                            <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Facebook" target="_blank" href="#"><i class="feather-facebook"></i></a>
                                            <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Instagram" target="_blank" href="#"><i class="feather-instagram"></i></a>
                                            <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Youtube" target="_blank" href="#"><i class="feather-youtube"></i></a>
                                            <a class="btn btn-icon btn-outline-light mr-1 btn-sm" title="Twitter" target="_blank" href="#"><i class="feather-twitter"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </aside>

                            <aside class="col-sm-3 col-md-2 text-white">
                                <h6 class="title">Services</h6>
                                <ul class="list-unstyled hov_footer">

                                    <li> <a href="contact-us.html" class="text-muted">Contact Us</a></li>
                                    <li> <a href="terms.html" class="text-muted">Terms of use</a></li>
                                    <li> <a href="privacy.html" class="text-muted">Privacy policy</a></li>
                                </ul>
                            </aside>

                            <aside class="col-sm-3  col-md-2 text-white">
                                <h6 class="title">More Pages</h6>
                                <ul class="list-unstyled hov_footer">
                                    <li> <a href="trending.html" class="text-muted"> Trending </a></li>
                                    <li> <a href="most_popular.html" class="text-muted"> Most popular </a></li>
                                    <li> <a href="restaurant.html" class="text-muted"> Restaurant Details </a></li>
                                    <li> <a href="favorites.html" class="text-muted"> Favorites </a></li>
                                </ul>
                            </aside>
                            <aside class="col-sm-3  col-md-2 text-white">
                                <h6 class="title">More Pages</h6>
                                <ul class="list-unstyled hov_footer">


                                    <p class="mb-0"> © 2020 Company All rights reserved </p>


                                </ul>
                            </aside>
                        </div>
                        <!-- row.// -->
                    </section>
                    <!-- footer-top.// -->

                </div>
                <!-- //container -->

            </footer>
            <nav id="main-nav">
                <ul class="second-nav">
                    <li><a href="home.html"><i class="feather-home mr-2"></i> Homepage</a></li>
                    <li><a href="my_order.html"><i class="feather-list mr-2"></i> My Orders</a></li>
                    <li>
                        <a href="#"><i class="feather-edit-2 mr-2"></i> Authentication</a>
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Register</a></li>
                            <li><a href="forgot_password.html">Forgot Password</a></li>
                            <li><a href="verification.html">Verification</a></li>
                            <li><a href="location.html">Location</a></li>
                        </ul>
                    </li>
                    <li><a href="favorites.html"><i class="feather-heart mr-2"></i> Favorites</a></li>
                    <li><a href="trending.html"><i class="feather-trending-up mr-2"></i> Trending</a></li>
                    <li><a href="most_popular.html"><i class="feather-award mr-2"></i> Most Popular</a></li>
                    <li><a href="restaurant.html"><i class="feather-paperclip mr-2"></i> Restaurant Detail</a></li>
                    <li><a href="checkout.html"><i class="feather-list mr-2"></i> Checkout</a></li>
                    <li><a href="successful.html"><i class="feather-check-circle mr-2"></i> Successful</a></li>
                    <li><a href="map.html"><i class="feather-map-pin mr-2"></i> Live Map</a></li>
                    <li>
                        <a href="#"><i class="feather-user mr-2"></i> Profile</a>
                        <ul>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="favorites.html">Delivery support</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="terms.html">Terms of use</a></li>
                            <li><a href="privacy.html">Privacy & Policy</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="feather-alert-triangle mr-2"></i> Error</a>
                        <ul>
                            <li><a href="not-found.html">Not Found</a>
                            <li><a href="maintence.html"> Maintence</a>
                            <li><a href="coming-soon.html">Coming Soon</a>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="feather-link mr-2"></i> Navigation Link Example</a>
                        <ul>
                            <li>
                                <a href="#">Link Example 1</a>
                                <ul>
                                    <li>
                                        <a href="#">Link Example 1.1</a>
                                        <ul>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Link Example 1.2</a>
                                        <ul>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Link Example 2</a></li>
                            <li><a href="#">Link Example 3</a></li>
                            <li><a href="#">Link Example 4</a></li>
                            <li data-nav-custom-content>
                                <div class="custom-message">
                                    You can add any custom content to your navigation items. This text is just an example.
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="bottom-nav">
                    <li class="email">
                        <a class="text-danger" href="home.html">
                            <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
                            Home
                        </a>
                    </li>
                    <li class="github">
                        <a href="faq.html">
                            <p class="h5 m-0"><i class="feather-message-circle"></i></p>
                            FAQ
                        </a>
                    </li>
                    <li class="ko-fi">
                        <a href="contact-us.html">
                            <p class="h5 m-0"><i class="feather-phone"></i></p>
                            Help
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Filter</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="osahan-filter">
                                <div class="filter">
                                    <!-- SORT BY -->
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="m-0">SORT BY</h6>
                                    </div>
                                    <div class="custom-control border-bottom px-0  custom-radio">
                                        <input type="radio" id="customRadio1f" name="location" class="custom-control-input" checked>
                                        <label class="custom-control-label py-3 w-100 px-3" for="customRadio1f">Top Rated</label>
                                    </div>
                                    <div class="custom-control border-bottom px-0  custom-radio">
                                        <input type="radio" id="customRadio2f" name="location" class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3" for="customRadio2f">Nearest Me</label>
                                    </div>
                                    <div class="custom-control border-bottom px-0  custom-radio">
                                        <input type="radio" id="customRadio3f" name="location" class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3" for="customRadio3f">Cost High to Low</label>
                                    </div>
                                    <div class="custom-control border-bottom px-0  custom-radio">
                                        <input type="radio" id="customRadio4f" name="location" class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3" for="customRadio4f">Cost Low to High</label>
                                    </div>
                                    <div class="custom-control border-bottom px-0  custom-radio">
                                        <input type="radio" id="customRadio5f" name="location" class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3" for="customRadio5f">Most Popular</label>
                                    </div>
                                    <!-- Filter -->
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="m-0">FILTER</h6>
                                    </div>
                                    <div class="custom-control border-bottom px-0  custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultCheck1" checked>
                                        <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck1">Open Now</label>
                                    </div>
                                    <div class="custom-control border-bottom px-0  custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultCheck2">
                                        <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck2">Credit Cards</label>
                                    </div>
                                    <div class="custom-control border-bottom px-0  custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultCheck3">
                                        <label class="custom-control-label py-3 w-100 px-3" for="defaultCheck3">Alcohol Served</label>
                                    </div>
                                    <!-- Filter -->
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="m-0">ADDITIONAL FILTERS</h6>
                                    </div>
                                    <div class="px-3 pt-3">
                                        <input type="range" class="custom-range" min="0" max="100" name="minmax">
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Min</label>
                                                <input class="form-control" placeholder="$0" type="number">
                                            </div>
                                            <div class="form-group text-right col-6">
                                                <label>Max</label>
                                                <input class="form-control" placeholder="$1,0000" type="number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-0 border-0">
                            <div class="col-6 m-0 p-0">
                                <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                            </div>
                            <div class="col-6 m-0 p-0">
                                <button type="button" class="btn btn-primary btn-lg btn-block">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- slick Slider JS-->
            <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
            <!-- Sidebar JS-->
            <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
            <!-- Custom scripts for all pages-->
            <script type="text/javascript" src="js/osahan.js"></script>
</body>

</html>