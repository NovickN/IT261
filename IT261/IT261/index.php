<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nick's Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

    <header>
   
     <div id="inner-header">
     <a href="index.php">
         <div id="logoimg">
     <img src="images/logo.jpeg" alt="logo" width="75" height="75"/>
        </div> <!--end logoimg-->
     </a>
         </div> <!--end inner-header-->
   
        <nav>

            <ul>
            <li><a href="website/daily.php">Switch</a></li>
            <li><a href="adder.php">Troubleshoot</a></li>
            <li><a href="Calculator.php">Calculator</a></li>
            <li><a href="Email.php">Email</a></li>
            <li><a href="Database.php">Database</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            </ul>

        </nav>   

    </header>
        <div id='wrapper'>
            <div id='hero'>

</div>
                    <h1>Nicholas IT 261 Portal</h1>
                        <p>I am pursuing my degree in Web Development. I am about 1 more Semester away from my degree. I hope to one day be a Full Stack Web Developer down the road. When I am not working or taking classes in the evening I am at the gym or hanging out with my family.</p>
            <main>
                <img id="Nick" src="images/Me.jpeg" alt="Me">
                <h2>MAMP Portal</h2>
                <img id="mampPortal" class="screenshot" src="./images/mampWorking.png" alt="mamp working">
                <h3>PHP Errors Displaying</h3>
                <img id="phpError" class="screenshot" src="./images/phpErrorMessage.png" alt="error message">
            </main>

            <aside>
                <h4>Weekly Exercises</h4>
                <h5>Week 2</h5>
                    <ul>
                        <li><a href="weeks/week2/var.php">var.php</a></li>
                        <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                        <li><a href="weeks/week2/currency.php">currency.php</a></li>
                        <li><a href="week2/heredoc.php">heredoc.php</a></li>
                    </ul>
                <h5>Week 3</h5>
                    <ul>
                      <li><a href="weeks/week3/arrays.php">arrays.php</a></li>
                      <li><a href="weeks/week3/if-else.php">if-else.php</a></li>
                      <li><a href="weeks/week3/switch.php">switch.php</a></li>
                      <li><a href="weeks/week3/index.php">index.php</a></li>
                      <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
                      <li><a href="weeks/week3/date.php">date.php</a></li>
                    </ul>               
                <h5>Week 4</h5>
                <ul>
                   <li><a href="weeks/week4/form-get.php">form-Get.php</a></li>
                   <li><a href="weeks/week4/form1.php">form1.php</a></li>
                   <li><a href="weeks/week4/form2.php">form2.php</a></li>
                   <li><a href="weeks/week4/form3.php">form3.php</a></li>
                   <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
                   <li><a href="weeks/week4/arithmetic-form.php" title="arithmetic-form.php">arithmetic-form.php</a></li>
                </ul>
                <h5>Week 5</h5>
                <ul>
                   <li><a href="weeks/week5/currency1.php">curreny1.php</a></li>
                   <li><a href="weeks/week5/currency2.php">curreny2.php</a></li>
                   <li><a href="weeks/week5/null.php">null.php</a></li>
                   <li><a href="weeks/week5/calculater-extra-credit.php">Extra Credit.php</a></li>
                </ul>
                <h5>Week 6</h5>
                <ul>
                <li><a href="weeks/week6/form.php">form.php</a></li>
                <li><a href="weeks/week6/form2.php">form2.php</a></li>
                <li><a href="weeks/week6/functions.php">functions.php</a></li>
                <li><a href="weeks/week6/thx.php">thx.php</a></li>
                </ul>
                <h5>Week 7</h5>
                <li><a href="weeks/week7/form3.php">form3.php</a></li>
                <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
                <li><a href="weeks/week7/random.php">random.php</a></li>
                <li><a href="weeks/week7/strings.php">strings.php</a></li>
                <li><a href="weeks/week7/thx.php">thx.php</a></li>
                <h5>Week 8</h5>
                <ul>
                <li><a href="weeks/week8/people.php">people.php</a></li>
                <li><a href="weeks/week8/config.php">config.php</a></li>
                <li><a href="weeks/week8/people-view.php">people-view.php</a></li>
                </ul>
            </aside>
        </div><!--end wrapper -->

        <footer>
        <div id="inner-footer">
            <ul>
                <li>Copyright &copy;
                 <?php echo date('Y') ; ?>
                </li>
                <li>All Rights Reserved</li>
                <li><a href="../index.php">Web Design by Nicholas</a></li>
                <li><a href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2Fchristine-it-261-portal.herokuapp.com%2F">HTML</a></li>
                <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fchristine-it-261-portal.herokuapp.com%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS</a></li>
            </ul>
        </div> <!--end inner-footer-->
    </footer>
    

</body>
</html>