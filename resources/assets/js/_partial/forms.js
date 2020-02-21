var $ = require("jquery");




  $(".form-control").focus(function(){
    $(".form-control").closest(".input-cont").removeClass("focused");      
    $(this).closest(".input-cont").addClass("focused");
  });







