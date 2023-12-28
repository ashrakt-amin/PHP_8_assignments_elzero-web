<?php
//exercise
$array = ["one", "two", "three", "four", "five"];
echo '<pre>';
print_r(array_chunk($array, 2));

$array2 = ["Num1" => "one", "Num2" => "two", "Num3" => "three", "Num4" => "four", "Num5" => "five"];
echo '<pre>';
print_r(array_chunk($array2, 2, true));
print_r(array_change_key_case($array2));


$keys = ["a", "b", "f"];
$value = ["ashrakt", "bent_amin", "farag"];
print_r(array_combine($keys, $value));


//count the repeat elements
$counting = ["one", "one", "one", "two", "three", "two", "four", "five"];
print_r(array_count_values($counting));


print_r(array_reverse($array));
print_r(array_reverse($array, true));


$counting = ["one", "two", "three", ["four", "five"]];
echo count($counting);
echo '<br>';
echo count($counting, 1);
echo '<br>';


$numbers = [1, 2, 3, 4];
$num = 1;
echo in_array($num, $numbers) ? "yes $num is in array" : "no $num  not in array";
echo '<br>';
$num = "1";
echo in_array($num, $numbers, true) ? "yes $num is in array" : "no $num  not in array";
echo '<br>';



$courses = ["php" => 100, "html" => 200, "css" => 300];
$course = "html";
echo array_key_exists($course, $courses) ? "price of course $course equal " . $courses[$course] : "not found";
echo '<pre>';



$keys = ["one", "one", "one", "two", "three", "two", "four", "five", 1, "1"];
print_r(array_keys($keys));
print_r(array_keys($keys, 'two'));
print_r(array_keys($keys, '1', /*type*/ true));

echo '<pre>';
print_r(array_values($courses));

echo '<pre>';
print_r(array_pad($courses, 10, "#"));
print_r(array_pad($courses, -10, "#"));
echo '<pre>';

$nums = [10, 20, 30];
echo array_product($nums) . "<br>";
echo array_sum($nums) . "<br>";
echo "<br>";

$arr = ["one", "two", "three", "four", "five"];
echo current($arr) . "<br>"; // one
echo next($arr) . "<br>"; // two
echo current($arr) . "<br>"; // two
echo prev($arr) . "<br>"; // one
echo current($arr) . "<br>"; // one
echo next($arr) . "<br>"; // two
echo reset($arr) . "<br>"; // one
echo end($arr) . "<br>"; // five


echo '<pre>';
$one = ["key1" => "one", "key2" => "two", "key3" => "three", "key4" => "four"];
$two = ["key1" => "five", "key2" => "six"];
print_r(array_merge($one, $two));

echo '<pre>';
print_r(array_replace($two, $one));

echo '<pre>';
$ran = [1, 2, 3, 4];
echo array_rand($ran) . "<br>";


echo '<pre>';
shuffle($ran);
print_r($ran);


echo '<pre>';
$first = array_shift($array);
echo $first ; // one
print_r($array);

echo '<pre>';
$last = array_pop($array);
echo $last ; // five
print_r($array);

array_push($array , "six");
print_r($array);

echo '<pre>';
$arraySlice = ["one", "two", "three", "four", "five"];
print_r(array_slice($arraySlice ,1));
print_r(array_splice($arraySlice ,1,3));
echo '<pre>';
print_r($arraySlice);

