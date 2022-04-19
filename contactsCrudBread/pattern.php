<?php

//pattern = %name%
$name = $_POST['name'];
$pattern = "%" . $name . "%";
//echo "%name%";
//var_dump($pattern);
//die();

try {
    //connection to mysql database server
    $connection = new PDO("mysql:host=localhost;dbname=contacts", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "<h1>Connection Succesful!</h1>";

    //select with like sql to database
    $sql = 'SELECT * FROM	phones WHERE name LIKE :pattern ;';
    $statement = $connection->prepare($sql);
    $statement->bindParam(':pattern', $pattern);
    $statement->execute();
    //var_dump($statement);
    $phones = $statement->fetchAll(PDO::FETCH_ASSOC);
    //echo "<h1>Selected!!!</h1>";
    //echo '<a href="index.php">Home</a>';
    //echo'<pre>';
    //var_dump($phones);
    //echo'</pre>';
    $connection = null;
} catch (\Throwable $th) {
    echo "<pre>";
    throw $th;
    echo "</pre>";
}