<?php
function mix($filename){
$json = file_get_contents('mix-manifest.json');
$obj = json_decode($json);
echo '.'.$obj->$filename;
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


    <link href="<?php mix('/public/assets/css/home_page.css');?>" rel="stylesheet">

    <!-- Plugin CSS -->
</head>

<body>
    <?php include "partials_php/nav.php" ?>
    <div class="main_body">
        <div class="container">
            <div class="row">
                <div class="text_con col-md-4">aaaa</div>
                <div class="text_con col-md-4">aaaa</div>
                <div class="text_con col-md-4">aaaa</div>
            </div>
        </div>
    </div>


    <script src="<?php mix('/public/assets/js/homepage.js');?>"></script>
</body>

</html>