<div class="row-fluid">



    <div class=" col-md-7 pt-3">
        <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
            <div class="d-flex item-aligns-center border-bottom">
                <h6 class="font-weight-bold h6 p-3  mb-0 w-75">Menu</h6>
                @auth('vendors')

                <a href="{{route('vendor_menu')}}" class="text-decoration-none text-dark my-auto mx-auto"><i class="p-2 bg-light rounded-circle font-weight-bold btn-primary  fa-solid fa-pen"></i></a>
                @endauth
            </div>



            @foreach($menu_main_options as $menu_main_option)
            @if(count($menu_articles[$menu_main_option->option_name])!==0)
            <div class="row d-flex flex-row justify-content-between  bg-light border-bottom m-0">
                <a class="p-3 m-0 align-self-center flex-fill" data-toggle="collapse" aria-expanded="true" href="#collapse{{$menu_main_option->id}}">
                    <h6 class="m-0">{{$menu_main_option->option_name}} </h6>
                </a>
            </div>

            @endif

            @foreach($menu_articles[$menu_main_option->option_name] as $menu_item)


            @if($menu_item->article_item_relations == NULL)


            <div class="row border-bottom px-0 collapse  show" id="collapse{{$menu_main_option->id}}">

                <div class=" col-8 py-3 gold-members d-flex flex-row">
                    <div class="col align-self-center">
                        <a href="#" data-toggle="modal" data-target="#modal{{$menu_item->id}}">

                            <div class="media">
                                <img alt="#" src="{{asset($menu_item->article_img)}}" alt="Khaik" class="mr-3  menu-image-display rounded-pill ">
                                <div class="media-body ">
                                    <h6 class="mb-1">{{$menu_item->article_name}}</h6>
                                    <p class="text-muted mb-0">{{$menu_item->article_price_currency}} {{$menu_item->article_price_number}}</p>
                                </div>
                            </div>

                            @foreach($menu_articles_option[$menu_item->id] as $option_item)
                            <div class="media col border-bottom collapse " id="collapse_options{{$menu_item->id}}">
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



                <div class=" col-4  d-flex flex-row align-items-stretch">

                    <div class=" my-auto text-center">
                        @auth('users')
                        <span>
                            <form id="like_form{{$menu_item->id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" id="name" name="article_id" value="{{$menu_item->id}}">
                            </form>
                            <button id="like_submit" class="btn p-0 m-0 like_btn" role="button"><i id="{{$menu_item->id}}" class="mt-4 fa-solid fa-heart  custom-fa  {{$user_liked_items[$menu_item->id][0]}}"></i></button>
                            <p id="like_counter{{$menu_item->id}}" class="m-0 pt-2 ">{{$menu_item_likes[$menu_item->id]}}</p>

                        </span>
                        @endauth
                        @guest('users')

                        <a href="#" data-toggle="modal" data-target="#popup"> <i id=" {{$menu_item->id}}" class="mt-4 fa-solid fa-heart custom-fa fa-2xl"></i></a>

                        <p class="m-0 pt-2 ">{{$menu_item_likes[$menu_item->id]}}</p>




                        @endguest

                    </div>

                    @if(count($menu_articles_option[$menu_item->id] ) > 0 )

                    <div class=" my-auto mx-auto align-self-center ">
                        <span><a class=" " data-toggle="collapse" href="#collapse_options{{$menu_item->id}}" role="button"><i class="fa-solid fa-angle-down fa-2xl"></i></a></span>
                    </div>
                    @endif
                </div>
            </div>
            @endif


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
            @endforeach


            <div class=" modal fade" id="popup" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">





                    @include('components.guest_btn')






                </div>
            </div>






        </div>









    </div>
</div>








</div>