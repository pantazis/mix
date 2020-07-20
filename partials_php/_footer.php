         <!-- Footer -->
         <footer class="page-footer font-small blue pt-4">

             <!-- Footer Links -->
             <div class="container text-center text-lg-left">

                 <!-- Grid row -->
                 <div class="row">

                     <!-- Grid column -->
                     <div class="col-lg-3 mt-lg-0 mt-3">

                         <!-- Content -->
                         <img src="public/assets/img/footer/logo-footer.svg" class="f-logo" alt="">
                         <p>20 χρόνια αξιόπιστες & οικονομικές υπηρεσίες domain, hosting και ssl με ταχύτατη υποστήριξη.</p>

                         <div class="sosial">
                           <?php $arr =["fa-blogger","fa-facebook-square","fa-linkedin","fa-twitter-square"];?>
                           <?php foreach ($arr as $key => $value) {?>
                            <i class="fab <?=$value?>"></i>
                           <?php } ?>
                         </div>    

                     </div>
                     <!-- Grid column -->

                     <hr class="clearfix w-100 d-lg-none pb-3">

                     <!-- Grid column -->
                    
                     <!-- Grid column -->

                     <!-- Grid column -->
                    
                     <div class="ml-lg-auto  mb-lg-0 mb-6 r-width ">
                         <div class="d-flex   flex-column flex-lg-row flex-wrap">

                     <?php $arr=["DOMAINS","HOSTING","WEBSITES","SSL CERTIFICATES","H ΕΤΑΙΡΙΑ","ΕΞΥΠΗΡΕΤΗΣΗ  ΠΕΛΑΤΩΝ" ]?>
                        <?php foreach ($arr as $key => $value) {?>
                        
                        
                      
                            <!-- Links -->
                            <?php $dd = $key%2; if($dd==0)  echo '<div class="par">'?>
                            <h5 class="text-uppercase mynav"><?=$value?></h5>
                            <?php $dd = $key%2; if($dd==1)  echo '</div>'?>

                            
                    
                        <?php }?>
                        </div>
                     </div>
                     <!-- Grid column -->

                 </div>
                 <!-- Grid row -->

             </div>
             <!-- Footer Links -->

             <!-- Copyright -->
             <div class="footer-copyright py-3">
                 <div class="container">  
                    <div class="row">
                        <div class="col-lg-4 copyright-cont ">
                            <p class="m-0 copyright">
                                © 2020 Copyright:
                            </p>
                        </div>
                        <div class="ml-lg-auto r-width d-flex  flex-column flex-lg-row flex-wrap">
                            <?php $arr=["Όροι χρήσης","Πολιτική απορρήτου","Ρύθμιση ΦΠΑ","Χάρτης ιστοτόπου "]?>  
                            <?php foreach ($arr as $key => $value) {?>                     
                            
                                <a class="link-f" href="#"><?=$value?></a>
                                
                        
                            <?php } ?>
                        </div>
                    </div>
                 </div>
             </div>
             <!-- Copyright -->

         </footer>
         <!-- Footer -->
         <?php include "partials_php/_js-scripts.php"?>