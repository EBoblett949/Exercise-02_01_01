<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.13.18 

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
            $returnValue = false;
            echo "Die 1: $die1<br>Die 2: $die2<br>";

            if ($die1 === $die2) {
                echo "The roll was double ", $faceNamePlural[$die1 - 1], ".<br>";
                $returnValue = true;
            }

            else {
                echo "The roll was a ", $faceNameSingular[$die1 - 1], " and a ", $faceNameSingular[$die2 - 1], ".<br>";
                $returnValue = false;
            }
            return $returnValue;
        }

        function displayScoreText($score, $doubles) {
            if ($doubles) {
                switch ($score) {
                    case 2: {
                        echo "You rolled snake eyes!<br>";
                        break;
                    }
                    case 12: {
                        echo "You rolled fox cars!<br>";
                        break;
                    }
                }
            }
            else {
                if ($score === 3) {
                    echo "You rolled loose deuce!<br>";
                }
                else if ($score === 5) {
                    echo "You rolled fever five!<br>";
                }
                else if ($score === 7) {
                    echo "You rolled a natural!<br>";
                }
                else if ($score === 9) {
                    echo "You rolled a nina!<br>";
                }
                else if ($score === 11) {
                    echo "You rolled a yo!<br>";
                }
                else {
                    echo "Your roll has no nickname!<br>";
                }
            }
        }

        $dice = array();
        $dice[0] = rand(1, 6); 
        $dice[1] = rand(1, 6); 
        echo "<p>";
        $score = $dice[0] + $dice[1];
        echo "The total score for the roll was $score.<br>";
        $doubles = checkForDoubles($dice[0], $dice[1]);
        displayScoreText($score, $doubles);
        echo "</p>";
    ?>
</body>
</html>