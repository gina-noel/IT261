<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title>Gina Noel's Portal Page</title>
</head>
<body>
    <header>
        <div class="header-inner">
            <a href="index.html">
                <img id="logo" src="images/logo.png" alt="image">
                <!--    <img id="logo" src="images/logo.jpg" alt="image">-->
            </a>
        </div>
    <nav id="primary">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="website/daily.php">Switch-3</a></li>
            <li><a href="adder.php">Troubleshoot-4</a></li>
            <li><a href="calculator.php">Calculator-5</a></li>
            <li><a href="email.php">Email-6</a></li>
            <li><a href="gallery.php">Gallery-7</a></li>
            <li><a href="database.php">Database-8</a></li>
        </ul>
    </nav>
</header>
    <!-- START WRAPPER -->
    <div class="wrapper">
        <!-- START LEFT COL-->

        <main>
            <h1>Welcome to my portal page</h1>
            <h2>A little about me!</h2>
            <p>My name is Gina Noel. I am currently a full-time student improving my HTML, CSS, PHP and JavaScript skills! I have been in the software industry for roughly 22 years. I started out in support and moved into software testing when I logged more bugs than their current testers. From there I moved into an SDET roll writing mostly Java code for an android API. I also have experience in JavaScript using some basic HTML + CSS pages for automation. My extensive knowledge expands in all stages of software development from frontend to backend after many years in the field.</p>
            <p>I have a wide range of things I love to do. Some of my favorite activities would include yoga, travel, adventure, bike riding, hiking, knitting and writing code.</p>
            <p>I am also a certified yoga instructor. I would say my favorite yoga to teach is power yoga or vinyasa flow yoga. I have been teaching yoga for roughly 3 years and prefer outdoor yoga in beautiful locations with close friends. I someday hope to come up with that perfect yoga business name!</p>
            <p>One of my top passions is travel. My partner in crime, kitty cat and I currently live out of our RV named Marigold. We have lived in Marigold for 3 years now and we couldn't see ourselves doing anything else. I feel that this adventurous side showcases my ability to be flexible and adaptable to any situation. Can one say, can do attitude?</p>
            <p>My top passion has always been software development and working with others!</p>
            <div>
                <img src="images/mamp.png" alt="MAMP" />
                <img src="images/error.png" alt="Error" />
            </div>
        </main>
        <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
        <img src="images/gina.jpeg" alt="Gina's image" />
        <p>Living my dreams through hard work and a tenacious attitude</p>
        <h3>Weekly Exercises</h3>
        <h4>Week 2</h4>
        <ul>
                <li><a href="weeks/week2/var.php">Var</a></li>
                <li><a href="weeks/week2/var2.php">Var2</a></li>
                <li><a href="weeks/week2/currency-logic.php">Currency-logic</a></li>
                <li><a href="weeks/week2/currency.php">Currency</a></li>
                <li><a href="weeks/week2/heredoc.php">Heredoc</a></li>
            </ul>
        <h4>Week 3</h4>
        <ul>
            <li><a href="weeks/week3/date.php">Date</a></li>
            <li><a href="weeks/week3/foreach.php">Foreach</a></li>
            <li><a href="weeks/week3/forloop.php">Forloop</a></li>
            <li><a href="weeks/week3/if.php">If</a></li>
            <li><a href="weeks/week3/switch.php">Switch</a></li>
        </ul>
        <h4>Week 4</h4>
        <ul>
            <li><a href="weeks/week4/form1.php">Form 1</a></li>
            <li><a href="weeks/week4/form2.php">Form 2</a></li>
            <li><a href="weeks/week4/form3.php">Form 3</a></li>
            <li><a href="weeks/week4/form-arithmetic.php">Form Arithmetic</a></li>
            <li><a href="weeks/week4/celsius.php">Celsius</a></li>
        </ul>
        <h4>Week 5</h4>
        <ul>
            <li><a href="weeks/week5/currency1.php">Form 1</a></li>
            <li><a href="weeks/week5/currency2.php">Form 2</a></li>
            <li><a href="weeks/week5/currency3.php">Form 3</a></li>
            <li><a href="weeks/week5/null.php">Form 3</a></li>
<!--            <li><a href="weeks/week5/currency4.php">Extra Credit</a></li>-->
        </ul>
        <h4>Week 6</h4>
        <ul>
            <li><a href="weeks/week6/form1.php">Form 1</a></li>
            <li><a href="weeks/week6/functions.php">Form 2</a></li>
            <li><a href="weeks/week6/implode.php">Form 3</a></li>
        </ul>
    </aside>
    <!-- END RIGHT COL -->

    <!-- START Footer -->
    <footer>
        <p><small>&copy; 2020-<?=date("Y")?> by
                <a>Gina Noel</a>, All Rights Reserved ~
                <a id="html-checker" href="https://validator.w3.org/check/referer">Check HTML</a> ~
                <a href="https://jigsaw.w3.org/css-validator/check?uri=referer">Check CSS</a></small>
        </p>
    </footer>

    <!-- END Footer -->
</div>
<!-- END WRAPPER -->
</body>
</html>