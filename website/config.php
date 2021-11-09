<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// creat a function for our navigation so that the function is called out on our header.php
function my_nav($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        } // end else
    } // end foreach
    return $my_return;
} // end function


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

switch ($today) {
    case 'Monday' :
        $yoga = '<h2>Monday is our Vinyasa yoga Day!</h2>';
        $pic = 'vinyasa.jpeg';
        $alt = 'Vinyasa yoga';
        $content = '<b>A vinyasa</b> is a smooth transition between asanas in styles of modern yoga as exercise such as Vinyasa Krama Yoga, Ashtanga Vinyasa Yoga and Bikram Yoga, especially when movement is paired with the breath.';
        $background = 'backgroundMon';
        break;

    case 'Tuesday' :
        $yoga = '<h2>Tuesday is our Hatha yoga Day!</h2>';
        $pic = 'hatha.jpg';
        $alt = 'Hatha yoga';
        $content = '<b>Haṭha yoga</b> is a branch of yoga. The Sanskrit word हठ haṭha literally means "force" and thus alludes to a system of physical techniques.';
        $background = 'backgroundTues';
        break;

    case 'Wednesday' :
        $yoga = '<h2>Wednesday is our Bikram yoga Day!</h2>';
        $pic = 'bikram.jpg';
        $alt = 'Bikram yoga';
        $content = '<b>Bikram Yoga</b> is a system of hot yoga, a type of yoga as exercise, devised by Bikram Choudhury and based on the writings of B. C. Ghosh, that became popular in the early 1970s.';
        $background = 'backgroundWed';
        break;

    case 'Thursday' :
        $yoga = '<h2>Thursday is our Yin yoga Day!</h2>';
        $pic = 'yin.jpg';
        $alt = 'Yin yoga';
        $content = '<b>Yin Yoga</b> is a slow-paced style of yoga as exercise, incorporating principles of traditional Chinese medicine, with asanas that are held for longer periods of time than in other styles.';
        $background = 'backgroundThur';
        break;

    case 'Friday' :
        $yoga = '<h2>Friday is our Restorative yoga Day!</h2>';
        $pic = 'restorative.jpg';
        $alt = 'Restorative yoga';
        $content = '<b>Restorative Yoga</b> is the practice of asanas, each held for longer than in conventional yoga as exercise classes, often with the support of props such as folded blankets, to relax the body, reduce stress, and often to prepare for pranayama.';
        $background = 'backgroundFri';
        break;

    case 'Saturday' :
        $yoga = '<h2>Saturday is our Kundalini yoga Day!</h2>';
        $pic = 'kundalini.jpg';
        $alt = 'Kundalini yoga';
        $content = '<b>Kundalini yoga</b> derives from kundalini, defined in Vedantic culture as energy that lies dormant at the base of the spine until it is activated and channeled upward through the chakras in the process of spiritual perfection. Kundalini is believed by adherents to be power associated with the divine feminine.';
        $background = 'backgroundSat';
        break;

    case 'Sunday' :
        $yoga = '<h2>Sunday is our Ashtanga yoga Day!</h2>';
        $pic = 'ashtanga.jpg';
        $alt = 'Ashtanga yoga';
        $content = '<b>Ashtanga Yoga</b> is a style of yoga as exercise popularised by K. Pattabhi Jois during the 20th century, often promoted as a modern-day form of classical Indian yoga. He claimed to have learnt the system from his teacher, Tirumalai Krishnamacharya. The style is energetic, synchronising breath with movements.';
        $background = 'backgroundSun';
        break;
}


// emailable form php