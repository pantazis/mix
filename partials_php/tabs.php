
<div class="z-depth-1 sub-menu">
<div class="container" style="padding-bottom:0;padding-top:0" >
<div class="row">


<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div class="text_con main_cat title">
<h1 class="h2">Πίνακας ελέγχου</h1>
<a href="" class="icon"><img src="public/assets/img/info.svg" alt=""></a>
</div>
</div>
</div>
<div class="row">
<div class="col s12 ">
<ul class="tabs tabs-transparent">

<?php foreach ($tabArr as $key => $value){?>
<li class="tab col s3">
<a class="" id="<?=$value['url']?>">
<?=$value['title']?></a>
</li>

<?php } ?>

</ul>
</div>
</div>
</div>
</div>


</div>
</div>
</div>

        