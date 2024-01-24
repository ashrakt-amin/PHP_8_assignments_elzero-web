<?php
//setcookie('name','ashrakt' ,time() + 60*60*24*30);
// setcookie('name', 'ashrakt', time() - 1);

// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";


// if (isset($_COOKIE['name'])) {
//     echo $_COOKIE['name'];
// }

// setcookie('user[name]', 'ashrakt');
// setcookie('user[age]', '27');
// setcookie('user[type]', 'female');

// echo "<pre>";
// print_r($_COOKIE['user']);
// echo "</pre>";

echo $_COOKIE['user']['name'];
if (isset($_COOKIE['bg_color'])) {
    echo "<style> body{background-color:" . $_COOKIE['bg_color'] . "}</style>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie('bg_color', $_POST['bg_color']);
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
?>

<form method="post" action="">
    <input type="color" name="bg_color">
    <input type="submit" value="choose color">
</form>