<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="<?php mix('/public/assets/js/_libraries/materialize.min.js'); ?>"></script>
<script>



    $(document).ready(function () {
        M.AutoInit();
   $('select').formSelect();

        $('#tabs-swipe-demo').tabs({swipeable: true});
        $('.carousel').carousel();
    });


</script>