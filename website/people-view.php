<?php
include('config.php');

// if isset $_GET['today'] <etc class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: people.php');
}

$sql = 'SELECT * FROM yogaTeachers WHERE teacher_id =  '.$id.' ';

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
        $specialty = stripcslashes($row['specialty']);
        $description = stripcslashes($row['description']);
        $feedback = '';
    } // ending while
} else {
    $feedback = 'Something is not working';
}

include('includes/header.php');
// for the big assignment, you will not call out the header include
?>
<div>
    <main>
        <?php
        if($feedback == '') {
            echo '<img class="center" src="images/people'.$id.'.jpg" alt="'.$first_name.'">';

        }
        echo ''
        ?>
    </main>
<aside id="view-aside">
<h1>Welcome to <?php echo ''.$first_name.' '.$last_name.'' ;?>'s page!</h1>

<?php
 if($feedback == '') {
     echo '<p><b>Yoga Style: </b>'.$specialty.'</p>';
     echo '<p class="desc"><b>Description: </b>'.$description.'</p>';
     echo '<p>Return back to the <a href="people.php">people page!</a></p>';
     }
?>
</aside>

<?php
mysqli_free_result($result);
mysqli_close($iConn);

include ('includes/footer.php');

