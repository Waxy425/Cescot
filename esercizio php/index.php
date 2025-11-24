<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pagina di prova</h1>
    

    <?php 
        div_generatore (15);
    ?>



    <div class="div">
        Questa è la fine della pagina
    </div>
</body>
</html>

<?php
    function div_generatore($numero_div){
      $i=0;
        while($i<$numero_div):
            $i++;
            echo"<div>questo div è il numero $i</div>";
            
        endwhile;
    }?>
