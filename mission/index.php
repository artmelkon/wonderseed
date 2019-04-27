<?php
    $page = $_SERVER['SCRIPT_NAME'];

    include_once '../inc/php/misc-lib.php';
    include_once '../inc/php/switch.php';

ob_start();
?>
<section>
  <div class="title container anim">
    <span class="uppercase letter-box center hd1"><?php echo $TITLE; ?></span>
  </div>
  <div id="introAnimation" class="intro-container container text2"><?php echo $INFO_TEXT; ?></div>
</section>
<section>
  <div id="rotatingBlock" class="circle anim-wrapper">
    <div class="circle-container">
      <div id="circle" class="circle circle1 animate">
        <div class="rotate-title">Story Telling</div>
      </div>
      <div id="circle" class="circle circle2 animate">
        <div class="rotate-title">Technology</div>
      </div>
    </div>
    <div class="square-container">
      <div id="diamond" class="square"></div>
    </div>
  </div>
</section>
<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>