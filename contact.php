<?php
include('config.php');
include('includes/header.php');

$name = '';
$email = '';
$adventStyle = '';
$studioLocation = '';
$privacy = '';
$phone = '';

$name_Err = '';
$email_Err = '';
$adventStyle_Err = '';
$studioLocation_Err = '';
$privacy_Err = '';
$phone_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name'])) {
        $name_Err = 'Please fill out your name';
    } else {
        $name = $_POST['name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_Err = 'Please enter your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_Err = 'Invalid format!';
            unset($_POST['phone']);
        } else{
            $phone = $_POST['phone'];
        }
    }

    if(empty($_POST['adventStyle'])) {
        $adventStyle_Err = 'Please choose your yoga adventure';
    } else {
        $adventStyle = $_POST['adventStyle'];
    }

    if($_POST['studioLocation'] == NULL) {
        $studioLocation_Err = 'Please choose your adventure yoga place';
    } else {
        $studioLocation = $_POST['studioLocation'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_Err = 'You MUST agree';
    } else {
        $privacy = $_POST['privacy'];
    }

    function my_adventStyle( ) {
        $my_return = '';
        if(!empty($_POST['adventStyle'])) {
            $my_return = implode(', ', $_POST['adventStyle']);
        }
        return $my_return;

    } // closes function
    if(isset(
        $_POST['name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['adventStyle'],
        $_POST['studioLocation'],
        $_POST['privacy']
    )) {
        $to = 'szemeo@mystudentswa.com';
//        $to = 'gina.noel@comcast.net';
        $subject = 'Test Email,' .date('m/d/y');
        $body = '
        Name is : '.$name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Location: '.$studioLocation.' '.PHP_EOL.'
        YogaStyle: '.my_adventStyle().' '.PHP_EOL.'
        ';
        $headers = array(
            'From'=> 'noreply@mystudentswa.com',
            'Reply-to'=> ''.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }

}

// end if server request
?>
    <div id="wrapper">
    <main>
        <?php
        include('includes/form.php');
        ?>
    </main>
    <aside class="contactAside">
        <img src="images/monBackground.jpeg" alt="Sunrise image" />
    </aside>

<?php
include('includes/footer.php');
