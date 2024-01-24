<?php
//assignment 1
echo rand( 11 , 19) . "<br>";


//assignment 2
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[rand( 0, count($friends)-1)] . "<br>";



//assignment 3
$num1 = 11.5; // 11
echo round($num1,0,PHP_ROUND_HALF_ODD) . "<br>";

$num2 = 9.4898; // 9.5
echo round($num2,1) . "<br>";

$num3 = -7.5; // -7
echo round($num3,0,PHP_ROUND_HALF_DOWN) . "<br>";



//assignment 4
$array =[];
foreach (filter_list() as $name) {
    $array[] = filter_id($name);
}
echo "<pre>";
print_r(array_combine($array,filter_list()));
echo "</pre>";



//assignment 5
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";


echo(filter_var($url1, FILTER_VALIDATE_URL) == true )?  "A Valid URL <br>" :"Not A Valid URL <br>";
echo(filter_var($url2, FILTER_VALIDATE_URL) == true )?  "A Valid URL <br>" :"Not A Valid URL <br>";
echo(filter_var($url3, FILTER_VALIDATE_URL) == true )?  "A Valid URL <br>" :"Not A Valid URL <br>";
echo(filter_var($url4, FILTER_VALIDATE_URL) == true )?  "A Valid URL <br>" :"Not A Valid URL <br>";

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"