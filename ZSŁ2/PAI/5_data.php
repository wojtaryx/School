<!DOCTYPE html>
    <html lang="pl" dir="ltr">
<head>
<meta charset="utf-8"
</head>

<body>
   
    <?php
     if (!empty($_GET['age']) && !empty($_GET['name'])){
       $name = ucfirst(strtolower($_GET['name']))
        echo <<< L
         <h3>Dane użytkownika</h3>
         Imię: empty($_GET[name])<br>
         Wiek: empty($_GET[age])
L;
     }
    ?>

</body>



    </html>
