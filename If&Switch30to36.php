<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // assignment 1
    $a = 100;
    $b = 200;
    $c = 100;

    if (($b > $a) && ($a == $c) && ($a + $c == $b)) {
        echo "Yes";
    }
    echo '<br>';
    echo '<br>';


    // assignment 2

    // Test Case 1
    $a = 100;
    $b = 200;
    $c = 300;
    // A Is Not Larger Than B Or C
    echo ($a > $b || $a > $c) ? " A Is Larger Than B Or C" : " A Is Not Larger Than B Or C";
    echo '<br>';

    // Test Case 2
    $a = 200;
    $b = 100;
    $c = 300;
    // A Is Larger Than B
    echo ($a > $b) ? " A Is Larger Than B " : " A Is Not Larger Than B ";
    echo '<br>';

    // Test Case 3
    $a = 200;
    $b = 200;
    $c = 100;
    // A Is Larger Than c
    echo ($a > $c) ? " A Is Larger Than C" : " A Is Not Larger Than C";
    echo '<br>';
    echo '<br>';


    // assignment 3
    ?>

    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
    <?php
    $admins = ["Osama", "Ahmed", "Sayed"];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && in_array($_POST['user'], $admins)) {
        echo "The Request Method Is Post And Username Is " . $_POST['user'];
        echo '<br>';
        echo "This Username  " . $_POST['user'] . " Is Admin";
    }
    echo '<br>';
    echo '<br>';



    // assignment 4

    $a = 30;
    $b = 20;
    $c = 10;
    $result = ($a + $b === $c) ? "A + B = C" : ((($a + $c === $b) ? "A + C = B"
        : ($b + $c === $a)) ? "B + C = A" : "The End");
    echo $result;

    // Output
    //"B + C = A"
    echo '<br>';
    echo '<br>';


    // assignment 5
    $name = "Osama";
    $age = 40;
    $country = "Egypt";
    echo ($age > 18 && gettype($name) === "string" && $country === "Egypt") ?
        "The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go<br>" : "";
    echo '<br>';
    echo '<br>';


    // assignment 6
    $genre = "Hack And Slash";

    switch ($genre) {
        case "RPG":
            echo "I Recommend Ys Games";
            break;

        case "Hack And Slash":
            echo "I Recommend Castlevania Games";
            break;

        case "FPS":
            echo "I Recommend Uncharted Games";
            break;

        case "Platform":
            echo "I Recommend Megaman Games";
            break;

        case "Puzzle":
            echo "I Recommend Megaman Games";
            break;

        default:
            echo "I Recommend Shadow Of Mordor And Shadow Of War";
    }
    // Needed Output
    // "I Recommend Castlevania Games"

    echo '<br>';
    echo '<br>';

    // assignment 7
    $num_one = 23;
    $num_two = 5;
    $op = "*";
    switch ($op) {
        case "+":
            echo  $num_one + $num_two;
            break;

        case "-":
            echo  $num_one - $num_two;
            break;

        case "*":
            echo  $num_one * $num_two;
            break;

        case "/":
            echo  (int)($num_one / $num_two) . "<br>";
            echo  $num_one % $num_two;

            break;

        default:
            echo "Unknown Operation";
    }
    echo '<br>';
    echo '<br>';


    // assignment 8
    $day = "Sat";

    if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
        echo "We Are Open All The Day";
    } elseif ($day == "Tue" || $day == "Wed") {
        echo "We Are Open From 08:12";
    } elseif ($day == "Thu" || $day == "Fri") {
        echo "We Are Closed";
    } else {
        echo "Unknown Day";
    }




    ?>

</body>

</html>