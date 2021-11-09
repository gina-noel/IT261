<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title><?php echo $title; ?></title>

</head>

<body class="<?php echo $body; ?>">
<header>
    <div class="header-inner">
        <a href="index.php">
            <img id="logo" src="images/logo.png" alt="image">
        </a>
        <nav>
            <ul>
                <?php
                echo my_nav($nav);
                ?>
            </ul>
        </nav>
    </div> <!--end header inner-->
</header>