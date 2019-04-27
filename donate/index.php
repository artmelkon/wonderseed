<?php
    $page = $_SERVER['SCRIPT_NAME'];
    include_once '../inc/php/misc-lib.php';
    include_once '../inc/php/switch.php';

ob_start();
?>
<section>
    <div class="container">
            <h1 class="title uppercase center"><?php echo $TITLE; ?></h1>
            <p class="title uppercase center hd3"><?php echo $SUBTITLE; ?></P>
    </div>
    <div class="container" style="margin-top: 12px;">
        <div class="donate box-container">
        <?php 
            foreach($donate as $val) {
                $val->boxDonate();
            }
        ?>
        </div>
    </div>
</section>
    
<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>