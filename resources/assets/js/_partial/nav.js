var $ = require("jquery");


function remuveNavClasses (classarr,el){
    $(classarr).each(function(index){
        $("body").removeClass(classarr[index]);
        
    });
    $(classarr).each(function(index){
        if($(el).hasClass(classarr[index])){
            $("body").addClass(classarr[index]);
            }
    });
   
}

function change_menu (arr,el){
            remuveNavClasses (arr,el);
}

function change_container_size (arr,el){  
        remuveNavClasses (arr,el);   
}
/*function fullMenuOnHover(){
    $("nav.side").hover(function(){
        remuveNavClasses ();
        $("body").addClass("full_menu");
      }, function(){
        remuveNavClasses ();
        $("body").addClass("only_icons");
    });
}*/
function toggleMenu(){
    $(".icon-par.ip1").click(function(){
        $("body").addClass("menu_open")
    });

    $(".nav-modal").click(function(e){
        if($(e.target).closest(".side_cont").length == 0){
            $("body").removeClass("menu_open");             
        }            
    });
    
    $(".close_icon").click(function(){
        $("body").removeClass("menu_open")
    });
}
//opne menu sub categories
function menu_sub_cat(){   
    $(".side_cont li .sub-cat-open").click(function(){
       var parent_category = $(this).closest("li").attr("data-parent");
       $(".side_cont ul[data-child="+parent_category+"]").addClass("active");
    });
    $(".sub_cat .close_sub").click(function(){
      $(this).closest("ul").removeClass("active")
    });
}

function nav_popover(el,data,options){   
$(el).hover(function(){
    $(this).attr('data-content',data);    
    $(el).popover(options);
 
});
}



   
//object with function for navigation
nav = {
    change_menu : change_menu,
    //exports.fullMenuOnHover = fullMenuOnHover;
    toggleMenu : toggleMenu,
    change_container_size : change_container_size,
    menu_sub_cat : menu_sub_cat,
    nav_popover : nav_popover,
    
}

exports.nav = nav;



