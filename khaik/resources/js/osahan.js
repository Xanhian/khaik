
(function($) {
    "use strict"; // Start of use strict

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();


    $('.offer-slider').slick({
        //   centerMode: true,
        //   centerPadding: '30px',
        slidesToShow: 4,
        arrows: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            }
        ]
    });


    $('.cat-slider').slick({
      
        //   centerPadding: '30px',
        slidesToShow: 8,
           autoplay: true,
    autoplaySpeed: 6000,

     
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                 
                    centerPadding: '40px',
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 480,
                settings: {
                 arrows: false,
            
             
                touchThreshold: 20,
        
   
  
             
  
                      slidesToScroll: 4,
                
                    slidesToShow: 4,
                }
            }
        ]
    });

 



    // Trending slider

    $('.trending-slider').slick({
       //  centerMode: true,
       // centerPadding: '30px',
        slidesToShow: 3,
        arrows: true,
        responsive: [{
          
                breakpoint: 768,
                settings: {
                    arrows: false,
               
                
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,                 
                    slidesToShow: 1
                }
            }
        ]
    });

    //discover
    $('.discover-slider').slick({
        centerMode: false,
     
       lazyLoad: 'ondemand',
        slidesToShow: 2,
          autoplay: true,
    autoplaySpeed: 3000,
        
        responsive: [{
          
                breakpoint: 768,
                settings: {
                    arrows: false,
               
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,                 
                    slidesToShow: 1
                }
            }
        ]
    });



    // Most popular slider

    $('.popular-slider').slick({
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 1,
        arrows: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    // Osahan Slider
    $('.osahan-slider').slick({
        centerMode: false,
        slidesToShow: 1,
        arrows: false,
        dots: true
    });

    // osahan-slider-map
    $('.osahan-slider-map').slick({
        //   centerMode: true,
        //   centerPadding: '30px',
        autoplay: true,
        slidesToShow: 5,
        arrows: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    autoplay: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    autoplay: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            }
        ]
    });


   

})(jQuery); // End of use strict
