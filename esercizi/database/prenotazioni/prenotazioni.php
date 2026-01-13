<?php
    include '../../lib/libreria.php';
        $host = "Localhost";
        $user = "root";
        $pass = "";
        $dbname = "prenotazioni";

        $connessione = mysqli_connect($host, $user, $pass, $dbname);

        $query1 = "SELECT citta FROM citta";
        $risultato1 = mysqli_query($connessione, $query1);
        $query2 = "SELECT nome, cognome FROM clienti";
        $risultato2 = mysqli_query($connessione, $query2);
        $query3 = "SELECT ID_prenotazione, caparra, importo, arrivo FROM prenotazioni";
        $risultato3 = mysqli_query($connessione, $query3);
        
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
    <h1>Prenotazioni</h1>

    <?php
        while ($cittadella = mysqli_fetch_assoc($risultato1)) {
            
            // 3. Estraiamo i dati di QUELLO specifico cliente
            $citta   = $cittadella['citta'];
            
            $cliente = mysqli_fetch_assoc($risultato2);
            $nome    = $cliente['nome'];
            $cognome = $cliente['cognome'];

            $prenotazione = mysqli_fetch_assoc($risultato3);
            $importo = $prenotazione['importo'];
            $caparra = $prenotazione['caparra'];
            $arrivo  = $prenotazione['arrivo'];
            $saldo   = $importo - $caparra;
            // 4. Generiamo il div per questo cliente
            // Questo comando verrà ripetuto automaticamente per ogni riga del DB
            div_generatore(1, "", "", "<h2>$arrivo</h2> 
            <p>
            nome: $nome </br>
            cognome: $cognome </br>
            città di residenza: $citta </br>
            importo prenotazione: $importo </br>
            caparra versata: $caparra </br>
            <span class='saldo'>saldo: $saldo </br></span>
            </p>");
        }
    ?>

    <h2></h2>
</body>
</html>