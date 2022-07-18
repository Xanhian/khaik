<!DOCTYPE html>
<html lang="en">

@include('layouts.head')



<body class="fixed-bottom-bar vh-100 d-flex flex-column justify-content-between ">

    <div class="row-fluid w-100">
        @include('components.logo')

        <div class="container bg-white rounded">
            <div class="card mt-3">
                <div class="col p-4">
                    <p>Total reports to check: {{$reports}}</p>
                    <p>Total restaurants to verify: {{$restaurants}}</p>


                </div>
            </div>

        </div>

    </div>

    <div class="container position-relative align-bottom ">

        <div class=" row w-100 ">

            <div class=" col-6 p-1 ">
                <a href="{{route('admin_aprove')}}">
                    <div class="vendor-btn text-center rounded  vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-check"></i> </p>
                            <p class="text-white m-0">Approve</p>
                        </div>

                    </div>
                </a>
                <a href="{{route('admin_adduser')}}">
                    <div class="vendor-btn text-center rounded vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-plus"></i></p>
                            <p class="text-white m-0">Add user</p>
                        </div>

                    </div>
                </a>
                <a href="{{route('admin_restaurants')}}">
                    <div class="vendor-btn text-center rounded  vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-eye"></i></p>
                            <p class="text-white m-0">View all restaurant</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-6 p-1 ">
                <a href="{{route('admin_reports')}}">
                    <div class="vendor-btn text-center rounded vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-exclamation"></i></p>
                            <p class="text-white m-0">Reports</p>
                        </div>
                    </div>
                </a>
                <a href="{{route('admin_notification')}}">
                    <div class="vendor-btn text-center rounded  vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-bell"></i></p>
                            <p class="text-white m-0">Notification</p>
                        </div>
                    </div>
                </a>
                <a href="{{route('admin_message')}}">
                    <div class="vendor-btn text-center rounded  vendor-menu-btn m-2 w-100 d-flex align-items-center">
                        <div class="mx-auto">
                            <p class="vendor-btn-text text-white m-0"><i class="fa-solid fa-envelope"></i></p>
                            <p class="text-white m-0">Send message</p>
                        </div>
                    </div>
                </a>



            </div>

        </div>
    </div>
</body>
@include('layouts.scripts')

</html>