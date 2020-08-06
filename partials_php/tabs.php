
<div class="z-depth-1 sub-menu">
<div class="container" style="padding-bottom:0;padding-top:0" >


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
<div class="col s12 p-0">
<ul class="tabs tabs-transparent">

<?php foreach ($tabArr as $key => $value){?>
<li class="tab col s3">
<a class="<?php if($key==0) echo 'active'; ?>" href="#view1">
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

        