<?php

$url = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$urlFragments = explode('/', $url);
$id = end($urlFragments);

try {
    //connection to mysql database server
    $connection = new PDO("mysql:host=localhost;dbname=contacts", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Connection Succesful!</h1>";

    //delete sql to database
    $sql = 'DELETE FROM phones WHERE id=:id;';
    $statement = $connection->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    echo "<h1>Deleted!!!</h1>";
    echo '<a href="/index.php">Home</a>';
    $connection = null;
} catch (\Throwable $th) {
    echo "<pre>";
    throw $th;
    echo "</pre>";
}
