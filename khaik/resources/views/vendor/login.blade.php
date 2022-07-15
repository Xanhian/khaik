<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    <div class="login-page bg-white ">

        <div class="d-flex flex-column align-items-center bg-white  ">
            <img src="{{asset('img/register-bg.png')}}" alt="" srcset="" class="w-100 mx-auto" />

            <div class="px-5 col-md-6 ml-auto ">
                <div class="px-5 col-10 mx-auto">



                    <h2 class="text-dark mt-3">Welcome Back</h2>
                    <p class="text-50">Sign in to continue</p>
                    <form class="mt-5 mb-4" method="POST" action="{{ route('login_request') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-dark">Email</label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                            <div class=" mb-1">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleInputPassword1" class="text-dark">Password</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" id="exampleInputPassword1">
                            @error('password')
                            <div class="mb-1">*{{ $message }}</div>
                            @enderror
                            @if(session('status'))
                            <div class="text-danger">
                                *{{ session('status') }}
                            </div>
                            @endif
                        </div>

                        <button class="btn btn-primary  btn-block">SIGN IN</button>


                    </form>

                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{route('register_vendor')}}">
                            <p class="text-center m-0">Don't have an account? Sign up</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.desktop')

    @include('layouts.scripts')
</body>

</html>