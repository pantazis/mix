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

    <link href="<?php mix('/public/assets/css/table_pages.css');?>" rel="stylesheet">

    <!-- Plugin CSS -->
</head>

<body>
    <?php include "partials_php/nav.php" ?>
    <div class="main_body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">ΠΙΝΑΚΑΣ ΕΛΕΓΧΟΥ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">HOSTING</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-12">
                    <div class="text_con main_cat title">
                        <h1 class="h2">Λογαριασμοί Hosting</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-12">
                <div class=" filter2 ">
                                <img src="public/assets/img/tables/filters.svg" alt="">Φίλτρο αποτελεσμάτων
                 </div>
                    <div class="text_con main_cat d-block p-0">
                      

                        <form class=" flex-fill filter-form">
                            <div class="form-row flex-fill ">


                                <div class="form-group col-lg-3 flex-fill">
                                    <div class="input-cont">
                                      
                                        <input type="text" class="form-control" id="text" placeholder="Γράψε ID"
                                            required="">
                                            <label for="text">ID</label>
                                    </div>
                                 
                                </div>
                                <div class="form-group col-lg-3 flex-fill">
                                    <div class="input-cont">
                                      
                                        <select class="form-control" id="Select1" placeholder="Επιλογή κατάστασης">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="Select1">Κατάσταση</label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-3 flex-fill">
                                    <div class="input-cont">
                                      
                                        <input type="text" class="form-control" id="text" placeholder="Γράψε email"
                                            required="">
                                            <label for="text">Email</label>
                                    </div>
                                </div>


                                <div class="form-group checkboxes col-lg-3 flex-fill">

                                    <div class="input-cont redio flex-fill focused redio-special-group">
                                    <label for="Male">Προϋπόθεση</label>
                                        <div class="redio-special">
                                            <label for="Male" class="option1"><span>και</span></label>
                                            <input type="checkbox" class="form-control" id="Male" name="gender">
                                            <label for="Male" class="option2"><span>ή</span></label>
                                        </div>


                                    </div>
                                </div>




                            </div>
                            <div class="form-row flex-fill">
                                <div class="form-group col-lg-12 flex-fill d-flex aligns m-0 ">



                                    <span class="result_text">Βρήκαμε 12 αποτελέσματα</span>

                                    <div class="btn-group ml-auto" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary  ">
                                            Καθαρισμός φίλτρων
                                        </button>
                                        <button type="button" class="btn btn-primary ">
                                            Αναζήτηση</button>

                                    </div>


                                </div>
                            </div>




                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="text_con p-0">
                        <div class="table100">
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <?php $arr_cat=["ID","Email","Κατάσταση","Μέθοδος επαλήθευσης","Συνδρομές","Τελευταίος συγχρονισμός"];?>
                                        <th valign="middle" class="column1" ></th>
                                        <?php foreach ($arr_cat as $key => $value) { ?>
                                            <th valign="middle" class="column1" >
                                                
                                                <?=$value?>
                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                        <?php } ?>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i <20; $i++) { ?>
                                    <tr>
                                        <?php $arr=[$i,"sunray69@gmail.com","ΕΝΕΡΓΟ","Email - Κωδικός","45","18/02/2020"];?>
                                        <td class="column1"> <span class="cat"><?=$arr_cat[$key]?>:</span>
                                        <div class="row_filter">                                            
                                            <img src="public\assets\img\tables\check_box.png" alt="">
                                            <img src="public\assets\img\tables\check_box_c.png" alt="">    
                                        </div>
                                        <div class="row_filter"> 
                                            <img src="public\assets\img\tables\star_b1.png" alt="">
                                            <img src="public\assets\img\tables\star_blue.png" alt="">
                                         </div>
                                        </td>
                                        <?php foreach ($arr as $key => $value) { ?>
                                        <td class="column1"> <span class="cat"><?=$arr_cat[$key]?>:</span>
                                            <?=$value?>
                                        </td>
                                        <?php } ?>

                                    </tr>
                                    <?php }?>











                                </tbody>
                            </table>
                            <div class="pagination-custom">
                                <span class="pag-el"><button class="btn dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        rows per page: 10
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a class="dropdown-item" href="#">rows per page: 10</a>

                                        <a class="dropdown-item" href="#">rows per page: 20</a>

                                        <a class="dropdown-item" href="#"> rows per page: 40</a>

                                    </div>
                                </span>
                                <span class="pag-el">1-10 άπω 100</span>
                                <span class="pag-el next-p"><i class="fas fa-angle-left"></i><i
                                        class="fas fa-angle-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-12">

                </div>
                <div class="col-lg-8">
                </div>





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
                        <form class="form-inline flex-fill">
                            <div class="form-row flex-fill ">
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
                            <p class="description">Εκμεταλλεύσου την προσφορά μας και κατοχύρωσε το .GR domain name
                                σου
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


    <script src="<?php mix('/public/assets/js/table_pages.js');?>"></script>
</body>

</html>