 <div class="container">

     <p class="font-weight-bold pt-4 m-0">FEATURED ITEMS</p>
     <!-- slider -->
     <div class="trending-slider rounded">

         @foreach($menu_items as $menu_item)

         <div class="osahan-slider-item">
             <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                 <div class="list-card-image">
                     <a href="">
                         <img alt="#" src="{{asset($menu_item->article_img)}}" class="img-fluid item-img w-100 feature-img">
                     </a>
                 </div>
                 <div class="p-3 position-relative">
                     <div class="list-card-body">
                         <h6 class="mb-1"><a href="checkout.html" class="text-black">{{$menu_item->article_name}}</a>
                         </h6>
                         <p class="text-gray m-0"> <span class="text-black-50">{{$menu_item->article_price_currency}} {{$menu_item->article_price_number}}</span></p>
                     </div>
                 </div>
             </div>
         </div>

         @endforeach


     </div>

 </div>