<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="fixed-bottom-bar">
  <div class="osahan-popular">
    <div class="d-none">
      @include('components.logo')

    </div>
    @guest('users')
    @include('components.guest_btn')
    @endguest
    @auth('users')
    <div class="container">
      <div class="most_popular py-5">
        <div class="d-flex align-items-center mb-4">
          <h3 class="font-weight-bold mb-0">Deals</h3>
        </div>

        <div class="row d-flex flex-column">
          <div class="container">
            @foreach($deals as $deal)

            <div class="card shadow-sm mb-5">
              <div class="card-header">
                <a href="{{route('restaurant',['restaurant_name'=>$deal->restaurant_name, 'restaurant_id'=>$deal->restaurant_id])}}" class="text-black">
                  <div class="row my-auto">
                    <img class="mr-3  menu-image-display rounded-pill " src="{{asset($deal->restaurant_header_photo)}}" alt="">
                    <h1 class="my-auto">{{$deal->restaurant_name}}</h1>
                  </div>
                </a>
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


    </div>
    @include('layouts.navigation')

  </div>
  @include('components.desktop')

  @include('layouts.scripts')

</body>

</html>