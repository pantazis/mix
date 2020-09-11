<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="<?php mix('/public/assets/js/_libraries/materialize.min.js'); ?>"></script>
<script src="<?php mix('/public/assets/js/_libraries/nouislider.js'); ?>"></script>
<script src="<?php mix('/public/assets/js/table_pages.js');?>"></script>
<script src="resources/assets/js/_libraries/owl.carousel.js?<?php echo rand(0,100) ?>"></script>

<script>



    $(document).ready(function () {
        M.AutoInit();
   $('select').formSelect();

        $('#tabs-swipe-demo').tabs({swipeable: true});
        $('.carousel').carousel();

  var slider = document.getElementById('test-slider');

  var first = parseInt($("label.test-slider").attr("data-start"));
  var second= parseInt($("label.test-slider").attr("data-end")); 
  $(".slide-start").html(first);
  $(".slide-end").html(second);


  var arr =[first,second];      
  noUiSlider.create(slider, {
   start: arr,
   connect: true,
   step: 1,
   orientation: 'horizontal', // 'horizontal' or 'vertical'
   range: {
     'min': 0,
     'max': 100
   },
   format: wNumb({
     decimals: 0
   })
  });
  
  slider.noUiSlider.on("end",function(){updateRange()});
        
    });

    function updateRange(){
      

      $(".slide-start").html($(".noUi-handle-lower span").text());
      $(".slide-end").html($(".noUi-handle-upper span").text());
    }


</script>