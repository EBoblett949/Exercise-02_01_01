<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.10.18

        PHPCodeBlock.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code Blocks</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h3>this is HTML</h3>
    <?php
    // different ways of typing on a webpage
        echo "this text is being displayed using standard text delimiters. <br>";
        print "Second string";
        print ("<br> Third string");
        echo "<h1>This is a " , "multiple argument string.</h1>";
        echo ("<h1>This is a " . "multiple argument string.</h1>");
        print("<h2>This is some math: " . (2 + 3) . "</h2>");
    ?>
</body>
</html>