<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>colori</h1>    


<?php div_generator(rand(5,30));
     ?>




    <div class="div">fine pagina</div>
</body>
</html>
<?php


function div_generator($numero_div){
    for ($i = 0; $i < $numero_div; $i++) {
    echo'<div class="casuali">div</div>';
    }
}
?>