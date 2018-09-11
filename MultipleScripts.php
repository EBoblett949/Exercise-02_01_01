<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.10.18

        MultipleScripts.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Environment Info</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>

    <h1>PHP Environment Info</h1>
    <p>
        The PHP code was rendered with PHP version
        <?php
        // shows the php version
            echo phpversion();
        ?>
    </p>
    <p>
        The PHP code was rendered with Zend Engine version
        <?php
        // shows the zend version 
            echo zend_version();
        ?>
    </p>
    <p>
        PHP's default MIME type is
        <?php
        // shows mimetype
            echo ini_get("default_mimetype");
        ?>
    </p>
    <p>
        The maximum allowable execution type of a PHP script is 
        <?php
        // shows max execution time
            echo ini_get("max_execution_time");
        ?>
    </p>
</body>
</html>