<?php include "partials_php/fakeData.php";?>
<nav class="nav_top">
    <div id="toggle" class="mobilenav">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
    </div>

    <img src="public/assets/img/nav/dnhost-logo.svg" alt="" class="logo">
    <div class="icon-par">
    <?php for ($x = 0; $x <= 2; $x++) { ?>        
        <div class="nav-icon"  data-container="body" data-toggle="popover<?=$x?>" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
            <div class="bg-effect"></div>
             <i class="fa fa-mars-double" aria-hidden="true"></i>
        </div>
     
    <?php } ?>
    </div>


</nav>
<nav class="side">
    <ul>
        <?php  foreach ($menu_cat2["menucat"] as $key => $value){ ?>
        <li>
            <a href="#"><span class="nav_icon"><img src="public/assets/img/euro.svg" alt=""></span><span
                    class="text"><?=$value["name"]?></span></a>
        </li>
        <?php } ?>
    </ul>
</nav>
<nav class="nav-modal">
    <div class="side_cont">
        <img src="public/assets/img/nav/nav_pic.jpg" alt="" class="top_img">
        <div class="ul_par">
            <ul>
                <?php foreach ($menu_cat2["menucat"] as $key => $value){ ?>
                <li data-parent="<?=$value["name"]?>">
                    <?php if(count($value["sub"]) > 0){  ?>
                        <i class="fas fa-angle-right"></i>
                    <?php } ?>
                    <a href="#"><span class="nav_icon"><img src="public/assets/img/euro.svg" alt=""></span><span
                            class="text"><?=$value["name"]?></span></a>
                </li>
                <?php } ?>
            </ul>
            <?php foreach ($menu_cat2["menucat"] as $key => $value){ ?>
            <?php if(count($value["sub"]) > 0){ ?>
            <ul class="sub_cat" data-child="<?=$value["name"]?>">
                <li class="first_sub">
                <i class="fas fa-times" style="color:#fff"></i>
                    <a href="#"><span class="nav_icon"><img src="public/assets/img/euro.svg" alt=""></span><span
                            class="text"><?=$value["name"]?></span></a>
                </li>

                <?php foreach ($value["sub"] as $key => $value){ ?>
                <li>
                    <a href="#"><span class="nav_icon"><img src="public/assets/img/euro.svg" alt=""></span><span
                            class="text"><?=$value["subname"]?></span></a>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
            <?php } ?>

        </div>
    </div>


</nav>