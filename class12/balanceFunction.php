<?php

function balance($taka, $dollar, $euro)
{
    // result = local variable
    $result = $taka + ( $dollar * 86.53 ) + ($euro * 94.13);
    return $result;
}