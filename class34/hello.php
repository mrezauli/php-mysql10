<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php echo '<p>...Hello World...</p>'; ?>

    <?php //phpinfo(); 
    ?>

    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>

    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
        echo 'You are using Internet Explorer.<br />';
    }
    ?>

    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
        echo '<br /> You are using Google Chrome!<br />';
    }
    ?>

    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    ?>
        <h3>strpos() must have returned non-false</h3>
        <p>You are using Internet Explorer</p>
    <?php
    } else {
    ?>
        <h3>strpos() must have returned false</h3>
        <p>You are not using Internet Explorer</p>
    <?php
    }
    ?>
</body>

</html>