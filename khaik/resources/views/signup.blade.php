<!DOCTYPE html>
<html lang="en">

@include('layouts.head')


<body>
    <div class="osahan-signup login-page">

        <div class="d-flex align-items-center justify-content-center flex-column vh-100">
            <div class="px-5 col-md-6 ml-auto">
                <div class="px-5 col-10 mx-auto">
                    <h2 class="text-dark my-0">Hello There.</h2>
                    <p class="text-50">Sign up to continue</p>
                    <form class="mt-5 mb-4" action="{{route('user_save')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label for="exampleInputName1" class="text-dark">Name</label>
                            <input type="text" name="name" placeholder="Enter Name" class="form-control" aria-describedby="nameHelp">
                            @error('name')
                            <div class=" mb-1">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1" class="text-dark">Last name</label>
                            <input type="text" name="lastname" placeholder="Enter Last name" class="form-control" aria-describedby="nameHelp">
                            @error('lastname')
                            <div class=" mb-1">*{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1" class="text-dark">Email</label>
                            <input type="text" name="email" placeholder="Enter Email" class="form-control" aria-describedby="numberHelp">
                            @error('email')
                            <div class=" mb-1">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1" class="text-dark">Mobile Number</label>
                            <input type="number" name="phonenumber" placeholder="Enter Mobile" class="form-control" aria-describedby="numberHelp">
                            @error('phonenumber')
                            <div class=" mb-1">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-dark">Password</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            @error('password')
                            <div class=" mb-1">*{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-dark">Re-enter password</label>
                            <input type="password" name="repassword" placeholder="Re-enter password" class="form-control">
                            @error('repassword')
                            <div class=" mb-1">*{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-md btn-block">
                            Sign Up
                        </button>

                    </form>
                </div>
                <div class="new-acc d-flex align-items-center justify-content-center">
                    <a href="{{route('user_login')}}">
                        <p class="text-center m-0">Already an account? Sign in</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('components.desktop')

    <!-- Bootstrap core JavaScript -->
    @include('layouts.scripts')
</body>

</html>