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

            <h4 class="my-3">Send Message</h4>



        </div>
        <div class="col p-0">
            <h1>Search restaurant name or id</h1>
            <form action="{{route('admin_message_search')}}" method=" get">
                @csrf

                <div class="form-group d-flex ">
                    <input type="text" class="form-control" name="restaurant">
                    <input type="submit" class="btn btn-primary" value="Search">

                </div>

            </form>
        </div>
        @isset($data)
        @foreach($data as $info)

        <div class="mt-3 row bg-white border rounded">
            <img src="" alt="">
            <div class="col  ">
                <h1 class="m-4"> {{$info->restaurant_name}} </h1>


            </div>

            <div class="col-2 d-flex flex-row text-center  my-auto">

                <a target="blank" href="../restaurant/{{$info->restaurant_name}}/{{$info->id}}"><i class="fa-solid fa-eye"></i></a>
                <a data-toggle="modal" data-target="#modal{{$info->id}}" class="mx-3"><i class="fa-solid fa-square-arrow-up-right"></i></a>


            </div>

            <div class=" modal fade" id="modal{{$info->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-body">
                            <h4 class="border-bottom">Send message</h4>
                            <form action="{{route('admin_send_message')}}" method="post">
                                @csrf
                                <input type="hidden" name="owerns_id" value="{{$info->owner_id}}">
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
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    @error('title')
                                    <div class="p-1">*{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <div class="col">
                                        <label>Message</label>
                                        <textarea class="form-control" name="body" id="" cols="30" rows="5"></textarea>
                                    </div>
                                    @error('body')
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
        </div>
        @endforeach
        @endisset

    </div>
</body>
@include('layouts.scripts')


</html>