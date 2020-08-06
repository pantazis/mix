<div class="container">
 
 <div class="row">


 
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
                     <button type="button" class="waves-effect waves-light btn">προβολη</button>
                 </div>
             </div>
             <div class="listrow">
                 <h2 class="h3">
                     ΠΑΡΑΓΓΕΛΙΕΣ ΠΟΥ ΑΠΑΙΤΟΥΝ ADMIN ΕΝΕΡΓΕΙΕΣ
                 </h2>
                 <div class="flex-r">
                     <p class="num">172</p>
                     <button type="button" class="waves-effect waves-light btn">προβολη</button>
                 </div>
             </div>
             <div class="listrow">
                 <h2 class="h3">
                     ΠΕΛΑΤΕΣ ΜΕ ΠΙΣΤΩΤΙΚΟ ΟΡΙΟ
                 </h2>
                 <div class="flex-r">
                     <p class="num">13</p>
                     <button type="button" class="waves-effect waves-light btn">προβολη</button>
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
     <?php $arr = ["Κατοχυρωσε ενα νεο Domain ", "Αγορασε ενα πακετο Hosting", "Εκδοσε αμεσα ενα SSL"];
     $arr2 = ["DOMAIN NAMES", "ΠΑΚΕΤΑ HOSTING", "ΠΙΣΤΟΠΟΙΗΤΙΚΑ SSL"];
     ?>
     <?php foreach ($arr as $key => $value) { ?>
         <div class="col-lg-4">
             <div class="text_con full_height">
                 <div class="row m-0 mb-2">
                     <div class="border-right w-60 pr-2 flex-cc">
                         <h3 class="h3"><?= $arr2[$key] ?></h3>
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
                 <button class="waves-effect waves-light btn full"><?= $value ?> <i
                             class="fas fa-angle-right"></i></button>
             </div>
         </div>
     <?php } ?>
 </div>
 <div class="row">
     <div class="col-lg-12">
         <div class="text_con">
             <div class="b1 inline-b">
                 <button type="button" class="waves-effect waves-light btn no-menu">no
                     menu</span></button>
                 <button type="button" class="waves-effect waves-light btn only_icons">only
                     icons</span></button>
                 <button type="button" class="waves-effect waves-light btn full_menu"><span
                             class="text">full</span></button>
             </div>
             <div class="b2 inline-b">
                 <button type="button" class="waves-effect waves-light btn full_container">full
                     container</span> </button>
                 <button type="button" class="waves-effect waves-light btn normal_container"><span
                             class="text">normal container</span></button>
             </div>
         </div>
     </div>
 </div>
</div>



