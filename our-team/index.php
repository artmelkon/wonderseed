<?php
$page = $_SERVER['SCRIPT_NAME'];
include_once '../inc/php/libraries/misc-lib.php';
include_once '../inc/php/libraries/switch.php';

ob_start();
?>
<section>
    <h1 class="title uppercase center f2x"><?php echo $TITLE; ?></h1>
    <div class="team-members box-wrapper container"></div>
</section>
<?php
 $content = ob_get_clean();

 include_once '../inc/php/template.php';
 ?>