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


//assignment 5
$sum = 0 ;
$nums = [5, 10, 20, 5, 30, 40];
foreach($nums as $num){
    if($num == 5){
        continue ;
    }
    $sum += $num ;
}
echo $sum ."<br>"; //100

//new solution assignment 5
$sum = 0 ;
$nums = [5, 10, 20, 5, 30, 40];
function check($num){
    return $num != 5 ;
}
foreach(array_filter($nums,"check") as $num){
    $sum += $num ;
}
echo $sum ."<br>"; //100
echo "<br>";
echo "<br>";



//assignment 6
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo "<pre>";
print_r(array_pad($chars, 10, $char[$zero]));
echo "<br>";
echo "<br>";


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


//assignment 9
$nums = [1, 2, 3, 4, 5, 6];
print_r(array_slice($nums ,1,3,true)) . "<br>";               
echo "<br>";
echo "<br>"; 

//assignment 10
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];
print_r(array_replace($mix, $nums));
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



//assignment 11
$arrs = ["A", "B", "C", "D", "E"];
$num = 0;
foreach ($arrs as $arr) {
    $num += 1;
}
echo $num . "<br>"; // 5
echo "<br>";


//assignment 12
$nums = [11, 2, 10, 7, 20, 50];
$sum = 0;
foreach ($nums as $num) {
    $sum += $num;
}
echo $sum . "<br>"; //100
echo "<br>";



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


//assignment 14
$smallest_num  = $nums[0];
foreach ($nums as $num) {
    if ($num < $smallest_num) {
        $smallest_num = $num;
    }
}
echo $smallest_num . "<br>"; // -20
echo "<br>";



//assignment 15
$chars = ["o", "r", "e", "z", "l", "E"];
$num = 0;

foreach ($chars as $char) {
    $num += 1;
}
$nums_array = $num - 1; // 5

$out  = "";

for ($nums_array ; $nums_array >= 0 ; $nums_array--) {
    $out .= $chars[$nums_array];
}
echo $out . "<br>"; // Elzero
echo "<br>";



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



//assignment 18
$search = ["&", "\$", "0"];
$replace = ["l", "e", "o"];
$title = "E&z\$r0 W\$b Sch00&";

$result = str_replace($search, $replace, $title);
echo $result . "<br>";  // "Elzero Web School"

if (!in_array($num, $suffle_nums)) {
    $suffle_nums[] = $nums[$rand];
}
$arrOne = str_split($title);
$arrTwo = str_split($result);

echo count(array_diff($arrOne, $arrTwo));   // 7
