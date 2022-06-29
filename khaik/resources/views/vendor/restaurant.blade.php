<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

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
        <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
      </div>
    </div>

    <div class="container position-relative">
      <div class="py-5 osahan-profile row">
        <div class="col-md-8 mb-3">
          <div class="rounded shadow-sm p-4 bg-white">
            <a data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="option1 option2 option3">
              <h5 class="mb-4">Status</h5>
            </a>
            <div id="edit_profile">
              <form method="POST" action="{{ route('set_status') }}">
                <div class="form-group">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <select class="form-control" name="status" id="">
                    <option value="open">open</option>
                    <option value="closed">closed</option>
                    <option value="maintence">maintence</option>

                  </select>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block"></i>Set status</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container position-relative">
      <div class="py-5 osahan-profile row">
        <div class="col-md-8 mb-3">
          <div class="rounded shadow-sm p-4 bg-white">
            <a data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="option1 option2 option3">
              <h5 class="mb-4">Location</h5>
            </a>
            <div id="edit_profile">
              <form method="POST" action="{{ route('save_location') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input id="lat" type="hidden" name="latitude">
                <input id="lon" type="hidden" name="longitude">
                <div class="text-center">
                  <button id="location" type="submit" class="btn btn-primary btn-block"><i class="feather-navigation"></i>Set location</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container position-relative">
      <div class="py-5 osahan-profile row">

        <div class="col-md-8 mb-3">
          <div class="rounded shadow-sm p-4 bg-white">
            <a data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="option1 option2 option3">
              <h5 class="mb-4">Opening & Closing time</h5>
            </a>
            <div id="edit_profile">
              <form method="POST" action="{{ route('save_time') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                  <div class="media border-bottom collapse show multi-collapse" id="option2">
                    <div class="media-body  mt-3">
                      <p class="text-muted mb-2">Sunday</p>
                      <div class="row">
                        <div class="col-6">
                          <p class="text-muted mb-2">Opening Time</p>
                          <input class="form-control" type="time" name='sunday[open]' value="{{old('sunday.open')}}">
                          @error('sunday.open')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-6">
                          <p class="text-muted mb-2">Closing Time</p>
                          <input type="time" class="form-control" name='sunday[close]' value="{{old('sunday.close')}}">
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
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block">Set time</button>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('vendor.layout.navigation')
    @include('layouts.scripts')









</body>

</html>