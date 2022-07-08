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

            <h4 class="my-3">Verify Restaurant</h4>

        </div>

        @foreach($data as $info)
        <div class="mt-3 row bg-white border rounded">
            <img src="" alt="">
            <div class="col-8  ">
                <h1 class="m-2"> {{$info->restaurant_name}}</h1>
                <p class="m-2">{{$info->restaurant_addres}}</p>
            </div>
            <div class="col-1 text-center my-auto">
                <a target="blank" href="../restaurant/{{$info->restaurant_name}}/{{$info->id}}"><i class="fa-solid fa-eye"></i></a>
            </div>
            <div class="col-1 text-center my-auto">
                <button class="delete-item-box " data-toggle="modal" data-target="#modal{{$info->id}}">
                    <i class="fa-solid fa-xmark fa-xl"></i>
                </button>
            </div>


            <div class="col-1 text-center my-auto ">
                <form action="{{route('admin_aprove_accept')}}" method="POST">
                    @csrf
                    <input type="hidden" name="restaurant_id" value="{{$info->id}}">
                    <button class="delete-item-box" type="submit"><i class="fa-solid fa-check fa-xl"></i></button>
                </form>
            </div>

        </div>
        <div class=" modal fade" id="modal{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <h4 class="border-bottom">Disaprove Form </h4>
                        <form action="{{route('admin_aprove_denied')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="col">
                                    <label>Restaurant ID</label>
                                    <input type="text" name="restaurant_id" value="{{$info->id}}" readonly class="form-control">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <label>Restaurant Name</label>
                                    <input type="text" name="restaurant_name" value="{{$info->restaurant_name}}" readonly class="form-control">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col">
                                    <label>Reason</label>
                                    <textarea class="form-control" name="restaurant_reason" id="" cols="30" rows="5"></textarea>
                                </div>
                                @error('restaurant_reason')
                                <div class="p-1">*{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary btn-block" value="Send">

                            </div>
                        </form>

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