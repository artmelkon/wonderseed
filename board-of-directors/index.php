<?php
$page = $_SERVER['SCRIPT_NAME'];

include_once '../inc/php/libraries/misc-lib.php';
include_once '../inc/php/libraries/switch.php';

ob_start();
?>
<section>
    <h1 class="title uppercase center f2x"><?php echo $TITLE; ?></h1>
    <div class="directors box-wrapper container">
        <div class="col-lt">
            <h3 class="directors-tab uppercase center"><?php echo  $SUBTITLE[0]; ?></h3>

            <?php  //to display board members on board member page
            foreach($director as $value) {
                echo $value->person();
            } ?>
        </div>
        <div class="col-rt">
            <h3 class="directors-tab uppercase center" onclick="toggleTitle(this, 1)"><?php echo  $SUBTITLE[1]; ?></h3>
            <?php  // to display advisory board
            foreach($advisory as $value) {
                echo $value->person();
            } ?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>