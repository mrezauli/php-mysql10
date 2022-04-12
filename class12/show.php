<?php

require "balanceFunction.php";

$jamesTaka = 100;
$jamesDollar = 5.75;
$jamesEuro = 8;

$result = balance($jamesTaka, $jamesDollar, $jamesEuro);

//echo $result . "<br />";

var_dump($result);
//echo gettype($result);
// var_dump(is_int($result));
// var_dump(is_float($result));
// var_dump(is_string($result));
// var_dump(is_bool($result));
// var_dump(is_null($result));

//task is if $result is float then round else do nothing
if (is_float($result)) {
    echo round($result);
} else {
    echo "nothing";
}
