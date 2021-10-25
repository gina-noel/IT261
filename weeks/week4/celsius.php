<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 4 - Celsius Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="post">
    <fieldset>
        <legend>Our Celsius form</legend>
        <label for="cel">Enter you Celsius Value!</label>
        <input type="number" name="cel">
        <input type="submit" value="Convert it!">
        <p><a href="">Reset!</a></p>
    </fieldset>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['cel'])) {
        $cel = $_POST['cel'];
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5) + 32;
        $friendly_far = floor($far);

        if($cel == NULL) {
            echo '<h2>Please fill out your Celsius Value</h2>';
        } elseif($friendly_far <= 32) {
            echo '<p> '.$friendly_far.' degrees and it is pretty cold!</p>';
        } elseif($friendly_far <= 40) {
            echo '<p> '.$friendly_far.' degrees and it is not as cold!</p>';
        } elseif($friendly_far <= 50) {
            echo '<p> '.$friendly_far.' degrees and it is getting warmer!</p>';
        } elseif($friendly_far <= 60) {
            echo '<p> '.$friendly_far.' degrees and I\'m liking it!</p>';
        } elseif($friendly_far <= 70) {
            echo '<p> '.$friendly_far.' degrees and I\'m really liking it!</p>';
        } elseif($friendly_far <= 80) {
            echo '<p> '.$friendly_far.' degrees and I\'m going swimming!</p>';
        } elseif($friendly_far <= 95) {
            echo '<p> '.$friendly_far.' degrees and it\'s getting hot!</p>';
        } else {
            echo '<p>It is a cooker';
        }
    } // end isset

} // end server post
    ?>
</body>
</html>