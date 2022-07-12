<!DOCTYPE html>
<html lang="en">

@include('layouts.head')



<body class="fixed-bottom-bar  d-flex flex-column  ">
    <div class="row-fluid w-100 ">

        @include('components.logo')
    </div>


    <div class="container-fluid  ">
        <div class="row">
            <a href="{{route('admin_home')}}" class="my-auto mr-3 p-1 rounded btn-primary text-white">Go back</a>

            <h4 class="my-3">Restaurants</h4>

        </div>

        @foreach($data as $info)
        <div class="mt-3 row bg-white border rounded">
            <img src="" alt="">
            <div class="col  ">
                <h1 class="m-2"> {{$info->restaurant_name}}</h1>
                <p class="m-2">{{$info->restaurant_addres}}</p>
            </div>
            <div class="col-3 text-center my-auto">
                <a target="blank" href="../restaurant/{{$info->restaurant_name}}/{{$info->id}}"><i class="fa-solid fa-eye"></i></a>
            </div>



        </div>

        @endforeach

    </div>
</body>
@include('layouts.scripts')


</html>