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
        $pic = 'cap.jpg';
        $alt ='Cappuccino';
        break;

    case 'Friday' : 
        $coffee = '<h2>Thursday is our Americao Day!</h2>';
        $pic = 'amer.jpg';
        $alt ='Americano';
        break;

    case 'Saturday' :
        $coffee = '<h2>Thursday is our Regular Joe Day!</h2>';
        $pic = 'reg.jpg';
        $alt ='Regualr';
        break;
    case 'Sunday' :
        $coffee ='<h2>Sunday is our Green Tea Day!</h2>';
        $pic = 'tea.jpg';
        $alt ='Green';
        break;


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Classwork Ecercise</title>
</head>
<body>
    <h1>My Wonderful Switch Classwork Exercise</h1>
    <?php
    echo $coffee;
    ?>
    <img src='images/<?php echo $pic; ?>' alt='<?php echo $alt; ?>'>
    <h2></h2>
</body>
</html>