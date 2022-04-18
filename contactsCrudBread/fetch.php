<?php

try {
    //connection to mysql database server
    $connection = new PDO("mysql:host=localhost;dbname=contacts", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "<h1>Connection Succesful!</h1>";

    //select sql to database
    $sql = 'SELECT * FROM	phones;';
    $statement = $connection->prepare($sql);
    $statement->execute();
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