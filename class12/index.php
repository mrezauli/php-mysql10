<?php

//echo "Hello Functions!";

$taka = 100;
//$dollar = 100;

//eko = echo some writings
function eko()
{
    echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta id provident culpa saepe quo eaque exercitationem dolor sunt adipisci qui ducimus distinctio temporibus non, earum tempora vitae odio unde maxime?";
}

//eko();

//global variable
$jonyTaka = 100;
$jonyDollar = 5.55;
$jonyEuro = 8;

//balance function = calculate john's balance
// function balance($tak, $dol, $eur)
// {
//     $result = $tak + ( $dol * 86.53 ) + ($eur * 94.13);
//     echo $result . " ৳";
// }
// function balance($johnTaka, $johnDollar, $johnEuro)
// {
//     $result = $johnTaka + ( $johnDollar * 86.53 ) + ($johnEuro * 94.13);
//     echo $result . " ৳";
// }

//echo "Outside Function Pre" . $jonyTaka, $jonyDollar, $jonyEuro . "<br />";

function balance($taka, $dollar, $euro)
{
    global $jonyTaka;
    global $jonyDollar;
    global $jonyEuro;

    //echo "Inside" . $jonyTaka, $jonyDollar, $jonyEuro . "<br />";

    // local variable
    $result = $taka + ( $dollar * 86.53 ) + ($euro * 94.13);
    //echo "local" . $result . " ৳" . "<br />";
    return $result;
}

//echo balance($jonyTaka, $jonyDollar, $jonyEuro) . " ৳";

//echo "Outside Function Post" . $jonyTaka, $jonyDollar, $jonyEuro . "<br />";

//var_dump(balance($jonyTaka, $jonyDollar, $jonyEuro));

$result = balance($jonyTaka, $jonyDollar, $jonyEuro);

echo "global" . $result . "<br />";

