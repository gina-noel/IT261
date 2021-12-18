<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['final-project.php'] = 'Home';
$nav['switch.php'] = 'Switch';
$nav['contact.php'] = 'Contact';
$nav['product.php'] = 'Product';
$nav['about.php'] = 'About';

// creat a function for our navigation so that the function is called out on our header.php
function my_nav($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li class="list-item"><a href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .= '<li class="list-item"><a href="'.$key.'">'.$value.'</a></li>';
        } // end else
    } // end foreach
    return $my_return;
} // end function

switch(THIS_PAGE) {
    case 'final-project.php':
        $title = 'Home page of our IT261 Website';
        $body = 'home';
        $headline = 'Welcome to our Home page of our IT261 Website';
        break;
    case 'switch.php':
        $title = 'Daily Yoga Adventure Class';
        $body = 'about inner';
        $headline = 'Your Daily Yoga Adventure';
        break;
    case 'adder.php':
        $title = 'People page of our IT261 Website';
        $body = 'people inner';
        $headline = 'Welcome to our People page of our IT261 Website';
        break;
    case 'calculator.php':
        $title = 'People view page of our IT261 Website';
        $body = 'people view inner';
        $headline = 'Welcome to our People view page of our IT261 Website';
        break;
    case 'contact.php':
        $title = 'Contact page of our IT261 Website';
        $body = 'contact inner';
        $headline = 'Contact us. We would love to hear from you!';
        break;
    case 'gallery.php':
        $title = 'Gallery page of our IT261 Website';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery page of our IT261 Website';
        break;
    case 'database.php':
        $title = 'Database page of our IT261 Website';
        $body = 'database inner';
        $headline = 'Welcome to our Gallery page of our IT261 Website';
        break;
}

// this is the beginning of the switch final project
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Monday' :
        $dailyClass = '<h2>Monday\'s Yoga Adventure Class</h2>';
        $pic = 'monday2.jpg';
        $alt = 'Monday Morning Adventure Yoga Class image';
        $content = 'Monday\'s yoga adventure class will be held on the lovely Washington coast. This class is perfect to immerse yourself into a quiet, calm and serene practice. Please come prepared to start your week off to the brilliant sounds of the ocean and wildlife';
        $background = 'monBackground3.jpg';
        $backgroundColor = 'backgroundMon';
        break;

    case 'Tuesday' :
        $dailyClass = '<h2>Tuesday\'s Yoga Adventure Class</h2>';
        $pic = 'tuesday.jpg';
        $alt = 'Tuesday Morning Adventure Yoga Class image';
        $content = 'Tuesday\'s yoga adventure class will be held on the Oregon coast. This class is perfect to immerse yourself into what is one of the most perfect ocean beaches. Please come prepared to continue your week to the drumming of the ocean';
        $background = 'tuesBackground.jpeg';
        $backgroundColor = 'backgroundTues';
        break;

    case 'Wednesday' :
        $dailyClass = '<h2>Wednesday\'s Yoga Adventure Class</h2>';
        $pic = 'wednesday.jpg';
        $alt = 'Wednesday Morning Adventure Yoga Class image';
        $content = 'Wednesday\'s yoga adventure class will be held on the California coast. If you have never been to Monterey California, you are in for a treat. Please come prepared to continue your week with the sounds of the seals.';
        $background = 'wedBackground.jpeg';
        $backgroundColor = 'backgroundWed';
        break;

    case 'Thursday' :
        $dailyClass = '<h2>Thursday\'s Yoga Adventure Class</h2>';
        $pic = 'thursday.jpg';
        $alt = 'Thursday Morning Adventure Yoga Class image';
        $content = 'Thursday\'s yoga adventure class will be held on the Mexico coast. This class is perfect to immerse yourself into another world. Please come prepared to continue your week from this exotic location';
        $background = 'thursBackground.jpg';
        $backgroundColor = 'backgroundThur';
        break;

    case 'Friday' :
        $dailyClass = '<h2>Friday\'s Yoga Adventure Class</h2>';
        $pic = 'friday.jpg';
        $alt = 'Friday Morning Adventure Yoga Class image';
        $content = 'Friday\'s yoga adventure class will be held on present green rolling hills. This class is perfect to immerse yourself into all things bright and green. Please come prepared to finish off your work week to the colors that begin to bring you back to spring';
        $background = 'friBackground.jpg';
        $backgroundColor = 'backgroundFri';
        break;

    case 'Saturday' :
        $dailyClass = '<h2>Saturday\'s Yoga Adventure Class</h2>';
        $pic = 'saturday.jpg';
        $alt = 'Saturday Morning Adventure Yoga Class image';
        $content = 'Saturday\'s yoga adventure class will be held in the misty clouds of your imagination. This class is perfect to immerse yourself into fantasy. Please come prepared to fill your weekend with adventure and exporation into your subconscious world of your own making';
        $background = 'satBackground.jpg';
        $backgroundColor = 'backgroundSat';
        break;

    case 'Sunday' :
        $dailyClass = '<h2>Sunday\'s Yoga Adventure Class</h2>';
        $pic = 'sunday.jpg';
        $alt = 'Sunday Morning Adventure Yoga Class image';
        $content = 'Sunday\'s yoga adventure class will be held back on the Baja coast. This class is perfect to immerse yourself into the a calm and reflective state. Please come prepared to end your weekend with peace and love';
        $background = 'sunBackground2.jpg';
        $backgroundColor = 'backgroundSun';
        break;
}

$product[0] = 'product1';
$product[1] = 'product2';
$product[2] = 'product3';
$product[3] = 'product4';


function random_pics($photos) {
    $i = rand(0, 3);
    $selected_image = ''.$photos[$i].'.jpg';
    return '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}


ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

// initialize/define our variables
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged on!';
$errors = array();


function myError($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  else {
        echo ' Houston, we have a problem!';
        die();
    }

}