<!DOCTYPE html>
<html lang="en">

@include('layouts.head')



<body class="fixed-bottom-bar vh-100 d-flex flex-column justify-content-between ">
    <div class="row-fluid w-100">
        @include('components.logo')


        <div class=" container">


            <div class="card bg-white shadow-sm mt-3">
                <div class="container text-dark  m-3">

                    <h1 class="font-weight-bold">Total viewers: {{$restaurant_info[0]->total_views}}</h1>
                    <h1 class="font-weight-bold">Total Favorites: {{$favorite_count}}</h1>
                    <h1 class="font-weight-bold">Most liked food: {{$like_article}}</h1>



                </div>

            </div>


            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @if(!null == session('owners_custom_status'))
            <div class="alert alert-success">
                <p class="m-0">Reason for not getting verified: </p>
                {{ session('owners_custom_status') }}
            </div>
            @endif


        </div>
    </div>


    <div class="container position-relative align-bottom ">
        <div class=" row w-100 ">
            <div class=" col-6 p-1 ">
                <a href="{{route('vendor_menu')}}">
                    <div class="vendor-btn text-center rounded  vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-utensils"></i> </p>
                            <p class="text-white m-0">Menu</p>
                        </div>

                    </div>
                </a>
                <a href="{{route('vendor_deals')}}">
                    <div class="vendor-btn text-center rounded vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="feather-gift"></i></p>
                            <p class="text-white m-0">Add deals</p>
                        </div>

                    </div>
                </a>

            </div>
            <div class="col-6 p-1 ">

                <a href="{{route('vendor_restaurant')}}">
                    <div class="vendor-btn text-center rounded  vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-pen"></i></p>
                            <p class="text-white m-0">Quick change</p>
                        </div>
                    </div>
                </a>

                <a href="{{route('vendor_profile')}}">
                    <div class="vendor-btn text-center rounded vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-user"></i></p>
                            <p class="text-white m-0">Profile</p>
                        </div>
                    </div>
                </a>


            </div>

        </div>
    </div>






    @include('vendor.layout.navigation')
    @include('layouts.scripts')
</body>

</html>