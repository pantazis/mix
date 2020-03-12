<?php include "partials_php/fakeData.php"?>
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

    <link href="<?php mix('/public/assets/css/admin_home.css');?>" rel="stylesheet">

    <!-- Plugin CSS -->
</head>

<body>
    <?php include "partials_php/nav.php" ?>
    <div class="main_body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text_con main_cat">
                        <h1 class="h2">Πίνακας ελέγχου</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text_con">
                        <h2 class="h3">pantazis vastardis</h2>
                        <p>pantazisvastardis@gmail.com <a href="">(επαλήθευση)</a>
                            <p>
                                +30.6932968500
                            </p>
                            <a href="">αλλαγή στοιχείων & ρυθμίσεων</a>
                        </p>
                    </div>
                    <div class="text_con">
                        <?php for ($x = 0; $x <= 2; $x++) { ?>
                        <div class="listrow">
                            <h2 class="h3">
                                ΥΠΟΛΟΙΠΟ FORTH
                            </h2>
                            <div class="flex-r">
                                <p class="num">100</p>
                                <button type="button" class="ml-auto btn btn-primary btn-sm">προβολή</button>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="text_con full_height">
                        <?php for ($x = 0; $x <= 2; $x++) { ?>
                        <div class="listrow">
                            <img class="bg_icon" src="public/assets/img/euro" alt="">
                            <h2 class="h3">
                                ΥΠΟΛΟΙΠΟ FORTH
                            </h2>
                            <p class="num">
                                $47.928,31
                            </p>
                            <p>
                                <b>Τιμές:</b> com: $8,95net: $15,55org: $8,95cc: $24,95tv: $39,95
                            </p>
                            <div class="flex-r">
                                <p>
                                    <b>Συνολικά domains:</b> 6
                                </p>
                                <p>
                                    Τελ. έλεγχος: 17/02/2020 16:06:01
                                </p>
                            </div>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php for ($x = 0; $x <= 2; $x++) { ?>
                <div class="col-lg-4">
                    <div class="text_con full_height">
                        <div class="row m-0 mb-2">
                            <div class="border-right w-60 pr-2 flex-cc">
                                <h3 class="h3">DOMAIN NAMES</h3>
                                <p class="num">300</p>
                            </div>
                            <div class="w-40 pl-2">
                                <div class="border-bottom flex-cc">
                                    <p>
                                        <b>λήγουν σύντομα</b>
                                    </p>
                                    <p class="num">50</p>
                                </div>
                                <div class="flex-cc">
                                    <p>
                                        <b>έχουν λήξει</b>
                                    </p>
                                    <p class="num">15</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block">Κατοχύρωσε ένα νέο Domain <i
                                class="fas fa-angle-right"></i></button>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="text_con">
                        <div class="btn-group b1" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary no-menu"><span class="text">no
                                    menu</span></button>
                            <button type="button" class="btn btn-secondary only_icons"><span class="text">only
                                    icons</span></button>
                            <button type="button" class="btn btn-secondary full_menu"><span
                                    class="text">full</span></button>
                        </div>
                        <div class="btn-group b2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary full_container "><span class="text">full
                                    container</span> </button>
                            <button type="button" class="btn btn-secondary normal_container"><span
                                    class="text">normal_container</span></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_body m2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="text_con main_cat">
                        <h1 class="h2">Πίνακας ελέγχου</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text_con main_cat">
                        <h1 class="h2">Πίνακας ελέγχου</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="text_con main_cat">
                        <form class="form-inline w-100">
                            <div class="form-row w-100 ">
                                <div class="form-group col-lg-12 flex-fill">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="password" class="form-control flex-grow-1" id="inputPassword2"
                                        placeholder="Password">
                                    <div class="btn-group " role="group" aria-label="Basic example">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            aaaaaaaaaaa
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                        <button type="button" class="btn btn-secondary">
                                            <span class="text"><i class="fas fa-search"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <?php $arr =["date","datetime-local","email","month","number","password","search","tel","text","time","url","week"]; ?>
                                <?php foreach ( $arr as $key => $value) { ?>
                                <div class="form-group col-lg-6 flex-fill">
                                    <div class="input-cont">
                                       
                                        <input type="<?=$value?>" class="form-control" id="<?=$value?>"
                                            placeholder="First name" required>
                                        <label for="<?=$value?>"><?=$value?></label>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="form-group col-lg-12 flex-fill">
                                    <div class="input-cont">
                                       
                                        <textarea class="form-control" id="textarea" rows="3"></textarea>
                                        <label for="textarea">textarea</label>
                                    </div>
                                </div>
                                <div class="form-group checkboxes col-lg-6 flex-fill">
                                <?php $arr1 =["Male1","female2","other3"];?> 
                                    <div class="input-cont redio w-100"> 
                                    <?php foreach ( $arr1 as $key => $value) {?>
                                     <div class="row-redio">  
                                        <label for="<?=$value?>" class="before_input"><?=$value?></label>  
                                        <input type="checkbox" class="form-control" id="<?=$value?>" name="gender">
                                        <label for="<?=$value?>"></label>
                                    </div>                                    
                                    <?php }?>
                                    </div>
                                </div>
                                <div class="form-group checkboxes col-lg-4 flex-fill">                                   
                                    <?php $arr1 =["Male","female","other"];?> 
                                    <div class="input-cont redio w-100"> 
                                    <?php foreach ( $arr1 as $key => $value) {?>
                                     <div class="row-redio">  
                                        <label for="<?=$value?>" class="before_input"><?=$value?></label>  
                                        <input type="radio" class="form-control" id="<?=$value?>" name="gender">
                                        <label for="<?=$value?>"></label>
                                    </div>                                    
                                    <?php }?>
                                    </div>
                                </div>
                                <?php $arr =["reset","submit","button"]; ?>
                                <div class="form-group col-lg-12 flex-fill">
                                    <div class="btn-group b1" role="group" aria-label="Basic example">
                                        <?php foreach ( $arr as $key => $value) { ?>
                                        <input type="<?=$value?>" class="btn btn-primary" id="<?=$value?>"
                                            value="<?=$value?>">
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text_con main_cat">
                        <h1 class="h2">Πίνακας ελέγχου</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="<?php mix('/public/assets/js/admin_home.js');?>"></script>
</body>

</html>