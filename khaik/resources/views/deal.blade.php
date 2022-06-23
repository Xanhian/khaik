<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="fixed-bottom-bar">

  <div class="osahan-popular">
    <div class="d-none">
      <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
      </div>
    </div>
    @auth('users')
    <div class="container">
      <div class="most_popular py-5">
        <div class="d-flex align-items-center mb-4">
          <h3 class="font-weight-bold text-dark mb-0">Deals</h3>
        </div>

        <div class="row d-flex flex-column">
          <div class="container">
            @foreach($deals as $deal)
            <div class="card shadow-sm mb-5">
              <div class="card-header">
                <div class="row my-auto">
                  <img src="" alt="">
                  <p class="m-0">restaurant</p>
                </div>

              </div>
              <img src="{{asset($deal->deal_photo)}}" alt="">
              <div class="container mt-3">

                <h1>
                  {{$deal->deal_name}}
                </h1>
                <p>
                  {{$deal->deal_description}}
                </p>
              </div>
            </div>
            @endforeach
          </div>
        </div>


      </div>
      @endauth
      @guest('users')
      <h1>Please Log in or SignUp to use this feature</h1>
      @endguest

    </div>
    @include('layouts.navigation')
    @include('layouts.scripts')
</body>

</html>