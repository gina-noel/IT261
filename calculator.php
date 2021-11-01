<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Trip Calculator</title>
    <link href="css/calculatorStyles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h2 class="title">Our Trip Calculator</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>
">
        <label>How many miles will you be driving</label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>
">
        <label>How many hours per day would you like to be driving?</label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>
">
        <!--radio buttons-->
        <label for="price">Price per gallon</label>
        <ul>
            <li><input type="radio" name="price" value="3.00"
                    <?php if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked"' ;?>
                >$3.00</li>
            <li><input type="radio" name="price" value="3.50"
                    <?php if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked"' ;?>
                >$3.50</li>
            <li><input type="radio" name="price" value="4.00"
                    <?php if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked"' ;?>
                >$4.00</li>
        </ul>

        <!--dropdown-->
        <label for="efficiency">Select Fuel Efficiency</label>
        <select name="efficiency">
            <option value="" NULL
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected="unselected"' ;?>
            >Select your efficiency</option>
            <option value="10"
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == "10") echo 'selected="selected"' ;?>
            >Terrible</option>
            <option value="20"
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == "20") echo 'selected="selected"' ;?>
            >Getting Better</option>
            <option value="30"
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == "30") echo 'selected="selected"' ;?>
            >Good</option>
            <option value="40"
                <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == "40") echo 'selected="selected"' ;?>
            >Great</option>
        </select>
        <input type="submit" value="Calculate">
        <button><a href="">Reset</a></button>
    </fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name'])) {
        echo '<span class="error">Please fill out your name</span>';
    }
    if(empty($_POST['miles'])) {
        echo '<span class="error">Please fill out how many miles you will be driving</span>';
    }
    if(empty($_POST['hours'])) {
        echo '<span class="error">Please fill out how many hour(s) you would like to travel</span>';
    }
    if(empty($_POST['price'])) {
        echo '<span class="error">Please choose your price</span>';
    }
    if($_POST['efficiency'] == NULL) {
        echo '<span class="error">Please choose your efficiency</span>';
    }
    if(isset(
        $_POST['name'],
        $_POST['miles'],
        $_POST['hours'],
        $_POST['price'],
        $_POST['efficiency'])
        && is_numeric($_POST['hours'])
        && is_numeric($_POST['miles'])
    ) {
        $name = $_POST['name'];
        $miles = $_POST['miles'];
        $hours = $_POST['hours'];
        $price = $_POST['price'];
        $efficiency = $_POST['efficiency'];
        $mph = 65;

        $total = ($miles / $efficiency) * $price;
        $friendly_total = number_format($total,2);

        $days = $miles / ($mph * $hours); // d = vt
        $friendly_days = number_format($days,2);

        $friendly_hours = number_format($hours,0);

        $gallons = $miles / $efficiency;
        $friendly_gallons = number_format($gallons,0);

        echo '
        <div class="box"> <!--styling?-->
        <h1><b>Calculator Results</b></h1>
        <p>'.$name.', you will be driving <b>'.$miles.' miles</b></p>
        <p>Your vehicle has an efficiency of <b>'.$efficiency.' miles per gallon</b></p>
        <p>You used <b>'.$friendly_gallons.' gallons of gas</b></p>
        <p>Your total cost for gas will be <b>$'.$friendly_total.'</b></p>
        <p>You will be driving a total of <b>'.$friendly_hours.'</b> hours equating to <b>'.$friendly_days.'</b> days!</p>
        </div>
        ';

    } // elseif end
} // server request

?>
</body>
</html>