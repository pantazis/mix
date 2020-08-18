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
            <div class="item" data-hash="zero">
             <?php include $value['link'] ?>
             <?php include "partials_php/_fast_actions.php" ?>
            </div>                   
            <?php }?>         
          </div>
    
  
  
</div>







<script src="<?php mix('/public/assets/js/admin_home.js'); ?>"></script>
<script src="resources\assets\js\_libraries\owl.carousel.js?<?php echo rand(0,100) ?>"></script>
<script>
   var owl = $('.owl-carousel');
   owl.owlCarousel({
        
        items:1,
        loop:false,
        center:true,
        margin:0,     
       
    });


    owl.on('changed.owl.carousel', function(event) { 
        console.log(event.type);
        if(event.type == "changed"){
    var linext = $('ul.tabs.tabs-transparent') 
    $(linext).click();    
        }
})
owl.on('change.owl.carousel', function(event) { 

})










</script>
</body>
</html>