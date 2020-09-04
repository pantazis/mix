<?php include "partials_php/fakeData.php" ?>
<?php
function mix($filename)
{
    $json = file_get_contents('mix-manifest.json');
    $obj = json_decode($json);
    echo '.' . $obj->$filename;
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <!-- Google Fonts -->
    <link href="<?php mix('/public/assets/css/admin_home.css'); ?>" rel="stylesheet">
    
    
    <!-- Plugin CSS -->
</head>
<body>
<?php include "partials_php/nav.php" ?>
<div class="main_body">
<div class="notify">
    <div class="noti_head"></div>
    <div class="main_text">
        <div class="icon"></div>
        <div class="flextext"></div>
    </div>
    <div class="actions_f"></div>
</div>
<div class="owl-carousel owl-theme">

<?php foreach ($tabArr as $key => $value){ ?>
            <div class="item" data-hash="<?=$value['url']?>">
                <?php $num = $key; ?>            
                <?php include $value['link'] ?>
                <?php include "partials_php/_fast_actions.php" ?>
                <?php include "partials_php/_footer.php" ?>
            </div>                   
            <?php }?>         
          </div>
</div>

<?php include "partials_php/_js-scripts.php"?>
<div>
    

</div>




<script src="resources\assets\js\_libraries\owl.carousel.js?<?php echo rand(0,100) ?>"></script>
<script>
var maintext ="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sapien est, viverra vel felis ac, tempor tempus metus. Mauris aliquam condimentum ipsum, at iaculis mi vestibulum ut. Vestibulum cursus elit vel dolor varius, vel cursus dolor imperdiet. Duis varius blandit lectus, nec mollis lectus rhoncus vitae. Integer dapibus mauris sed commodo luctus. In hac habitasse platea dictumst. Ut porta tortor feugiat pulvinar finibus. Sed lacinia pellentesque felis id feugiat. Etiam vel vestibulum tortor. Nunc at finibus mauris. Ut rutrum, sapien vitae varius commodo, risus tortor euismod lorem, ut mollis felis nisi a quam.";

var limit = 85;
if(maintext.length > limit){
    var res = maintext.substring(0, limit - 3);
    res =maintext.substring(0,res.lastIndexOf(" "));
    res =res.concat("...");
}else{
    var res = maintext;
}; 






var notification = `<div class="notification" data-opend="false">
        <div class="head">
            <i class="fas fa-star"></i>
                Messages now
            <span class="top-icons">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </span>           
         </div>         
        <div class="parent_el">
            <div class="main">
            <i class="fas fa-user-shield"></i>      
            <div>
                <div class="title">Security notification</div>                
                <div class="text-samll a">${res}</div>
                <div class="text-samll b">${maintext}</div>                           
            </div>
            <div></div>
        </div>
        </div>
        <div class="actions">
            <a href="" class="action">action</a>
            <a href="" class="action 2nd">action2</a>
        </div>
    </div>`;

   var owl = $('.owl-carousel');
   var hashLocation =window.location.hash; 
   activeLi =  $(hashLocation).closest("li")[0] == -1 ? 0 :  $(hashLocation).closest("li")[0];  
 
   var activeTab = $(".tabs.tabs-transparent li").index(activeLi);  
   $($(".tabs li")[activeTab]).find("a").addClass("active"); 
   $( document ).ready(startOwl());






   function startOwl(){
       var b = 0
    setInterval(function(){
        if(b<10){
       
        var not = M.toast({html: notification,displayLength: Infinity });
        notificationToggle(not);
  
        }
        b++
     }, 3000);
     






        var i = 0;
    function notificationToggle (not){
        $(not.el).mouseup(function(e){ 
              
            var detectDrag = M.Toast._draggedToast.startingXPos-M.Toast._draggedToast.xPos;
                        
         var el = $(not.el).find(".notification");
      



        
        $(el).find(".parent_el").css("height",$(el).find(".main").height()+"px");              
            if( detectDrag > 0 && detectDrag < 25 || detectDrag < 0 && detectDrag > -25 || detectDrag == 0){
                if(e.target =="i.fas.fa-times"){
                    console.log("xxxxxxxxxxxxxxxx")
                    return 
                }
                if($(el).attr("data-opend")=="false"){
                $(".notification").removeClass("open").attr("data-opend","false").find(".parent_el").css("height",$(el).find(".main").height()+"px");
                $(el).addClass("open");           
                $(el).find(".parent_el").css("height",$(el).find(".main").height()+"px");
                $(el).attr("data-opend","true");
            }else{
                $(el).removeClass("open");           
                $(el).find(".parent_el").css("height",$(el).find(".main").height()+"px");
                $(el).attr("data-opend","false");
            }
        }
    });       
    };
   

 
  
   
   var options={        
        items:1,
        loop:false,
        center:true,
        margin:0,        
        startPosition: activeTab
    }
    console.log(options);
   owl.owlCarousel(options);


    owl.on('changed.owl.carousel', function(event) {      
        if(event.type == "changed"){
    var linext = $('ul.tabs.tabs-transparent') 
    $(linext).click();    
        }
})
 
   

    $("a"+activeTab).closest("li").click(); 


  
   }



</script>
</body>
</html>