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
                            <li class="breadcrumb-item active" aria-current="page">Πιστοποιητικά SSL</li>
                        </ol>
                    </nav>
                </div>
                
                <div class="col-lg-12">
                    <div class="text_con main_cat title">
                        <h1 class="h2">Πιστοποιητικά SSL</h1>
                        <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                    </div>
                </div>
                <?php foreach ($sslnum2  as $key => $value) { ?>
                <div class="col-lg-3 ">
                    <div class="text_con">
                    <div class="text-right h-0">
                    <?php if($key > 0){ ?>
                    <a href="#" type="button" class="btn btn-primary btn-sm">προβολή</a>
                    <?php } ?>

                    </div>
                    <div class="flex">
                        <div class="icon1">
                            <img src="public/assets/img/static_images/<?=$value['img']?>" alt="">
                        </div>
                       <div class="text1">   
                       <h1 class="h1"><?=$value['num']?></h1>                             
                            <h4 class="h4"><?=$value['name']?></h4>
                           
                            
                                                
                           
                       </div>
                       </div>
                     
                    </div>
                   
                </div>
                <?php } ?>
                <div class="col-lg-12">
                    
                <div class=" filter2 ">
                                <img src="public/assets/img/tables/filters.svg" alt="">Φίλτρο αποτελεσμάτων
                 </div>
                    <div class="text_con main_cat d-block p-0">
                      

                    <form class=" flex-fill filter-form" _lpchecked="1">
                            <div class="form-row flex-fill ">
                            <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <input id="id" placeholder="Γράψε ID" type="text" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"><label for="id">ID</label></div>

    </div>
    <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <input id="common_name" placeholder="Domain έκδοσης του SSL" type="text" class="form-control"><label for="common_name">Common Name</label></div>

    </div>
    
    <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <select id="sku" class="form-control A"></select><label for="sku">Όνομα</label></div>

    </div>
    
    <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <select id="status" class="form-control"></select><label for="status">Κατάσταση</label></div>

    </div>
    
    <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <input id="user_email" placeholder="Το email του χρήστη" type="text" class="form-control"><label for="user_email">Το email του χρήστη</label></div>

    </div>
    
    <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <input id="enrollDateAfterRespTable" placeholder="Επίλεξε ημερομηνία" type="text" class="form-control"><label for="enrollDateAfterRespTable">Εκδόθηκε από</label></div>

    </div>
    
    <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <input id="enrollDateBeforeRespTable" placeholder="Επίλεξε ημερομηνία" type="text" class="form-control"><label for="enrollDateBeforeRespTable">Εκδόθηκε έως</label></div>

    </div>
    
    <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <input id="exDateAfterRespTable" placeholder="Επίλεξε ημερομηνία" type="text" class="form-control"><label for="exDateAfterRespTable">Λήγει από</label></div>

    </div>
    
    <div class="form-group col-lg-3 flex-fill">
        <div class="input-cont">


            <input id="exDateBeforeRespTable" placeholder="Επίλεξε ημερομηνία" type="text" class="form-control"><label for="exDateBeforeRespTable">Λήγει έως</label></div>

    </div>
    
    
    
    
    
    
    
                                
                                
                                


                                <div class="form-group checkboxes col-lg-3 flex-fill">

                                    <div class="input-cont redio flex-fill redio-special-group">
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
                                <div class="form-group col-lg-6 flex-fill d-flex aligns m-0 ">



                                    <span class="result_text">Βρήκαμε 12 αποτελέσματα</span>
                                    </div>
                                    <div class="form-group col-lg-6 flex-fill d-flex aligns m-0 ">
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
                                        <?php $arr_cat=["ID","Όνομα","Common Name","Έκδοση <span class='small-t'>Europe/Athens</span>","Ημ. Λήξης <span class='small-t'>Europe/Athens</span>","Κατάσταση","Email",""];?>
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
                                    <?php $i = 0; foreach ($ssldata2 as $key => $value)  { ?>
                                    
                                        <tr>
                                       
                                       <td class="column1"> 
                                       <div class="row_filter">                                            
                                           <img src="public\assets\img\tables\check_box.png" alt="">
                                           <img src="public\assets\img\tables\check_box_c.png" alt="">    
                                       </div>
                                       <div class="row_filter"> 
                                           <img src="public\assets\img\tables\star_b1.png" alt="">
                                           <img src="public\assets\img\tables\star_blue.png" alt="">
                                        </div>
                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">ID:</span>
                                           1000                                        </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Όνομα:</span>
                                           [DV] Comodo Essential SSL
                                           <span class="td-icons">
                                           <div class="" data-container="body" data-toggle="tooltip-hover" data-placement="bottom" data-content="
                                            
                                                Έχει αγοραστεί υπηρεσία εγκατάστασης
                                                " data-original-title="" title="">
                                                <i class="fas fa-file-alt"></i>
                                            </div>
                                           
                                           <div class=" " data-container="body" data-toggle="tooltip-hover" data-placement="bottom" data-content="
                                            
                                                    Παραγγελία: #401724
                                                " data-original-title="" title="">
                                                <i class="fas fa-address-card"></i>
                                          </div>

                                              
                                           </span>

                                        </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Common Name:</span>
                                           dnhost                                        </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Έκδοση
                                        <span class="small-t">Europe/Athens:</span>
                                        </span>
                                           18/04/2019 
                                           <span class="small-t">11:19 </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Ημ. Λήξης 
                                       <span class="small-t">Europe/Athens:</span>
                                       </span>
                                           17/07/2020
                                           <span class="small-t">07:00</span>                                        </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Κατάσταση:</span>
                                          <span class="btn btn-block btn-outline-<?=$value['state']['class']?> disabled"> <?=$value['state']['name']?> </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                               <?php if($i%2 == 0){?>
                                                
                                           <a href=""class="btn btn-block btn-primary">Έκδοση</a>
                                           <?php $i++;?>
                                           <?php  }else{ ?>
                                           <a href=""class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                           <?php  } ?>
                                            </td>
                                       
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
    <?php include "partials_php/_fast_actions.php" ?>


    <script src="<?php mix('/public/assets/js/table_pages.js');?>"></script>
</body>

</html>

</script>