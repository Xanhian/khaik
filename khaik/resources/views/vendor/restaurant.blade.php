<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Askbootstrap" />
  <meta name="author" content="Askbootstrap" />
  <link rel="icon" type="image/png" href="img/fav.png" />
  <title>Khaik</title>
  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
  <!-- Feather Icon-->
  <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css" />
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Sidebar CSS -->
  <link href="vendor/sidebar/demo.css" rel="stylesheet" />


</head>

<body class="fixed-bottom-bar">
  <header class="section-header">
    <section class="header-main shadow-sm bg-white">
      @include('layouts.topnavigation')
    </section>
  </header>

  <div class="osahan-profile">
    <div class="d-none">
      <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <a class="toggle togglew toggle-2" href="#"><span></span></a>
        <h4 class="font-weight-bold m-0 text-white">Profile</h4>
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
                    {{Session::get('owners_name')}}
                    <i class="feather-check-circle text-success"></i>
                  </h6>
                  {{Session::get('owners_email')}}
                  <p class="text-muted m-0 small"></p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-8 mb-3">
          <div class="rounded shadow-sm p-4 bg-white">
            <h5 class="mb-4">Create Restaurant</h5>
            <div id="edit_profile">
              <form method="POST" enctype="multipart/form-data" action="{{ route('save_restaurant') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                  <label for="exampleInputName1">Restaurant Name</label>
                  <input type="text" name="restaurant_name" value="{{old('restaurant_name')}}" class="form-control">
                  @error('restaurant_name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Restaurant Description</label>
                  <textarea name="restaurant_description" class="form-control">{{old('restaurant_description')}}</textarea>
                  @error('restaurant_description')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputNumber1">Restaurant Phonenumber</label>
                  <input type="number" name="restaurant_phonenumber" class="form-control" id="exampleInputNumber1" value="{{old('restaurant_phonenumber')}}" placeholder="1234567">
                  @error('restaurant_phonenumber')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Restaurant Photo</label>
                  <input type="file" name="restaurant_image" class="form-control" placeholder="Choose image" id="image">
                  @error('restaurant_image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Restaurant Addres</label>
                  <input type="text" name="restaurant_addres" value="{{old('restaurant_addres')}}" class="form-control">
                  @error('restaurant_addres')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Restaurant Place</label>
                  <input type="text" name="restaurant_place" value="{{old('restaurant_place')}}" class="form-control">
                  @error('restaurant_place')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Restaurant Country</label>
                  <select name="restaurant_country" class="form-control" id="">
                    <option value="SUR">Suriname</option>
                  </select>
                  @error('restaurant_country')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <a data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="option1 option2 option3">
                    <label for="exampleInputName1">Restaurant Opening & Closing time</label>
                  </a>

                  <div class="media border-bottom collapse show multi-collapse" id="option2">
                    <div class="media-body  mt-3">
                      <p class="text-muted mb-2">Sunday</p>
                      <div class="row">
                        <div class="col-6">
                          <p class="text-muted mb-2">Opening Time</p>
                          <input class="form-control" type="time" name='sunday[open]' value="{{old('sunday_opening_time')}}">
                          @error('sunday.open')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-6">
                          <p class="text-muted mb-2">Closing Time</p>
                          <input type="time" class="form-control" name='sunday[close]' value="{{old('sunday_closing_time')}}">
                          @error('sunday.close')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p class="text-muted mb-1">Closed</p>
                          <input type="checkbox" name='sunday[default]' value="closed">
                          @error('sunday.default')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="media border-bottom collapse show multi-collapse" id="option2">
                    <div class="media-body  mt-3">
                      <p class="text-muted mb-2">Monday</p>
                      <div class="row">
                        <div class="col-6">
                          <p class="text-muted mb-2">Opening Time</p>
                          <input type="time" class="form-control" name="monday[open]" value="{{old('monday.open')}}">
                          @error('monday.open')
                          <div class=" alert alert-danger mt-1 mb-1">{{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="col-6">
                          <p class="text-muted mb-2">Closing Time</p>
                          <input type="time" class="form-control" name="monday[close]" value="{{old('monday.close')}}">
                          @error('monday.close')
                          <div class=" alert alert-danger mt-1 mb-1">{{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p class="text-muted mb-2">Closed</p>
                          <input type="checkbox" name="monday[default]" value="closed">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="media border-bottom collapse show multi-collapse" id="option2">
                    <div class="media-body  mt-3">
                      <p class="text-muted mb-2">Tuesday</p>
                      <div class="row">
                        <div class="col-6">
                          <p class="text-muted mb-2">Opening Time</p>
                          <input type="time" class="form-control" name="tuesday[open]" value="{{old('tuesday.open')}}">
                          @error('tuesday.open')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-6">
                          <p class="text-muted mb-2">Closing Time</p>
                          <input type="time" class="form-control" name="tuesday[close]" value="{{old('tuesday.close')}}">
                          @error('tuesday.close')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p class="text-muted mb-2">Closed</p>
                          <input type="checkbox" name="tuesday[default]" value="closed">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="media border-bottom collapse show multi-collapse" id="option2">
                    <div class="media-body  mt-3">
                      <p class="text-muted mb-2">Wednesday</p>
                      <div class="row">
                        <div class="col-6">
                          <p class="text-muted mb-2">Opening Time</p>
                          <input type="time" class="form-control" name="wednesday[open]" value="{{old('wednesday.open')}}">
                          @error('wednesday.open')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-6">
                          <p class="text-muted mb-2">Closing Time</p>
                          <input type="time" class="form-control" name="wednesday[close]" value="{{old('wednesday.close')}}">
                          @error('wednesday.close')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror

                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p class="text-muted mb-2">Closed</p>
                          <input type="checkbox" name="wednesday[default]" value="closed">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="media border-bottom collapse show multi-collapse" id="option2">
                    <div class="media-body  mt-3">
                      <p class="text-muted mb-2">Thursday</p>
                      <div class="row">
                        <div class="col-6">
                          <p class="text-muted mb-2">Opening Time</p>
                          <input type="time" name="thursday[open]" class="form-control" value="{{old('thursday.open')}}">
                          @error('thursday.open')
                          <div class=" alert alert-danger mt-1 mb-1">{{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="col-6">
                          <p class="text-muted mb-2">Closing Time</p>
                          <input type="time" type="text" name="thursday[close]" class="form-control" value="{{old('thursday.close')}}">
                          @error('thursday.close')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p class="text-muted mb-2">Closed</p>
                          <input type="checkbox" name="thursday[default]" value="closed" id="">
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="media border-bottom collapse show multi-collapse" id="option2">
                    <div class="media-body  mt-3">
                      <p class="text-muted mb-2">Friday</p>
                      <div class="row">
                        <div class="col-6">
                          <p class="text-muted mb-2">Opening Time</p>
                          <input type="time" class="form-control" name="friday[open]" value="{{old('friday.open')}}">
                          @error('friday.open')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-6">
                          <p class="text-muted mb-2">Closing Time</p>
                          <input type="time" class="form-control" name="friday[close]" value="{{old('friday.close')}}">
                          @error('friday.close')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p class="text-muted mb-2">Closed</p>
                          <input type="checkbox" name="friday[default]" value="closed">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="media  border-bottom collapse show multi-collapse" id="option2">
                    <div class="media-body mt-3">
                      <p class="text-muted mb-2">Saturday</p>
                      <div class="row">
                        <div class="col-6">
                          <p class="text-muted mb-2">Opening Time</p>
                          <input type="time" class="form-control" name="saturday[open]" value="{{old('saturday.open')}}">
                          @error('saturday.open')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-6">
                          <p class="text-muted mb-2">Closing Time</p>
                          <input type="time" class="form-control" name="saturday[close]" value="{{old('saturday.close')}}">
                          @error('saturday.close')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p class="text-muted mb-2">Closed</p>
                          <input type="checkbox" name="saturday[default]" value="closed">
                        </div>
                      </div>
                    </div>
                  </div>



                </div>

                <div class="form-group">
                  <a data-toggle="collapse" href="#category" aria-expanded="false">
                    <label for="exampleInputName1">Restaurant Category</label>
                  </a>
                  <div class="collapse multi-collapse show" id="category">
                    @foreach($restaurants_category as $category)
                    <div class="row p-2">
                      <input type="checkbox" name="restaurant_category[]" value="{{$category->restaurant_category_name}}">
                      <p class="pl-2">{{$category->restaurant_category_name}}</p>
                    </div>
                    @endforeach
                    @error('restaurant_category')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror

                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputName1">Facebook link</label>
                  <input type="text" name="facebook_link" class="form-control" value="{{old('facebook_link')}}">
                  @error('facebook_link')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
                <input type="hidden" name="latitude" id="lat" value="">
                <input type="hidden" name="longitude" id="lon" value="">
                <input type="hidden" name="owners_id" value="{{Session::get('owners_id')}}">









                <div class=" text-center">
                  <button type="submit" class="btn btn-primary btn-block">Save Changes</button>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.navigation')

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
    <!-- Custom scripts for all pages
    -->
    <script type="text/javascript" src="js/location.js"></script>

    <script type="text/javascript" src="js/osahan.js"></script>






</body>

</html>