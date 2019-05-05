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
    <?php
        for ($i = 0; $i < count($SUBTITLE1); $i++) { ?>
            <div class="box-column-wrapper brd-radius-8 wht-border rt-box" style="background-color: #<?php echo $SUBTITLE1[$i]['bgcolor']; ?>; max-width: 310px; height: 225px; margin-top: 25px;">
                <div class="icon"></div>
                <h3 class="center"><?php echo $SUBTITLE1[$i]['title']; ?></h3>
                <p class="center text-md"><?php echo $SUBTITLE1[$i]['text']; ?></p>
                <div class="btn"><a href="<?php echo $SUBTITLE[$I]['url'] ?>">Learn More</a></div>
            </div>
    <?php } ?>
    </div>
</section>
<section class="row" style="width: 100%; height: 250px; background-image: linear-gradient(rgba(222, 129, 1, .7), rgba(222, 129, 1, .7)), url(<?php echo $BACKGROUND_IMG[0]; ?>); background-position: center; background-repeat: no-repeat; background-color: #DE8101;">
    <div class="flx-column" style="margin: auto;">
        <div>
            <h2 class="center text-shadow">WHAT IS EMOTIONAL INTELLIGENCE</h2>
            <p></p>
        </div>
        <div style="width: 40px; height: 40px; display: block; margin:15px auto;"><a href="#"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="box-shadow am-brd-radius50" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg></a></div>
    </div>
</section>
<!-- emotional intelligence section -->
<section class="am-padding30" style="width: 100%; background-color: #005E2F;">
    <div class="container">
        <div class="box-wrapper homeEI" style="width: 765px;">
            <?php
                foreach($intelligence as $key => $val) {
                    if ($key === 1) {
                        echo '<div class="box-column-wrapper" style="width: 230px;"><img src="./img/brain-350.gif" /></div>';
                        continue;
                    }
                    echo $val->makeBox();
                }
            ?>
        </div>
    </div>
</section>
<section class="am-padding30" style="width: 100%; min-height: 425px; background-image: url(<?php echo $BACKGROUND_IMG[1]; ?>); background-position: center; background-repeat: no-repeat; background-position: right center;  background-size: cover;">
    <div class="center" style="margin: 15px auto;">
        <div>
            <h2 class="text-shadow uppercase">4E System</h2>
            <p>Our program is based on our socio-emotional</p>
        </div>
    </div>
    <div class="row box-wrapper text-md center" style="margin:0 auto; max-width: 560px; padding: 15px 0;">
        <div class="box-column-wrapper" style="background-color: #2D6093; width:250px;">
            <h4>EMPOWER</h4>
            <p>them with self awareness, self regulation and critical thinking</p>
        </div>
        <div class="box-column-wrapper" style="background-color: #679868; width:250px;">
            <h4>ENGAGE</h4>
            <p>them with social technology, active listening and self motivation</p>
        </div>
        <div class="box-column-wrapper" style="background-color: #2D6093; width:250px;">
            <h4>ENLIGHTEN</h4>
            <p>them with compassion, empathy and mindfulness</p>
        </div>
        <div class="box-column-wrapper" style="background-color: #679868; width:250px;">
            <h4>EDUCATE</h4>
            <p>them with facts and social skills</p>
        </div>
    </div>
</section>
<!-- 4E system section -->
<section class="am-padding30" style="background-color: #fff; color: #444;">
<?php
    for($i=0; $i < count($PARAGRAPH); $i++) { ?>
        <div class="container">
            <h2 class="center title"><?php echo $PARAGRAPH[$i]['title']; ?></h2>
            <img src="<?php echo $PARAGRAPH[$i]['image']; ?>" style="margin:15px auto;" />
            <?php echo $PARAGRAPH[$i]['text']; ?>
            <div class="btn"><a href="<?php echo $PARAGRAPH[$i]['url']; ?>">Learn More</a></div>
        </div>
<?php } ?>
</section>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
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