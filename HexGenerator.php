<!doctype html>
<html>
<head>
    <!-- 
        random stuff
        Author: Eli Boblett
        Date: 9.12.18 
         HexGenerator.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hex Generator</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Hexadecimal</h2>
    <?php
    $x = 0;
    $rand1 = array(2, 3, 4, 5, 6, 7);
    $rand2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9 ,0, "a", "b", "c", "d", "e", "f");
    while ($x <= 100) {
            $randNum1 = $rand1[array_rand($rand1, 1)];
            echo $randNum1;
            $randNum2 = $rand2[array_rand($rand2, 1)];
            echo $randNum2;
        echo "<br>";
        $x++;
    }
     ?>
</body>
</html> 