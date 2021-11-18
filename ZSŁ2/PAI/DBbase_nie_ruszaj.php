
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8_polish_ci">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Db.css">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
        require_once 'connect.php';
        $sql = "SELECT * FROM `users` JOIN `cities` ON users.cityid=cities.idcity";
        $result = $connect->query($sql);
        // $user = $result->fetch_assoc(); //tylko jeden row
        // print_r($user);
        // echo "<br>",$user["id"],"<br>";

        // while ($user = $result->fetch_assoc()) {   //do czasu kiedy = TRUE wykonuje, FALSE = next 
        //     echo $user["id"],"<br>";
        //     echo $user["name"],"<br>";
        //     echo $user["surname"],"<br>";
        //     echo $user["birthday"],"<br>";
        //     echo $user["city"],"<br><hr>";
        // };
        if(isset($_GET['error'])){
            echo "<h3>".$_GET['error']."</h3>";
        }
        echo <<< TABLE
        <table>
            <tr>
            <th>ID</th>
             <th>IMIE</th>
             <th>NAZWISKO</th>
             <th>DATA URODZENIA</th>
             <th>MIASTO</th>
             <th>DATA UTWORZENIA</th>
             </tr>
TABLE;
    while ($user = $result->fetch_assoc()) {   //do czasu kiedy = TRUE wykonuje, FALSE = next 
    echo <<< USER
    <tr>
    <td>$user[id]</td>
    <td>$user[name]</td>
    <td>$user[surname]</td>
    <td>$user[birthday]</td>
    <td>$user[city]</td>
    <td>$user[create_user]</td>
    <td><a href="delete.php?id=$user[id]">USUN</a></td>
    </tr>
USER;
    }
    echo "</table>"
    ?>
</body>
</html>