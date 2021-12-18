<?php
include('config.php');

// if isset $_GET['today'] <etc class="">

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: product.php');
}

$sql = 'SELECT * FROM myClass WHERE id =  '.$id.' ';

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
        $name = stripcslashes($row['name']);
        $price = stripcslashes($row['price']);
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
            echo '<img class="center" src="images/product'.$id.'.jpg" alt="'.$name.'">';
        }
        echo ''
        ?>
    </main>
<aside id="view-aside">


<?php
 if($feedback == '') {
     echo '<h1 class="capitalize">'.$name.' package</h1>';
     echo '<p class="desc"><b>Price: </b>$'.$price.'</p>';
     echo '<p>Return back to the <a href="product.php">Product offerings page!</a></p>';
     }
?>
</aside>

<?php
mysqli_free_result($result);
mysqli_close($iConn);

include ('includes/footer.php');

