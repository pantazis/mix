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
    console.log(el);   
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
$("#toggle").click(function(){
    $("body").toggleClass("menu_open")
});
}
 

exports.change_menu = change_menu;
//exports.fullMenuOnHover = fullMenuOnHover;
exports.toggleMenu = toggleMenu;
exports.change_container_size = change_container_size;


