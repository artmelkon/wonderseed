<?php
$page = $_SERVER['SCRIPT_NAME'];
include_once '../inc/php/misc-lib.php';
include_once '../inc/php/switch.php';

ob_start();
?>
<section>
    <div class="hide" style="background-image: url(<?php echo $BG_IMAGE; ?>); background-position: top center; background-size: 40%; background-repeat: no-repeat; height: 500px; min-height: 100%; width: 100%; position: absolute; top: 120px; left: 0; z-index: -10; opacity: .2"></div>
    <div class="container">
        <h1 class="title uppercase center"><?php echo $TITLE; ?></h1>
    </div>
    <div class="container">
        <h3 class="title uppercase center"><?php echo $SUBTITLE; ?></h3>
        <div><?php echo $PARAGRAPH; ?></div>
    </div>
</section>
<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>