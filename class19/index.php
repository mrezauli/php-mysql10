<?php

include_once "vendor/autoload.php";

$james = new \Application\Human; // $this of Human = james
$abc = $james->doNothing();

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

// index.php
// ... code that sets up Twig, and says to look for templates in templates/

echo $twig->render('homepage.twig', array(
    'james' => $abc,
    'pageTitle' => 'Welcome to Penguins R Us!',
    'products' => array(
        'Tuxedo',
        'Bow tie',
        'Black Boxers',
    ),
));