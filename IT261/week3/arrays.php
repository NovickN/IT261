<?php

// arrays reminds me of a category , a category of fruits, names
//navigation
$fruits = array(
    'bannans',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapple'
);

$fruits = [
    'bannans',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapple'
];
// index array
$fruit[0] = 'bannas';
$fruit[1] = 'strawberries';
$fruit[2] = 'blueberries';
$fruit[3] = 'oranges';
$fruit[4] = 'apples';
$fruit[5] = 'pineapple';

//we cannot echo an arrray

//echo fruits

echo $fruits[2];
echo '<br>';

print_r($fruits);
echo '<br>';
var_dump($fruits);
echo '<br>';
echo '<pre>';
var_dump($fruits);
echo '<pre>';


$title = 'The Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$book = array(
     'title' =>'The Handmaid\'s Tale',
     'author' => 'Margaret Atwood',
     'charcter' =>'June',
     'actor' =>'Elizabeth Moss'
);


$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['project.php'] = 'Project';
$nav ['contact.php'] = 'Contact';
$nav ['gallery.php'] = 'Gallery';

// you can echo
echo '<br>';

  foreach($nav as $key => $value) {
echo 'Link'.$key.'  Visual  '.$value. '<br>';

  }

  echo '<br>';

  foreach($nav as $key => $value) {
echo '<a href="'.$key.'"   '.$value. '</a><br>';

  }

?>
<nav>
<ul>
    <?php
    foreach($nav as $key => $value) {
        echo '<li style="list-style-type:none;"><a style="text-decoration:none;color:red;" href="'.$key'"> '.$value.'</a></li>';
    }
?>
</ul>
  </nav>












