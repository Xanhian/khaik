<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-bottom-bar">



    <div class="d-none">
        @include('components.logo')

    </div>

    <div class="offer-section ">
        <img alt="#" src="{{asset($restaurant_info[0]->restaurant_header_photo)}}" class="restaurant-header w-100">
    </div>


    <div class="container">
        <div class="p-3 bg-primary rounded position-relative restaurant-profile-container">
            <div class=" text-white">
                <div class="row">
                    <div class="pl-1 align-self-center text-wrap">
                        <h1 class="font-weight-bold p-0 text-wrap  ">{{$restaurant_info[0]->restaurant_name}}</h1>
                        <p id="restaurant_description" class="text-white text-wrap  pr-2">{{$restaurant_info[0]->restaurant_description}}</p>
                        <input type="hidden" name="restaurant_lat" id="restaurant_lat" value="{{$restaurant_info[0]->restaurant_latitude}}">
                        <input type="hidden" name="restaurant_lon" id="restaurant_lon" value="{{$restaurant_info[0]->restaurant_longitude }}">
                    </div>
                </div>
                <div class="rating-wrap d-flex align-items-center mt-2">
                    <p class="label-rating text-white ml-2 small"> </p>
                </div>
            </div>

            <div class="pb-4">
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
                                    <p class="text-dark m-0">{{$restaurant_close_time->sunday}}</p>
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
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_close_time->saturday}}</p>
                                </div>
                            </div>


                        </div>
                        <p class="text-white font-weight-bold m-0 ">Location</p>
                        <p class="text-white m-0">{{$restaurant_info[0]->restaurant_addres}}, {{$restaurant_info[0]->restaurant_place}} Suriname</p>
                    </div>
                </div>
            </div>





            <div class="col-12 d-flex justify-content-between align-items-center">


                <div class="container m-0 p-0 d-flex justify-content-between align-items-center">

                    <a target="_blank" href="{{$restaurant_info[0]->restaurant_facebook_link}}" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-facebook"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-bookmark"></i></a>
                    <a href="#map" data-toggle="collapse" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                    <a data-toggle="modal" data-target="#qr_code" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold fa-solid fa-qrcode"></i></a>
                </div>

                <div class="container d-flex justify-content-end">
                    <a data-toggle="modal" data-target="#edit_restaurant" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold fa-solid fa-pen"></i></a>

                </div>


            </div>


        </div>
    </div>

    <div id="map"></div>

    <div class=" modal fade" id="qr_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="{{asset($restaurant_info[0]->restaurant_qr)}}" alt="">

            </div>
        </div>
    </div>

    <div class=" modal fade" id="edit_restaurant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


        <div class="modal-dialog modal-dialog-centered">


            <div class="modal-content">
                <h4 class="text-center p-4">Change restaurant info</h4>
                <form action="{{route('edit_restaurant')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    {{ method_field('PATCH') }}
                    <div class="container pt-3">
                        <div class="form-group">
                            <p>Restaurant Name</p>
                            <input type="text" name="edit_restaurant_name" class="form-control" value="{{$restaurant_info[0]->restaurant_name}}">
                        </div>
                        <div class="form-group">
                            <p>Restaurant Description</p>
                            <input type="text" class="form-control" name="edit_restaurant_description" value="{{$restaurant_info[0]->restaurant_description}}">
                        </div>
                        <div class="form-group">
                            <p>Restaurant Phonenumber</p>
                            <input type="text" class="form-control" name="edit_restaurant_phonenumber">
                        </div>
                        <div class="form-group">
                            <p>Restaurant Addres</p>
                            <input type=" text" name="edit_restaurant_addres" class="form-control" value="{{$restaurant_info[0]->restaurant_addres}}">
                        </div>
                        <div class="form-group">
                            <p>Place</p>

                            <select name="edit_restaurant_place" class="form-control">
                                <option value="{{$restaurant_info[0]->restaurant_place}}" disabled selected hidden>{{$restaurant_info[0]->restaurant_place}}</option>
                                <option value="Nickerie">Nickerie</option>
                                <option value="Coronie">Coronie</option>
                                <option value="Saramacca">Saramacca</option>
                                <option value="Wanica">Wanica</option>
                                <option value="Paramaribo">Paramaribo</option>
                                <option value="Commewijne">Commewijne</option>
                                <option value="Marowijne">Marowijne</option>
                                <option value="Para">Para</option>
                                <option value="Sipaliwini">Sipaliwini</option>
                                <option value="Brokopondo">Brokopondo</option>


                            </select>

                        </div>
                        <div class="form-group">
                            <p>Country</p>


                            <select name="edit_restaurant_country" class="form-control">
                                <option value="{{$restaurant_info[0]->restaurant_country}}" disabled selected hidden>{{$restaurant_info[0]->restaurant_country}}</option>
                                <option value="suriname">Suriname</option>

                            </select>


                        </div>



                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary" value="Change">

                        </div>

                    </div>

                </form>


            </div>
        </div>
    </div>




    @include('components.menu')




    @include('vendor.layout.navigation')


    @include('layouts.scripts')
</body>
<script src="{{asset('js/ajax.js')}}"></script>


</html>