@foreach($categories as $category)
<div class="py-3 title d-flex align-items-center">
    <h5 id="{{$category->id}}" class="m-0">{{$category->restaurant_category_name}}</h5>
    <!-- <a class=" font-weight-bold ml-auto" href="most_popular.html">26 places <i class="feather-chevrons-right"></i></a> -->
</div>

@foreach($restaurants_info[$category->id] as $restaurant_info)

<div class="col-md-3 pb-3">
    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
        <div class="list-card-image">

            <a href="restaurant/{{$restaurant_info->id}}">
                <img alt="#" src="{{asset($restaurant_info->restaurant_header_photo)}}" class="img-fluid item-img restaurant-img w-100">
            </a>
            @if($today_state[$restaurant_info->id]=="open")
            <div class="star position-absolute"><span class="badge badge-success">Open</span></div>
            @else
            <div class="star position-absolute"><span class="badge badge-danger">CLosed</span></div>

            @endif
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
@endforeach @endforeach