<?php
// assignment 1
$name = "Elzero Courses";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?PHP echo $name ?></title>
</head>

<body>
    <h1><?PHP echo $name ?></h1>
    <p>Here In <?PHP echo $name ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?PHP echo $name ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?PHP echo $name ?></footer>



    <?PHP
    // assignment 2
    echo '</br>';
    $name = "elzero";
    $$name = "Web";
    echo ${$name};
    echo '</br>';

    echo $$name;
    echo '</br>';

    echo $$name[0] . $$name[1] . $$name[2];
    echo '</br>';

    $name = $$name;
    echo $name;
    echo '</br>';

    $$name = &$name;
    echo $$name;
    echo '</br>';
    echo '</br>';


    // assignment 3
    $a = 200;
    $b = &$a;
    $a = 100;
    echo $b; // 100
    echo '</br>';
    echo '</br>';


    // assignment 4
    /* This variable contains the absolute path to the web server's 
    document root directory.It represents the base directory where
     the web server serves files from.*/
    echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'];
   
    /* This variable contains the name of the server host that is 
    executing the current script.It represents the domain name or
     IP address of the server..*/
    echo "Server Name: " . $_SERVER['SERVER_NAME'];

    /*This variable is specific to Windows servers and contains the
     path to the system's root directory (e.g., "C:\Windows").*/
    echo "System Root: " . $_SERVER['SystemRoot'];

    /* This is not a predefined variable but a PHP function. 
     It returns an array containing the paths to the default SSL 
     certificate locations on the server.You can use this function 
     to retrieve the OpenSSL configuration */
    $opensslConfig = openssl_get_cert_locations();
    echo "Default Certificate Store:".$opensslConfig['default_cert_file'];
    echo "Default Private Key (Directory):".$opensslConfig['default_private_dir'];
    echo '</br>';


    // assignment 4
    /* 
    break  callable	case   const  do	echo  else	elseif
    clone	class  	catch	 continue	declare	default
    */

    // assignment 5
    echo __line__;
    echo '</br>';
    echo  __file__;
    echo '</br>';
    echo  __dir__;
    echo '</br>';

    $a = 1;
    echo $a / 0;
    
    echo '</br>';





    ?>
</body>

</html>
<?php
