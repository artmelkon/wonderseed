<?php
$page = $_SERVER['SCRIPT_NAME'];
include_once '../inc/php/misc-lib.php';
include_once '../inc/php/switch.php';

ob_start();
?>
<section class="container">
    <div class="title uppercase center hd2"><?php echo $TITLE; ?></div>
    <div class="team-members"></div>
</section>
<?php
 $content = ob_get_clean();

 include_once '../inc/php/template.php';
 ?>