<?php
 echo PHP_VERSION;

 echo 2**10, "<br>";

 $x=1000;
 $y=100;
 echo $x<=>$y;
 //równe
 $x=1; //jako int
 $y=1.0; //jako double

 if ($x==$y) {
     echo "<br>równe";
 }else{
     echo "<br>różne";
 }
 ?>