<?php
// --- PARTE 1: CONNESSIONE AL DATABASE ---
$host = "localhost";
$user = "root";
$pass = ""; // Di solito vuota su XAMPP, 'root' su MAMP
$dbname = "Cescot";

// Creiamo il ponte tra PHP e MySQL
$connessione = mysqli_connect($host, $user, $pass, $dbname);

// --- PARTE 2: RECUPERO DATI ---
// Facciamo una domanda al database: "Prendimi tutto dalla tabella content"
$query = "SELECT value FROM content";
$risultato = mysqli_query($connessione, $query);

// Estraiamo il dato riga per riga (nel nostro caso c'è solo una riga)
$riga = mysqli_fetch_assoc($risultato);
$testo_db = $riga['value'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Esercizio Cescot</title>
</head>
<body>

    <h1>il testo che segue arriva dal database</h1>

    <div>
        <?php echo $testo_db; ?>
    </div>

</body>
</html>