<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-bottom-bar">

    <div class="osahan-favorites">
        <div class="bg-primary p-3 d-none n">
            <div class="text-white">
                <div class="title d-flex align-items-center">

                    <h4 class="font-weight-bold m-0 ">Khaik</h4>

                </div>
            </div>
        </div>
        <!-- Most popular -->
        <div class="container most_popular py-5">
            <h3 class="font-weight-bold mb-3">Favorites</h3>
            <div class="row">
                @foreach($favorite_restaurants as $favorite_restaurant)
                <div class="col-md-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">

                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <div class="d-flex flex-row">
                                    <img alt="#" src="{{asset($favorite_restaurant->restaurant_header_photo)}}" alt="askbootstrap" class="mr-3 my-auto menu-image-display rounded-pill ">
                                    <div class="col">
                                        <h6 class="mb-1">
                                            <a href="restaurant.html" class="text-black">
                                                {{$favorite_restaurant->restaurant_name}}
                                            </a>
                                        </h6>
                                        <p class="text-gray m-0 ">Addres</p>
                                        <p class="text-gray m-0">Cattegories</p>
                                    </div>
                                    <div class="col-2 mx-auto my-auto">
                                        <form class="article_delete_form" action="{{route('favorite_delete')}}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <input type="hidden" name="restaurant_id" value="{{$favorite_restaurant->id}}" />
                                            <button type="submit" class="delete-item-box"> <i class="fa-solid fa-xmark fa-2xl p-3"></i></button>
                                        </form>
                                    </div>



                                </div>



                            </div>

                        </div>
                    </div>

                </div>

                @endforeach
            </div>


        </div>

    </div>
    @include('layouts.navigation')
    @include('layouts.scripts')
</body>

</html>