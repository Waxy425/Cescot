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

    $query = "SELECT DISTINCT ID_cliente, nome, cognome, citta.citta, regioni.regione, regioni.area_geografica FROM regioni INNER JOIN citta ON regioni.ID_regione = citta.regione INNER JOIN clienti ON citta.ID_citta = clienti.citta";
    $risultato = mysqli_query($connessione, $query);
?>

<body>
    <h1>Clienti</h1>
    <?php
        include '../../lib/libreria.php';
        while ($tutto = mysqli_fetch_assoc($risultato)) {
            $ID_cliente      = $tutto['ID_cliente'];
            $nome            = $tutto['nome'];
            $cognome         = $tutto['cognome'];
            $citta           = $tutto['citta'];
            $regione         = $tutto['regione'];
            $area_geografica = $tutto['area_geografica'];
            
            
            div_generatore(1, "", "", 
                    "<h2>$nome $cognome</h2>
                    <p>
                    ID_cliente: $ID_cliente </br>
                    regione: $regione </br>
                    area geografica: $area_geografica </br>
                    città: $citta </br>
                    </p>
                    ");
        }
    ?>

    
</body>
</html>

<?php
/*
    $query1 = "SELECT clienti.nome, clienti.cognome, regioni.regione, regioni.area_geografica, clienti.citta
    FROM regioni INNER JOIN citta ON regioni.ID_regione = citta.regione
    INNER JOIN clienti ON citta.ID_citta = clienti.citta";
    $risultato1 = mysqli_query($connessione, $query1);*/
?>