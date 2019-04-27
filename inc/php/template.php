<!doctype html>
<html>
<head>
<?php
include_once $file_header_tag;
echo $CSS_PATH;
?>
</head>
<body>
    <?php include_once $file_mobile_nav; ?>
<header>
<?php 
    echo $BACKGROUND;
?>
</header>
<main class="content-wrapper">
<?php echo $content; ?>
</main>
<footer><?php echo $page; ?></footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
<script src='<?php echo $file_animations_js; ?>'></script>

<?php
    if($page === '/index.php' || $page === '/mission/index.php' || $page === '/emotional-intelligence/index.php') { 
?>
<script>
    const pgClass = new eTitle('.letter-box');
    pgClass.newArr;
    animQuote();
</script>

<?php 
    }

    if($page === '/our-team/index.php') { ?>
        <script src="<?php echo $file_team_lib; ?>"></script>
<?php
    }
?>

<script src="<?php echo $file_functions_js; ?>" type="text/javascript"></script>
</html>