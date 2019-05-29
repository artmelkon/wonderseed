<?php
$page = $_SERVER['SCRIPT_NAME'];
include_once '../inc/php/libraries/misc-lib.php';
include_once '../inc/php/libraries/switch.php';

ob_start();
?>
<section>
    <div class="container">
        <h1 class="title uppercase center f2x"><?php echo $TITLE; ?></h1>
    </div>
</section>
<section class="am-padding30" style="background-image:URL(<?php echo $SECTION_BGIMG; ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="gamification container">
        <h2 class="title uppercase center"><?php echo $PARAGRAPH->copy1->title; ?></h2>
        <p class="center"><?php echo $PARAGRAPH->copy1->item1; ?></p>
        <p class="center"><?php echo $PARAGRAPH->copy1->item2; ?></p>
        <div class="box-wrapper">
            <?php
                foreach($gamification as $val) {
                    $val->boxGamification();
                }
            ?>
        </div>
    </div>
</section>
<section class="am-padding30" style="background-color: #004600;">
    <div class="container">
        <h2 class="title uppercase center"><?php echo $PARAGRAPH->copy2->title; ?></h2>
        <?php echo $PARAGRAPH->copy2->item1; ?>
    </div>
</section>
<section class="am-padding30" style="background-color: #fff">
    <div class="container" style="color: #444;">
        <h2 class="title uppercase center"><?php echo $PARAGRAPH->copy3->title; ?></h2>
        <img src="<?php echo $PARAGRAPH->copy3->img; ?>">
        <?php echo $PARAGRAPH->copy3->item1; ?>
    </div>

    </div>
</section>

<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>