<?php
include('config.php');
include('includes/header.php'); ?>
<div id="wrapper">
    <main class="switchMain">
    <div class="row">

        <div class="column">
            <img  class="container" src="images/<?php echo $background; ?>" alt="<?php echo $alt; ?>"
            <?php echo $headline; ?>
            <?php
            echo $dailyClass;
            ?>
            <h5><?php echo $content;?>
        </div>

        <div class="column">
            <img class="innerImg" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>"
        </div>


        <div>
            <div class="column">
                <h4>Other Daily Yoga Challenges</h4>
                <ul>
                    <li><a href="switch.php?today=Monday">Monday</a></li>
                    <!--                  <li><a href="switch.php?today=Tuesday">Tuesday</a></li>-->
                    <!--                  <li><a href="switch.php?today=Wednesday">Wednesday</a></li>-->
                    <!--                  <li><a href="switch.php?today=Thursday">Thursday</a></li>-->
                    <!--                  <li><a href="switch.php?today=Friday">Friday</a></li>-->
                    <!--                  <li><a href="switch.php?today=Saturday">Saturday</a></li>-->
                    <!--                <li><a href="switch.php?today=Sunday">Sunday</a></li>-->
                </ul>
            </div>
<!--        </div> end grid-->
        </div>

    </div> <!--row end-->
    </main>


<?php
include('includes/footer.php');