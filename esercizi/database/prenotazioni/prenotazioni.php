<?php


    include '../../lib/libreria.php';
        $host = getenv("DB_HOST");
        $user = getenv("DB_USER");
        $pass = getenv("DB_PASS");
        $dbname = getenv("DB_NAME");

        $connessione = mysqli_connect($host, $user, $pass, $dbname);


        $query1 = "SELECT citta FROM citta";
        $risultato1 = mysqli_query($connessione, $query1);
        $query2 = "SELECT nome, cognome FROM clienti";
        $risultato2 = mysqli_query($connessione, $query2);
        $query3 = "SELECT ID_prenotazione, caparra, importo, arrivo FROM prenotazioni";
        $risultato3 = mysqli_query($connessione, $query3);
?>




<?php 
// 1. LOGICA DI VALIDAZIONE (Solo se il form è inviato)
$messaggio_errore = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['invia'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $messaggio_errore = "Email non valida, riprova.";
    } else {
        // Qui potresti fare qualcosa con l'email valida
        $messaggio_errore = "Email corretta!"; 
    }
}
?>







<form method="post" action="validazione.php">
    <label for="email">Inserisci Email:</label>
    <input type="email" name="email">
    <input type="submit" name="invia">
</form>


<?php
    /*$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if(!$email){
            die("Email non valida");
        }*/
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





    <script src="script.js"></script>
</body>
</html>