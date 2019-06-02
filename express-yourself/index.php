<?php
  $page = $_SERVER['SCRIPT_NAME'];

  include_once '../inc/php/libraries/misc-lib.php';
  include_once '../inc/php/libraries/class-lib.php';
  include_once '../inc/php/libraries/switch.php';

  ob_start();
?>
<h1 class="title uppercase center f2x"><?php echo $TITLE; ?></h1>
<section class="one-track am-padding30">  
  <div class="title container">
    <h2 class="title uppercase center"><?php echo $PARAGRAPH[0][0]; ?></h2>
    <div class="box-wrapper">   
        <img src="<?php echo$IMAGES[0]; ?>" />
        <div>
          <?php echo $PARAGRAPH[0][1]; ?>    
        </div>
    </div>
  </div>
</section>
<section class="how-it-works">
  <div class="header-bar am-padding30 center title">
    <h2><?php echo $SUBTITLE[0]; ?></h2>
  </div>
  <div class="paragraph-wrapper am-padding30">
    <div class="box-wrapper container">
      <?php
        foreach($column4 as $val) {
          echo $val->makeContainer();
        }
      ?>
    </div>
  </div>
</section>
<section class="tool-kit">
  <div class="header-bar">
    <h2 class="uppercase center"><?php echo $SUBTITLE[1]; ?></h2>
  </div>
  <div class="otm am-padding30">
    <div class="box-wrapper">
      <div class="col-lt" >
        <img src="<?php echo $IMAGES[1]; ?>" />
      </div>
      <div class="col-rt">
          <h3 class="title center"><?php echo $PARAGRAPH[1][0]; ?></h3>
          <ul>
            <?php
              for ($i=0; $i<count($PARAGRAPH[1][1]); $i++) {
                echo '<li>'.$PARAGRAPH[1][1][$i].'</li>';
              }
            ?>
          </ul>
      </div>
    </div>
  </div>
</section>
<section class="goal-setting">
  <div class="header-bar">
    <h2 class="uppercase center"><?php echo $SUBTITLE[2]; ?></h2>
  </div>
  <div class="am-padding30 container">
    <img src="<?php echo $IMAGES[2]; ?>" />
  </div>
</section>
<?php
  $content = ob_get_clean();

  include_once '../inc/php/template.php';
?>