<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<?php
    $host = getenv("DB_HOST");
    $user = getenv("DB_USER");
    $pass = getenv("DB_PASS");
    $dbname = getenv("DB_NAME");

    $connessione = mysqli_connect($host, $user, $pass, $dbname);

    $query = "SELECT DISTINCT regioni.regione, ID_prenotazione, COUNT(*) AS numero_prenotazioni,
    ROUND(SUM(prenotazioni.importo), 2) AS totale_importo,
    ROUND(SUM(prenotazioni.importo - prenotazioni.caparra), 2) AS totale_saldo FROM regioni
    INNER JOIN citta ON regioni.ID_regione = citta.regione
    INNER JOIN clienti ON citta.ID_citta = clienti.citta
    INNER JOIN prenotazioni ON clienti.ID_cliente = prenotazioni.cliente
    GROUP BY regioni.regione";

    //prenotazioni.ID_prenotazione, importo, caparra FROM regioni INNER JOIN citta ON regioni.ID_regione = citta.regione INNER JOIN clienti ON citta.ID_citta = clienti.citta INNER JOIN prenotazioni ON clienti.ID_cliente = prenotazioni.cliente;

    $risultato = mysqli_query($connessione, $query);
?>

<body>
    <h1>Regioni</h1>
    <?php
        include '../../lib/libreria.php';
        while ($tutto = mysqli_fetch_assoc($risultato)) {
            $numero_prenotazione = $tutto['ID_prenotazione'];
            $regione             = $tutto['regione'];
            $importo             = $tutto['totale_importo'];
            $saldo               = $tutto['totale_saldo'];
            
            
            div_generatore(1, "", "", 
            "<h2>$regione</h2>
            <p>
            numero di prenotazioni: $numero_prenotazione </br>
            importo di una prenotazioni: $importo </br>
            saldo: $saldo </br>
            </p>
            ");
        }
    ?>

    
</body>
</html>