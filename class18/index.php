<?php

include_once "Human.php";
use Application\Human;

//$james = new Human(); // $this of Human = james
// $james->eat();
// $james->walk();
//$james->setName("james");
// $james->getName();
//$james->setBirthDate("01/01/2000");
// $james->getBirthDate();
//$james->setDeathDate("01-01-2080");
// $james->getDeathDate();

$james = new Human("Rahim", "05-05-2005", "06/02/2080"); // $this of Human = james
$james->getName();
$james->getBirthDate();
$james->getDeathDate();