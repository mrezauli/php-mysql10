<html>

<head>
    <title>PHP & HTML Test</title>
</head>

<body>

    <h3>strpos() must have returned non-false</h3>
    <p>You are using Internet Explorer</p>

    <?php

    $color = "red";
    //$color = "green";
    //$color = "blue";

    echo "<h1>this is test $color</h1>";

    echo '<h1>this is test $color</h1>';

    //echo "'<h1>this is test' $color '</h1>'";

    echo 'solution: <h1 style="color:' . $color . '">this is test '. $color .'</h1>';
    
    ?>

    <h3>strpos() must have returned false</h3>
    <p>You are not using Internet Explorer</p>

</body>

</html>