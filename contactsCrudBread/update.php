<?php

$url = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$urlFragments = explode('/', $url);
$participant = end($urlFragments);

$id = rand();
$name = $_POST['name'];
$mobile = $_POST['mobile'];

try {
    //connection to mysql database server
    $connection = new PDO("mysql:host=localhost;dbname=contacts", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Connection Succesful!</h1>";

    //update sql to database
    $sql = 'UPDATE	phones SET	id= :id, name= :name, mobile=:mobile WHERE id=:participant;';
    $statement = $connection->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':mobile', $mobile);
    $statement->bindParam(':participant', $participant);
    $statement->execute();
    echo "<h1>Updated!!!</h1>";
    echo '<a href="/index.php">Home</a>';
    $connection = null;
} catch (\Throwable $th) {
    echo "<pre>";
    throw $th;
    echo "</pre>";
}
