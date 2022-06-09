<!DOCTYPE html>
<html lang="en">

@include('layouts.head')


<body class="fixed-bottom-bar">

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



            <div class="container-fluid p-0">
                <div class="cat-slider mx-auto">
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


            @include('layouts.navigation')
            @include('layouts.scripts')
</body>

</html>