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
                    <?php $arr = ["Διάλεξε πίνακα", "Domain", "Domain (orders)", "Domain (trades)", "Email (users)", "VAT", "Documents"] ?>
                    <div class="row mb-0">
                        <form class="col s12">
                            <div class="row">
                                <div class="file-field input-field col-lg-12">
                                    <div class="btn waves-effect waves-light"><i class="fas fa-search"></i></div>
                                    <!-- Dropdown Trigger -->
                                    <a class='dropdown-trigger btn waves-effect waves-light' href='#' data-target='dropdown<?=$num?>'>Διαλεξε πινακα</a>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown<?=$num?>' class='dropdown-content  z-depth-4'>
                                        <?php foreach ($arr as $key => $value) { ?>
                                            <li><a href="#!"><?= $value ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <div class="file-path-wrapper">
                                        <input id="search<?=$num?>" type="text" class="validate">
                                        <label for="search<?=$num?>">Last Name</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text_con main_cat title">
                    <h1 class="h2">Γρήγορες ενέργειες</h1>
                    <a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
                </div>
                <div class="row">
                    <?php $arr = ["name", "dns", "users", "order"];
                    $arr2 = ["Αναζήτηση Domain", "Αλλαγή Καταχωρητή", "Πρόσωπα Επαφής", "Παραγγελίες"];
                    $arr3 = ["Αναζήτηση", "Αλλαγή", "Πρόσωπα Επαφής", "Παραγγελίες"]; ?>
                    <?php foreach ($arr as $key => $value) { ?>
                        <div class="col-lg-3">
                            <div class="text_con p-0 full_height d-flex flex-column">
                                <div class="offer clip">
                                    <div class="custom_bg">
                                        <div class="inner">
                                            <div class="img-cont">
                                                <img class="img-shadow" src="public/assets/img/footer/<?= $value ?>.svg"
                                                     alt="">
                                                <img src="public/assets/img/footer/<?= $value ?>-w.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-pad d-flex flex-column flex-grow-1">
                                    <h2 class="h3"><?= $arr2[$key] ?></h2>
                                    <p class="description">Εκμεταλλεύσου την προσφορά μας και κατοχύρωσε το .GR </p>
                                    <a href="" class="waves-effect waves-light btn mt-auto"><?= $arr3[$key] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $arr = ['offer'] ?>
                <?php foreach ($arr as $key => $value) { ?>
                    <div class="text_con p-0 full_height d-flex flex-column">
                        <div class="offer">
                            <a href=""><img src="public/assets/img/static_images/<?= $value ?>.jpg" alt=""></a>
                        </div>
                        <div class="c-pad d-flex flex-column flex-grow-1">
                            <h2 class="h2"> .GR domain name </h2>
                            <p class="description">Εκμεταλλεύσου την προσφορά μας και κατοχύρωσε το .GR domain name
                                σου
                                για 2 έτη μόνο με 14,00€!</p>
                            <a href="" class="waves-effect waves-light btn mt-auto">Δες την προσφορά <i  class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
   
</div>