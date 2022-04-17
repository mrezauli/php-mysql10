<?php

//string handling functions

// $a = "a";
// $b = 'b';
// $abc = "abc";
// $ABC = 'abc';
// $def = 7.89;

// echo ($def);
// print $def;
// print ($def);
// echo $a, $b, $abc, $ABC, $def;

// $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis officia accusantium consequatur libero repellendus esse animi laborum distinctio, velit officiis voluptate exercitationem perspiciatis. Eaque, quod amet aliquam suscipit iste sint.";

// $splittedText = explode(" ", $text);
//$splittedText = explode(".", $text);
//$splittedText = explode("!", $text);
//$splittedText = explode("Per", $text);
//$splittedText = explode("l!o", $text);
//$splittedText = explode("3", $text);
//$splittedText = explode(".!", $text);

// print_r($text);
// echo "<pre>";
// print_r($splittedText);
// echo "</pre>";

// $joinedText = implode(" ", $splittedText);
// echo "<pre>";
// print_r($joinedText);
// echo "</pre>";

// $password = 'abcABC0123456789.!@$%';
// $encryptedPassword = crypt($password);

// var_dump($password);
// var_dump(crypt($password));

// echo strlen($password);
// echo "<br />";
// echo strlen($encryptedPassword);

// echo strcmp($password, $encryptedPassword);
// echo "<br />";
// echo strcmp($encryptedPassword, $password);
// echo "<br />";
// echo strcmp($password, $password);

$text = '<p style="color:red">Test paragraph.</p><!-- Comment --> <a href="https://www.facebook.com">Other text</a>';

var_dump(strip_tags($text));
//var_dump(strip_tags($text, "<p><a>"));