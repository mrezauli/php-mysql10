<?php

// nested ifs
// $personCountry = 'usa';
// $personContinent = 'europe';
// $personPlanet = 'mars';

// if ($personPlanet == 'mars') {
//     if ($personContinent == 'europe') {
//         if ($personCountry == 'usa') {
//             echo "a martian, a europian, a usaian";
//         } else {
//             echo "not martian, europian, usaian";
//         }
//     } else {
//         echo "not martian, europian";
//     }
// } else {
//     echo "not martian";
// }

//neasted fors
// counter = 1...10
// line = 1...10 

// for ($liner = 1; $liner <= 10; $liner++) { 
//     echo "line: " . $liner;
//     for ($counter = $liner; $counter <= 10; $counter++) { 
//         echo "*";
//     }
//     echo "<br />";
// }

// for ($counter = 1; $counter <= 10; $counter++) { 
//     echo "*";
// }

// making an array

//$trainees = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140];
//$trainees = [10, 20, 30, 40, 50, 60];
// echo "<pre>";
// var_dump($trainees);
// echo "</pre>";

// for ($key_as_a_counter = 0; $key_as_a_counter < 14; $key_as_a_counter++) {
//     echo $trainees[$key_as_a_counter];
//     echo "<br />";
// }

// while ($a <= 10) {
//     # code...
// }

// do {
//     # code...
// } while ($a <= 10);

// foreach ($trainees as $index => $indexValue) {
//     echo $trainees[$key_as_a_counter];
//     echo $key . ':' . $value;
//     echo $index . ':' . $indexValue;
//     echo "<br />";
// }

// $trainees = [
//     10 => "rahim",
//     20 => "karim",
//     30 => "john",
//     40 => "doe",
//     50 => "jane",
//     60 => "james"
// ];
// echo "<pre>";
// var_dump($trainees);
// echo "</pre>";

// foreach ($trainees as $roll => $name) {
//     echo $roll . ':' . $name;
//     echo "<br />";
// }

// $trainees = [
//     30 => [
//         "name" => "john",
//         "mobile" => 1751293789
//     ],
//     40 => [
//         "name" => "doe",
//         "mobile" => 1751293789
//     ],
//     50 => [
//         "name" => "jane",
//         "mobile" => 1751293789
//     ]
// ];
// echo "<pre>";
// var_dump($trainees);
// echo "</pre>";

// foreach ($trainees as $roll => $value) {
//     echo $roll . ":" . $value;
//     echo "<br />";
// }

// foreach ($trainees as $roll => $profile) {
//     echo $roll . ":";
//      foreach ($profile as $key => $value) {
//          echo $key . ":" . $value . ",";
//      }
//     foreach ($profile as $value) {
//         echo $value;
//         echo $profile['name'], $profile['mobile'];
//     }
//     echo "<br />";
// }

//require "C:\\laragon\\www\\php-mysql10\\class11\\inc\\req\\include.php";
//require "require.php";
// require "inc\\req\\require.php";

// var_dump($traineeOne);
// echo "<br />";
// echo "include|require";
// echo "<br />";
// var_dump($traineeTwo);

//if else alternative syntax
$trainees = [10, 20, 30, 40, 50, 60];

// for ($key_as_a_counter = 0; $key_as_a_counter < 6; $key_as_a_counter++) {
//     echo $trainees[$key_as_a_counter];
//     echo "<br />";
// }

// for ($key_as_a_counter = 0; $key_as_a_counter < 6; $key_as_a_counter++) :
//     echo $trainees[$key_as_a_counter];
//     echo "<br />";
// endfor;

// if (isset($trainees)) {
//     echo "defined";
// }

// if (isset($trainees)) :
//     echo "defined";
// endif;