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

    <link href="<?php mix('/public/assets/css/home_page.css');?>" rel="stylesheet">

    <!-- Plugin CSS -->
</head>

<body>
    <?php include "partials_php/nav.php" ?>
    <div class="main_body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text_con main_cat title">
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
                        <div class="listrow">
                            <h2 class="h3">
                                ΑΤΙΜΟΛΟΓΗΤΕΣ ΚΙΝΗΣΕΙΣ

                            </h2>
                            <div class="flex-r">
                                <p class="num">1363</p>
                                <button type="button" class="ml-auto btn btn-primary btn-sm">προβολή</button>
                            </div>
                        </div>
                        <div class="listrow">
                            <h2 class="h3">
                                ΠΑΡΑΓΓΕΛΙΕΣ ΠΟΥ ΑΠΑΙΤΟΥΝ ADMIN ΕΝΕΡΓΕΙΕΣ

                            </h2>
                            <div class="flex-r">
                                <p class="num">172</p>
                                <button type="button" class="ml-auto btn btn-primary btn-sm">προβολή</button>
                            </div>
                        </div>
                        <div class="listrow">
                            <h2 class="h3">
                                ΠΕΛΑΤΕΣ ΜΕ ΠΙΣΤΩΤΙΚΟ ΟΡΙΟ

                            </h2>
                            <div class="flex-r">
                                <p class="num">13</p>
                                <button type="button" class="ml-auto btn btn-primary btn-sm">προβολή</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="text_con full_height d-flex flex-column">
                        <div class="listrow flex-grow-1 d-flex flex-column">
                            <img class="bg_icon" src="public/assets/img/euro" alt="">
                            <h2 class="h3">
                                ΥΠΟΛΟΙΠΟ FORTH
                            </h2>
                            <p class="num">
                                50352 €
                            </p>

                            <div class="mt-auto">
                                <div class="flex-r">
                                    <p>

                                    </p>
                                    <p>
                                        Τελ. έλεγχος: 17/02/2020 16:06:01
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="listrow flex-grow-1 d-flex flex-column">
                            <img class="bg_icon" src="public/assets/img/euro" alt="">
                            <h2 class="h3">
                                ΥΠΟΛΟΙΠΟ EURID
                            </h2>
                            <p class="num">
                                98.504,75 €
                            </p>
                            <div class="mt-auto">
                                <p>
                                    <b>Hitpoints:</b> 0 (2000),&nbsp;<b>Όριο κατοχυρώσεων</b>: 1000 (τρέχον: 0)
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

                        </div>
                        <div class="listrow flex-grow-1 d-flex flex-column">
                            <img class="bg_icon" src="public/assets/img/euro" alt="">
                            <h2 class="h3">
                                ΥΠΟΛΟΙΠΟ ENOM
                            </h2>
                            <p class="num">
                                47.917,21 $
                            </p>
                            <div class="mt-auto">
                                <p>
                                    <b>Τιμές:</b>&nbsp;com: $8,95&nbsp;net: $15,55&nbsp;org: $8,95&nbsp;cc:
                                    $24,95&nbsp;tv:
                                    $39,95
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

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">

                <?php $arr=["Κατοχύρωσε ένα νέο Domain","Αγόρασε ένα πακέτο Hosting","Έκδοσε άμεσα ένα SSL"];
                      $arr2=["DOMAIN NAMES","ΠΑΚΕΤΑ HOSTING","ΠΙΣΤΟΠΟΙΗΤΙΚΑ SSL"];
                ?>
                <?php foreach ($arr as $key => $value) {?>
                <div class="col-lg-4">
                    <div class="text_con full_height">
                        <div class="row m-0 mb-2">
                            <div class="border-right w-60 pr-2 flex-cc">
                                <h3 class="h3"><?=$arr2[$key]?></h3>
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
                        <button class="btn btn-primary btn-block"><?=$value?> <i
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
                    <div class="text_con main_cat title">
                        <h1 class="h2">Γρήγορη αναζήτηση</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text_con main_cat title">
                        <h1 class="h2">Προσφορές</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 d-flex flex-column">
                    <div class="text_con main_cat">
                        <form class="form-inline w-100">
                            <div class="form-row w-100 ">
                                <div class="form-group col-lg-12 flex-fill">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="password" class="form-control flex-grow-1" id="inputPassword2"
                                        placeholder="Password">
                                    <div class="btn-group " role="group" aria-label="Basic example">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Διάλεξε πίνακα
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?php $arr = ["Διάλεξε πίνακα","Domain","Domain (orders)","Domain (trades)","Email (users)","VAT","Documents"]?>
                                            <?php foreach ($arr as $key => $value) {?>

                                            <a class="dropdown-item" href="#"><?= $value?></a>
                                            <?php }?>

                                        </div>
                                        <button type="button" class="btn btn-primary">
                                            <span class="text"><i class="fas fa-search"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="text_con main_cat title">
                        <h1 class="h2">Γρήγορες ενέργειες</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                    <div class="row">
                        <?php $arr=["name","dns","users","order"];$arr2=["Αναζήτηση Domain","Αλλαγή Καταχωρητή","Πρόσωπα Επαφής","Παραγγελίες"]  ?>
                        <?php foreach ($arr as $key => $value){ ?>
                        <div class="col-sm-3">
                            <div class="text_con p-0 full_height d-flex flex-column">
                                <div class="offer clip">
                                    <div class="custom_bg">
                                        <div class="inner">
                                            <div class="img-cont">
                                                <img class="img-shadow" src="public/assets/img/footer/<?= $value?>.svg"
                                                    alt="">
                                                <img src="public/assets/img/footer/<?= $value?>-w.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-pad d-flex flex-column flex-grow-1">
                                    <h2 class="h3"><?= $arr2[$key]?></h2>
                                    <p class="description">Εκμεταλλεύσου την προσφορά μας και κατοχύρωσε το .GR </p>

                                    <a href="" class="btn btn-primary btn-block mt-auto"><?= $arr2[$key]?></a>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php $arr=['offer']  ?>
                    <?php foreach ($arr as $key => $value){ ?>
                    <div class="text_con p-0 full_height d-flex flex-column">
                        <div class="offer">
                            <a href=""><img src="public/assets/img/static_images/<?=$value?>.jpg" alt=""></a>
                        </div>
                        <div class="c-pad d-flex flex-column flex-grow-1">
                            <h2 class="h2"> .GR domain name </h2>
                            <p class="description">Εκμεταλλεύσου την προσφορά μας και κατοχύρωσε το .GR domain name σου
                                για 2 έτη μόνο με 14,00€!</p>

                            <a href="" class="btn btn-primary btn-block mt-auto">Δες την προσφορά <i
                                    class="fas fa-angle-right"></i></a>

                        </div>
                    </div>
                    <?php } ?>

                </div>

            </div>

        </div>
        <?php include "partials_php/_footer.php"?>
    </div>


    <script src="<?php mix('/public/assets/js/homepage.js');?>"></script>
</body>

</html>