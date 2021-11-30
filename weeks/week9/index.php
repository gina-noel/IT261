<?php

// this index page is the home page of your wonderful website
// also after creating this index.php page, you will not be able to access it
// unless you login as your user, or register first, then login

session_start();

include('config.php');

// if the user has not logged in correctly, they will be directed to the longin page

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

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
    <p><a href="index.php?logout='1' ">Log out</a></p>
</div> <!--end welcome logout here-->
<?php endif ; ?>

</header> <!--closing it from the header.php file-->
<div id="wrapper">

<h1>Welcome to the home page!</h1>
<!--place more content here-->


</div><!--close wrapper-->
<?php
include('includes/footer.php');
?>



