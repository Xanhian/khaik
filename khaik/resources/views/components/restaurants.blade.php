@foreach($restaurants_info as $restaurant_info)
<div class="col-md-3 pb-3">
    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
        <div class="list-card-image">

            <a href="restaurant/{{$restaurant_info->id}}">
                <img alt="#" src="{{asset($restaurant_info->restaurant_header_photo)}}" class="img-fluid item-img restaurant-img w-100">
            </a>
            <div class="star position-absolute"><span class="badge badge-success">Open</span></div>

        </div>
        <div class="p-3 position-relative">
            <div class="list-card-body">
                <h6 class="mb-1 p-0">
                    <a href="restaurant/{{$restaurant_info->id}}" class="text-black"> {{$restaurant_info->restaurant_name}}</a>
                </h6>
                <p>{{$restaurant_info->restaurant_addres}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach