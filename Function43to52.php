<?php
//assignment 1
function greeting($name, $type = "")
{
    if ($type == "Female") {
        $type = "Miss";
    } elseif ($type == "Male") {
        $type = "Mr";
    }
    return  "Hello $type $name <br>";
}

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
echo '<br>';
echo '<br>';


//assignment 2
function get_arguments(...$all)
{
    $data = "";
    foreach ($all as $a) {
        $data .= "$a ";
    }
    return $data;
}
echo get_arguments("Hello", "Elzero", "Web", "School") . "<br>"; // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP") . "<br>";  // I Love PHP

//assignment 2
function get_arguments_two()
{
    foreach (func_get_args() as $a) {
        echo  "$a ";
    }
    echo '<br>';
}
echo get_arguments_two("Hello ", "Elzero ", "Web ", "School ") . "<br>";  // Hello Elzero Web School
echo '<br>';




//assignment 3
function sum_all(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number == 5) {
            continue;
        }
        if ($number == 10) {
            $number = 20;
        }

        $sum  += $number;
    }
    return $sum;
}
echo sum_all(10, 12, 5, 6, 6, 10) . '<br>'; // 64
echo sum_all(5, 10, 5, 10); // 40
echo '<br>';
echo '<br>';

//assignment 4

function multiply(...$numbers)
{
    $multiply = 1;
    foreach ($numbers as $number) {
        $type = gettype($number);

        if ($type == "integer"  || $type == "double" || $type  == "float") {
            $number = (int)$number;
        } else {
            continue;
        }

        $multiply *= $number;
    }
    return $multiply;
}
echo multiply(10, 20) . '<br>'; // 200
echo multiply("A", 10, 30) . '<br>'; // 300
echo multiply(100.5, 10, "B") . '<br>'; // 1000
echo '<br>';
echo '<br>';


//assignment 5
function check_status($a, $b, $c)
{
    foreach (func_get_args() as $arg) {
        $type = gettype($arg);
        if ($type == "string") {
            $name = $arg;
        } elseif ($type == "integer") {
            $age = $arg;
        } else {
            if ($arg == true) {
                $hire = "Available ";
            } else {
                $hire = "Not Available";
            }
        }
    }
    return "Hello $name, Your Age Is $age, You Are $hire For Hire <br>";
}
// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo '<br>';
echo '<br>';


//assignment 6
function add($num1, $num2)
{
    return $num1 + $num2;
}
function subtract($num1, $num2)
{
    return $num1 - $num2;
}
function multi($num1, $num2)
{
    return ($num1 * $num2);
}
function calculate($num1, $num2, $process = "")
{
    // echo $process ;
    if ($process == "add" || $process == "a" || $process == "") {
        echo add($num1, $num2) . "<br>";
    } elseif ($process === "subtract" || $process === "s") {
        echo subtract($num1, $num2) . "<br>";
    } elseif ($process === "multiply" || $process === "m") {
        echo multi($num1, $num2) . "<br>";
    } else {
        echo "this process not found <br>";
    }
}
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
echo '<br>';
echo '<br>';


//assignment 6
function calculate_two($num1, $num2, $process = "")
{
    // echo $process ;
    if ($process == "add" || $process == "a" || $process == "") {
        echo $num1 + $num2 . "<br>";
    } elseif ($process === "subtract" || $process === "s") {
        echo $num1 - $num2 . "<br>";
    } elseif ($process === "multiply" || $process === "m") {
        echo ($num1 * $num2) . "<br>";
    } else {
        echo "this process not found <br>";
    }
}
echo calculate_two(10, 20); // 30
echo calculate_two(10, 20, "a"); // 30
echo calculate_two(10, 20, "s"); // -10
echo calculate_two(10, 20, "subtract"); // -10
echo calculate_two(10, 20, "multiply"); // 200
echo calculate_two(10, 20, "m"); // 200
echo '<br>';
echo '<br>';


// assignment 7
function calculate_assignment_7(int $num_one, int $num_two): float
{
    return $num_one + $num_two;
}
echo calculate_assignment_7(20, 10) . "<br>"; // 30
echo gettype(calculate_assignment_7(20, 10)) . "<br>"; // Double
echo '<br>';
echo '<br>';

// assignment 8
$message = "Hello ";
$Hello = function ($name) use ($message) {
    return $message . $name;
};
echo $Hello("Osama"); // Hello Osama
echo '<br>';

// assignment 8
function Hello($name)
{
    $message = "Hello ";
    return $message . $name;
}
$Hello = "Hello";
echo $Hello("Osama"); // Hello Osama
echo '<br>';
echo '<br>';


// assignment 9
$greet = fn ($name) => "hi $name ";
echo $greet("Osama") . '<br>'; // Greetings
