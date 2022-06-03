<!DOCTYPE html>
<html lang="en">

@include('layouts.head')


<body class="fixed-bottom-bar">
    <header class="section-header">
        <section class="header-main shadow-sm bg-white">
            @include('layouts.topnavigation')

        </section>
    </header>



    <div class="d-none">
        <div class="bg-primary p-3 d-flex align-items-center">
            <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
        </div>
    </div>

    <div class="offer-section ">

        <img alt="#" src="https://images.squarespace-cdn.com/content/v1/5efb1ee0737b1548b9331bb9/1593521441104-DZT0KDCZ29UWQOFTOOMU/BRIGHT-26.jpg" class="restaurant-header">

    </div>


    <div class="container">
        <div class="p-4 bg-primary bg-primary rounded position-relative restaurant-profile-container">
            <div class=" text-white">
                <div class="row">
                    <div class="pl-1 col align-self-center text-wrap">
                        <h1 class="font-weight-bold p-0 text-wrap  ">Dragonville Restaurant</h1>
                        <p class="text-white text-wrap  pr-2">Come here for all your specials and delicous food that is cover in chocalote with truffel saus itog askbootstrap hasde</p>

                    </div>

                </div>



                <div class="rating-wrap d-flex align-items-center mt-2">
                    <ul class="rating-stars list-unstyled">
                        <li>
                            <i class="h3 feather-bookmark"></i>
                        </li>
                    </ul>
                    <p class="label-rating text-white ml-2 small"> (245 Favorites)</p>
                </div>
            </div>

            <div class="pb-4">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <p class="text-white-50 font-weight-bold m-0 small">Open time</p>
                        <p class="text-white mt-1">8:00 AM</p>
                        <p class="text-white-50 font-weight-bold m-0 small">Phone number</p>
                        <p class="text-white m-0">+597 564-1123</p>

                    </div>

                    <div class="col-6 col-md-2">
                        <p class="text-white-50 font-weight-bold m-0 small">Close time</p>
                        <p class="text-white mt-1">8:00 AM</p>
                        <p class="text-white-50 font-weight-bold m-0 small">Locaiton</p>
                        <p class="text-white m-0">Munderwer #30, Paramaribo Suriname</p>
                    </div>
                </div>
            </div>





            <div class="d-flex align-items-center">
                <div class="feather_icon">
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-facebook"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark mx-2"><i class="p-2 bg-light rounded-circle font-weight-bold  feather-bookmark"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                </div>
                <a href="contact-us.html" class="btn btn-sm btn-outline-light ml-auto">Contact</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="">
            <p class="font-weight-bold pt-4 m-0">FEATURED ITEMS</p>
            <!-- slider -->
            <div class="trending-slider rounded">
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <a href="checkout.html">
                                <img alt="#" src="img/trending1.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="checkout.html" class="text-black">Famous Dave's Bar-B-Que</a>
                                </h6>
                                <p class="text-gray mb-3">Vegetarian • Indian • Pure veg</p>
                                <p class="text-gray m-0"> <span class="text-black-50"> $350 FOR TWO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <a href="checkout.html">
                                <img alt="#" src="img/trending2.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="checkout.html" class="text-black">Thai Famous Cuisine</a></h6>
                                <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                <p class="text-gray m-0"> <span class="text-black-50"> $250 FOR TWO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <a href="checkout.html">
                                <img alt="#" src="img/trending3.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="checkout.html" class="text-black">The osahan Restaurant</a></h6>
                                <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                <p class="text-gray m-0"> <span class="text-black-50"> $500 FOR TWO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="osahan-slider-item">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <a href="checkout.html">
                                <img alt="#" src="img/trending2.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="checkout.html" class="text-black">Thai Famous Cuisine</a></h6>
                                <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                <p class="text-gray m-0"> <span class="text-black-50"> $250 FOR TWO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu -->

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
                            <h6>Main courses </h6>
                        </a>
                    </div>


                    @foreach($menu_items as $menu_item)

                    <div class="row border-bottom px-0 collapse  show" id="multiCollapseExample1">
                        <div class=" col-5 p-3 gold-members d-flex flex-row">
                            <div class="col align-self-center">
                                <a href="#" data-toggle="modal" data-target="#modal{{$menu_item->id}}  ">
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
                                            <h7 class="mb-1 "></h7>
                                            <p class="text-muted mb-2">{{$option_item->article_name}}
                                                {{$option_item->article_price_currency}}{{$option_item->article_price_number}}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach

                                </a>
                            </div>
                        </div>


                        <div class=" col-7 p-3">
                            <div class="row d-flex flex-row justify-content-around">
                                <div class=" align-self-center ">
                                    <span><a class="btn btn-outline-secondary btn-sm " data-toggle="collapse" href="#collapse{{$menu_item->id}}" role="button">Options</a></span>
                                </div>
                                <div class=" align-self-center ">
                                    <span><a data-toggle="collapse" href="#" role="button" class="btn btn-outline-secondary btn-sm ">Delete</a></span>
                                </div>
                                <div class=" align-self-center ">
                                    <span><a data-toggle="modal" data-target="#edit{{$menu_item->id}}  " role="button" class="btn btn-outline-secondary btn-sm ">Edit</a></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Modals -->
                    <div class=" modal fade" id="edit{{$menu_item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <div class="container">
                                    <div class="row mx-auto">
                                        <div class="col">
                                            <h3>Edit food</h3>
                                            <form method='post' enctype="multipart/form-data" action="{{ route('edit_article')}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                {{ method_field('PATCH') }}
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Food Name</label>
                                                    <input type="text" name="article_name" id="article_name" value="{{$menu_item->article_name}}" class="form-control">
                                                    @error('article_name')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Food Description</label>
                                                    <input type="text" name="article_description" id="article_description" value="{{$menu_item->article_description}}" class="form-control">
                                                    @error('article_description')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Food Pic</label>
                                                    <input type="file" name="article_photo" class="form-control">
                                                    @error('article_photo')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">

                                                    <label for="exampleInputName1">Food Price</label>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <select class="form-control" name="article_currency">
                                                                <option value="SRD">SRD</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-7">
                                                            <input type="number" name="article_price" value="{{$menu_item->article_price_number}}" class="form-control" placeholder="00.00">
                                                        </div>

                                                    </div>
                                                    @error('article_price')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Menu Category</label>
                                                    <select name="menu_category" class="form-control" id="">
                                                        @switch($menu_item->article_option)
                                                        @case("Head")
                                                        <option value="Head" selected>Main course </option>
                                                        <option value="Snacks">Snacks</option>
                                                        <option value="Drinks">Drinks</option>
                                                        @break

                                                        @case("Snacks")
                                                        <option value="Head">Main course </option>
                                                        <option value="Snacks" selected>Snacks</option>
                                                        <option value="Drinks">Drinks</option>
                                                        @break

                                                        @case("Drinks")
                                                        <option value="Head">Main course </option>
                                                        <option value="Snacks">Snacks</option>
                                                        <option value="Drinks" selected>Drinks</option>
                                                        @break

                                                        @default
                                                        <option value="Head">Main course </option>
                                                        <option value="Snacks">Snacks</option>
                                                        <option value="Drinks" selected>Drinks</option>
                                                        @endswitch



                                                    </select>
                                                </div>



                                                <div class="form-group ">
                                                    <a data-toggle="collapse" href="#article_options" aria-expanded="false">
                                                        <label for="exampleInputName1">Food Options</label>

                                                    </a>
                                                    <a id="add_article_option" class="btn bg-success">+</a>
                                                    <a id="remove_article_option" class="btn bg-danger">-</a>


                                                    <div id="article_options">

                                                        @foreach($menu_option_items[$menu_item->id] as $option_item)



                                                        <div class="form-group"><label>Article Name</label><input type="text" name="article_option_name[]" value="{{$option_item->article_name}}" class="form-control">
                                                            <input type="hidden" name="article_option_id" value="{{$option_item->article_id}}">
                                                        </div>
                                                        <div class="form-group"><label>Article Price</label>
                                                            <div class="row">
                                                                <div class="col-5"><select class="form-control" name="article_option_currency[]">
                                                                        <option value="SRD">SRD</option>
                                                                    </select></div>
                                                                <div class="col-7"><input type="number" name="article_option_price[]" placeholder="00.00" value="{{$option_item->article_price_number}}" class="form-control"></div>
                                                            </div>
                                                        </div>

                                                        @endforeach



                                                        @error('article_option.*')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <a data-toggle="collapse" href="#category" aria-expanded="false">
                                                        <label for="exampleInputName1">Food Category</label>
                                                    </a>
                                                    <div class="collapse multi-collapse show" id="category">
                                                        @foreach($article_category as $category)
                                                        <div class="row p-2">
                                                            <input type="radio" name="article_category" class="my-auto" value="{{$category->id}}">
                                                            <p class="pl-2 my-auto">{{$category->category_name}}</p>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                    @error('article_category')
                                                    <div class=" alert alert-danger mt-1 mb-1">{{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <input type="hidden" name="restaurant_id" value="{{Session::get('owners_restaurant')}}"> <input type="hidden" name="article_id" value="{{$menu_item->id}}">
                                                <div class=" text-center">
                                                    <button id="article_submit" type="submit" class="btn btn-primary btn-block">Save Changes</button>


                                                </div>



                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal-footer p-0 border-0">

                                    <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>

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


                    <div class="row m-0">
                        <a class="p-3 m-0 bg-light border-bottom w-100" data-toggle="collapse" aria-expanded="true" href="#Snacks">
                            <h6>Snack courses</h6>
                        </a>
                    </div>


                    @foreach($menu_snack_items as $menu_snack_item)

                    <div class="row border-bottom px-0 collapse  show" id="Snacks">
                        <div class=" col-5 p-3 gold-members d-flex flex-row">
                            <div class="col align-self-center">
                                <a href="#" data-toggle="modal" data-target="#modal{{$menu_snack_item->article_name}}">
                                    <div class="media">
                                        <img alt="#" src="img/starter1.jpg" alt="askbootstrap" class="mr-3 rounded-pill ">
                                        <div class="media-body ">
                                            <h6 class="mb-1">{{$menu_snack_item->article_name}}</h6>
                                            <p class="text-muted mb-0">$250</p>
                                        </div>
                                    </div>

                                    @foreach($menu_snack_option_items[$menu_snack_item->id] as $option_snack_item)
                                    <div class="media border-bottom collapse " id="{{$menu_snack_item->article_name}}">
                                        <div class="media-body mt-2">
                                            <h7 class="mb-1 "></h7>
                                            <p class="text-muted mb-2">{{$option_snack_item}}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </a>
                            </div>
                        </div>


                        <div class=" col-6 p-3">
                            <div class="row d-flex flex-row justify-content-end">
                                <div class=" align-self-center ">
                                    <span><a data-toggle="collapse" href="#{{$menu_snack_item->article_name}}" role="button" class="btn btn-outline-secondary btn-sm ">Options</a></span>
                                </div>

                                <div class=" align-self-center ">
                                    <span><a data-toggle="collapse" href="#{{$menu_snack_item->article_name}}" role="button" class="btn btn-outline-secondary btn-sm ">Delete</a></span>
                                </div>


                                <div class=" align-self-center ">
                                    <span><a data-toggle="modal" data-target="#edit{{$menu_snack_item->article_name}}  " role="button" class="btn btn-outline-secondary btn-sm ">Edit</a></span>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- Modal -->

                    <div class=" modal fade" id="edit{{$menu_snack_item->article_name}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <div class="container">
                                    <div class="row mx-auto">
                                        <div class="col">
                                            <h3>Edit food</h3>
                                            <form method='post' enctype="multipart/form-data" action="{{ route('edit_article')}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                {{ method_field('PATCH') }}
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Food Name</label>
                                                    <input type="text" name="article_name" id="article_name" value="{{$menu_item->article_name}}" class="form-control">
                                                    @error('article_name')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Food Description</label>
                                                    <input type="text" name="article_description" id="article_description" value="{{$menu_item->article_description}}" class="form-control">
                                                    @error('article_description')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Food Pic</label>
                                                    <input type="file" name="article_photo" class="form-control">
                                                    @error('article_photo')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">

                                                    <label for="exampleInputName1">Food Price</label>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <select class="form-control" name="article_currency">
                                                                <option value="SRD">SRD</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-7">
                                                            <input type="number" name="article_price" value="{{$menu_item->article_price_number}}" class="form-control" placeholder="00.00">
                                                        </div>

                                                    </div>
                                                    @error('article_price')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Menu Category</label>
                                                    <select name="menu_category" class="form-control" id="">
                                                        @switch($menu_snack_item->article_option)
                                                        @case("Head")
                                                        <option value="Head" selected>Main course </option>
                                                        <option value="Snacks">Snacks</option>
                                                        <option value="Drinks">Drinks</option>
                                                        @break

                                                        @case("Snacks")
                                                        <option value="Head">Main course </option>
                                                        <option value="Snacks" selected>Snacks</option>
                                                        <option value="Drinks">Drinks</option>
                                                        @break

                                                        @case("Drinks")
                                                        <option value="Head">Main course </option>
                                                        <option value="Snacks">Snacks</option>
                                                        <option value="Drinks" selected>Drinks</option>
                                                        @break

                                                        @default
                                                        <option value="Head">Main course </option>
                                                        <option value="Snacks">Snacks</option>
                                                        <option value="Drinks" selected>Drinks</option>
                                                        @endswitch



                                                    </select>
                                                </div>

                                                @foreach($menu_option_items[$menu_item->id] as $option_item)


                                                <p class="text-muted mb-2">{{$option_item->article_name}}
                                                    {{$option_item->article_price_currency}}{{$option_item->article_price_number}}
                                                </p>

                                                @endforeach


                                                <div class="form-group ">
                                                    <a data-toggle="collapse" href="#article_options" aria-expanded="false">
                                                        <label for="exampleInputName1">Food Options</label>

                                                    </a>
                                                    <a id="add_article_option" class="btn bg-success">+</a>
                                                    <a id="remove_article_option" class="btn bg-danger">-</a>


                                                    <div id="article_options">
                                                        @error('article_option.*')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <a data-toggle="collapse" href="#category" aria-expanded="false">
                                                        <label for="exampleInputName1">Food Category</label>
                                                    </a>
                                                    <div class="collapse multi-collapse show" id="category">
                                                        @foreach($article_category as $category)
                                                        <div class="row p-2">
                                                            <input type="radio" name="article_category" class="my-auto" value="{{$category->id}}">
                                                            <p class="pl-2 my-auto">{{$category->category_name}}</p>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                    @error('article_category')
                                                    <div class=" alert alert-danger mt-1 mb-1">{{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <input type="hidden" name="restaurant_id" value="{{Session::get('owners_restaurant')}}">
                                                <div class=" text-center">
                                                    <button id="article_submit" type="submit" class="btn btn-primary btn-block">Save Changes</button>


                                                </div>



                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal-footer p-0 border-0">

                                    <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>

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


                </div>
            </div>


            <div class="col-md-5 pt-3">
                <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                    <div class="d-flex item-aligns-center">

                        <p class="font-weight-bold h6 p-3 border-bottom mb-0 w-100">Add Item</p>
                        <!-- <a class="small text-primary font-weight-bold ml-auto" href="#">View all <i class="feather-chevrons-right"></i></a> -->
                    </div>
                    <div class="row">
                        <div class="col-8 m-4 mx-auto">
                            @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form method='post' enctype="multipart/form-data" action="{{ route('add_article')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group">
                                    <label for="exampleInputName1">Food Name</label>
                                    <input type="text" name="article_name" id="article_name" value="{{old('article_name')}}" class="form-control">
                                    @error('article_name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Food Description</label>
                                    <input type="text" name="article_description" id="article_description" value="{{old('article_description')}}" class="form-control">
                                    @error('article_description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Food Pic</label>
                                    <input type="file" name="article_photo" class="form-control">
                                    @error('article_photo')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputName1">Food Price</label>
                                    <div class="row">
                                        <div class="col-5">
                                            <select class="form-control" name="article_currency">
                                                <option value="SRD">SRD</option>
                                            </select>
                                        </div>
                                        <div class="col-7">
                                            <input type="number" name="article_price" value="{{old('article_price')}}" class="form-control" placeholder="00.00">
                                        </div>

                                    </div>
                                    @error('article_price')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Menu Category</label>
                                    <select name="menu_category" class="form-control" id="">
                                        <option value="Head">Main course </option>
                                        <option value="Snacks">Snacks</option>
                                        <option value="Drinks">Drinks</option>


                                    </select>
                                </div>



                                <div class="form-group ">
                                    <a data-toggle="collapse" href="#article_options" aria-expanded="false">
                                        <label for="exampleInputName1">Food Options</label>

                                    </a>
                                    <a id="add_article_option" class="btn bg-success">+</a>
                                    <a id="remove_article_option" class="btn bg-danger">-</a>


                                    <div id="article_options">
                                        @error('article_option.*')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group">
                                    <a data-toggle="collapse" href="#category" aria-expanded="false">
                                        <label for="exampleInputName1">Food Category</label>
                                    </a>
                                    <div class="collapse multi-collapse show" id="category">
                                        @foreach($article_category as $category)
                                        <div class="row p-2">
                                            <input type="radio" name="article_category" class="my-auto" value="{{$category->id}}">
                                            <p class="pl-2 my-auto">{{$category->category_name}}</p>
                                        </div>
                                        @endforeach

                                    </div>
                                    @error('article_category')
                                    <div class=" alert alert-danger mt-1 mb-1">{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <input type="hidden" name="restaurant_id" value="{{Session::get('owners_restaurant')}}">
                                <div class=" text-center">
                                    <button id="article_submit" type="submit" class="btn btn-primary btn-block">Save Changes</button>


                                </div>



                            </form>
                        </div>
                    </div>
                </div>








            </div>



        </div>






    </div>

    <!-- Footer -->
    @include('layouts.navigation')

    </div>
    <!-- footer -->

    <!-- extras modal -->

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
    <!-- Custom scripts for all pages   -->
    <script type="text/javascript" src="js/osahan.js"></script>
    <script type="text/javascript" src="js/article.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>

    <script>

    </script>

</body>

</html>