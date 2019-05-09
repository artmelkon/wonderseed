<?php
$page = $_SERVER['SCRIPT_NAME'];
include_once '../inc/php/libraries/misc-lib.php';
include_once '../inc/php/libraries/switch.php';

ob_start();
?>
<section class="contact">
    <h1 class="title uppercase center f2x"><?php echo $TITLE; ?></h1>
    <div class="box-wrapper container am-padding30">
        <div class="col-lt">
            <h3 class="title center capitalize"><?php echo $SUBTITLE[0]; ?></h3>
            <ul class="text-md">
                <?php
                    foreach ($ADDRESS as $adr) {
                        echo "<li>$adr</li>\n";
                    }
                ?>
            </ul>
        </span>
        <div class="col-rt form-inp">
            <h3 class="title center capitalize"><?php echo $SUBTITLE[1]; ?></h3>
            <div id="cForm" class='c-form'>
                <input type="text" name="fname" placeholder="First Name *" required>
                <input type="text" name="lname" placeholder="Last Name *" required>
                <input type="text" name="organization" placeholder="Organization Name *" required>
                <input type="email" name="email" placeholder="Email *" required>
                <input type="text" name="phone" placeholder="Phone Number *" required>
                <input type="text" name="subject" placeholder="Subject *" required>
                <textarea name="message" placeholder="Your message here"></textarea>
                <button value="submit" class="btn">SUBMIT</button>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();

include_once '../inc/php/template.php';
?>