<?php
    $page = 'how-we-do-it';
    include_once '../inc/php/misc-lib.php';
    include_once '../inc/php/switch.php';
?>
<!doctype html>
<html>
<head>
<?php include_once $file_header_tag; ?>
</head>
<body>
    <?php include_once $file_mobile_nav; ?>
<header>
    <?php include_once $file_title_anime; ?>
    <div class="background"></div>
</header>
<main>
    <?php //include_once $file_home_anime; ?>
</main>
<footer></footer>
</body>
<script src="<?php echo $file_functions_js; ?>" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
    particlesJS.load('particles-js',
    './inc/js/particles.json', function() {
        console.log('particles.json loaded...');
    });
    </script>
</html>