var $ = require("jquery");
import * as bootstrapValidate from 'bootstrap-validate';
import { createPopper } from '@popperjs/core';
import {  Alert,Tooltip } from 'bootstrap';
import {nav} from './_partial/nav';
import {} from './_partial/forms';
import {} from './_partial/custom_table.js';
window.bootstrapValidate = bootstrapValidate;
var menu_class_arr = ["no-menu","only_icons","full_menu"];
var container_size_arr = ["full_container", "normal_container"];

var popover_options={
   html:true,
   boundary:'viewport'    
};

nav.nav_popover('[data-toggle="popover0"]',$(".login").html(),popover_options);

nav.nav_popover('[data-toggle="popover1"]',$(".cart").html(),popover_options);

nav.nav_popover('[data-toggle="popover2"]',$(".help").html(),popover_options);

//fullMenuOnHover();
nav.menu_sub_cat();
nav.toggleMenu();









  $("body").click(function(event){  
   var is_popover_body = $(event.target).closest(".popover-body").length == 0;
   var is_popover = $(event.target).closest('[data-toggle*="popover"]').length == 0;
   if(is_popover_body && is_popover){
        $(this).find('[data-toggle*="popover"]').popover('hide');
       
      }
     
    
      
  });

  $('[data-toggle*="popover"]').on('click', function (e) {
    $('[data-toggle*="popover"]').not(this).popover('hide');
});


$(".b1 button").click(function(event){
    var targ = $(event.target).closest(".btn");
    nav.change_menu(menu_class_arr,targ);
});

$(".b2 button").click(function(event){
    var targ = $(event.target).closest(".btn");
    nav.change_container_size(container_size_arr,targ );
})




//form validetion
   /* bootstrapValidate(
        '#docs-demo',
        'email:Enter a valid E-Mail Address!'
     );*/
     $("input").hover(function(){
        
    })

     $("input").hover(
         function(){},
         function(){}
         );


     


    








