@auth('admins')

@else

<div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">

    <div class="row">
        <div id="home" data-active="false" class="col">
            <a href="{{route('main')}}" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-home "></i></p>
                Home
            </a>
        </div>
        <div id="deals" class="col ">
            <a href="{{route('deals')}}" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-gift"></i></p>
                Deals
            </a>
        </div>
        <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
            <div class="bg-danger rounded-circle mt-n0 shadow">
                <a href="{{route('camera')}}" class="text-white small font-weight-bold text-decoration-none">
                    <i class="feather-camera"></i>
                </a>
            </div>
        </div>
        <div id="favorite" class="col">
            <a href="{{route('favorite')}}" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-heart"></i></p>
                Favorites
            </a>
        </div>
        <div id="profile" class="col">
            <a href="{{route('profile')}}" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-user"></i></p>
                Profile
            </a>
        </div>
    </div>
</div>
@endauth