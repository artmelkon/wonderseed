<?php
$page = $_SERVER['SCRIPT_NAME'];
include_once '../inc/php/misc-lib.php';
include_once '../inc/php/switch.php';

ob_start();
?>
<section>
    <div class="conteainer">
        <h1 class="title uppercase center"><?php echo $TITLE; ?></h1>
    </div>
    <div class="container">
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
    <div class="container">
        <h2 class="title uppercase center"><?php echo $PARAGRAPH->copy2->title; ?></h2>
        <?php echo $PARAGRAPH->copy2->item1; ?>
    </div>
    <div class="container">
        <h2 class="title uppercase center"><?php echo $PARAGRAPH->copy3->title; ?></h2>
        <div class="vr box-wrapper">
            <div>
                <img src="<?php echo $PARAGRAPH->copy3->img; ?>">
            </div>
            <div>                
                <?php echo $PARAGRAPH->copy3->item1; ?>
            </div>
        </div>
    </div>

    </div>
</section>

<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>