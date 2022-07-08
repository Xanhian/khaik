<!DOCTYPE html>
<html lang="en">

@include('layouts.head')


<body class="fixed-bottom-bar">


    <div class="osahan-home-page">

        <div class="bg-primary p-3 d-none n">
            <div class="text-white">
                <div class="title d-flex justify-content-between align-items-center">

                    <h4 class="font-weight-bold logo m-0 ">Khaik</h4>



                    @auth('vendors')
                    <a href="{{route('vendor_logout')}}" class="text-white "><i class="fa-solid fa-arrow-right-from-bracket fa-2xl"></i></a>
                    @endauth
                    @auth('users')
                    <a href="{{route('user_logout')}}" class="text-white "><i class="fa-solid fa-arrow-right-from-bracket fa-2xl"></i></a>
                    @endauth


                </div>
            </div>

            <form action="{{route('filter_search')}}" method="post">
                <div class="input-group mt-3 rounded shadow-sm overflow-hidden">
                    <div class="input-group-prepend">
                        <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <input type="text" name="search" class="shadow-none border-0 form-control" placeholder="Search for restaurants ">
                </div>

            </form>

        </div>

        <div class="container">
            <div class="pt-4 pb-2 title d-flex justify-content-between align-items-center   ">
                <h5 class="m-0"> Discovery<h5>
                        <a class="btn btn-primary m-0 text-white font-weight-bold" href="{{route('filter')}}"><i class="fa-solid fa-filter mx-1"></i>Filter</a>


            </div>
        </div>


        <div class="container-fluid m-0">

            @include('components.discover')

        </div>







        <div class="container  p-0">
            <div class="cat-slider mx-auto">
                <div class="cat-item px-1 py-3">
                    <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#6">
                        <div class="cat-item-box">
                            <i class="fa-solid fa-burger fa-2xl mx-auto m-3"></i>
                            <p class="m-0 small">Fast Food</p>
                        </div>

                    </a>
                </div>
                <div class="cat-item px-1 py-3">
                    <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#1">
                        <div class="cat-item-box">
                            <i class="fa-solid fa-drumstick-bite   fa-2xl mx-auto m-3"></i>
                            <p class="m-0 small">BBQ</p>
                        </div>
                    </a>
                </div>
                <div class="cat-item px-1 py-3">
                    <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#2">
                        <div class="cat-item-box">
                            <i class="fa-solid fa-bowl-rice fa-2xl mx-auto m-3"></i>
                            <p class="m-0 small">Javanese</p>
                        </div>
                    </a>
                </div>
                <div class="cat-item px-1 py-3">
                    <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#4">
                        <div class="cat-item-box">
                            <i class="fa-solid fa-pepper-hot fa-2xl mx-auto m-3"></i>
                            <p class="m-0 small">Indian</p>
                        </div>
                    </a>
                </div>
                <div class="cat-item px-1 py-3">
                    <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#5">
                        <div class="cat-item-box">
                            <i class="fa-solid fa-wheat-awn fa-2xl mx-auto m-3"></i>
                            <p class="m-0 small">Vegan</p>
                        </div>
                    </a>
                </div>
                <div class="cat-item px-1 py-3">
                    <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="#3">
                        <div class="cat-item-box">
                            <i class="fa-solid fa-bowl-food fa-2xl mx-auto m-3"></i>
                            <p class="m-0 small">House Food</p>
                        </div>
                    </a>
                </div>


            </div>
        </div>

        <div class="container">

            <div class="row">


            </div>



            <div class="row">

                @include('components.restaurants')


            </div>




        </div>


        @include('layouts.navigation')
        @include('layouts.scripts')
</body>

</html>