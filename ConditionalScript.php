<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.14.18 

        ConditionalScript.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Script</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Conditional Script</h2>
    <?php
       $intVariable = 99;
       $result = "";
        if ($intVariable > 100) {
            $result = '$intVariable is greater than 100';
        }
        else {
            $result = '$intVariable is less than or equal to 100';
        }
       echo '<h3>$result: '. "$result</h3>";
    ?>
</body>
</html>