

<!DOCTYPE html>
<html lang=pl>
<head>
    <meta charset="utf-8"/> 
    <title>Formularz</title>
    </head>
    <body>
        <h3>Dane użytkownika</h3>
        <form action>

<input type="text" name="name" placeholder="Imię"><br><br>
<input type="text" name="surname" placeholder="Nazwisko"><br><br>
<input type="submit" value="Zatwierdź dane"><br><br> 
        </form>
        
                <?php
//get ---> https://xyz.php?xyz
//post --->więcej danych "bezpieczne"
                if (!empty($_GET['name']) && !empty($_GET['surname'])){ //!empty musi być pusty   formularz 
            echo <<< E
                Imię i nazwisko:
                $_GET[name] $_GET[surname]
            E;
                    
                }ELSE{
                    echo "Wypełnij wszystkie pola";
                }
                ?>
    </body>
    </html>


