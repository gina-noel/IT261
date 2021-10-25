<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our IT261 Website';
        $body = 'home';
        $headline = 'Welcome to our Home page of our IT261 Website';
        break;
    case 'about.php':
        $title = 'About page of our IT261 Website';
        $body = 'about inner';
        $headline = 'Welcome to our About page of our IT261 Website';
        break;
    case 'daily.php':
        $title = 'Daily page of our IT261 Website';
        $body = 'daily inner';
        $headline = 'Welcome to your Daily Yoga Challenge!!';
        break;
    case 'project.php':
        $title = 'Project page of our IT261 Website';
        $body = 'project inner';
        $headline = 'Welcome to our Project page of our IT261 Website';
        break;
    case 'content.php':
        $title = 'Content page of our IT261 Website';
        $body = 'content inner';
        $headline = 'Welcome to our Content page of our IT261 Website';
        break;
    case 'gallery.php':
        $title = 'Gallery page of our IT261 Website';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery page of our IT261 Website';
        break;
}

// this is the beginning of the switch for homework 3
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

?>

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
                foreach($nav as $key => $value) {
                    if(THIS_PAGE == $key) {
                       echo '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
                    } else {
                    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
                }}
                ?>

            </ul>
        </nav>
    </div> <!--end header inner-->
</header>