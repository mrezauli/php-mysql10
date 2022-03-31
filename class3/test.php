<!-- <?php  ?>

<?  ?>

<% %> -->

<?php

//variable part
$basket;

$basket = 'apple';

$basket = 'orange';

$basket = 'orange, apple';

echo $basket;

echo "<br />";

//constant part

define('APPLE_BASKET', 'apple');
//define('APPLE_BASKET', 'orange');

define('ORNAGE_BASKET', 'orange');

echo APPLE_BASKET;

echo "<br />";

echo ORNAGE_BASKET;
?>