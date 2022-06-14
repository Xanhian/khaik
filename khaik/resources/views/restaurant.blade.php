<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-bottom-bar">



    <div class="d-none">
        <div class="bg-primary p-3 d-flex align-items-center">
            <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
        </div>
    </div>

    <div class="offer-section ">
        <img alt="#" src="{{asset($restaurant_info[0]->restaurant_header_photo)}}" class="restaurant-header">
    </div>


    <div class="container">
        <div class="p-3 bg-primary rounded position-relative restaurant-profile-container">
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

            <div class="pb-4">
                <div class="row">
                    <div class="col-6 pr-3">
                        <p class="text-white font-weight-bold mb-1 ">Opening time</p>
                        <div class="mb-4 d-flex flex-row justify-content-between ">

                            <div class="box-day sunday d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">S</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_open_time->sunday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">M</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_open_time->monday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">T</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_open_time->tuesday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">W</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_open_time->wednesday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">T</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_open_time->thursday}}</p>
                                </div>
                            </div>

                            <div class="box-day friday d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">F</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_open_time->friday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
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
                        <p class="text-white font-weight-bold m-0 ">Closing time</p>
                        <div class="mb-4 d-flex flex-row justify-content-between ">

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">S</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_close_time->sunday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">M</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_close_time->monday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">T</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_close_time->tuesday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">W</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_close_time->wednesday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">T</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_close_time->thursday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
                                <p class="font-weight-bold m-0 pb-1">F</p>
                                <div class="box-day-value m-0 pt-n1 ">
                                    <p class="text-dark m-0">{{$restaurant_close_time->friday}}</p>
                                </div>
                            </div>

                            <div class="box-day d-flex flex-column text-center position-relative m-0">
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





            <div class="col-6 d-flex justify-content-between align-items-center">

                <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-facebook"></i></a>
                <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-bookmark"></i></a>
                <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                <a data-toggle="modal" data-target="#add_item" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold fa-solid fa-qrcode"></i></a>


            </div>
        </div>
    </div>

    <div class=" modal fade" id="add_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="{{asset($restaurant_info[0]->restaurant_qr)}}" alt="">

            </div>
        </div>
    </div>

    @include('components.feature ')


    @include('components.menu')




    @include('layouts.navigation')


    @include('layouts.scripts')
</body>

</html>