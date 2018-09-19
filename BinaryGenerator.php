<!doctype html>
<html>
<head>
    <!-- 
        random stuff
        Author: Eli Boblett
        Date: 9.12.18 
         BinaryGenerator.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary Generator</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Binary</h2>
    <?php
    $x = 0;
    while ($x <= 100) {
        for ($i=0; $i < 8; $i++) { 
            $variable = rand(0, 1);
            echo $variable;
        }
        echo "<br>";
        $x++;
    }
     ?>
</body>
</html> 