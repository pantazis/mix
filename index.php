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
   var owl = $('.owl-carousel');
   var hashLocation =window.location.hash;
 
   activeLi =  $(hashLocation).closest("li")[0] == -1 ? 0 :  $(hashLocation).closest("li")[0];
    
   
 
   var activeTab = $(".tabs.tabs-transparent li").index(activeLi);  
   $($(".tabs li")[activeTab]).find("a").addClass("active"); 
   $( document ).ready(startOwl()); 

   function startOwl(){
    setInterval(function(){  M.toast({html: 'I am a toast! dddddddddddddddddddddddddddddddddddddddddd'}) }, 3000);
  
   
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

 
    console.log( '$("a'+ activeTab +'").closest("li").click();');

    $("a"+activeTab).closest("li").click(); 
   }

</script>
</body>
</html>