<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-bottom-bar">

    <div class="oshan-restaurant">



        <div class="d-none">
            @include('components.logo')

        </div>

        <div class="offer-section ">
            <img alt="#" src="{{asset($restaurant_info[0]->restaurant_header_photo)}}" class="restaurant-header w-100">
        </div>


        <div class="container">
            <div class="p-3 bg-primary rounded position-relative  restaurant-profile-container">
                <div class=" text-white">
                    <div class="row">
                        <div class="pl-1 align-self-center text-wrap">
                            <h1 class="font-weight-bold p-0 text-wrap  ">{{$restaurant_info[0]->restaurant_name}}</h1>
                            <p class="text-white text-wrap  pr-2">{{$restaurant_info[0]->restaurant_description}}</p>
                        </div>
                    </div>
                    <div class="rating-wrap d-flex align-items-center mt-2">
                        <p class="label-rating text-white ml-2 small"> </p>
                    </div>
                </div>
                <div class="container p-0">
                    <div class="pb-4 ">
                        <div class="row">
                            <div class="col-6 pr-3">
                                <p class="text-white font-weight-bold mb-1 ">Opening time</p>
                                <div class="mb-4 d-flex flex-row justify-content-between ">

                                    <div class="box-day sunday d-flex flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">S</p>
                                        <div class="box-day-value sunday m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_open_time->sunday}}</p>
                                        </div>
                                    </div>

                                    <div class=" box-day d-flex monday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">M</p>
                                        <div class="box-day-value monday m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_open_time->monday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex tuesday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">T</p>
                                        <div class="box-day-value tuesday m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_open_time->tuesday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex wednesday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">W</p>
                                        <div class="box-day-value wednesday m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_open_time->wednesday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex thursday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">T</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_open_time->thursday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex friday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">F</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_open_time->friday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex saturday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">S</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_open_time->saturday}}</p>
                                        </div>
                                    </div>


                                </div>

                                <div class="d-flex flex-column">
                                    <p class="text-white font-weight-bold m-0">Phonenumber</p>
                                    <p class=" text-white m-0">{{$restaurant_info[0]->restaurant_phonenumber}}</p>
                                </div>


                            </div>

                            <div class="col-6 pl-3">
                                <p class="text-white font-weight-bold mb-1 ">Closing time</p>
                                <div class="mb-4 d-flex flex-row justify-content-between ">

                                    <div class="box-day d-flex sunday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">S</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0 close-container">{{$restaurant_close_time->sunday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex monday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">M</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_close_time->monday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex tuesday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">T</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_close_time->tuesday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex wednesday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">W</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_close_time->wednesday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex thursday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">T</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_close_time->thursday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex friday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">F</p>
                                        <div class="box-day-value m-0 pt-n1 ">
                                            <p class="text-dark m-0">{{$restaurant_close_time->friday}}</p>
                                        </div>
                                    </div>

                                    <div class="box-day d-flex saturday flex-column text-center position-relative m-0">
                                        <p class="font-weight-bold m-0 pb-1">S</p>
                                        <div class="box-day-value m-0 pt-n1  ">
                                            <p class="text-dark m-0">{{$restaurant_close_time->saturday}}</p>
                                        </div>
                                    </div>


                                </div>
                                <p class="text-white font-weight-bold m-0 ">Location</p>
                                <p class="text-white m-0">{{$restaurant_info[0]->restaurant_addres}}, {{$restaurant_info[0]->restaurant_place}} Suriname</p>

                                <input type="hidden" name="restaurant_lat" id="restaurant_lat" value="{{$restaurant_info[0]->restaurant_latitude}}">
                                <input type="hidden" name="restaurant_lon" id="restaurant_lon" value="{{$restaurant_info[0]->restaurant_longitude }}">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-6 d-flex align-items-center">

                        <a target="_blank" href="{{$restaurant_info[0]->restaurant_facebook_link}}" class="text-decoration-none text-dark mx-1"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-facebook"></i></a>
                        @auth("users")
                        <form method="POST" action="{{route('favorite_save')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="restaurant_id" value="{{ $restaurant_info[0]->id}}" />

                            <button type="submit" class="btn p-0 m-0 text-decoration-none text-dark mx-1"><i class="p-2 bg-light rounded-circle  fa-regular fa-star"></i></button>
                        </form>
                        @endauth
                        <a href="#map" data-toggle="collapse" class="text-decoration-none text-dark mx-1"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-map-pin"></i></a>

                        <a data-toggle="modal" data-target="#add_item" class="text-decoration-none text-dark mx-1"><i class="p-2 bg-light rounded-circle font-weight-bold fa-solid fa-qrcode"></i></a>


                    </div>
                    <div class="col-6 d-flex flex-row justify-content-end">
                        <a data-toggle="modal" data-target="#report" class="text-decoration-none text-dark "><i class="p-2 bg-light rounded-circle font-weight-bold fa-solid fa-flag"></i></a>

                    </div>
                </div>



            </div>
        </div>

        <div class="text-center">
            <div id='map' class="collapse mx-auto text-center"></div>

        </div>



        <div class=" modal fade" id="add_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <img src="{{asset($restaurant_info[0]->restaurant_qr)}}" alt="">

                </div>
            </div>
        </div>

        <div class=" modal fade" id="report" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{route('report')}}" method="POST">

                        <div class="modal-header">
                            <h4>Report restaurant</h4>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="restaurant" value="{{$restaurant_info[0]->id}}">
                            @auth('users')
                            <input type="hidden" name="user" value="{{session('user_id')}}">
                            @else
                            <input type="hidden" name="user" value="guest">

                            @endauth
                            <div class="container">
                                <div class="form-group align-items-center">
                                    <input type="radio" name="report" value="info" id="abuse">
                                    <label for="abuse">Fake information</label>

                                </div>
                                <div class="form-group">
                                    <input type="radio" name="report" value="price" id="price">
                                    <label for="price">Impossible prices</label>

                                </div>

                                <div class="form-group m-0">
                                    <input type="radio" name="report" value="other" id="other">
                                    <label for="other">Other</label>
                                </div>
                                <textarea name="other" id="" cols="30" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button class="btn btn-primary rounded" type="submit">Report</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>



        @include('components.menu')







        @include('layouts.navigation')

    </div>
    @include('components.desktop')


</body>
@include('layouts.scripts')

<script src="{{asset('js/ajax.js')}}"></script>

</html>