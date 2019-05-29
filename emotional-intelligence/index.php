<?php
$page = $_SERVER['SCRIPT_NAME'];

include_once '../inc/php/misc-lib.php';
include_once '../inc/php/switch.php';

ob_start();
?>
<section>
    <div class='title container anim'>
        <span class='uppercase letter-box center hd1'><?php echo $TITLE; ?></span>
    </div>
    <div class="container">
        <div id='introAnimation' class='intro-container text2'><?php echo $INFO_TEXT; ?></div>
    </div>
</section>
<img src="<?php echo $BRAIN_IMG; ?>" class="brain" />
<div class="box-container">
<?php
    foreach($SUBTITLE as $value) {
        echo '<div class="ie circle center">'.$value.'</div>';
    }
?>
 </div>
<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>