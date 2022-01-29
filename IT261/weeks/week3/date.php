<?php


echo date('l');
echo '<br>';




echo date('l, F j, Y');
echo '<br>';
echo date('l, F j, Y, h:i A');

date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date('l, F j, Y, h:i A');
echo '<br>';




$our_date = date('H:i');
$friendly_time = date('h:i A');
$name = 'Nick';
echo $our_date;

if($our_date <= 11) {
    echo '<h1>Good Morning, '.$name.'!</h1>
    <p>It is '.$friendly_time.'</p>';
} elseif($our_date <= 17 ) {
    echo '<h1>Good Afternoon, '.$name.'!</h1>
    <p>It is '.$friendly_time.'</p>';
} else {
    echo '<h1>Good Evening, '.$name.'!</h1>
    <p>It is '.$friendly_time.'</p>';
}
?>