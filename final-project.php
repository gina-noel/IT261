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

?>
<div id="wrapper">

    <main>
        <h1>Welcome to my final project page</h1>
        <h2>A little about me!</h2>
        <p>My name is Gina Noel. I am currently a full-time student improving my HTML, CSS, PHP and JavaScript skills! I have been in the software industry for roughly 22 years. I started out in support and moved into software testing when I logged more bugs than their current testers. From there I moved into an SDET roll writing mostly Java code for an android API. I also have experience in JavaScript using some basic HTML + CSS pages for automation. My extensive knowledge expands in all stages of software development from frontend to backend after many years in the field.</p>
        <p>I have a wide range of things I love to do. Some of my favorite activities would include yoga, travel, adventure, bike riding, hiking, knitting and writing code.</p>
        <p>I am also a certified yoga instructor. I would say my favorite yoga to teach is power yoga or vinyasa flow yoga. I have been teaching yoga for roughly 3 years and prefer outdoor yoga in beautiful locations with close friends. I someday hope to come up with that perfect yoga business name!</p>
        <p>One of my top passions is travel. My partner in crime, kitty cat and I currently live out of our RV named Marigold. We have lived in Marigold for 3 years now and we couldn't see ourselves doing anything else. I feel that this adventurous side showcases my ability to be flexible and adaptable to any situation. Can one say, can do attitude?</p>
        <p>My top passion has always been software development and working with others!</p>
    </main>

    <aside>
        <img src="images/gina.jpeg" alt="Gina's image" />
        <p>Living my dreams through hard work and a tenacious attitude</p>
    </aside>

<?php
include('includes/footer.php');
?>