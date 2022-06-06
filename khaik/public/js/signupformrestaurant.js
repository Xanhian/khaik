var current_fs, next_fs, previous_fs; //fieldsets
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
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    console.log(current_fs);
    

    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
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
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    console.log(current_fs);


    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
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

    console.log("hello world");
    
    current_fs = $("#fs2");
    previous_fs = $("#fs2").prev();
 
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).addClass("active");

    console.log(current_fs);
    console.log(previous_fs);


    previous_fs.hide();

    //   current_fs.animate({opacity: 1}, {
    //     step: function(now) {
    //         // for making fielset appear animation
    //         opacity = 1 - now;

    //         current_fs.css({
    //             'display': 'none',
    //             'position': 'relative'
    //         });
    //         next_fs.css({'opacity': opacity});
    //     }, 
    //     duration: 600
    // });



    
    //show the previous fieldset


    //hide the current fieldset with style
   
});

$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
});

$(".submit").click(function(){
    return false;
})
    