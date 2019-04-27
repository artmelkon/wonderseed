<?php
$page = $_SERVER['SCRIPT_NAME'];
include_once '../inc/php/misc-lib.php';
include_once '../inc/php/switch.php';

ob_start();
?>
<section class="contact container">
    <div class="title uppercase center hd2"><?php echo $TITLE; ?></div>
    <div class="contact-wrapper">
        <div class="column2">
            <h3 class="title center capitalize"><?php echo $SUBTITLE[0]; ?></h3>
            <ul class="text2">
                <script>
                    const address = ['<i class="fas fa-home fa-lg"></i>15225 Dickens St #3 Sherman Oaks, CA. 91403A', '<i class="fas fa-mobile-alt fa-lg"></i>(213) 340-4899', '<i class="fas fa-envelope fa-lg"></i><a href="mailto:info@WonderSeedFoundation.com">info@WonderSeedFoundation.com</a>'];
                    address.forEach( val => {
                        document.write(`<li>${val}</li>`);
                    });
                </script>
            </ul>
        </div>
        <div class="column2 form-inp">
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