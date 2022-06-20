<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-bottom-bar">
    <div class="bg-primary p-3 d-flex align-items-center">
        <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
    </div>




    <div class="container">
        <button data-toggle="modal" data-target="#add_deal" class="btn btn-primary m-2">Add Deal</button>
        @foreach($deals as $deal)
        <div class="card shadow-sm">
            <img src="{{asset($deal->deal_photo)}}" alt="">
            <div class="container m-3">
                <div class="row">
                    <div class="col-10 container m-0">
                        <h1 class="m-0">
                            {{$deal->deal_name}}
                        </h1>
                        <p class="m-0">
                            {{$deal->deal_description}}
                        </p>
                    </div>
                    <div class="col-2 align-content-center my-auto">
                        <a data-toggle="modal" data-target="#edit_deal" class="text-decoration-none text-dark mr-3"><i class="p-2 bg-light btn-primary rounded-circle font-weight-bold fa-solid fa-pen"></i></a>
                    </div>


                </div>

            </div>
            <div class=" modal fade" id="edit_deal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">
                        <div class="container">
                            <form action="{{route('edit_deal')}}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                {{ method_field('PATCH') }}
                                <input type="hidden" name="deal_id" value="{{$deal->id}}">

                                <p>Deal Name</p>
                                <input type="text" name="edit_deal_name" id="" value="{{$deal->deal_name}}">
                                <p>Deal Description</p>
                                <input type="text" name="edit_description" id="" value="{{$deal->deal_description}}">
                                <input type="submit" value="">

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        @endforeach
    </div>

    . <div class=" modal fade" id="add_deal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="container mt-3 w-100">

                    <div class="card shadow-sm">
                        <div class="deal-img">
                            <img id="img_preview" class="deal-img-preview" />
                        </div>
                        <div class="container p-5 mx-auto">
                            <form action="{{route('vendor_deals_add')}}" enctype='multipart/form-data' method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="deal_id" value="{{}}">
                                <div class="form-group">
                                    <input type="file" name="deal_img" id="deal_img" class="form-control" accept="image/*" multiple />

                                </div>
                                <div class="form-group">
                                    <p>name</p>
                                    <input type="text" class="form-control" name="deal_name" id="">
                                </div>

                                <div class="form-group">
                                    <p>Description</p>
                                    <input type="text" class="form-control" name="deal_description" id="">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Post">
                            </form>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>





    @include('vendor.layout.navigation')
    @include('layouts.scripts')
</body>

</html>