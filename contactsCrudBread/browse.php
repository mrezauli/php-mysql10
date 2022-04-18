<?php

//echo $value['id'];
//var_dump(parse_url($url, PHP_URL_FRAGMENT));
//echo '<pre>' , var_dump($_SERVER) , '</pre>';
//echo '<pre>' , $url , '</pre>';
//echo '<pre>' , var_dump(parse_url($url, PHP_URL_PATH)) , '</pre>';
//echo '<pre>' , var_dump($_SERVER['HTTP_HOST']) , '</pre>';
//echo '<pre>' , var_dump($urlFragments) , '</pre>';
//echo '<pre>' , var_dump($id) , '</pre>';

$url = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$urlFragments = explode('/', $url);
$id = end($urlFragments);
//die();

try {
    //connection to mysql database server
    $connection = new PDO("mysql:host=localhost;dbname=contacts", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "<h1>Connection Succesful!</h1>";

    //select sql to database
    $sql = 'SELECT * FROM	phones WHERE id=:id;';
    $statement = $connection->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $phone = $statement->fetch(PDO::FETCH_ASSOC);
    //echo "<h1>Selected!!!</h1>";
    //echo '<a href="index.php">Home</a>';
    //echo'<pre>';
    //var_dump($phone);
    //echo'</pre>';
    $connection = null;
} catch (\Throwable $th) {
    echo "<pre>";
    throw $th;
    echo "</pre>";
}