<?php
$page = $_SERVER['SCRIPT_NAME'];

include_once './inc/php/libraries/misc-lib.php';
include_once './inc/php/libraries/switch.php';

ob_start();
?>
<!-- the wonderseed foundation section -->
<section class="container" style="margin-bottom: 64px;">
    <div id="titleAnim" class='title'>
        <span class='uppercase letter-box center f2x'><?php echo $TITLE; ?></span>
    </div>
    <div>
        <div id='introAnimation' class='intro-container text-md'><?php echo $INFO_TEXT; ?></div>
    </div>
</section>
<section class="container" style="margin-bottom: 105px;">
    <div class="box-wrapper">
        <div class="btn"><a href="<?php echo $menu->dnt->url; ?>">HELP SHAPE THE FUTURE</a></div>
    </div>
    <div class="box-wrapper" style="width: 780px; margin: 64px auto;">
    <?php
        for ($i = 0; $i < count($SLIDER_BOX); $i++) { ?>
            <div class="box-column-wrapper wht-border am-brd-radius8" style="background-image: linear-gradient(<?php echo $SLIDER_BOX[$i]['bgcolor']; ?>); max-width: 350px; height: 235px; margin-top: 25px;">
                <div class="icon"></div>
                <h3 class="center"><?php echo $SLIDER_BOX[$i]['title']; ?></h3>
                <p class="center text-md"><?php echo $SLIDER_BOX[$i]['text']; ?></p>
                <div class="btn"><a href="<?php echo $SUBTITLE[$I]['url']; ?>">Learn More</a></div>
            </div>
    <?php } ?>
    </div>
</section>
<!-- end of section -->
<!-- EI section -->
<section class="row am-padding64" style="width: 100%; height: 250px; background-image: linear-gradient(rgba(222, 129, 1, .7), rgba(222, 129, 1, .7)), url(<?php echo $SECTION_BGIMG[0]; ?>); background-position: center; background-repeat: no-repeat; background-color: #DE8101; border: 2px solid red;">
    <div style="margin: auto;">
        <div>
            <h2 class="center text-shadow"><?php echo $SUBTITLE[0][0]; ?></h2>
            <p></p>
        </div>
        <div style="width: 40px; height: 40px; display: block; margin:15px auto;"><a href="#"><?php echo $SUBTITLE[0][1]; ?></a></div>
    </div>
</section>
<!-- emotional intelligence section -->
<section class="am-padding64" style="margin-bottom: 105px;">
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
<section class="am-padding30" style="width: 100%; min-height: 425px; background-image: url(<?php echo $SECTION_BGIMG[1]; ?>); background-position: center; background-repeat: no-repeat; background-position: right center;  background-size: cover;">
    <div class="center" style="margin: 15px auto;">
        <div>
            <span style="font-size: 20px;"><?php echo $SUBTITLE[1][1]; ?></span>
            <h2 class="text-shadow uppercase f2x"><?php echo $SUBTITLE[1][0]; ?></h2>
        </div>
    </div>
    <div class="row box-wrapper text-sm center" style="margin:0 auto; max-width: 560px; padding: 15px 0;">
    <?php
        for($i = 0; $i < count($SYSTEM_4E); $i++) { ?>
            <div class="box-column-wrapper" style="background-color: #<?php echo $SYSTEM_4E[$i][2]; ?>; width:250px; height: 100px">
                <h4><?php echo $SYSTEM_4E[$i][0]; ?></h4>
                <p><?php echo $SYSTEM_4E[$i][1]; ?></p>
            </div>
    <?php } ?>
    </div>
</section>
<!-- 4E system section - drug prevention -->
<section class="am-padding30" style="color: #fff;">
<?php
    for($i=0; $i < count($PARAGRAPH); $i++) { ?>
        <div class="container">
            <h2 class="center title f2x"><?php echo $PARAGRAPH[$i]['title']; ?></h2>
            <div style="display: flex; flex-flow: row wrap;">
                <div class="cols">
                    <img src="<?php echo $PARAGRAPH[$i]['image']; ?>" style="margin:auto;" />
                </div>
                <div class="cols">
                    <?php echo $PARAGRAPH[$i]['text']; ?>
                    <div class="btn"><a href="<?php echo $PARAGRAPH[$i]['url']; ?>">Learn More</a></div>
                </div>
            </div>
        </div>
<?php } ?>
</section>
<?php
$content = ob_get_clean();

include_once './inc/php/template.php';
?>