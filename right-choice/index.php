<?php
$page = $_SERVER['SCRIPT_NAME'];
include_once '../inc/php/libraries/misc-lib.php';
include_once '../inc/php/libraries/switch.php';

ob_start();
?>
<section>
    <div class="container">
        <h1 class="title uppercase center f2x"><?php echo $TITLE; ?></h1>
    </div>
</section>
<section>
    <div class="container right-choice-box">
        <div class="am-padding30">
            <h3 class="title uppercase center"><?php echo $SUBTITLE[0]; ?></h3>
            <?php echo $PARAGRAPH; ?>
        </div>
    </div>
</section>
<section class="am-padding30" style="background-color: #6EA1B1">
    <div class="center">
        <h1 class="title uppercase f2x"><?php echo $SUBTITLE[1]; ?></h1>
    </div>
   <div class="right-choice container box-wrapper row">
        <div class="box-column-wrapper">
            <h2 class="center uppercase">Drug Prevention Campaign</h2>
            <p>We have developed a unique interactive VR 360 Drug Prevention Campaign to help our kids make
    TRCs (The Right Choices) when faced with scenarios that may lead them to take drugs or drink alcohol to fit in or to self-medicate.</p>
        </div>
        <div class="box-column-wrapper">
            <h2 class="center uppercase">VR 360 platform</h2>
            <p>Our VR 360 platform lets kids experience a simulated live action, first person interactive perspective on how making alternative choices can lead to lifelong consequences while making
the “Right Choices” can empower you to success.

Our VR 360 platform lets kids experience a  simulated live action, first person interactive perspective on how making alternative choices can lead to lifelong consequences while making
the “Right Choices” can empower you to success.</p>
        </div>
        <div class="box-column-wrapper">
            <h2 class="center uppercase">active learning</h2>
            <p>With our program, students are immersed in a multi-sensory experience and active learning situation intended to promote critical thinking and
mindfulness.</p>
        </div>
   </div>
</section>

<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>