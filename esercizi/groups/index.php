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
        <button id="terzorosso" onclick="terzo_rosso()">terzo rosso</button>
        <button id="tuttirossi" onclick="tutti_rosso()">tutti rossi</button>
        <button id="primoblu" onclick="primo_blu()">primo blu</button>
        <button id="secondoblu" onclick="secondo_blu()">secondo blu</button>
        <button id="terzoblu" onclick="terzo_blu()">terzo blu</button>
        <button id="tuttiblu" onclick="tutti_blu()">tutti blu</button>
        <button id="primogiallo" onclick="primo_giallo()">primo giallo</button>
        <button id="secondogiallo" onclick="secondo_giallo()">secondo giallo</button>
        <button id="terzogiallo" onclick="terzo_giallo()">terzo giallo</button>
        <button id="tuttigiallo" onclick="tutti_giallo()">tutti giallo</button>
        <button onclick="reset()">reset</button>
        <button onclick="sorry()">Divertiti</button>
        <img id="myImage" 
        src="https://info.grantmcgregor.co.uk/hubfs/we-are-sorry-microsoft-blue-screen-sad-smiley.jpg" 
        alt="Immagine Sorpresa" 
        style="display: none; width: 100%;">
    
    </div>
    <h2>primo gruppo</h2>

    
    <?php
    require("../lib/libreria.php");
        div_casuali(5, 10, "colora1", "");
    ?>

    <h2>secondo gruppo</h2>

    <?php
        div_casuali(10, 15, "colora2", "");
    ?>

    <h2>terzo gruppo</h2>

    <?php
        div_casuali(5, 20, "colora3", "");
    ?>




    <script src="script.js"></script>
</body>
</html>