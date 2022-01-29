<?php






$variable = "Life is good!";
if (isset($variable)) {
    echo 'Yippy-skippy!!!';
} else {
    echo 'Not';
}








if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}



switch($today) {
    case 'Thursday' :
        $coffee = '<h2>Thursday is our Cappuccino Day!</h2>';
        $pic = '/cap.jpg';
        $alt ='Cappuccino';
        $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Austria with later development taking place in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder';
        break;

    case 'Friday' : 
        $coffee = '<h2>Thursday is our Americao Day!</h2>';
        $pic = '/amer.jpg';
        $alt ='Americano';
        $content = 'Caffè <b>Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.';
        break;

    case 'Saturday' :
        $coffee = '<h2>Thursday is our Regular Joe Day!</h2>';
        $pic = '/reg.jpg';
        $alt ='Regualr';
        $content = '<b>Coffee</b> is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain flowering plants in the Coffea genus. From the coffee fruit, the seeds are separated to produce a stable, raw product: unroasted green coffee. <br>
        <i>A regualr coffee is a coffee with cream (or milk) and two sugars.</i>';
        break;

    case 'Sunday' :
        $coffee ='<h2>Sunday is our Green Tea Day!</h2>';
        $pic = '/tea.jpg';
        $alt ='Green';
        $content = '<b>Green tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East and Southeast Asia';
        break;


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Classwork Ecercise</title>
    <style>
        #wrapper {
            width:940px;
            margin:290px auto;
        }
        </style>
</head>
<body>
    <div id='wrapper'>
    <h1>My Wonderful Switch Classwork Exercise</h1>
    <?php
    echo $coffee;
    ?>
    <img src="/IT261/images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <p><?php echo $content; ?></p>

    <h2>Check out our Daily Specials</h2>

    <ul>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>

    </ul>
</div>

</body>
</html>