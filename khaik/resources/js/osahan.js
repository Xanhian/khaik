
(function($) {
    "use strict"; // Start of use strict

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();





    $('.cat-slider').slick({
      
        //   centerPadding: '30px',
     
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



    //discover
    $('.discover-slider').slick({
        centerMode: false,
     arrows:false,
       lazyLoad: 'ondemand',
        slidesToShow: 1,
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




   



   

})(jQuery); // End of use strict
