    <div class="bg-primary p-3 d-none n">
        <div class="text-white">
            <div class="title d-flex justify-content-between align-items-center">

                <h4 class="font-weight-bold logo m-0 ">Khaik</h4>
                @auth('vendors')
                <a href="{{route('vendor_logout')}}" class="text-white "><i class="fa-solid fa-arrow-right-from-bracket fa-2xl"></i></a>
                @endauth
                @auth('users')
                <a href="{{route('user_logout')}}" class="text-white "><i class="fa-solid fa-arrow-right-from-bracket fa-2xl"></i></a>
                @endauth
                @auth('admins')
                <a href="{{route('admin_logout')}}" class="text-white "><i class="fa-solid fa-arrow-right-from-bracket fa-2xl"></i></a>
                @endauth

            </div>
        </div>
    </div>