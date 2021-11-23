<?php
include('config.php');

// if isset $_GET['today'] <etc class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: people.php');
}

$sql = 'SELECT * FROM people WHERE people_id =  '.$id.' ';

$iConn = mysqli_connect(DB_HOST,
    DB_USER,
    DB_PASSWORD,
    DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


// create a variable $result - assign query to the result - the connection (iConn) and the actual table (sql)
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // now time for the while loop - and the while loop will return the array
    while ($row = mysqli_fetch_assoc($result)) {
        // we are not echoing here, we are assigning our row first name to our variable first name
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $description = stripcslashes($row['description']);
        $blurb = stripcslashes($row['blurb']);
        $feedback = '';
    } // ending while
} else {
    $feedback = 'Something is not working';
}

include('includes/header.php');
// for the big assignment, you will not call out the header include
?>
<main>
<h1>Welcome to <?php echo $first_name ;?> page!</h1>

<?php
 if($feedback == '') {
     echo '<ul>';
     echo '<li><b>First Name:</b>'.$first_name.'</li>';
     echo '<li><b>Last Name:</b>'.$last_name.'</li>';
     echo '<li><b>Email:</b>'.$email.'</li>';
     echo '<li><b>Birthdate:</b>'.$birthdate.'</li>';
     echo '<li><b>Occupation:</b>'.$occupation.'</li>';
     echo '</ul>';
     echo '<p>'.$description.'</p>';
     echo '<p>Return back to the <a href="people.php">people page!</a></p>';
     }
?>
</main>
<aside>
    <?php
    if($feedback == '') {
        echo '<img class="center" src="images/people'.$id.'.jpg" alt="'.$first_name.'">';
        echo '<p class="blurb">'.$blurb.'</p>';
    }
    echo ''
    ?>
</aside>
    </div> <!--end wrapper from header.php page-->

<?php
mysqli_free_result($result);
mysqli_close($iConn);

include ('includes/footer.php');

