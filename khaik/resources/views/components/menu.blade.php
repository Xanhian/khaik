<div class="row-fluid">



    <div class=" col-md-7 pt-3">
        <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
            <div class="d-flex item-aligns-center">
                <p class="font-weight-bold h6 p-3 border-bottom mb-0 w-100">Menu</p>
                <!-- <a class="small text-primary font-weight-bold ml-auto" href="#">View all <i class="feather-chevrons-right"></i></a> -->
            </div>

            @foreach($menu_main_options as $menu_main_option)
            @foreach($menu_articles[$menu_main_option->option_name] as $menu_item)



            <div class="row d-flex flex-row justify-content-between  bg-light border-bottom m-0">

                <a class="p-3 m-0 align-self-center flex-fill" data-toggle="collapse" aria-expanded="true" href="#collapse{{$menu_main_option->id}}">
                    <h6>{{$menu_main_option->option_name}} </h6>
                </a>


            </div>


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



                <div class=" col-4  align-self-center text-center">
                    <div class="row d-flex flex-row">
                        <div class=" my-auto mx-auto align-self-center ">
                            <span>
                                <button class="btn p-0 m-0" data-toggle="collapse" href="#collapse{{$menu_item->id}}" role="button"><i class="fa-solid fa-heart fa-2xl"></i></button>
                            </span>
                        </div>
                        <div class=" my-auto mx-auto align-self-center ">
                            <span><a class=" " data-toggle="collapse" href="#collapse{{$menu_item->id}}" role="button"><i class="fa-solid fa-angle-down fa-2xl"></i></a></span>
                        </div>
                    </div>
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









        </div>









    </div>
</div>








</div>