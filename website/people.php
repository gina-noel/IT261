<?php
include('config.php');
// don't forget this has to be on the server - no localhost

include ('includes/header.php');
// for your big database assignment, your header include would go right here
?>
    <div>

        <main id="people">
            <h1>Yoga Teachers by Speciality</h1>

            <?php

            // we need to grab our table and assign it to a variable
            $sql = 'SELECT * FROM yogaTeachers'; // SQL variable is sql

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
                    echo '<h3>For more information about '.$row['first_name'].' '.$row['last_name'].', please click <a href="people-view.php?id='.$row['teacher_id'].'">here!</a></h3>';
                    echo '<ul>';
                    echo '<li><b>Yoga style:</b> '.$row['specialty'].'</li>';
                    echo '</ul>';
                    echo '<hr>';
                } // closing the while

            } else {
                echo 'Houston, we have a problem';
            }

            mysqli_free_result($result);
            mysqli_close($iConn);

            ?>

        </main>
        <aside id="peopleImg">
            <?php
            echo random_pics($teachers);
            ?>
        </aside>


<?php
include ('includes/footer.php');
