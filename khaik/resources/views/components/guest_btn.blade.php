<div class="container my-auto d-flex flex-column flex-stretch">
    <div class="card-header mt-5 bg-primary">

        <a href="{{route('main')}}">
            <img src="{{asset('vendor_code/background/logo.png')}}" class="logo" alt="" srcset="">

        </a>
    </div>
    <div class="card w-100  p-5 text-center ">

        <div class="card-body p-0 ">


            <p>To see certain features or use certain functions on this website. </br>You need to register or Log in.</p>
            <h1 class="font-weight-bold text-dark">Please sign up or Log in</h1>
            <div class=" mx-auto text-center d-flex flex-row justify-content-center">
                <div class="col-5">
                    <a href="{{route('user_register')}}" class="btn  btn-white text-dark  btn-block  border border-primary  ">Register</a>

                </div>
                <div class="col-5">
                    <a href="{{route('user_login')}}" class="btn  btn-primary  btn-block  ">Log in</a>

                </div>
            </div>

        </div>
    </div>


</div