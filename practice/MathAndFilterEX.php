<?php
  echo abs(10) . "<br>"; //10
  echo abs(0) . "<br>"; //0
  echo abs(-20) . "<br>"; //20
  echo  "<br>";
  echo  "<br>";


  echo rand() . "<br>";
  echo mt_getrandmax() . "<br>";
  echo rand(50, 60) . "<br>";
  echo  "<br>";
  echo  "<br>";


  echo 10 / 5 . "<br>";  
  echo gettype(10 / 5) . "<br>";  //integer

  echo 11 / 5 . "<br>";
  echo gettype(11 / 5) . "<br>";   //double

  echo intdiv(11, 5) . "<br>";
  echo gettype(intdiv(11, 5)) . "<br>"; //integer
  echo  "<br>";


  echo fmod(11.5, 5) . "<br>";
  echo gettype(fmod(11.5, 5)) . "<br>";