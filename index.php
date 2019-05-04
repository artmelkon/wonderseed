<?php
$page = $_SERVER['SCRIPT_NAME'];

include_once './inc/php/misc-lib.php';
include_once './inc/php/switch.php';

ob_start();
?>
<!-- the content section -->
<section class="container">
    <div id="titleAnim" class='title'>
        <span class='uppercase letter-box center hd1'><?php echo $TITLE; ?></span>
    </div>
    <div>
        <div id='introAnimation' class='intro-container text-md'><?php echo $INFO_TEXT; ?></div>
    </div>
    <div class="box-wrapper" style="max-width: 700px !important; margin-top: 64px;">
        <div class="box-column-wrapper brd-radius-8 wht-border rt-box" style="background-color: #017BC5; max-width: 310px; height: 206px; margin-top: 25px;">
            <div class="icon"></div>
            <h3 class="center">The Power of Storytelling</h3>
            <p class="center">The most effective way to stimulate the sensory cortex and improve a child's overall mental development</p>
        </div>
        <div class="box-column-wrapper brd-radius-8 wht-border lt-box" style="background-color: #6ACA6B; max-width: 310px; height: 206px; margin-top: 25px;">
            <div class="icon"></div>
            <h3 class="center">Technology</h3>
            <p class="center">We use exciting and entertaining storytelling delivered on cutting edge technological platforms</p>
        </div>
    </div>
</section>
<section class="row" style="width: 100%; height: 250px; background-image: linear-gradient(rgba(222, 129, 1, .7), rgba(222, 129, 1, .7)), url(<?php echo $INTELLIGENCE_IMG; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; background-color: #DE8101;">
    <div class="flx-column" style="margin: auto;">
        <div>
            <h2 class="center">WHAT IS EMOTIONAL INTELLIGENCE</h2>
        </div>
        <div style="width: 40px; height: 40px; display: block; margin:15px auto;"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg></div>
    <div>
</section>
<!-- emotional intelligence section -->
<section class="container">
    <div class="box-wrapper">
        <?php
            foreach($intelligence as $val) {
                echo $val->makeBox();
            }
        ?>
    </div>
</section>
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