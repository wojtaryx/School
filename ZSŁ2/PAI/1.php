<?php 
 echo "text<br>";
 echo 'text<br>';  
 $name="Krystyna";
 echo "Imię: $name<br>";

 $calkowita=10;
 $bin=0b1010;//10
 $oct=011;
 $hex=0x11;//17
 

 $x=10.5;
 echo gettype ($x); //double
 $prawda=true;
 $fałsz=false;
 echo $hex;
 echo $prawda; //1
 echo $fałsz; //nic nie wyświetli
  //składnia heredoc
 echo <<< P
  
    <hr>Imię: $name<br>
    ZSł
    <hr>
    P;
 
 
  
    //2 wersja heredoca

//nowdoc
echo <<< 'E'
<hr>Imię: $name<br>
ZSŁ
<hr>
E;

    //konkatenacja
    echo "text1"."text2";

    echo "Imię: \$name";
    echo "Imię: $name";
?>