<?php
$page = $_SERVER['SCRIPT_NAME'];

include_once '../inc/php/libraries/misc-lib.php';
include_once '../inc/php/libraries/switch.php';

ob_start();
?>
<section class="container am-padding30">
    <h1 class="title uppercase center f2x">
        <?php echo $TITLE; ?>
    </h1>
    <div class="paragraph text-md am-padding30">
        <img src="<?php  echo $PARAGRAPH->copy1->image; ?>" style="max-width: 200px; width:50%; padding: 15px;" align="left" />
        <!-- paragraph goes here -->
        <?php echo $PARAGRAPH->copy1->text; ?>
        <!-- end of paragraph -->
    </div>
</section>
<section class="row" style="width: 100%; height: 250px; background-image: url(<?php echo $SECTION_BGIMG; ?>); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <h2 class="title uppercase center">
            <?php echo $SUBTITLE; ?>
        </h2>
    </div>
</section>
<section class="storytelling am-padding30" style="background-color: #004600;">
    <div class="box-wrapper">
        <div class="cols-lt">
            <div class="box-column-wrapper wht-border brd-radius-8">
                <?php //echo $STORY->story1->icon; ?>
                <h4 class="uppercase title center"><?php echo $STORY->story1->title; ?></h4>
                <p><?php echo $STORY->story1->text; ?></p>
            </div>
            <div class="box-column-wrapper wht-border brd-radius-8">
                <img src="">
                <h4 class="uppercase title center"><?php echo $STORY->story2->title; ?></h4>
                <p><?php echo $STORY->story2->text; ?></p>
            </div>
        </div>
        <div class="cols-rt">
            <div class="box-column-wrapper wht-border brd-radius-8">
                <img src="">
                <h4 class="title uppercase center"><?php echo $STORY->story3->title; ?></h4>
                <p><?php echo $STORY->story2->text; ?></p>
            </div>
            <div class="box-column-wrapper wht-border brd-radius-8">
                <img src="">
                <h4 class="title uppercase center"><?php echo $STORY->story4->title; ?></h4>
                <p><?php echo $STORY->story2->text; ?></p>
            </div>
        </div>
    </div>        
</section>

<section class="am-padding30" style="background-color: #fff;">
    <div class="container" style=" color: #444 !important;">
        <h3 class="title uppercase center"><?php echo $PARAGRAPH->copy2->subtitle; ?></h3>
        <img src="<?php echo $PARAGRAPH->copy2->image; ?>" />
        <p><?php echo $PARAGRAPH->copy2->text; ?></p>
    </div>
</section>

<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>