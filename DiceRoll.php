<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.11.18 

        DiceRoll.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Dice Roll</h2>
    <?php
        $faceNameSingular = array("one", "two", "three", "four", "five", "six");
        $faceNamePlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

        function checkForDoubles($die1, $die2) {
            global $faceNameSingular;
            global $faceNamePlural;
            echo "Die 1: $die1<br>Die 2: $die2<br>";

            if ($die1 === $die2) {
                echo "The roll was double ", $faceNamePlural[$die1 - 1], ".<br>";
            }

            if ($die1 !== $die2) {
                echo "The roll was a ", $faceNameSingular[$die1 - 1], " and a ", $faceNameSingular[$die2 - 1], ".<br>";
            }
        }
        $dice = array();
        $dice[0] = rand(1, 6); 
        $dice[1] = rand(1, 6); 
        echo "<p>";
        $score = $dice[0] + $dice[1];
        echo "The total score for the role was $score.<br>";
        checkForDoubles($dice[0], $dice[1]);
        echo "</p>";
    ?>
</body>
</html>