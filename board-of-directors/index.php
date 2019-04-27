<?php
$page = $_SERVER['SCRIPT_NAME'];

include_once '../inc/php/misc-lib.php';
include_once '../inc/php/switch.php';

ob_start();
?>
<section class="container">
    <div class="title uppercase center hd2"><?php echo $TITLE; ?></div>
    <div class="directors-list-wrapper container">
        <div class="directors list-column">
        <div class="directors-tab subtitle uppercase hd3 center"><?php echo  $SUBTITLE[0]; ?></div>

        <?php  //to display board members on board member page
        foreach($director as $value) {
            echo $value->person();
        } ?>
        </div>
        <div class="advisors list-column">
        <div class="directors-tab subtitle uppercase hd3 center" onclick="toggleTitle(this, 1)"><?php echo  $SUBTITLE[1]; ?></div>
        <?php  // to display advisory board
        foreach($advisory as $value) {
            echo $value->advisory();
        } ?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>