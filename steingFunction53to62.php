<?php
//assignment 1
$num_one = -1;
$num_two = 2.5;
$let_one = "o";
$let_two = "z";
$str = "El%er0";
$str[$num_one] = $let_one;
$str[(int)$num_two] = $let_two;
echo $str; // Elzero
echo '</br>';
echo '</br>';


//assignment 2
$str = "Orezle";
echo ucfirst(strtolower(strrev($str)));
// Elzero

//assignment 3
$str = 'aAa';
$num = 3;
$char = "_";

echo chunk_split(str_repeat(strtolower($str), 3), 3, $char);
// aaa_aaa_aaa_
echo '</br>';
echo '</br>';


//assignment 4
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b></b>");
// <b>Elzero</b>


//assignment 5
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str, $e, $four) . '</br>';
echo substr_count($str, strtolower($o), -(int)$four) . '</br>';
// 1
// 2
echo '</br>';
echo '</br>';


//assignment 6
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars);
// Output
//"Elzero"

//assignment 7
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$data = ucfirst(strtolower(implode("", array_filter($chars, 'is_string'))));
echo $data;
// Output
//"Elzero"

//assignment 7
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$data = "";
foreach ($chars as $char) {
    if (is_string($char)) {
        $data .= $char;
    }
}
echo ucfirst(strtolower($data));
