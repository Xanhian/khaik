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
                <button class="delete-item-box " data-toggle="modal" data-target="#owner{{$info->id}}">
                    <i class="fa-solid fa-user"></i>

                </button>
                <a target="blank" href="{{route('restaurant',['restaurant_name' => $info->restaurant_name, 'restaurant_id'   => $info->id ])}}"><i class="fa-solid fa-eye"></i></a>
            </div>



        </div>
        <div class=" modal fade" id="owner{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <h4 class="border-bottom">Owner</h4>
                        <div class="form-group">
                            <p>Owners name:</p>
                            <input type="text" value="{{$info->name}}" readonly class="form-control">
                        </div>
                        <div class="form-group">
                            <p>Owners lastname:</p>
                            <input type="text" value="{{$info->lastname}}" readonly class="form-control">
                        </div>
                        <div class="form-group">
                            <p>Owners email:</p>
                            <input type="text" value="{{$info->email}}" readonly class="form-control">
                        </div>

                    </div>

                    <div class="modal-footer p-0 border-0">

                        <button type="button" class="btn border-top btn-block" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</body>
@include('layouts.scripts')


</html>