<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    


</head>
<body>
    <?php
        mysqli_connect("localhost", "root", "", "Cescot") or die("Impossibile connettersi al database");
        mysqli_query($connessione, "SET NAMES 'utf8'");
        echo '<div></div>';
    ?>
    <h1>Il testo che segue arriva dal database</h1>
    <div class="value"></div>
</body>
</html>


creare il database Cescot, all'interno creare la tabella content contenente il campo value, inserire un redord contenente ciao mondo, creare il file /db/index.php, all'interno creare la pagina web contenente:

-h1 contentente il testo che segue arriva dal database

-div contenente il testo letto dal campo value della tabella content