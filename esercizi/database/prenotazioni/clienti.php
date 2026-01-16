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

    $query = "SELECT DISTINCT ID_cliente, nome, cognome, citta.citta, regioni.regione, regioni.area_geografica 
    FROM regioni INNER JOIN citta ON regioni.ID_regione = citta.regione 
    INNER JOIN clienti ON citta.ID_citta = clienti.citta";
    if(isset($_GET["regione_scelta"])) {
        $lettore = $_GET["regione_scelta"];
        $query .= " WHERE regioni.regione = '$lettore'";
    }
    $risultato = mysqli_query($connessione, $query);

?>

<body>
    

    <form action="" method="get">
        <select name="regione_scelta" id="regioni">
            <option value="Abruzzo">Abruzzo</option>
            <option value="Basilicata">Basilicata</option>
            <option value="Calabria">Calabria</option>
            <option value="Campania">Campania</option>
            <option value="Emilia-Romagna">Emilia-Romagna</option>
            <option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
            <option value="Lazio">Lazio</option>
            <option value="Liguria">Liguria</option>
            <option value="Lombardia">Lombardia</option>
            <option value="Marche">Marche</option>
            <option value="Molise">Molise</option>
            <option value="Piemonte">Piemonte</option>
            <option value="Puglia">Puglia</option>
            <option value="Sardegna">Sardegna</option>
            <option value="Sicilia">Sicilia</option>
            <option value="Toscana">Toscana</option>
            <option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
            <option value="Umbria">Umbria</option>
            <option value="Valle d'Aosta">Valle d'Aosta</option>
            <option value="Veneto">Veneto</option>
        </select>
        <input type="submit" value="cerca">Invia</input>
    </form>


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