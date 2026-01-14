<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Accedi alle prenotazioni</h1>
</body>
</html>

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







<form method="post" action="prenotazioni.php">
    <label for="email">Inserisci Email:</label>
    <input type="email" name="email">
    <input type="submit" name="invia">
</form>