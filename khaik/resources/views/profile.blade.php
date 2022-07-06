<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="fixed-bottom-bar">

  <div class="osahan-profile">
    @include('components.logo')

    <!-- profile -->
    @guest('users')
    @include('components.guest_btn')
    @endguest
    <div class="container position-relative">
      @auth('users')

      <div class="py-5 osahan-profile row">
        <div class="col-md-4 mb-3">
          <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">

            <div class="d-flex align-items-center p-3">

              <div class="right">
                <h6 class="mb-1 font-weight-bold">
                  {{Session('user_name')}} {{Session('user_lastname')}}

                </h6>
                <p class="text-muted m-0 small">{{Session('user_email')}}</p>
              </div>
            </div>


          </div>
        </div>

        <div class="col-md-8 mb-3">
          <div class="rounded shadow-sm p-4 bg-white">
            <div class="row justify-content-between">
              <h5 class="mb-4">My account</h5>
              <a data-toggle="modal" data-target="#edit_account" class="text-decoration-none text-dark mr-3"><i class="p-2 bg-light btn-primary rounded-circle font-weight-bold fa-solid fa-pen"></i></a>
            </div>
            <div class=" modal fade" id="edit_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="shadow-sm rounded bg-white p-4 overflow-hidden">
                    <div class="d-flex item-aligns-center">
                      <h2 class="font-weight-bold h4 pb-2 text-dark border-bottom mb-0 w-100">Edit profile</h2>
                    </div>
                    <div class="col-11 mx-auto">
                      <form action="{{route('user_change')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                          <p>First name</p>
                          <input type="text" class="form-control" name="name" id="">
                        </div>

                        <div class="form-group">
                          <p>Last name</p>
                          <input type="text" name="lastname" class="form-control" id="">
                        </div>

                        <div class="form-group">
                          <p>mobile number</p>
                          <input type="text" name="mobilenumber" class="form-control" id="">

                        </div>
                        <div class="form-group">
                          <p>emaill</p>
                          <input type="text" class="form-control" name="email" id="">

                        </div>


                        <input type="submit" class="btn btn-primary" value="Change">




                      </form>
                    </div>

                  </div>

                </div>
              </div>
            </div>

            <div id="edit_profile">
              <div class="form-group">
                <label for="exampleInputName1">First Name</label>
                <p>{{Session('user_name')}}</p>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Last Name</label>
                <p>{{Session('user_lastname')}}</p>
              </div>
              <div class="form-group">
                <label for="exampleInputNumber1">Mobile Number</label>
                <p>{{Session('user_phonenumber')}}</p>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <p>{{Session('user_email')}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endauth


      @include('layouts.navigation')
      @include('layouts.scripts')
</body>

</html>