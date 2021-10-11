<?php
// this will be muy introduction to vriables
// var.php
// a variable is a container for information

$name = 'Gina';
$weather = 'Today is a sunny day';
// my 98.6 is a float. if it was 98, it would be an integer
$body_temp = 98.6;

echo $name;
echo '<br>';
echo "My name is  $name";
echo '<br>';
echo 'My name is  $name';
echo '<br>';
// if you use a single quotes around a variable, the value of the variable will not display
// if you use double quotes, the variable value will display!
echo 'My name is ' .$name.' ';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
// this works and I'm used to it, but the below is a new way. research which is better in php
echo "The normal body temperature is $body_temp and all is well!";
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well!';
echo '<br>';
// change the name is Sharon now from here on out
$name = 'Sharon';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo $z;
echo '<br>';
$z = $x * $y;
echo $z;
echo '<br>';

$first_name = 'Gina';
$last_name = 'Noel';
echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.' '.$last_name.'';
echo '<br>';
echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.' ';
// punctuation challenges - inside single quote, you MUST nest the variable with the following '.$var.' ... Now when you have an apostraphe, you must use ESCAPE before the apostraphe \'
echo '<br>';
echo "Here are the names with a double quote! $first_name $last_name";
echo '<br>';
$name = 'gina ';
$name .= 'noel';
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';
$x = 120;
$x *= .09;
echo $x;

// our first function number_format()
echo '<br>';
$x = 137;
$x /= 4;
echo $x;
echo '<br>';
echo $friendly_x = number_format($x, 1);
echo '<br>';

// our second preset function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';

// arrays
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';

// you can echo an index array
echo '<br>';
echo $fruit[3];
echo '<br>';

$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
];

// cannot echo an array echo $fruit;
echo $fruit;
echo '<br>';
// you can use these functions
print_r($fruit);
echo '<br>';
var_dump($fruit);

// another array in the world of websites
echo '<br>';
$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';
echo $nav[0];

// associative array
echo '<br>';
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery'] = 'Gallery';

// index.php is the key of the array, and Home is the value = a key value relationship
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
echo '<pre>';
var_dump($nav);
echo '<pre>';

echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was "'.$show.'" starring, '.$show_actor.', and it is a '.$show_genre.'';
echo '<br>';
