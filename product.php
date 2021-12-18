<?php
include('config.php');
include ('includes/header.php');
?>
    <div id="wrapper">

        <main>
            <div class="product">
            <h1>Yoga Class Offerings & Prices</h1>

            <?php

            // we need to grab our table and assign it to a variable
            $sql = 'SELECT * FROM myClass'; // SQL variable is sql

            // we need to connect to the database using mysqli_connect() function and assign it to a variable

            // DB_xxx comes from the credential.php file via config.php file with an include - like a puzzle
            $iConn = mysqli_connect(DB_HOST,
                DB_USER,
                DB_PASSWORD,
                DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


            // create a variable $result - assign query to the result - the connection (iConn) and the actual table (sql)
            $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

            // time for the if statement, if we have more than zero rows, perform xxx
            if(mysqli_num_rows($result) > 0) {
                // now time for the while loop - and the while loop will return the array
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<h4>For information on '.$row['name'].' package prices, click <a href="product-view.php?id='.$row['id'].'">here!</a></h4>';
                    echo '<hr>';
                } // closing the while

            } else {
                echo 'Houston, we have a problem';
            }

            mysqli_free_result($result);
            mysqli_close($iConn);
            ?>
            </div>

        </main>
        <aside>
            <div class="productImg">
            <?php
            echo random_pics($product);
            ?>
            </div>
        </aside>

<?php
include ('includes/footer.php');
