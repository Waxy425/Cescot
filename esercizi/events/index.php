<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Event JavaScript</h1>
    <button class="red" onclick="color_red()" id="colora">rosso</button>
    <button class="yellow" onclick="color_yellow()" id="coloraGiallo">giallo</button>
    <button class="blue" onclick="color_blue()" id="coloraBlu">blu</button>
    <button class="green" onclick="color_green()" id="coloraVerde">Verde</button>
    <button class="orange" onclick="color_orange()" id="coloraArancione">Arancione</button>
    <button onclick="alterna()" id="button_alterna">alterna</button>

    <?php
    include ("..\lib\libreria.php");
    
        div_generatore(20, "div");
    
        ?>

    <script src="eventi.js"></script>
</body>
</html>
