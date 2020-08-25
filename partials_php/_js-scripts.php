<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="<?php mix('/public/assets/js/_libraries/materialize.min.js'); ?>"></script>
<script src="<?php mix('/public/assets/js/_libraries/nouislider.js'); ?>"></script>
<script>



    $(document).ready(function () {
        M.AutoInit();
   $('select').formSelect();

        $('#tabs-swipe-demo').tabs({swipeable: true});
        $('.carousel').carousel();

        var slider = document.getElementById('test-slider');
  noUiSlider.create(slider, {
   start: [20, 80],
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
        
    });


</script>