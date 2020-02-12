var $ = require("jquery");

var menu_class_arr = ["no-menu","only_icons","full_menu"];
function remuveNavClasses (){
    $(menu_class_arr).each(function(index){

        $("body").removeClass(menu_class_arr[index]);
    });
}

function change_menu (){
        $('button').click(function(){  
            
                remuveNavClasses ();
            
                if($(this).hasClass("no")){
                $("body").addClass("no-menu");
                }
                if($(this).hasClass("only")){
                    $("body").addClass("only_icons");
                }
                if($(this).hasClass("full")){
                    $("body").addClass("full_menu");
                }
        });
}
function fullMenuOnHover(){
    $("nav.side").hover(function(){
        remuveNavClasses ();
        $("body").addClass("full_menu");
      }, function(){
        remuveNavClasses ();
        $("body").addClass("only_icons");
    });
}
 

exports.change_menu = change_menu;
exports.fullMenuOnHover = fullMenuOnHover;


