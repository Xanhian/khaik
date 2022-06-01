  $(document).ready(function() {

      var i=0; 
      var x="name";
  
    
   

    $("#add_article_option").click(function(){
   
       i++;
                                        
    $("#article_options").append( '<div id='+i+' ><div class="form-group"><label>Article Name</label><input type="text" name="article_option_name[]" class="form-control"></div>  <div class="form-group"><label>Article Price</label><div class="row"><div class="col-5"><select class="form-control" name="article_option_currency[]"><option value="SRD">SRD</option></select></div><div class="col-7"><input type="number" name="article_option_price[]" placeholder="00.00" class="form-control"></div></div></div>');
    console.log(i);

                                               

  
  });
   $("#remove_article_option").click(function(){

    
       $('#'+i).remove();
      i--;
        console.log(i);
      });





   

})