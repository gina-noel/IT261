<?php

// for loops
// tricky

for ($x = 0; $x <=21; $x+=3) {
    echo 'The number is: '.$x.' <br>';
}
echo '<br>';

// is a for loop for our famous celcius - far converter
// do not call out the celcius variable OUTSIDE of the loop
for ($celcius = 0; $celcius <=100; $celcius++) {
    $far = ($celcius * 9/5) + 32;
    $friendly_far = floor($far);
    echo '<b>Fahrenheit:</b> '.$friendly_far.' <b>Celcius:</b> <span style="color:red; font-weight: bold;">'.$celcius.' </span><hr>  ';
}

echo '<br>';

// kilometers and we have miles

for ($mile = 0; $mile <=100; $mile++) {
    $kilo = $mile * 1.6;
//    $friendly_miles = floor($miles);
    echo '<b>Miles:</b> '.$mile.' <b>Kilometers:</b> '.$kilo.' <br>  ';
}
