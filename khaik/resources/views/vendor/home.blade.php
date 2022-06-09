<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<div class="d-none">
    <div class="bg-primary p-3 d-flex align-items-center">
        <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
    </div>
</div>

<body class="fixed-bottom-bar vh-100 d-flex flex-column align-bottom">


    <div class="container">
        Your restaurant is almost done!!
    </div>

    <div class="container">
        <h1>Total viewers:10</h1>
        <h1>Total Favorites:1</h1>
        <h1>Most like food: Kip</h1>
    </div>
    <div class="container ">
        <div class="row w-100 mx-auto">
            <div class="col-6 p-0">
                <a href="{{route('vendor_menu')}}">
                    <div class="box w-100">
                        <p>Menu</p>
                    </div>
                </a>
                <a href="{{route('vendor_restaurant')}}">
                    <div class="box w-100">
                        <p>Restaurant</p>
                    </div>
                </a>

            </div>
            <div class="col-6 p-0">
                <a href="{{route('vendor_restaurant')}}">
                    <div class="box  w-100">
                        <p>Restaurant opening closing time</p>
                    </div>
                </a>
                <a href="{{route('vendor_restaurant')}}">
                    <div class="box  w-100">
                        <p>Restaurant opening closing time</p>
                    </div>
                </a>


            </div>

        </div>
    </div>


    @include('layouts.navigation')
    @include('layouts.scripts')
</body>

</html>