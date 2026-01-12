<?php
    $host = "Localhost";
    $user = "root";
    $pass = "";
    $dbname = "Cescot";

    $connessione = mysqli_connect($host, $user, $pass, $dbname);
    
    $query = "SELECT id, nome, cognome FROM clienti";
    $risultato = mysqli_query($connessione, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <h1>Clienti</h1>
    <?php
        include '../../lib/libreria.php';
        while ($cliente = mysqli_fetch_assoc($risultato)) {
            
            // 3. Estraiamo i dati di QUELLO specifico cliente
            $id      = $cliente['id'];
            $nome    = $cliente['nome'];
            $cognome = $cliente['cognome'];

            // 4. Generiamo il div per questo cliente
            // Questo comando verrà ripetuto automaticamente per ogni riga del DB
            div_generatore(1, "", "", "<h2>$id</h2> <p>$nome e $cognome</p>");
        }
    ?>


</body>
</html>