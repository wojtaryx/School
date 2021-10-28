<?php
// date()
echo "dzien-miesiac-rok: ".date('d/'.'m/'.'Y '),'<br>'; //lub date('d-m-y')    y-koncowka roku  Y-caly rok
echo date('d-M-y'),'<br>';   //m- liczba miesiaca    M-skrocona nazwa miesciaca  F-pelna nazwa miesiaca
echo date('d-F-y'),'<br>';

setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y'),'<br>';

echo date('G:i:s'),'<br>';
echo date('G:i:sa'),'<br>';
echo date('H:i:s'),'<br>';
?>
<script>
    setTimeout(function(){
    //window.location.reload(); //komenda do odswiezania strony
    }, 1000); //czestotliwosc
</script>

<?php
//getdate()
$date=getdate();
print_r($date);
echo $date['wday'],'<br>'; //dzien tygodnia
echo $date['yday'],'<br>'; //dzien roku   w/m/y  dozwolone
echo $date['0'],'<br>'; //ile sekund w roku minelo
// rok przestepny
echo date('L'),'<br>';//0-rok nie jest przestepny       1-rok jest przestepny

//mktime()
$today=mktime(0,0,0,10,28,2021) ;  //godzina,minuta,sekunda,miesiac,dzien,rok
echo $today,'<br>';
$today=mktime(0,0,0,date('m'),date('d'),date('Y')) ;
echo $today,'<br>';

//ile minelo lat od pierwszego stycznia 1970 roku
$year=$today/(60*60*24*365);
echo (int)$year,'<br>';//51

//ile lat minelo od poprzedniego roku (tez od daty 1/1/1970)
$today=mktime(0,0,0,1,1,2020);
$year=$today/(60*60*24*365);
echo (int)$year,'<br>';//50
?>