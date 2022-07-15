<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="fixed-bottom-bar">

  <div class="osahan-profile">
    @include('components.logo')

    <!-- profile -->


    <div class="container position-relative">
      <div class="toast mx-auto shadow-none border-0 mt-3" id="show_notify" role="status" aria-atomic="false" data-autohide="true" data-delay="2000">
        <div class="toast-header">

          <strong class="mr-auto">Notification</strong>

          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Notification turned on!
        </div>
      </div>


      <div class="py-5 osahan-profile row">
        <div class="col-md-4 mb-3">
          <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">

            <div class="d-flex align-items-center justify-content-between p-3">

              <div class="right">
                <h6 class="mb-1 font-weight-bold">
                  {{Session('owners_name')}} {{Session('owners_lastname')}}
                  @if(Session('owners_verified_status')==4)
                  <i class="feather-check-circle text-success"></i>
                  @endif
                </h6>
                <p class="text-muted m-0 small">{{Session('owners_email')}}</p>
              </div>
              <button onclick="startFCM()" class=" btn btn-primary text-white"> Allow <i class="fa-solid fa-bell"></i></button>

            </div>


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
                          <p>First name</p>
                          <input type="text" class="form-control" name="name" id="">
                        </div>

                        <div class="form-group">
                          <p>Last name</p>
                          <input type="text" name="lastname" class="form-control" id="">
                        </div>

                        <div class="form-group">
                          <p>Mobile Number</p>
                          <input type="text" name="mobilenumber" class="form-control" id="">

                        </div>
                        <div class="form-group">
                          <p>Emaill</p>
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
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>

<script>
  $(document).ready(function() {
    $('#show_notify').hide();
    $('#show_notify').toast('hide');

  });

  var firebaseConfig = {
    apiKey: "AIzaSyBDDL44Xnl6QtpCqLmMvxB00GYL276HWfY",
    authDomain: "test683-430b9.firebaseapp.com",
    projectId: "test683-430b9",
    storageBucket: "test683-430b9.appspot.com",
    messagingSenderId: "353829315143",
    appId: "1:353829315143:web:8cfe79961d688177c58762",
    measurementId: "G-VDC6F63M9T"
  };

  firebase.initializeApp(firebaseConfig);
  const messaging = firebase.messaging();

  function startFCM() {
    messaging
      .requestPermission()
      .then(function() {
        return messaging.getToken()
      })
      .then(function(response) {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: '{{ route("store_token") }}',
          type: 'POST',
          data: {
            token: response
          },
          dataType: 'JSON',
          success: function(response) {
            $('#show_notify').show();


            $('#show_notify').toast('show');
            setTimeout(function() {
              $('#show_notify').hide();

            }, 2000);

          },
          error: function(error) {

          },
        });

      }).catch(function(error) {
        alert(error);
      });
  }
</script>

</html>