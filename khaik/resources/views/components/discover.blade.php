<div class="discover-slider">
    @foreach($discover_restaurants as $discover_restaurant)

    <div class="osahan-slider-item discover-box  position-relative">

        <div class="list-card h-100 rounded overflow-hidden border-radius position-relative shadow-sm">
            <div class="col p-0 mx-auto position-relative">




                <a href="restaurant.html">
                    <div class="text-center">
                        <img alt="#" src="{{asset($discover_restaurant->restaurant_header_photo)}}" class="img-fluid rounded mx-auto item-img discover-img">
                        <div class="badge rest_name_place position-absolute bg-primary"><span class=" text-white  "> {{$discover_restaurant->restaurant_name}}</span></div>

                        @if($today_state[$discover_restaurant->id]=="open")
                        <div class="star position-absolute"><span class="badge badge-success">Open</span></div>
                        @else
                        <div class="star position-absolute"><span class="badge badge-danger">CLosed</span></div>

                        @endif

                    </div>




                </a>





            </div>
        </div>
    </div>



    @endforeach


</div>