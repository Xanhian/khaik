<!DOCTYPE html>
<html lang="en">

@include('layouts.head')



<body class="fixed-bottom-bar  d-flex flex-column  ">
    <div class="row-fluid w-100 ">

        @include('components.logo')
    </div>


    <div class="container-fluid  ">

        <div class="row">
            <div class="col-8">
                <div class="row">
                    <a href="{{route('admin_home')}}" class="my-auto mr-3 p-1 rounded btn-primary text-white">Go back</a>
                    <h4 class="my-3">Users</h4>
                </div>

            </div>
            <div class="col-4 d-flex justify-content-end p-0 my-auto">
                <button class="btn btn-primary ml-auto btn-sm" data-toggle="modal" data-target="#adduser"><i class="fa-solid fa-user-plus"></i>Add user</button>

            </div>



        </div>

        @foreach($data as $info)


        <div class=" mt-3 row bg-white border rounded">
            <img src="" alt="">
            <div class="col ">
                <h1 class="m-2">{{$info->email}}</h1>
                <p class="m-2">Auth level: {{$info->auth_level }}</p>
            </div>

            <div class="col-2 text-center my-auto">
                <form action="{{route('delete_user')}}" method="post">
                    @csrf
                    <input type="hidden" name="admin_id" value="{{$info->id}}">
                    <input type="hidden" name="auth_level" value="{{$info->auth_level}}">
                    <button class="delete-item-box " data-toggle="modal" data-target="#modal">
                        <i class="fa-solid fa-xmark fa-xl"></i>
                    </button>
                </form>

            </div>

        </div>

        @endforeach


    </div>
    <div class=" modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <h4 class="border-bottom">Add User </h4>
                    <form action="{{route('store_user')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label>Auth level</label>
                                <select name="auth_level" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>

                                </select>
                            </div>

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

</body>
@include('layouts.scripts')


</html>