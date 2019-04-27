<?php
$page = $_SERVER['SCRIPT_NAME'];

include_once './inc/php/misc-lib.php';
include_once './inc/php/switch.php';

ob_start();
?>
<section>
    <div class='title container anim'>
        <span class='uppercase letter-box center hd1'><?php echo $TITLE; ?></span>
    </div>
    <div class="container">
        <div id='introAnimation' class='intro-container text2'><?php echo $INFO_TEXT; ?></div>
    </div>
</div>
<script src='https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js'></script>
    <script>
        particlesJS.load('particles-js',
        '../inc/js/particles-home.json', function() {
            console.log('particles-home.json loaded...');
        });
    </script>
<?php
$content = ob_get_clean();

include_once './inc/php/template.php';
?>