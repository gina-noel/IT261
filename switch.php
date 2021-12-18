<?php
include('config.php');
include('includes/header.php'); ?>
<div id="wrapper"  class="<?php echo $backgroundColor; ?>">
    <main class="switchMain">
        <h1> <?php echo $headline; ?> </h1>

        <div class="container">
                <div class="column1">
                    <?php echo $dailyClass; ?>
                    <img src="images/<?php echo $background; ?>" alt="<?php echo $alt; ?>"/>
                    <h5><?php echo $content;?></h5>
                </div>
                <div class="column2">
                    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="column3">
                    <h4>Other Daily Yoga Challenges</h4>
                    <ul>
                        <li><a href="switch.php?today=Monday">Monday</a></li>
                        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
                        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
                        <li><a href="switch.php?today=Thursday">Thursday</a></li>
                        <li><a href="switch.php?today=Friday">Friday</a></li>
                        <li><a href="switch.php?today=Saturday">Saturday</a></li>
                        <li><a href="switch.php?today=Sunday">Sunday</a></li>
                    </ul>
                </div>


        </div> <!--row end-->
    </main>

<?php
include('includes/footer.php');