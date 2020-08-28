var $ = require("jquery");




  $(".form-control").focus(function(){
    $(".form-control").closest(".input-cont").removeClass("focused");      
    $(this).closest(".input-cont").addClass("focused");
  });

 function check_input (target_el){
   
    var valueOfInput = $(target_el).val();
    console.log(valueOfInput);
    if(valueOfInput != ""){
      $(target_el).addClass("has_val");
    } else {
      $(target_el).removeClass("has_val");
    }
  }
  $("input,select").on( "focus",function(){
    var input_el = this;
    check_input (input_el);
  });

  $("input").on( "focusout",function(){
    var input_el = this;
    check_input (input_el);
  });

  $(".filter2").click(function(){

    if( $(this).parent().hasClass("open")){
      $(this).parent().removeClass("open");
    $(this).parent().addClass("closed");
    $(this).parent()[0].addEventListener("animationend",function(){
      $(el).parent().removeClass("closed");      
    });


    var el = this;    
    $(el).find("#line3")[0].addEventListener("animationend",function(){
      $(el).parent().removeClass("closed");      
    });
  }else{
    $(this).parent().removeClass("closed");
    $(this).parent().addClass("open");
    
  }
  }); 

 







