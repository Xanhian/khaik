<div class="container position-relative">
    <div class="row">



        <div class=" col-md-7 pt-3">
            <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                <div class="d-flex item-aligns-center">
                    <p class="font-weight-bold h6 p-3 border-bottom mb-0 w-100">Menu</p>
                    <!-- <a class="small text-primary font-weight-bold ml-auto" href="#">View all <i class="feather-chevrons-right"></i></a> -->
                </div>

                <div class="row m-0">
                    <a class="p-3 m-0 bg-light border-bottom w-100" data-toggle="collapse" aria-expanded="true" href="#multiCollapseExample1">
                        <h6>Main courses</h6>
                    </a>
                </div>


                @foreach($menu_items as $menu_item)

                <div class="row border-bottom px-0 collapse  show" id="multiCollapseExample1">
                    <div class=" col-10 p-3 gold-members d-flex flex-row">
                        <div class="col align-self-center">
                            <a data-toggle="modal" data-target="#modal{{$menu_item->id}}  ">
                                <div class="media">
                                    <img alt="#" src="{{asset($menu_item->article_img)}}" alt="askbootstrap" class="mr-3  menu-image-display rounded-pill ">
                                    <div class="media-body ">
                                        <h6 class="mb-1">{{$menu_item->article_name}}</h6>
                                        <p class="text-muted mb-0">{{$menu_item->article_price_currency}} {{$menu_item->article_price_number}}</p>
                                    </div>
                                </div>

                                @foreach($menu_option_items[$menu_item->id] as $option_item)
                                <div class="media col border-bottom collapse " id="collapse{{$menu_item->id}}">
                                    <div class="media-body mt-2">
                                        <h7 class="mb-1 ">{{$option_item->article_name}}</h7>
                                        <p class="text-muted mb-2">
                                            {{$option_item->article_price_currency}}{{$option_item->article_price_number}}
                                        </p>
                                    </div>
                                </div>
                                @endforeach

                            </a>
                        </div>
                    </div>


                    <div class=" col-2 p-3 my-auto">
                        <div class="row d-flex flex-row justify-content-around">
                            <div class=" align-self-center ">

                                <div class=" my-auto align-self-center ">
                                    <span><a class=" " data-toggle="collapse" href="#collapse{{$menu_item->id}}" role="button"><i class="fa-solid fa-angle-down fa-2xl"></i></a></span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Modals -->


                <div class=" modal fade" id="modal{{$menu_item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6"></div>
                                    <div class="col-6">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row mx-auto">
                                    <div class="box mx-auto">
                                        <img alt="#" src="{{asset($menu_item->article_img)}}" alt="askbootstrap" class=" box  ">


                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col">
                                    <h1>{{$menu_item->article_name}}</h1>

                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col">
                                    {{$menu_item->article_description}}
                                </div>
                            </div>

                            <div class="modal-footer p-0 border-0">

                                <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



                @if(count($menu_snack_items)!==0)

                <div class="row m-0">
                    <a class="p-3 m-0 bg-light border-bottom w-100" data-toggle="collapse" aria-expanded="true" href="#Snacks">
                        <h6>Snack courses</h6>
                    </a>
                </div>
                @endif


                @foreach($menu_snack_items as $menu_snack_item)

                <div class="row border-bottom px-0 collapse  show" id="Snacks">
                    <div class=" col-10 p-3 gold-members d-flex flex-row">
                        <div class="col align-self-center">
                            <a href="#" data-toggle="modal" data-target="#modal{{$menu_snack_item->article_name}}">
                                <div class="media">
                                    <img alt="#" src="{{asset($menu_snack_item->article_img)}}" alt="askbootstrap" class="mr-3 rounded-pill  menu-image-display">
                                    <div class="media-body ">
                                        <h6 class="mb-1">{{$menu_snack_item->article_name}}</h6>
                                        <p class="text-muted mb-0">{{$menu_snack_item->article_price_currency}} {{$menu_snack_item->article_price_number}}</p>
                                    </div>
                                </div>

                                @foreach($menu_snack_option_items[$menu_snack_item->id] as $option_snack_item)
                                <div class="media border-bottom collapse " id="collapse{{$menu_snack_item->article_name}}">
                                    <div class="media-body mt-2">
                                        <h7 class="mb-1 ">{{$option_snack_item->article_name}}</h7>
                                        <p class="text-muted mb-2">{{$option_snack_item->article_price_currency}} {{$option_snack_item->article_price_number}}</p>
                                    </div>
                                </div>
                                @endforeach

                            </a>
                        </div>
                    </div>


                    <div class=" col-2 p-3 my-auto">

                        <div class=" my-auto align-self-center ">
                            <span><a class=" " data-toggle="collapse" href="#collapse{{$menu_snack_item->article_name}}" role="button"><i class="fa-solid fa-angle-down fa-2xl"></i></a></span>
                        </div>



                    </div>
                </div>
            </div>

            <!-- Modal -->



            <div class=" modal fade" id="modal{{$menu_snack_item->article_name}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="box mx-auto">
                                    <img alt="#" src="{{asset($menu_snack_item->article_img)}}" alt="askbootstrap" class=" box  ">


                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <h1>{{$menu_snack_item->article_name}}</h1>

                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                {{$menu_snack_item->article_description}}
                            </div>
                        </div>

                        <div class="modal-footer p-0 border-0">

                            <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach




        </div>
    </div>






</div>






</div>