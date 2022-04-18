<?php

$id = rand();
$name = $_POST['name'];
$mobile = $_POST['mobile'];

try {
    //connection to mysql database server
    $connection = new PDO("mysql:host=localhost;dbname=contacts", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Connection Succesful!</h1>";

    //insert sql to database
    $sql = 'INSERT	INTO	phones (id, name, mobile )	VALUES ( :id, :name, :mobile)';
    $statement = $connection->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':mobile', $mobile);
    $statement->execute();
    echo "<h1>Inserted!!!</h1>";
    echo '<a href="index.php">Home</a>';
    $connection = null;
} catch (\Throwable $th) {
    echo "<pre>";
    throw $th;
    echo "</pre>";
}
