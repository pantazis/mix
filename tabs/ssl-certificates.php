

    

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
                    <a href="#" type="button" class="waves-effect waves-light btn-small">προβολη</a>
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

                    <div class="row p-n">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
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
                                                                                <th valign="middle" class="column1"></th>
                                                                                    <th valign="middle" class="column1">
                                                
                                                ID                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                                                                    <th valign="middle" class="column1">
                                                
                                                Όνομα                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                                                                    <th valign="middle" class="column1">
                                                
                                                Common Name                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                                                                    <th valign="middle" class="column1">
                                                
                                                Έκδοση <span class="small-t">Europe/Athens</span>                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                                                                    <th valign="middle" class="column1">
                                                
                                                Ημ. Λήξης <span class="small-t">Europe/Athens</span>                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                                                                    <th valign="middle" class="column1">
                                                
                                                Κατάσταση                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                                                                    <th valign="middle" class="column1">
                                                
                                                Email                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                                                                    <th valign="middle" class="column1">
                                                
                                                                                               <div class="inline_box">
                                                    <div class="filter_box">
                                                        <i class="fas fa-sort-up"></i>
                                                        <i class="fas fa-sort-down"></i>
                                                    </div>
                                               </div> 
                                            
                                            </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                               
                                           <a href="" class="btn btn-block btn-primary">Έκδοση</a>
                                                                                                                                  </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-danger disabled"> ΛΗΓΜΕΝΟ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-danger disabled"> ΛΗΓΜΕΝΟ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-danger disabled"> ΛΗΓΜΕΝΟ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-secondary disabled"> ΑΚΥΡΩΘΗΚΕ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-danger disabled"> ΛΗΓΜΕΝΟ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-danger disabled"> ΛΗΓΜΕΝΟ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                                                        
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
                                          <span class="btn2 btn-block btn-outline-warning disabled"> ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ </span>                                       </td>
                                                                                  
                                       <td class="column1"> <span class="cat">Email:</span>
                                           giorgos@dnhost.gr                                        </td>
                                           <td class="column1">
                                                                                          <a href="" class="btn btn-block btn-primary disabled">Ανανέωση</a>
                                                                                       </td>
                                       
                                   </tr>
                                    










                                </tbody>
                            </table>
                            <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="fas fa-search"></i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="fas fa-search"></i></a></li>
  </ul>
                        </div>
                    </div>
                </div>



                <div class="col-lg-12">

                </div>
                <div class="col-lg-8">
                </div>





            </div>
           




        </div>
        <link href="<?php mix('/public/assets/css/table_pages.css'); ?>" rel="stylesheet">
    <script src="<?php mix('/public/assets/js/table_pages.js');?>"></script>
