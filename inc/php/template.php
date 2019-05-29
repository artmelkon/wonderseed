<!doctype html>
<html>
<head>
<?php
include_once $file_header_tag;
echo $CSS_PATH;
?>
</head>
<body>
<header>
    <nav>
        <?php include_once $file_navigation; ?>
    </nav>
    <?php echo $BACKGROUND; ?>
</header>
<main class="content-wrapper">
    <?php echo $content; ?>
</main>
<footer>
    <p><?php echo $page; ?></p>
    <p style="color:white;"><?php echo basename($_SERVER['REQUEST_URI']).PHP_EOL; ?></p>
</footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
<script src='<?php echo $file_animations_js; ?>'></script>
<script>
    const pgClass = new eTitle('.letter-box');
    pgClass.newArr;
    animQuote();
</script>
<?php

    if($page === '/our-team/index.php') { ?>
        <script src="<?php echo $file_team_lib; ?>"></script>
<?php
    }
?>
<script src="<?php echo $file_functions_js; ?>" type="text/javascript"></script>
</html>