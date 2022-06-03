<div class="discover-slider">
    @foreach($restaurants_info as $restaurant_info)

    <div class="osahan-slider-item ">

        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
            <div class="row">
                <div class="col-8">
                    <div class="list-card-image">
                        <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>

                        <a href="restaurant.html">
                            <img alt="#" src="{{asset($restaurant_info->restaurant_header_photo)}}" class="img-fluid item-img discover-img w-100">

                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3 position-relative ">
                        <div class="list-card-body ">
                            <h6 class="mb-1"><a href="restaurant.html" class="text-black text-wrap">
                                    {{$restaurant_info->restaurant_name}}
                                </a>
                            </h6>
                            <p class="text-gray mb-3"> </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endforeach


</div>