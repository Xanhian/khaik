<!DOCTYPE html>
<html lang="en">

@include('layouts.head')





<div class="d-none">
    <div class="bg-primary p-3 d-flex align-items-center">
        <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
    </div>
</div>


<body class="fixed-bottom-bar">
    <!-- Menu -->

    <div class="container position-relative">
        <div class="row">


            <div class="col-md-7 pt-3">

                <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="d-flex container border-bottom ">
                        <p class=" font-weight-bold h6 my-auto p-3 mb-0 w-100">Menu</p>
                        <button data-toggle="modal" data-target="#add_option" class=" btn btn-primary btn-block m-3"><i class="fa-solid fa-plus "></i> Add Option</button>

                        <button data-toggle="modal" data-target="#add_item" class=" col-3 btn btn-primary btn-block m-3"><i class="fa-solid fa-plus "></i> Add Item</button>

                    </div>
                    @error('article_option_price')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror






                    @foreach($menu_main_options as $menu_main_option)
                    <div class="row d-flex flex-row justify-content-between  bg-light border-bottom m-0">

                        <a class="p-3 m-0 align-self-center flex-fill" data-toggle="collapse" aria-expanded="true" href="#collapse{{$menu_main_option->id}}">
                            <h6>{{$menu_main_option->option_name}} </h6>
                        </a>
                        <div class=" align-self-center ">
                            <form class="article_delete_form" action="{{route('delete_option')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="article_id" value="{{$menu_main_option->id}}" />
                                <button type="submit" class="delete-item-box"> <i class="fa-solid fa-xmark fa-2xl p-3"></i></button>
                            </form>
                        </div>

                    </div>
                    @foreach($menu_articles[$menu_main_option->option_name] as $menu_item)

                    @if($menu_item->article_item_relations == NULL)
                    <div class="row border-bottom px-0 collapse  show" id="collapse{{$menu_main_option->id}}">
                        <div class="col-2 align-self-center mx-auto text-center ">
                            <form class="article_delete_form" action="{{route('delete_article')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="article_id" value="{{$menu_item->id}}" />
                                <button type="submit" class="delete-item-box"> <i class="fa-solid fa-xmark fa-2xl p-3"></i></button>
                            </form>
                        </div>

                        <div class=" col-6 py-3 gold-members d-flex flex-row">
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



                        <div class=" col-4 p-2 align-self-center text-center">
                            <div class="row d-flex flex-row ">

                                <div class="align-self-center pl-3 ">
                                    <span><a data-toggle="modal" data-target="#edit{{$menu_item->id}}" role="button" class="m-3"><i class="fa-solid fa-pen fa-xl "></i></a></span>
                                </div>

                                <div class=" my-auto align-self-center ">
                                    <span><a class=" " data-toggle="collapse" href="#collapse{{$menu_item->id}}" role="button"><i class="fa-solid fa-angle-down fa-2xl"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

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
                                                        @foreach($menu_main_options as $menu_main_option)
                                                        <option value="{{$menu_main_option->option_name}}">{{$menu_main_option->option_name}} </option>

                                                        @endforeach





                                                    </select>
                                                </div>



                                                <div class="form-group ">
                                                    <a data-toggle="collapse" href="#article_options" aria-expanded="false">
                                                        <label for="exampleInputName1">Food Options</label>
                                                    </a>
                                                    <div id="article_options_edit{{$menu_item->id}}">
                                                        <a class=" add_article_option_edit btn bg-success">+</a>
                                                        <a class="remove_article_option_edit btn bg-danger">-</a>
                                                        @error('article_option_price.*')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror

                                                        @foreach($menu_articles_option[$menu_item->id] as $option_item)

                                                        <div class="form-group"><label> {{$option_item->article_id}}</label><input type="text" name="article_option_name[]" value="{{$option_item->article_name}}" class="form-control">
                                                            <input type="hidden" name="article_option_id[]" value="{{$option_item->article_id}}">
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





                    @endforeach







                </div>
            </div>



        </div>
    </div>
    <div class=" modal fade" id="add_option" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">



                <div class="shadow-sm rounded bg-white p-4 overflow-hidden">
                    <div class="d-flex item-aligns-center">
                        <h2 class="font-weight-bold h4 pb-2 text-dark border-bottom mb-0 w-100">Add Option</h2>
                    </div>

                    <div class="col-11 mx-auto">
                        <form action="{{route('add_article_option')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group pt-3">

                                <label for="exampleInputName1">Option name</label>

                                <input class="form-control" type="text" name="option_name" id="">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Add option">

                            </div>

                        </form>

                    </div>

                </div>


                <div class="modal-footer p-0 border-0">

                    <button type="button" class="btn border-top  m-0 btn-block" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class=" modal fade" id="add_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">



                <div class="shadow-sm rounded bg-white p-4 overflow-hidden">
                    <div class="d-flex item-aligns-center">
                        <h2 class="font-weight-bold h4 pb-2 text-dark border-bottom mb-0 w-100">Add Food</h2>
                    </div>

                    <div class="col-11 mx-auto">

                        <form method='post' enctype="multipart/form-data" action="{{ route('add_article')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group pt-3">
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
                                    @foreach($menu_main_options as $menu_main_option)
                                    <option value="{{$menu_main_option->option_name}}">{{$menu_main_option->option_name}} </option>

                                    @endforeach




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
                                    @error('article_option_price.*')
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
                                <button id="article_submit" type="submit" class="btn btn-primary btn-block">Add food</button>
                            </div>


                        </form>
                    </div>

                </div>


                <div class="modal-footer p-0 border-0">

                    <button type="button" class="btn border-top  m-0 btn-block" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>





    @include('vendor.layout.navigation')
    @include('layouts.scripts')
    </div>


</body>



</html>