<?php // functions





function addValues($val1, $val2) {

    $area = $val1 + $val2;

$volume = $val1 * $val1 * $val1;

return array($area, $volume);

}

$result_array = addValues(3, 9);

echo "Area: " .$result_array[0]. "<br>";

echo "Area: " .$result_array[1]. "<br>";




list($area , $volume) = addValues(2, 2);

echo "Area: " .$area. "<br>";

echo "Area: " .$volume. "<br>";
//
//sayHello();
//
//echo '<br>';
//
//function sayHello2($name) {
//    echo 'Hello '.$name.'';
//}
//
//sayHello2('gina');
//echo '<br>';
//sayHello2('Noel');
//echo '<br>';
//sayHello2('Steven');
//echo '<br>';
//sayHello2('Ross');
//
//echo '<br>';
//
//function sayHello3($name, $age) {
//    echo 'My name is '.$name.' and I am '.$age.' years old!';
//}
//
//sayHello3('Anya', 60);
//echo '<br>';
//sayHello3('Gina', 40);
//echo '<br>';
//sayHello3('Steven', 41);
//echo '<br>';
//sayHello3('Kirk', 61);
//echo '<br>';
//
//function cube($n) {
//    $cubing = $n * $n * $n;
//    echo $cubing;
//}
//
//cube(5);
//echo '<br>';
//
//function celcius_converter($temp) {
//    $far = ($temp * 9/5 + 32);
//    return $far;
//}
//
//$far = celcius_converter(40);
//echo ''.$far.' degrees';
//echo '<br>';
//
//echo 'All in one: <b>'.celcius_converter(50).'</b> degrees!';
//
//echo '<br>';
//
//// array example
//function area_volume($value1, $value2, $value3) {
//    $area = $value1 * $value2;
//    $volume = $value1 * $value2 * $value3;
//    return array($area, $volume);
//}
//
////$my_return = area_volume(10, 5, 10);
////echo '<b>Area: </b>'.$my_return[0].'<br> ';
////echo '<b>Volume: </b>'.$my_return[1].'<br> ';
//
//list($my_area, $my_volume) = area_volume(12,10, 6);
//
//echo '<b>Area</b> '.$my_area.'';
//echo '<b>Volume</b> '.$my_volume.'';