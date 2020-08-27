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
                    
                <div class="filter2 waves-effect waves-light ">
                <div class="parfil">   
                <?php include 'partials_php/filters_icon.php'?>
                Φίλτρο αποτελεσμάτων
                </div> 
                 </div>
                    <div class="text_con main_cat d-block p-0">

                    <div class="row p-n">
    <form class="col s12">
      <div class="row block">
        <div class="input-field col l2 m4 s12">
          <input  id="first_name" type="text" class="validate">
          <label for="first_name">ID</label>
        </div>
        <div class="input-field col l2 m4 s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Domain</label>
        </div>
        <div class="input-field col l2 m4 s12">
        <select>
      <option value="" disabled selected>Κατάσταση domain</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Κατάσταση domain</label>
         
        </div>
        <div class="input-field col l2 m4 s12">
        <input type="text" class="datepicker">
        <label for="birthdate" class="">Aπό</label>
        </div>
        <div class="input-field col l2 m4 s12">
        <input type="text" class="datepicker">
        <label for="birthdate" class="">Aπό</label>
        </div>
        <div class="input-field col l2 m4 s12">
        <div class="switch">
            <div class="flex-box-center">
            <label for="lever" class="">Προϋπόθεση</label>
                <label>                  
                    <input type="checkbox" id="lever"  checked>
                    <span class="lever"></span>
                    <span class="v1">ή</span><span class="v2">και</span>
                </label>                
            </div>         
        </div>        
        </div>        
      </div>
      <input type="checkbox" >
      <div class="row block">      
        <div class="input-field col l3">
        <label for="birthdate" class="">Aπό</label>
        <div id="test-slider"></div>
                 
        </div>
        <div class="col l6"></div> 
        <div class="file-field input-field col l3">
        <div class="btn waves-effect waves-light">Αναζήτηση</div>
        </div> 
      </div> 
      <div class="row block">      
        <div class="input-field col l3 p-0" >
        <label for="birthdate" class="relative">Βρήκαμε <b>4</b> αποτελέσματα</label>
        </div>
        <div class="col l6"></div> 
        <div class="input-field col l3">
          
         </div>        
      </div>       
    </form>
  </div>
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
                                <span class="waves-effect waves-light btn"
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
                       
                   
                     
                    </div>
                </div>
            </div>
        </div> 
    <script src="<?php mix('/public/assets/js/table_pages.js');?>"></script>
