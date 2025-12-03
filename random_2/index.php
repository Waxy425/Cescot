<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Contenuti a caso</h1>
     <?php div_generator(rand(10,30));
     ?>

</body>
</html>

<?php

function div_generator($numero_div){
    $i=0;
    if ($numero_div %2 == true){
        $n=$numero_div/2;
        while ($i<$n):
            echo'<div class="dispari">questo div è dispari</div>';
            echo'<div class="pari">questo div è pari</div>';
            $i++;
        endwhile;
    } else {
        $m=$numero_div-1;
        while ($i<$m):
            
            echo'<div class="dispari">questo div è dispari</div>';
            echo'<div class="pari">questo div è pari</div>';
            $i++;
        endwhile;
        echo'<div class="dispari">questo div è dispari</div>'; 
        }
    
}