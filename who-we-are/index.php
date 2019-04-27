<?php
    $page = 'who we are';
    include_once '../inc/php/misc-lib.php';
    include_once '../inc/php/switch.php';
?>
<!doctype html>
<html>
<head>
<?php include_once $file_header_tag; ?>
<link rel="stylesheet" href="../inc/css/background.css">
</head>
<body>
    <?php include_once $file_mobile_nav; ?>
<header>
    <div class="background"></div>
</header>
<main>
    <?php include_once $file_title_section; ?>
    <?php include_once $file_section_one; ?>
</main>
<footer></footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
    particlesJS.load('particles-js',
    '../inc/js/particles.json', function() {
        console.log('particles.json loaded...');
    });
</script>
<script src='<?php echo $file_class_lib; ?>'></script>
<script>
    const pgClass = new eTitle('.letter-box');
    pgClass.newArr;
</script>
<script src="<?php echo $file_functions_js; ?>" type="text/javascript"></script>
</html>