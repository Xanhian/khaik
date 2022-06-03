<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-bottom-bar">
    <header class="section-header">
        <section class="header-main shadow-sm bg-white">
            @include('layouts.topnavigation')

        </section>
    </header>



    <div class="d-none">
        <div class="bg-primary p-3 d-flex align-items-center">
            <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
        </div>
    </div>

    <div class="offer-section ">

        <img alt="#" src="{{asset($restaurant_info[0]->restaurant_header_photo)}}" class="restaurant-header">

    </div>


    <div class="container">
        <div class="p-4 bg-primary bg-primary rounded position-relative restaurant-profile-container">
            <div class=" text-white">
                <div class="row">
                    <div class="pl-1 align-self-center text-wrap">
                        <h1 class="font-weight-bold p-0 text-wrap  ">{{$restaurant_info[0]->restaurant_name}}</h1>
                        <p class="text-white text-wrap  pr-2">{{$restaurant_info[0]->restaurant_description}}</p>

                    </div>

                </div>



                <div class="rating-wrap d-flex align-items-center mt-2">

                    <p class="label-rating text-white ml-2 small"> </p>
                </div>
            </div>

            <div class="pb-4">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <p class="text-white-50 font-weight-bold m-0 small">Open time</p>
                        <p class="text-white mt-1">8:00 AM</p>
                        <p class="text-white-50 font-weight-bold m-0 small">Phone number</p>
                        <p class="text-white m-0">{{$restaurant_info[0]->restaurant_phonenumber}}</p>

                    </div>

                    <div class="col-6 col-md-2">
                        <p class="text-white-50 font-weight-bold m-0 small">Close time</p>
                        <p class="text-white mt-1">8:00 AM</p>
                        <p class="text-white-50 font-weight-bold m-0 small">Location</p>
                        <p class="text-white m-0">{{$restaurant_info[0]->restaurant_addres}}, {{$restaurant_info[0]->restaurant_place}} Suriname</p>
                    </div>
                </div>
            </div>





            <div class="d-flex align-items-center">
                <div class="feather_icon">
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-facebook"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark mx-2"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-bookmark"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                </div>
                <a href="contact-us.html" class="btn btn-sm btn-outline-light ml-auto">Contact</a>
            </div>
        </div>
    </div>

    @include('components.feature ')

    <!-- Menu -->
    @include('components.menu')



    <!-- Footer -->
    @include('layouts.navigation')




    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="{{asset('vendor/sidebar/hc-offcanvas-nav.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="{{asset('js/osahan.js')}}"></script>
</body>

</html>