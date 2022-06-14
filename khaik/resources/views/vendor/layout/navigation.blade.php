 <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
     <div class="row">
         <div class="col">
             <a href="{{route('vendor_home')}}" class="text-dark small font-weight-bold text-decoration-none">
                 <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
                 Home
             </a>
         </div>
         <div class="col ">
             <a href="{{route('vendor_deals')}}" class="text-dark small font-weight-bold text-decoration-none">
                 <p class="h4 m-0"><i class="feather-gift"></i></p>
                 Deals
             </a>
         </div>
         <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
             <div class="bg-danger rounded-circle mt-n0 shadow">
                 <a href="restaurant/{{session()->get('owners_restaurant')}}" class="text-white small font-weight-bold text-decoration-none">
                     <i class="fa-solid fa-store"></i>
                 </a>
             </div>
         </div>
         <div class="col">
             <a href="{{route('vendor_menu')}}" class="text-dark small font-weight-bold text-decoration-none">
                 <p class="h4 m-0">
                     <i class="fa fa-cutlery" aria-hidden="true"></i>
                 </p>
                 Menu
             </a>
         </div>
         <div class="col">
             <a href="{{route('vendor_profile')}}" class="text-dark small font-weight-bold text-decoration-none">
                 <p class="h4 m-0"><i class="feather-user"></i></p>
                 Profile
             </a>
         </div>
     </div>
 </div>