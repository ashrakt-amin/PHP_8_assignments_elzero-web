<?php
//assignment1
setcookie("site[layout]", "boxed", time() + 60 * 60 * 24 * 65, "/");
setcookie("site[font]", "swat", time() + 60 * 60 * 24 * 65, "/");
setcookie("site[color]", "blue", time() + 60 * 60 * 24 * 65, "/");

//assignment2
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

echo "your color is ".$_COOKIE['site']['color'] ." And your font is ".$_COOKIE['site']['font'];


//assignment3
setcookie("site[layout]", "boxed", time() -1, "/");


//assignment4
setcookie("site[font]", "swat", 0 , "/");
setcookie("site[color]", "blue", 0 , "/");