<?php
//intro to our variables
// as well as syntax
// What is a Varible ?? a variable is a contatiner


$name = 'Nick';
// the info between the single quotes is a string
echo $name;
echo '<br>';
$name = 'Novick';
echo $name;
echo '<br>';
echo 'My first name is $name';
echo '<br>';
echo 'My first name is $name';
echo '<br>';
// I liek single quotes later on we will be lacing php inside our html values  <a href=''
echo 'My first name is '.$name. '  ';
echo '<br>';
$temp = 45;
// another data type is intergers
echo 'The temperature todat was '.$temp.' degrees';
echo '<br>';

$body_temp = 98.6;
// anythinkg with a decimal is called a float
echo $body_temp;

// another data tyoe is boolean = true or false
// another data type is null
// <select><option value='' Null

$vehicle ='truck';
echo '<br>';
$x = 20;
$y = 30;
$z = $x * $y;
echo $z;

// circum

$pie = 3.14;
$radius =10;
$circumference = (2 * $pie) * $radius;
echo $circumference;

echo '<br>';

$celcius =4;
$far = ($celcius *9/5) + 32;
$friendly_far = floor($far);
// 
// 
//


$celcius = 4;
$far = ($celcius *9/5) + 32;

//
//
echo ceil($far);
echo '<br>';
$money = 10330;
$divide = 71;
$amount = $money / $divide;
echo 'I now have <br>$' .number_format($amount, 2); '</b>';
//
echo '<br>';
$friendly_amount = number_format($amount, 2);
echo '<p>I now have <b>$' .$friendly_amount.' </b> dollars!</p>';

?>

<h1> Now we will be playing the concatenation operator</h1> 

<?php

$first_name = 'Nick';
$last_name = 'Novick';
echo '<br>';
echo $first_name;
echo '<br>';
echo $last_name;
echo '<br>';

$name = 'Nick';
$name .= 'Novick';
echo $name;
echo '<br>';

$x = 30;
$y = 3;
$z = $x / $y;
echo $z;
echo '<br>';

$x = 30;
$x /= 3;
echo $x;
