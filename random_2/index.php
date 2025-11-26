<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>contenuti a caso</h1>
    
<?php
    $dispari = '<div class="dispari">io sono dispari</div>';
    $pari = '<div class="pari">io sono pari</div>';
    $casuali = rand(1,15);
    echo $casuali;

    for ($i = 0; $i < $casuali; $i++) {
        echo $dispari;
        echo $pari;
    }
?>

<div class="div">fine pagina</div>
</body>
</html>