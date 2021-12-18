<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <link href="css/nav.css" type="text/css" rel="stylesheet">
    <link href="css/form.css" type="text/css" rel="stylesheet">
    <title>Gina Noel's Portal Page</title>
</head>
    <header>
        <nav class="navbar">
            <div class="container-icon">
                <a href="final-project.php"><h4>HijackingLife Web Design</h4></a>
            </div>
            <ul class="nav-list" id="navi-list">
                <?php
                echo my_nav($nav);
                ?>
            </ul>
        </nav>
<?php
// Notification message
// if successful, welcome the end user!
if(isset($_SESSION['success'])) : ?>

    <div class="success">
        <h3>
            <?php echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div> <!--end div success-->
<?php endif ;


if(isset($_SESSION['username'])) : ?>
    <div class="welcome-logout">
        <h3> Hello <?php echo $_SESSION['username'] ; ?>
        </h3>
        <p><a href="final-project.php?logout='1' ">Log out</a></p>
    </div> <!--end welcome logout here-->
<?php endif ; ?>

    </header>
