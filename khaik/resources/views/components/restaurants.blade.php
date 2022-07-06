@foreach($categories as $category)

<div class="container w-100 mx-auto py-3 title d-flex flex-row justify-content-between align-items-center">
    <h5 id="{{$category->id}}" class="m-0">{{$category->restaurant_category_name}}</h5>
    <form action="{{route('filter_search')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="search" value="{{$category->restaurant_category_name}}" />

        <button class="btn bg-primary font-weight-bold ml-auto text-white" type="submit">View all <i class="fa-solid fa-angles-right"></i></button>

    </form>
</div>



@foreach($restaurants_info[$category->id] as $restaurant_info)

<div class="col-md-3 pb-3">
    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
        <div class="list-card-image">

            <a href="restaurant/{{$restaurant_info->restaurant_name}}/{{$restaurant_info->id}}">
                <img alt="#" src="{{asset($restaurant_info->restaurant_header_photo)}}" class="img-fluid item-img restaurant-img w-100">
            </a>
            @switch($restaurant_info->restaurant_custom_status)
            @case(null)
            @if($today_state[$restaurant_info->id]=="open")
            <div class="star position-absolute"><span class="badge badge-success">Open</span></div>
            @else
            <div class="star position-absolute"><span class="badge badge-danger">CLosed</span></div>

            @endif
            @break

            @case('open')
            <div class="star position-absolute"><span class="badge badge-success">Open</span></div>

            @break
            @case('closed')
            <div class="star position-absolute"><span class="badge badge-danger">CLosed</span></div>
            @break
            @case('maintence')
            <div class="star position-absolute"><span class="badge badge-warning">Maintence</span></div>
            @break


            @endswitch


        </div>
        <div class="p-3 position-relative">
            <div class="list-card-body">
                <h6 class="mb-1 p-0">
                    <a href="restaurant/{{$restaurant_info->restaurant_name}}/{{$restaurant_info->id}}" class="text-black"> {{$restaurant_info->restaurant_name}}</a>
                </h6>
                <p>{{$restaurant_info->restaurant_addres}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach @endforeach