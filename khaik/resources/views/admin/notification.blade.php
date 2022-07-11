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

            <h4 class="my-3">Notification</h4>

        </div>
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            <p>
                {{session('status')}}

            </p>
        </div>
        @endif

        <div class="mt-3 row bg-white border rounded">
            <div class="container">
                <div class="row">

                </div>
            </div>
            <div class="container pb-3">
                <h4 class="py-2">Send Notification</h4>
                <form action="{{route('send_notification')}}" method="post">
                    @csrf

                    <div class="from-group mb-3">
                        <label class="m-0">Notification Title</label>

                        <input class="form-control" type="text" name="title" required>
                    </div>

                    <div class="form-group">
                        <label class="m-0">Notification body</label>
                        <input class="form-control" type="text" name="body" id="">
                    </div>

                    <div class="form-group">
                        <label class="m-0">Send to</label>
                        <select class="form-control" name="users">
                            <option value="vendor">vendor</option>
                            <option value="user">users</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Send">
                </form>

            </div>


        </div>



    </div>
</body>
@include('layouts.scripts')


</html>