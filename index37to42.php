<?php
//assignment 1
for ($index = 10; $index >= 0; $index--) {
    echo $index . "<br>";
}
echo "<br>";
echo "<br>";


//assignment 2
//for
$index1 = 0;

for ($index1 += 2; $index1 <= 20; $index1++) {
    if ($index1 % 2 == 0) {
        echo $index1 . "<br>";
    }
}

//while
$index2 = 0;
while ($index2 <= 20) {
    if ($index2 % 2 == 0 && $index2 != 0) {
        echo $index2 . "<br>";
    }
    $index2++;
}

//do while
$index3 = 0;
do {
    if ($index3 % 2 == 0 && $index3 != 0) {
        echo $index3 . "<br>";
    }
    $index3++;
} while ($index3 <= 20);
echo "<br>";
echo "<br>";


//assignment 3
$num = 2;
while ($num < 520) {
    if ($num == 2) {
        echo "1" . "<br>";
    }

    $num *= 2;
    echo $num . "<br>";

    if ($num == 382) {
        break;
    }
    $num++;
}


//assignment 4
$end = 0;
$stop = 3;

for ($start = 10; $start >= $stop; $start--) {
    if ($start < 10) {
        echo $end . $start . '<br>';
    } else {
        echo $start . '<br>';
    }
}
echo "<br>";
echo "<br>";



//assignment 5
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for ($start; $start <= count($mix) - 1; $start++) {
    if (gettype($mix[$start]) == "integer" && $mix[$start] > 1) {
        echo $mix[$start] . "<br>";
    }
}
echo "<br>";
echo "<br>";


//assignment 6
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach ($money as $name => $value) {
    echo  "The Name Is  $name And I Need $value Pound From Him <br>";
}
echo "<br>";
echo "<br>";

//assignment 7
$mix = [1, 2, "A", "B", "C", 3, 4];
$numbers = 0;
foreach ($mix as $value) {
    if (gettype($value) == "integer") {
        echo $value . "<br>";
        $numbers += 1;
    }
}
$letters = count($mix) - $numbers;
echo "$numbers Numbers Printed <br>";
echo "$letters Letters Ignored";
echo "<br>";
echo "<br>";

//assignment 8
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach ($nums as $value) {
    if ($value % 2 == 0) {
        echo $value / 2 . "<br>";
    }
}
echo "<br>";
echo "<br>";

//assignment 9
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
sort($nums);
$i = reset($nums);
for ($i; $i  < $help_num; $i++) {
    echo $names[$i] . "<br>";
}
echo "<br>";
echo "<br>";


//assignment 10
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
foreach ($nums as $num) {
    echo "$num + $nums[$help_num] = " . $num + $nums[$help_num] . "<br>";
    $help_num--;
}
