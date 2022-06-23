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
                            <input type="text" name="name" placeholder="Enter Name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1" class="text-dark">Last name</label>
                            <input type="text" name="lastname" placeholder="Enter Last name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1" class="text-dark">Email</label>
                            <input type="text" name="email" placeholder="Enter Email" class="form-control" id="exampleInputNumber1" aria-describedby="numberHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1" class="text-dark">Mobile Number</label>
                            <input type="number" name="phonenumber" placeholder="Enter Mobile" class="form-control" id="exampleInputNumber1" aria-describedby="numberHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-dark">Password</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-dark">Re-enter password</label>
                            <input type="password" name="repassword" placeholder="Re-enter password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary btn-md btn-block">
                            SIGN UP
                        </button>

                    </form>
                </div>
                <div class="new-acc d-flex align-items-center justify-content-center">
                    <a href="login.html">
                        <p class="text-center m-0">Already an account? Sign in</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @include('layouts.scripts')
</body>

</html>