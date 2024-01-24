<?php
//assignment 1
echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0

//assignment 2
$a = "10";
echo $a;
echo gettype(+$a);

echo $a++;
echo gettype($a);
echo '<br>';

$a++;
--$a;
echo --$a;
echo gettype($a);

echo $a * 1;
echo gettype($a * 1);

$b = 10;
$a === $b;
echo $a;
echo gettype($a * 1);

$a = 10 or false;
echo $a;
echo gettype($a <=> 1);
echo '<br>';
echo '<br>';


//assignment 3
$a = 10;
$b = 20;
echo ($a <=> $b);
echo gettype($a <=> $b);

//assignment 4
$a = 10;
$b = 20;
$c = 15;
var_dump($a < $b); // True
echo '<br>';
var_dump($c > $a); // True
echo '<br>';
var_dump($a < $b); // True
echo '<br>';
var_dump($a <= $b); // True
echo '<br>';
var_dump($a <= $c); // True
echo '<br>';
var_dump($a != $c); // True
echo '<br>';
var_dump(gettype($a) == gettype($b)); // True
echo '<br>';
var_dump(gettype($a) == gettype($b)); // True
echo '<br>';
var_dump(gettype((float) $a) != gettype($b)); // True
echo '<br>';
echo '<br>';


//assignment 5
$points = 10;
$points++;
$points++;
$points++;
echo $points; // 13
echo '<br>';
$points--;
$points--;
$points--;
$points--;
$points--;
echo $points; // 8;
echo '<br>';
echo '<br>';


//assignment 6
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = $a . " " . $b . " "  . $c;
echo $d;
echo '<br>';

// Method Two
$d = [$a, $b, $c];
echo ($d[0] . " " . $d[1] . " " . $d[2]);
echo '<br>';

// Method Three
$d = "$a $b $c";
echo $d;

// Method Four
function testing()
{
    return "Elzero Web School";
}
$d = testing();
echo $d;

// Method five
$d = $a;
$d .= " ";
$d .= $b;
$d .= " ";
$d .= $c;
echo $d;
echo '<br>';
echo '<br>';


//assignment 7
$a = 10;
$b = 20;
echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10000
echo '<br>';
echo '<br>';


//assignment 8
// Code 1
$X = @$Y or die('Custom Error');
// Code 2
$f = @file("Not_A_File") or die('Custom Error');
// Code 3
(@include("Not_A_File")) or die("Custom Error");

