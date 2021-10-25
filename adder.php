<!doctype html>
<html lang="en">
<head>
    <title>My Adder Assignment</title>
    <style>
        h1 {
            color: green;
            text-align: center;
        }
        h2 {
            font-size:1.5em;
            text-align: center;
        }
        form {
            border: 1px solid red;
            padding: 10px;
            width:350px;
            margin: 0 auto ;
        }
        p {
            color:red;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Adder.php</h1>
<form action="" method="post">
    <label>Enter the first number:</label>
    <input type="number" name="num1"><br>
    <label>Enter the second number:</label>
    <input type="number" name="num2"><br>
    <input type="submit" value="Add Em!!">
</form>

</body>
</html>
<?php //adder-wrong.php

if (isset($_POST['num1'], $_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num1_int = intval($num1);
    $num2 = $_POST['num2'];
    $num2_int = intval($num2);
    $myTotal = $num1_int + $num2_int;
    echo '<h2>You added ' . $num1_int . ' and ' . $num2_int . '</h2>';
    echo '<p>and the answer is<br>
    ' . $myTotal . '!</p>';
    echo '<p><a href="">Reset page</a></p>';
}
?>

<!--    lines 1 -11 the php should be moved to after the html tag-->
<!--    moved form to new line for readability line 10-->
<!--    removed slash on line 10 in front of form-->
<!--    missing method post on line 10 for the the form-->
<!--    missing beginning <label> tag on line 11-->
<!--    moved input to line 12 for readability-->
<!--    Num1 should not be capitalised on line 12-->
<!--    type should be number instead of text on line 12-->
<!--    remove / in front of <label> on line 13-->
<!--    missing closing label on line 13-->
<!--    moved input to line 14 for readability-->
<!--    changed type from text to number on line 14-->
<!--    missing double quotes on line 15 after Add Em!!-->
<!--    moved closing form to line 16 for readability-->
<!--    need space after php on line 20-->
<!--    line 25 Num2 should be lower case-->
<!--    removed - in from of the = sign on line 25-->
<!--    line 26 has a bunch of errors.. so I fixed the closing < h1> tag, changed it
        to single quotes for ease of reading, use single quote instead of double quote before
        num1, missing a single quote in front of num2, remove space after num2 -->
<!--    style tag should be inside p tag, I moved it into the style section on line 27-->
<!--    $mytotal should have '..' instead of the double quote. there should be no spaces, -->
<!--    the double quote after the ! should be single quote and moved to after the
        closing p tag all on line 28. I think I got everything that I fixed, it was so hard to read-->
<!--    no closing p tag on line 29 -->
<!--    missing semicolon on line 29-->
<!--    removed extra stuff on line 30 ';{-->
<!--    moved closing php tag to next line-->
<!--    html was missing <!doctype html> on line 1 now -->
<!--    added  $_POST['num2'] to now line 40-->
<!--    I added in $num1_int = intval($num1) and $num2_int = intval($num2) and changed
        the variables to match-->

<!--argh I wrote all of this up and forgot to put in the styles, so all my numbers will be off
If this is a problem, please let me know... I've already done it twice since I forgot to move the
php after the html until the very end....-->

<!-- I also wanted to add in <fieldset> but didn't want to change too much per your instructions-->
