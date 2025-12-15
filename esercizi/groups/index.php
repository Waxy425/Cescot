<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <button id="primorosso" onclick="primo_rosso()">primo rosso</button>
        <button id="secondorosso" onclick="secondo_rosso()">secondo rosso</button>
        <button id="tuttirossi" onclick="tutti_rosso()">tutti rossi</button>
        <button id="primoblu" onclick="primo_blu()">primo blu</button>
        <button id="secondoblu" onclick="secondo_blu()">secondo blu</button>
        <button id="tuttiblu" onclick="tutti_blu()">tutti blu</button>
    </div>
    <h2>primo gruppo</h2>

    <?php
    include ("..\lib\libreria.php");
        div_casuali(5, 10, "colora1", "", "colora");
    ?>

    <h2>secondo gruppo</h2>

    <?php
        div_casuali(10, 15, "colora2", "", "colora");
    ?>




    <script src="script.js"></script>
</body>
</html>