<?php
//assignment 1
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

echo "<pre>";
print_r(array_chunk(array_change_key_case($friends), 2, true));
echo "<br>";
echo "<br>";


//assignment 2
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo "<pre>";
print_r(array_change_key_case(array_combine($codes, $means)));
echo "<br>";
echo "<br>";


//assignment 3 
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];
echo "<pre>";
print_r(array_change_key_case((array_reverse(array_combine(array_values($friends), array_keys($friends))))));
echo "<br>";
echo "<br>";


//assignment 4
$nums = [10, 20, 30];
$sum = array_reduce($nums ,function($num1 ,$num2){
    return $num1+ $num2;
}) . "<br>"; //60
echo $sum ;

//assignment 4
$nums = [10, 20, 30];
echo array_sum($nums). "<br>";  //60


//assignment 4
$nums = [10, 20, 30];
$sum = 0;
foreach ($nums as $num) {
    $sum = $sum + $num;
}
echo $sum . "<br>";  //60



echo "<br>";
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);

print_r($squared);

//assignment 5
$sum = 0;
$nums = [5, 10, 20, 5, 30, 40];
foreach ($nums as $num) {
    if ($num == 5) {
        continue;
    }
    $sum += $num;
}
echo $sum . "<br>"; //100


echo "assignment 5 <br>";

//assignment 5
$nums = [5, 10, 20, 5, 30, 40];
// solution 1
$sum = 0;
function check($num)
{
    return $num != 5;
}
foreach (array_filter($nums, "check") as $num) {
    $sum += $num;
}
echo $sum . "<br>"; //100


// solution 2
$sum =array_sum(array_filter($nums, "check"));
echo $sum . "<br>"; //100


// solution 3
$sum =array_sum(array_filter($nums , function($nums){
    return $nums != 5;
}));
echo $sum . "<br>"; //100

echo "<br>";
echo "<br>";


echo "assignment 6 <br>";
//assignment 6
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo "<pre>";
print_r(array_pad($chars , strlen($char) * count($chars) , $char[$zero]));
echo "<br>";
echo "<br>";


echo "assignment 7 <br>";
//assignment 7
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"

next($names);
next($names);
echo current($names) . "<br>"; // "Ali"

prev($names);
prev($names);
prev($names);
prev($names);
echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"
echo "<br>";
echo "<br>";


echo "assignment 8 <br>";
//assignment 8
$chars = ["A", "B", "C"];
$char = ["D"];

echo "<pre>";
print_r(array_pad($chars, 4, $char[0])) . "<br>"; // 1
print_r(array_merge($chars, $char)) . "<br>";     // 2

$chars[] = "D";
print_r($chars);                                  // 3

array_push($chars,  $char[0]);
print_r($chars) . "<br>";                         // 4
echo "<br>";
echo "<br>";


echo "assignment 9 <br>";
//assignment 9
$nums = [1, 2, 3, 4, 5, 6];
print_r(array_slice($nums, 1, 3, true)) . "<br>";
echo "<br>";
echo "<br>";


echo "assignment 10 <br>";
//assignment 10
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];
$three = count($nums);
array_splice($mix, $three , $three , $nums);
print_r($mix);
// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )
echo "<br>";
echo "<br>";


echo "assignment 11 <br>";
//assignment 11
$arrs = ["A", "B", "C", "D", "E"];
$num = 0;
foreach ($arrs as $arr) {
    $num += 1;
}
echo $num . "<br>"; // 5
echo "<br>";


echo "assignment 12 <br>";
//assignment 12
$nums = [11, 2, 10, 7, 20, 50];
$sum = 0;
foreach ($nums as $num) {
    $sum += $num;
}
echo $sum . "<br>"; //100
echo "<br>";



echo "assignment 13 <br>";
//assignment 13
$nums = [10, 100, -20, 50, 30];
$biggest_num  = $nums[0];
foreach ($nums as $num) {
    if ($num > $biggest_num) {
        $biggest_num = $num;
    }
}
echo $biggest_num . "<br>"; //100
echo "<br>";



echo "assignment 14 <br>";
//assignment 14
$smallest_num  = $nums[0];
foreach ($nums as $num) {
    if ($num < $smallest_num) {
        $smallest_num = $num;
    }
}
echo $smallest_num . "<br>"; // -20
echo "<br>";


echo "assignment 15 <br>";
//assignment 15
$chars = ["o", "r", "e", "z", "l", "E"];
$num = 0 ;
foreach ($chars as $char) {
        $num ++ ;
}
$index = array_search("r", $chars);
$nums_array = $num - $index ; // 5

$out  = "";

for ($nums_array; $nums_array >= 0; $nums_array--) {
    $out .= $chars[$nums_array];
}
echo $out . "<br>"; // Elzero
echo "<br>";


echo "assignment 16 <br>";
//assignment 16
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
function get($element)
{
    if (gettype($element) == "integer" && $element % 2 > 0) {
        return $element;
    }
}
echo "<pre>";
print_r(array_filter($mix, "get"));

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )



echo "assignment 17 <br>";
//assignment 17
$nums = [1, 2, 3, 4, 5, 6];
$suffle_nums = [];

for ($i = 0; count($suffle_nums) <= 5; $i++) {
    $rand = rand(0, 5);
    $num = $nums[$rand];

    if (!in_array($num, $suffle_nums)) {
        $suffle_nums[] = $nums[$rand];
    }
}
echo "<pre>";
print_r($suffle_nums);
echo "<pre>";



echo "assignment 18 <br>";
//assignment 18
$search = ["&", "\$", "0"];
$replace = ["l", "e", "o"];
$title = "E&z\$r0 W\$b Sch00&";

$result = str_replace($search, $replace, $title);
echo $result . "<br>";  // "Elzero Web School"

$arrOne = str_split($title);
$arrTwo = str_split($result);

echo count(array_diff($arrOne, $arrTwo));   // 7
