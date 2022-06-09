<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    <div class="container p-0 login-page">
        <div class="d-flex align-items-center justify-content-center flex-column">
            <img src="https://ychef.files.bbci.co.uk/976x549/p04tx3m6.jpg" alt="" srcset="" class="w-100 h-100 mx-auto" />
            <div class="mt-3 w-75 h-100 mx-auto">
                <h2 id="headtitle" class="text-dark text-center my-0">Welcome to khaik</h2>

                <p id="instructions" class='text-center'></p>


                <div class="row justify-content-center mt-0">
                    <div class="px-0 pb-0 mb-3">
                        <div class="row">
                            <div class="mx-0">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('save_restaurant') }}" id="msform">
                                    <!-- progressbar -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />


                                    <ul id="progressbar" class="col text-center mb-0 mx-auto">
                                        <li class="active" id="account">
                                            <div class="progress-box">
                                                <i class="feather-gift"></i>
                                            </div>
                                            <strong>Personal</strong>

                                        </li>
                                        <li id="payment">
                                            <div class="progress-box">
                                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                            </div><strong>Restaurant</strong>

                                        </li>
                                        <li id="confirm">
                                            <div class="progress-box">
                                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                            </div><strong>Restaurant</strong>
                                        </li>
                                        <li id="confirm">
                                            <div class="progress-box">
                                                <i class="feather-map-pin"></i>
                                            </div>
                                            <strong>Location</strong>
                                        </li>
                                    </ul>

                                    <!-- fieldsets -->
                                    <fieldset id="fs1">

                                        <h3 class="text-dark my-3">Account Information</h3>
                                        <input type="text" name="firstname" id="firstname" placeholder="First Name" />
                                        @error('firstname')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="lastname" placeholder="Last Name" />

                                        @error('lastname')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror
                                        <input type="number" name="phonenumber" placeholder="1234567" />
                                        @error('phonenumber')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror
                                        <input type="email" name="email" placeholder="Email" />
                                        @error('email')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror
                                        <input type="password" name="password" placeholder="Password" />
                                        @error('password')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror
                                        <input type="password" name="repassword" placeholder="Confirm Password" />
                                        @error('repassword')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror

                                        <input type="button" name="next" class="next text-center action-button" value="Next Step" />



                                    </fieldset>

                                    <fieldset id="fs2">
                                        <h3 class="text-dark my-4">Restaurant Information</h3>
                                        <input type="text" name="restaurant_name" placeholder="Restaurant name" />
                                        @error('restaurant_name')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="restaurant_description" placeholder="Restaurant description" />
                                        @error('restaurant_description')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror

                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                        <input type="button" name="next" class="next action-button" value="Next Step" />




                                    </fieldset>

                                    <fieldset id="fs3">
                                        <h3 class="text-dark my-4">Restaurant Information</h3>
                                        <p>Restaurant header photo</p>
                                        <input type="file" name="restaurant_image" />
                                        @error('restaurant_image')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror

                                        <input type="number" name="restaurant_phonenumber" placeholder="Restaurant phonenumber" />
                                        @error('restaurant_phonenumber')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror

                                        <input type="text" name="facebook_link" placeholder="Restaurant facebook link" />
                                        @error('facebook_link')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror
                                        <p>Restaurant Categories</p>
                                        <div class="d-flex flex-row flex-wrap">
                                            @foreach($restaurants_category as $category)
                                            <div class="col-4 ">
                                                <div class="row">
                                                    <input type="checkbox" class="w-25" name="restaurant_category[]" value="{{$category->id}}">
                                                    <p class="pl-2">{{$category->restaurant_category_name}}</p>
                                                </div>

                                            </div>
                                            @endforeach







                                        </div>


                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                    </fieldset>

                                    <fieldset id="fs4">
                                        <h3 class="text-dark my-4">Location</h3>

                                        <input type="text" name="restaurant_addres" placeholder="Restaurant addres" />
                                        @error('restaurant_addres')
                                        <div class="mt-n3 mb-1">*{{ $message }}</div>
                                        @enderror

                                        <select name="restaurant_place">
                                            <option value="paramaribo">Paramaribo</option>
                                        </select>

                                        <select name="restaurant_country">
                                            <option value="paramaribo">Suriname</option>
                                        </select>
                                        <br />
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                        <input type="submit" class=" action-button" value="Finish" />

                                    </fieldset>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    @include('layouts.scripts')

</body>

</html>