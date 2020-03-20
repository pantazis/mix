<?php include "partials_php/fakeData.php";?>
<nav class="nav_top">
    <div class="icon-par ip1">
        <div class="nav-icon popover-cont">
            <div class="bg-effect"></div>
            <i class="fas fa-bars"></i>
        </div>

    </div>

    <div class="logo_cont">
        
        <img src="public/assets/img/nav/logo-notext2.svg" alt="" class="logo">
    </div>

    <div class="icon-par">
        <div class="nav-icon popover-cont" data-container="body" data-toggle="popover0" data-placement="bottom"
            data-content="1" title="">
            <div class="bg-effect"></div>
            <i class="fas fa-user-cog"></i>
        </div>

        <div class="nav-icon popover-cont" data-container="body" data-toggle="popover1" data-placement="bottom"
            data-content="1" title="Το καλάθι σου είναι άδειο">
            <div class="bg-effect"></div>
            <i class="fas fa-shopping-cart"></i>
        </div>

        <div class="nav-icon popover-cont" data-container="body" data-toggle="popover2" data-placement="bottom"
            data-content="1">
            <div class="bg-effect"></div>
            <i class="far fa-question-circle"></i>
        </div>
    </div>

</nav>
<nav class="side">
    <ul>
        <?php $arr =["control_panel","hosting","domains","ssl","users","euro","product"];?>
        <?php  foreach ($menu_cat2["menucat"] as $key => $value){ ?>
        <li>
            <a href="#"><span class="nav_icon"><img src="public/assets/img/nav/<?=$arr[$key]?>.svg" alt=""></span><span
                    class="text"><?=$value["name"]?></span></a>
        </li>
        <?php } ?>
    </ul>
</nav>
<nav class="nav-modal">
    <div class="bgdark"></div>
    <div class="side_cont">
        <div class="nav-head">
        <div class="nav-icon popover-cont close_icon">
                    <div class="bg-effect"></div>
                   <img src="public/assets/img/nav/close.svg" alt="close menu">  
                </div> 
        <div class="logo-side">
        <i class="fas fa-user-circle"></i>
        </div>
        <div class="user-text">
                    <p class="h3">pantazis vastardis</p>
                    <p>pantazisvastardis@gmail.com</p>                   
                </div>
           
        </div>
        <div class="ul_par">
            <ul>

                <?php foreach ($menu_cat2["menucat"] as $key => $value){ ?>
                <li data-parent="<?=$value["name"]?>">
                    <?php if(count($value["sub"]) > 0){  ?>
                    <!--<i class="fas fa-angle-right"></i>-->
                    <div class="icon-par sub-cat-open ">
                        <div class="nav-icon">
                            <div class="bg-effect"></div>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                    <?php } ?>
                    <a href="#"><span class="nav_icon"><img src="public/assets/img/nav/<?=$arr[$key]?>.svg"
                                alt=""></span><span class="text"><?=$value["name"]?></span></a>
                </li>
                <?php } ?>
            </ul>
            <?php foreach ($menu_cat2["menucat"] as $key => $value){ ?>
            <?php if(count($value["sub"]) > 0){ ?>
            <ul class="sub_cat" data-child="<?=$value["name"]?>">
                <li class="first_sub">
                    <div class="icon-par close_sub ">
                        <div class="nav-icon popover-cont">
                            <div class="bg-effect"></div>
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <a href="#"><span class="nav_icon"><img src="<?=$value["img"]?>" alt=""></span><span
                            class="text"><?=$value["name"]?></span></a>
                </li>

                <?php foreach ($value["sub"] as $key => $value){ ?>
                <li>
                    <a href="#"><span class="nav_icon no"></span>
                        <span class="text"><?=$value["subname"]?></span>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
            <?php } ?>

        </div>
    </div>

</nav>
<div class="popover_html_cont">
    <div class="login">
        <div class="dropdown-menu show">
            <div class="list-item user" data-id="19">
                <span class="avatar ">
                    <img src="public/assets/img/nav/user.jpg" alt="">
                </span>
                <div class="user-text">
                    <p class="h3">pantazis vastardis</p>
                    <p>pantazisvastardis@gmail.com</p>
                    <p>+30.6932968500</p>
                </div>
            </div>
            <a class="dropdown-item" href="#">Πίνακας ελέγχου</a>
            <a class="dropdown-item" href="#">Ρυθμίσεις λογαριασμού</a>
            <a class="dropdown-item" href="#">Αποσύνδεση</a>
        </div>

    </div>
    <div class="cart">
        <p>
            Αγόρασε ένα
            <a href="http://laravel.upgrade/domain" title="Κατοχύρωση domain name και άλλα εργαλεία">domain name</a>,
            <a href="http://laravel.upgrade/hosting"
                title="Βρες το σωστό τύπο και πακέτο φιλοξενίας για το site σου">πακέτο hosting</a>
            ή ένα <a href="http://laravel.upgrade/ssl-certificates"
                title="SSL certificates για προστασία ιστοσελίδων">ssl πιστοποιητικό</a>
            στις χαμηλότερες τιμές της αγοράς!
        </p>

    </div>
    <div class="help">
        <div class="dropdown-menu show">
            <a class="dropdown-item" href="#">Yποβολή αιτήματος</a>
            <a class="dropdown-item" href="#">Live Chat</a>
            <a class="dropdown-item" href="#">Γνωσιακή βάση</a>
            <a class="dropdown-item" href="#">Tρόποι πληρωμής</a>
        </div>
    </div>
</div>