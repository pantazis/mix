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
                                    <?php foreach ($ssldata2 as $key => $value)  { ?>
                                    
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
                                            <i class="fas fa-file-alt"></i>
                                            <i class="fas fa-address-card"></i>
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
                                           <a href=""class="btn btn-block">asasasasasas</a>
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
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script>


var arr =[{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"},{"class":"danger","name":"ΛΗΓΜΕΝΟ"},{"class":"danger","name":"ΛΗΓΜΕΝΟ"},{"class":"danger","name":"ΛΗΓΜΕΝΟ"},{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"},{"class":"label secondary","name":"ΑΚΥΡΩΘΗΚΕ"},{"class":"danger","name":"ΛΗΓΜΕΝΟ"},{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"},{"class":"danger","name":"ΛΗΓΜΕΝΟ"},{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"},{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"},{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"},{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"},{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"},{"class":"warning","name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ"}];

//["ID","Όνομα","Common Name","Έκδοση Europe/Athens","Ημ. Λήξης Europe/Athens","Κατάσταση","Email"]

/*
var arr= [];


    

$(".status .label").each(function(){
    var s123 = {};
    s123.class=String($(this)[0].classList);
    s123.name=$(this).text();    console.log(s123.name);
    
  
   arr.push(s123);
   
   
})*/
var arr2=["[DV] Comodo Essential SSL",
"[OV] Thawte SSL Web Server",
"[DV] Thawte SSL123",]

var arr3 =["18/04/2019 11:19",
"17/04/2019 16:03",
"17/04/2019 15:50"];

var arr4=[
"17/07/2020 07:00",
"16/07/2020 15:00",
"16/07/2020 15:00"];
var arr5=[
"giorgos@dnhost.gr",
"digitartworks@gmail.com",
"tsolakidischris@gmail.com"]


var arrn=[];

$(arr).each(function(index){
    this.id=1000+index;
    this.ssl= arr2[index%3];
    this.cname="dnhost";
    this.start =arr3[index%3];
    this.end =arr4[index%3];
    this.state = {name:this.name,class:this.class}
   // this.state = this.name;
    this.email =arr5[index%3];
    delete this.name;
    delete this.class;
    arrn.push(this);
    
  
   
})

console.log(JSON.stringify(arrn))

</script>