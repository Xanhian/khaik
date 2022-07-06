var current_fs, next_fs, previous_fs; 
var opacity;


$(".next").click(function(){
    var name = $("#firstname").val();
      const element = $("#headtitle");

    const textToReplace = element.text();
  const newText = textToReplace.replace("Welcome to khaik", "Hello "+name);
  element.text(newText);
    $("#instructions").text("Please fill in the following fields to create your restaurant");

    
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    

    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    

    next_fs.show(); 

  
    

    current_fs.animate({opacity: 0}, {
        step: function(now) {
          
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
        }, 
        duration: 600
    });
});

$(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
 
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    

    previous_fs.show();
    console.log(current_fs);


    current_fs.animate({opacity: 0}, {
        step: function(now) {
     
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
        }, 
        duration: 600
    });
});

$(".current").click(function(){

    
    current_fs = $("#fs2");
    previous_fs = $("#fs2").prev();

    $("#progressbar li").eq($("fieldset").index(current_fs)).addClass("active");

    


    previous_fs.hide();

   
});



$(".submit").click(function(){
    return false;
})
    