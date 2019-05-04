<?php
$page = $_SERVER['SCRIPT_NAME'];

include_once '../inc/php/misc-lib.php';
include_once '../inc/php/switch.php';

ob_start();
?>
<section class="container">
    <h1 class="title uppercase center">
        <?php echo $TITLE; ?>
    </h1>
    <div class="paragraph text-md">
        <img src="<?php  echo $PARAGRAPH->copy1->image; ?>" style="width:50%; padding-right: 15px;" align="left" />
        <!-- paragraph goes here -->
        <?php echo $PARAGRAPH->copy1->text; ?>
        <!-- end of paragraph -->
    </div>
</section>
<section style="width: 100%; height: 45px;">

</section>
<section>
    <div class="container">
        <h2 class="title uppercase center">
            <?php echo $SUBTITLE; ?>
        </h2>
    </div>
    <div class="container">
        <div class="box-wrapper">
            <div class="cols-lt">
                <div class="storytelling box-column-wrapper">
                    <?php //echo $STORY->story1->icon; ?>
                    <h3 class="uppercase title center"><?php echo $STORY->story1->title; ?></h3>
                    <p><?php echo $STORY->story1->text; ?></p>
                </div>
                <div class="storytelling box-column-wrapper">
                    <img src="">
                    <h3 class="uppercase title center"><?php echo $STORY->story2->title; ?></h3>
                    <p><?php echo $STORY->story2->text; ?></p>
                </div>
            </div>
            <div class="cols-rt">
                <div class="storytelling box-column-wrapper">
                    <img src="">
                    <h3 class="title uppercase center"><?php echo $STORY->story3->title; ?></h3>
                    <p><?php echo $STORY->story2->text; ?></p>
                </div>
                <div class="storytelling box-column-wrapper">
                    <img src="">
                    <h3 class="title uppercase center"><?php echo $STORY->story4->title; ?></h3>
                    <p><?php echo $STORY->story2->text; ?></p>
                </div>
            </div>
        </div>        
    </div>
</section>
<section style="width: 100%; height: 45px;">

</section>
<section>
    <div class="container">
        <h3 class="title uppercase center"><?php echo $PARAGRAPH->copy2->subtitle; ?></h3>
        <img src="<?php echo $PARAGRAPH->copy2->image; ?>" />
        <p><?php echo $PARAGRAPH->copy2->text; ?></p>
    </div>
</section>

<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>