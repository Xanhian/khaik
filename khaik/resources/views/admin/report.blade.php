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

            <h4 class="my-3">Reports</h4>

        </div>
        @foreach($data as $info)

        <div class="mt-3 row bg-white border rounded">

            <div class="col  ">
                <h1 class="m-2"> {{$info->restaurant_name}} </h1>
                <p class="m-2">Reason: {{$info->reason}}</p>
            </div>

            <div class="col-2 d-flex flex-row text-center justify-content-between my-auto">

                <a target="blank" href="../restaurant/{{$info->restaurant_name}}/{{$info->id}}"><i class="fa-solid fa-eye"></i></a>

                <form action="{{route('report_solve')}}" method="POST">
                    @csrf
                    <input type="hidden" name="report_id" value="{{$info->id}}">
                    <input type="hidden" name="restaurant_id" value="{{$info->restaurant_id}}">
                    <input type="hidden" name="reason" value="{{$info->reason}}">
                    <button class="delete-item-box " type="submit">
                        <i class="fa-solid fa-xmark fa-xl"></i>
                    </button>
                </form>

            </div>


        </div>
        @endforeach


    </div>
</body>
@include('layouts.scripts')


</html>