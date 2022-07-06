<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="fixed-bottom-bar">

    <div class="d-none">
        @include('components.logo')

    </div>

    <div class="osahan-popular">

        <div class="container">
            <div class="search py-5">
                <form action="{{route('filter_search')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div class="input-group mb-4">
                        <input type="text" name="search" class=" form-control form-control-lg input_search border-right-0" id="inlineFormInputGroup" placeholder="Search with khaik...">

                        <div class="input-group-prepend">
                            <button type="submit" class="btn input-group-text bg-white border_search border-left-0 text-primary"><i class="feather-search"></i></button>
                        </div>
                    </div>
                </form>
                <ul class="nav nav-tabs d-flex flex-row justify-content-between border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active border-0 bg-light text-dark rounded" id="restaurant-tab" data-toggle="tab" href="#restaurant" role="tab" aria-controls="home" aria-selected="true"><i class="feather-home mr-2"></i>Restaurants</a>
                    </li>


                    <li class="nav-item" role="presentation">
                        <a class="nav-link border-0 bg-light text-dark rounded ml-3" data-toggle="modal" data-target="#filters" role="tab" aria-controls="profile" aria-selected="false">Filter</a>
                    </li>
                </ul>


                <div class="tab-content">
                    <div class="tab-pane fade show active" id="restaurant" role="tabpanel" aria-labelledby="restaurant-tab">
                        @isset($results)
                        @if($results == 'nothing')
                        <div class="text-center py-5">
                            <p class="h4 mb-4"><i class="feather-search bg-primary text-white rounded p-2"></i></p>
                            <p class="font-weight-bold text-dark h5">Nothing found</p>
                            <p>we could not find anything that would match your search request, please try again.</p>
                        </div>
                        @else
                        @foreach($results as $result)

                        <div class="container mt-4 mb-4 p-0">

                            <div class="row">
                                <div class="col-md-3 pb-3">
                                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                        <div class="list-card-image">

                                            <a href="{{route('restaurant',['restaurant_name'=>$result->restaurant_name, 'restaurant_id'=>$result->restaurant_id])}}">
                                                <img alt="#" src="{{asset($result->restaurant_header_photo)}}" class="img-fluid search-item-img w-100">
                                            </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1">
                                                    <a href="{{route('restaurant',['restaurant_name'=>$result->restaurant_name, 'restaurant_id'=>$result->restaurant_id])}}" class="text-black">{{$result->restaurant_name }} </a>
                                                </h6>
                                                <p class="text-gray mb-1 small">{{$result->restaurant_addres}}</p>
                                                @isset($result->total)
                                                <p class="text-gray mb-1">Total favorites: {{$result->total}}</p>
                                                @endisset
                                                @isset($filter)
                                                @if($filter=='visit')
                                                <p class="text-gray mb-1">Total views: {{$result->total_views}}</p>
                                                @endif
                                                @endisset

                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        @endforeach
                        @endif
                        @else
                        <div class="text-center py-5">
                            <p class="h4 mb-4"><i class="feather-search bg-primary text-white rounded p-2"></i></p>
                            <p class="font-weight-bold text-dark h5">Nothing found</p>
                            <p>we could not find anything that would match your search request, please try again.</p>
                        </div>
                        @endisset


                    </div>

                </div>

            </div>
        </div>


    </div>

    <div class="modal fade" id="filters" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filters</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{route('filter_search')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input id="lat" type="hidden" name="lat">
                            <input id="lon" type="hidden" name="lon">


                            <h6>SORT BY</h6>
                            <div class="custom-control border-bottom custom-radio">
                                <input type="radio" id="customRadio1f" name="filter" value="location" class="custom-control-input" checked>
                                <label class="custom-control-label py-1 m-2 w-100 px-2 " for="customRadio1f">Nearest me</label>
                            </div>
                            <div class="custom-control border-bottom  custom-radio">
                                <input type="radio" id="customRadio2f" name="filter" value="favorite" class="custom-control-input">
                                <label class="custom-control-label py-1 m-2  w-100 px-2" for="customRadio2f">Most favorite</label>
                            </div>
                            <div class="custom-control border-bottom  custom-radio">
                                <input type="radio" id="customRadio3f" name="filter" value="visited" class="custom-control-input">
                                <label class="custom-control-label py-1 m-2  w-100 px-2" for="customRadio3f">Most visited</label>
                            </div>




                            <div class="col-12 mt-4 p-0">
                                <button type="submit" class="btn btn-primary  btn-sm btn-block">Apply</button>
                            </div>


                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    @include('layouts.navigation')
</body>
@include('layouts.scripts')

</html>