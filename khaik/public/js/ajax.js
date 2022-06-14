$( document ).ready(function() {
    console.log( "Are you lost >.-" );
//    var today = new Date();
//     var day_class=$(".box-day");
// var weekday=new Array(7);
//     weekday[0]="sunday";
//     weekday[1]="monday";
//     weekday[2]="tuesday";
//     weekday[3]="wednesday";
//     weekday[4]="thursday";
//     weekday[5]="friday";
//     weekday[6]="saturday";

//     var test = weekday[today.getDay()];

//     console.log(weekday[today.getDay()]);

//     switch(test) {
//   case weekday[0]:
//       $(".monday").addClass("box-day-active");
//                $(current_fs).animate({opacity: 1},{
                
//         duration: 300
//                });
//                 $(current_fs_child).animate({opacity: 1},{
                
//         duration: 100
//                });
     
//     break;
//   case weekday[5]:
//   $(".friday").addClass("box-day-active");
              
//     break;
 
// }

   // $('#splashscreen').fadeOut(700);


   

    $(".box-day").click(function(){
    current_fs = $(this);
    current_fs_child =$(this).children(".box-day-value");
    previous_fs = $(this).prevAll();
    previous_fs_child = $(this).prevAll().children(".box-day-value");
    next_fs_child = $(this).nextAll().children(".box-day-value");
    next_fs = $(this).nextAll();
    

        if ($(current_fs).hasClass("box-day-active")) {
             $(current_fs).removeClass("box-day-active");
               $(current_fs_child).animate({opacity: 0},{
                 duration: 10
               });
          

        } else {
               $(previous_fs).removeClass("box-day-active");
               $(next_fs).removeClass("box-day-active");
               $(previous_fs_child).animate({opacity: 0},{
                 duration: 10
               });
                $(next_fs_child).animate({opacity: 0},{
                 duration: 10
               });

               $(current_fs).addClass("box-day-active");
               $(current_fs).animate({opacity: 1},{
                
        duration: 300
               });
                $(current_fs_child).animate({opacity: 1},{
                
        duration: 100
               });
        }
    

       
  

      });
});