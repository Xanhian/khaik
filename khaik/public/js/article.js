  $(document).ready(function() {

    var i=0; 
    
  

    $("#add_article_option").click(function(){
   i++;                 

    $("#article_options").append( '<div id='+i+' ><div class="form-group"><label>Food Name</label><input type="text" name="article_option_name[]" class="form-control"></div>  <div class="form-group"><label>Food Price</label><div class="row"><div class="col-5"><select class="form-control" name="article_option_currency[]"><option value="SRD">SRD</option></select></div><div class="col-7"><input type="number" name="article_option_price[]" placeholder="00.00" class="form-control"></div></div></div>');
  });
  
   $("#remove_article_option").click(function(){
  $('#'+i).remove();
  i--;
  });

  

      $(".add_article_option_edit").click(function(){
        var option_box = $(this).parent();
   i++;                 
   console.log(option_box);
  
    option_box.append( '<div id='+i+' ><div class="form-group"><label>Food Name</label><input type="text" name="article_option_name[]" class="form-control"></div>  <div class="form-group"><label>Food Price</label><div class="row"><div class="col-5"><select class="form-control" name="article_option_currency[]"><option value="SRD">SRD</option></select></div><div class="col-7"><input type="number" name="article_option_price[]" placeholder="00.00" class="form-control"></div></div></div>');

  });
  
   $(".remove_article_option_edit").click(function(){
  $('#'+i).remove();
  i--;
  });

  $(".delete_article").click(function(){
   $(".article_delete_form").submit();

  });
            

 var deal = $("#deal_img").length;


 if (deal == 1) {
deal_img.onchange = evt => {
  const [file] = deal_img.files
  if (file) {
    img_preview.src = URL.createObjectURL(file)
  }
  }
   
 }
 
 
            


       





   

})