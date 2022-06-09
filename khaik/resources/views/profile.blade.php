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
                <div class="left mr-3">
                  <img alt="#" src="img/user1.jpg" class="rounded-circle" />
                </div>
                <div class="right">
                  <h6 class="mb-1 font-weight-bold">
                    Gurdeep Singh
                    <i class="feather-check-circle text-success"></i>
                  </h6>
                  <p class="text-muted m-0 small">iamosahan@gmail.com</p>
                </div>
              </div>
            </a>

            <!-- profile-details -->
            <div class="bg-white profile-details"></div>
          </div>
        </div>
        <div class="col-md-8 mb-3">
          <div class="rounded shadow-sm p-4 bg-white">
            <h5 class="mb-4">My account</h5>
            <div id="edit_profile">
              <div>
                <form action="my_account.html">
                  <div class="form-group">
                    <label for="exampleInputName1">First Name</label>
                    <p>Kyle</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Last Name</label>
                    <p>Tasmoredjo</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNumber1">Mobile Number</label>
                    <p>+597 899-4060</p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <p>Kyletasmoredjo@gmail.com</p>


                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
          <div class="row">
            <div class="col">
              <a href="home.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
                Home
              </a>
            </div>
            <div class="col">
              <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                Trending
              </a>
            </div>
            <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
              <div class="bg-danger rounded-circle mt-n0 shadow">
                <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                  <i class="feather-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="col">
              <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-heart"></i></p>
                Favorites
              </a>
            </div>
            <div class="col selected">
              <a href="profile.html" class="text-danger small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-user"></i></p>
                Profile
              </a>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.navigation')
      @include('layouts.scripts')
</body>

</html>