<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="fixed-bottom-bar">
    <div class="bg-primary p-3 d-flex align-items-center">
        <h4 class="font-weight-bold m-0 text-white">Khaik</h4>
    </div>
    <div class="container mt-3 w-100">

        <div class="card shadow-sm">
            <div class="deal-img">
                <img id="img_preview" class="deal-img-preview" />
            </div>
            <div class="container p-5 mx-auto">
                <form action="{{route('vendor_deals_add')}}" enctype='multipart/form-data' method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

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


    @include('vendor.layout.navigation')
    @include('layouts.scripts')
</body>

</html>