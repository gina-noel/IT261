<?php
// the date function

echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date("H:i");

// why did I change the time from a 12hour clock to a 24 hour clock???
// I will use an if/elseif statement, resulting in a different message based on the time of the day
// if the time is less than 11, it's morning
// if the time is less than 16, it's afternoon
// else, it's evening
// we need to assign our time to a variable
echo '<br>';
$time = date("H:i");
if($time <= 11) {
    echo '<h2 style="color:yellow;">Good morning, Olga</h2>';
} elseif($time <= 16) {
    echo '<h2 style="color:lightblue;">Good Afternoon, Olga</h2>';
} else {
    echo '<h2 style="color:purple;">Good Evening, Olga</h2>';
}
// we can place html elements inside our echo