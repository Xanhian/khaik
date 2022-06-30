  $( document ).ready(function() {
 





  var like_state= document.getElementsByClassName("custom-fa 1");
  

      if($(like_state).hasClass("1")==true){
     
                  $(like_state).addClass("fa-test-like");
                 $(like_state).removeClass("custom-fa");
                 
             

        };

      console.log( "Are you lost >.-" );

      var today = new Date();
      var weekday=new Array(7);
      weekday[0]="sunday";
      weekday[1]="monday";
      weekday[2]="tuesday";
      weekday[3]="wednesday";
      weekday[4]="thursday";
      weekday[5]="friday";
      weekday[6]="saturday";

      var test = weekday[today.getDay()];



      switch(test) {
    case "sunday":
      current_day = $(".sunday");


      current_child =$(current_day).children(".box-day-value");

          $(current_day).addClass("box-day-active");
            $(current_day).animate({opacity: 1},{
                  
          duration: 300
                });
          $(current_child).animate({opacity: 1},{
                  
          duration: 100
                });

    
      break;
    
    
    case "monday":
      current_day = $(".monday");


      current_child =$(current_day).children(".box-day-value");

          $(current_day).addClass("box-day-active");
            $(current_day).animate({opacity: 1},{
                  
          duration: 300
                });
          $(current_child).animate({opacity: 1},{
                  
          duration: 100
                });

                
      break;
    

    case "tuesday":
      current_day = $(".tuesday");


      current_child =$(current_day).children(".box-day-value");

          $(current_day).addClass("box-day-active");
            $(current_day).animate({opacity: 1},{
                  
          duration: 300
                });
          $(current_child).animate({opacity: 1},{
                  
          duration: 100
                });

    
      break;
      
    

    case "wednesday":
      current_day = $(".wednesday");


      current_child =$(current_day).children(".box-day-value");

          $(current_day).addClass("box-day-active");
            $(current_day).animate({opacity: 1},{
                  
          duration: 300
                });
          $(current_child).animate({opacity: 1},{
                  
          duration: 100
                });

      

      
      break;
    case "thursday":
  current_day = $(".thursday");


      current_child =$(current_day).children(".box-day-value");

          $(current_day).addClass("box-day-active");
            $(current_day).animate({opacity: 1},{
                  
          duration: 300
                });
          $(current_child).animate({opacity: 1},{
                  
          duration: 100
                });

    
      break;
    case "friday":
      current_day = $(".friday");


      current_child =$(current_day).children(".box-day-value");

          $(current_day).addClass("box-day-active");
            $(current_day).animate({opacity: 1},{
                  
          duration: 300
                });
          $(current_child).animate({opacity: 1},{
                  
          duration: 100
                });

    
      break;
    


    case "saturday":
      current_day = $(".saturday");


      current_child =$(current_day).children(".box-day-value");

          $(current_day).addClass("box-day-active");
            $(current_day).animate({opacity: 1},{
                  
          duration: 300
                });
          $(current_child).animate({opacity: 1},{
                  
          duration: 100
                });

    
      break;
    
    

  
  }

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

      
      $(".like_btn").click(function(){

        var like_id= $(this).children();


        if($(like_id).hasClass("custom-fa")){
    
                $(like_id).removeClass("custom-fa");
                    $(like_id).animate({opacity: 1,   fontSize: "3em",},{
                  
          duration: 300
                });
              
      
        }else{
       $(like_id).animate({opacity: 1,   fontSize: "2em",},{
                  
          duration: 300
                });
          $(like_id).addClass("custom-fa");
          $(like_id).removeClass("fa-test-like");
         
        }

        var form_id = $(this).prev().attr('id');
        var like_counter_id = $(this).next().attr('id');
        var like_counter = document.getElementById(like_counter_id);
        var formData = new FormData(document.getElementById(form_id));
      
      let article_id =formData.get('article_id');
      
    
      let _token   = $('meta[name="csrf-token"]').attr('content');
        
    


      $.ajax({
          url: "/like/get",
          type:"POST",
          data:{

            article_id:article_id,
            _token: _token
          },
          success:function(response){
            
            $(like_counter).text(response.data);
          
          },
      
        });
      });

      var location_check = $("#lat");
var x =  $("#lat");
var y =  $("#lon");
  

  getLocation();
   function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
  x.val(position.coords.latitude) ;
  y.val(position.coords.longitude) ;

};
 


  });

