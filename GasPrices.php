<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.18.18 

        GasPrices.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Prices</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Gas Prices</h2>
    <?php
        $gasPrice = 99;
        // the if checks if $gasPrices is between 2 and 3
        if ($gasPrice >= 2 && $gasPrice <= 3) {
                echo "<p>Gas prices are between $2.00 and $3.00</p>";
        }
        // if it isn't between 2 and 3 it displays something else
        else {
            echo "<p>Gas prices are not between $2.00 and $3.00</p>";
        }
    ?>
</body>
</html>