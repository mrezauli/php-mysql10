<?php

//call by reference
//function balance(&$taka, &$dollar, &$euro)

//call by value
function balance($taka, $dollar, $euro)
{
    //global $danTaka;
    // 10 taka bonus for calculation
    $taka = $taka + 10;
    //echo "Inside Function Call" . $taka . '<br />';
    //echo "Inside Function Call Global DanTaka" . $danTaka . '<br />';

    // result = local variable [with variable return]
    //$result = $taka + ( $dollar * 86.53 ) + ( $euro * 94.13 );
    //return $result;

    // without variable return
    return $taka + ( $dollar * 86.53 ) + ( $euro * 94.13 );
}