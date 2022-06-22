<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="fixed-bottom-bar">

  <div class="osahan-profile">
    <div class="bg-primary p-3 d-none n">
      <div class="text-white">
        <div class="title d-flex align-items-center">

          <h4 class="font-weight-bold m-0 ">Khaik</h4>

        </div>
      </div>
    </div>
    <!-- profile -->
    <div class="container position-relative">
      <div class="py-5 osahan-profile row">
        <div class="col-md-4 mb-3">
          <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
            <a href="profile.html" class="">
              <div class="d-flex align-items-center p-3">

                <div class="right">
                  <h6 class="mb-1 font-weight-bold">
                    {{Session('owners_name')}} {{Session('owners_lastname')}}
                    <i class="feather-check-circle text-success"></i>
                  </h6>
                  <p class="text-muted m-0 small">{{Session('owners_email')}}</p>
                </div>
              </div>
            </a>

            <!-- profile-details -->
            <div class="bg-white profile-details"></div>
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
                      <form action="{{route('vendor_profile_edit')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                          <p>userename</p>
                          <input type="text" class="form-control" name="name" id="">
                        </div>

                        <div class="form-group">
                          <p>lastname</p>
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
              <div>
                <form action="my_account.html">
                  <div class="form-group">
                    <label for="exampleInputName1">First Name</label>
                    <p> {{Session('owners_name')}}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Last Name</label>
                    <p>{{Session('owners_lastname')}}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNumber1">Mobile Number</label>
                    <p>{{Session('owners_phonenumber')}}</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <p>{{Session('owners_email')}}</p>


                  </div>

              </div>
            </div>
          </div>
          <a href="{{route('vendor_logout')}}" class="btn btn-primary text-white btn-block">Logout</a>

        </div>

        <!-- Footer -->

      </div>
      @include('vendor.layout.navigation')
      @include('layouts.scripts')
</body>

</html>