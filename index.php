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
    <link
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap&subset=greek-ext,latin-ext"
        rel="stylesheet">


    <link href="<?php mix('/public/assets/css/home_page.css');?>" rel="stylesheet">

    <!-- Plugin CSS -->
</head>

<body>
    <?php include "partials_php/nav.php" ?>
    <div class="main_body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text_con">
                        <h1 class="h2">Πίνακας ελέγχου</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text_con">
                        <h2 class="h3">pantazis vastardis</h2>
                        <p>pantazisvastardis@gmail.com <a href="">(επαλήθευση)</a>
                            <p>
                                +30.6932968500
                            </p>
                            <a href="">αλλαγή στοιχείων & ρυθμίσεων</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="text_con">
                    <?php for ($x = 0; $x <= 2; $x++) { ?>
                        <div class="listrow">
                            <h2 class="h3">
                                ΥΠΟΛΟΙΠΟ FORTH
                            </h2>
                            <p class="num">
                                $47.928,31
                            </p>
                            <p>
                                Τιμές:com: $8,95net: $15,55org: $8,95cc: $24,95tv: $39,95
                            </p>
                            <p>
                                Συνολικά domains: 6
                            </p>
                        </div>
                    <?php } ?>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script src="<?php mix('/public/assets/js/homepage.js');?>"></script>
</body>

</html>