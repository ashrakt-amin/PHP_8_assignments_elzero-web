<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= "My First PHP Page" ?></title>
</head>

<body>
  <?php
  // assignment 1
  //$num = (int)15.2 + (int)14.7 + (int)(10.5 + 10.5);
  $num = (int)(15.2 + 14.7 + (10.5 + 10.5));
  echo  $num; // 50
  echo '</br>';
  echo gettype($num); // Integer
  echo '</br>';
  echo '</br>';

  // assignment 2
  echo gettype(100);
  echo '</br>';
  echo var_dump(100);
  echo '</br>';
  if (is_int(100)) {
    echo "integer";
  } else {
    echo "not integer";
  }
  echo '</br>';
  echo '</br>';

  // assignment 3
  // echo "???";
  // Hello "Elzero" \\ """ We Love "$$PHP"
  echo " Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\" ";
  echo '</br>';
  echo '</br>';

  // assignment 4
  echo nl2br("We 
  Love 
  Elzero 
  Web 
  School");

  echo '</br>';
  echo '</br>';

  // assignment 5
  $Programming = '$Programming$';
  echo nl2br(<<<"Here"
  Hello "'Elzero'"
  We Love  $Programming
  Languages Specially "PHP"
  Here);
  echo '</br>';
  echo '</br>';


  // assignment 6
  $something = "Programming";
  echo <<<"Here"
  Hello \\PHP\\
  We Love $something 
  Here;
  echo '</br>';
  echo '</br>';


  // assignment 7
  $type = is_string("Hello PHP");
  echo $type;
  echo '<br>';
  echo gettype((int)$type);

  // assignment 8
  echo '<pre>';
  print_r([
    "FrontEnd" => [
      "HTML",
      "CSS",
      "JS" => [
        "Vuejs" => [
          2 => "v2",
          3 => "v3"
        ],
        "Reactjs",
        "Svelte"
      ]
    ],
    "BackEnd" => [
      0 => "PHP",
      1 => "MySQL",
      2 => "Security"
    ],
    0 => "Git",
    1 => "Github",
    "Testing" =>
    [
      0 => "Unit Testing",
      1 => "End To End",
      2 => "Integration"
    ]
  ]);


  ?>
</body>

</html>