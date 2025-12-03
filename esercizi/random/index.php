<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
$i = rand(1 , 3);
?>
<link rel="stylesheet" href="style<?php echo "$i"?>.css">



</head>
<body>
    <h1>css casuali</h1>    


<?php

    function div_generatore_dispari_pari($pari_dispari_div){
      $p="pari";
      $d="dispari";
      $k=0;
        while($k<$pari_dispari_div):
            $k++;
            
            echo'<div class="pari">questo div è pari</div>';
            echo'<div class="dispari">questo div è dispari</div>';
        endwhile;
    }
div_generatore_dispari_pari(10);
?>

<div class="div">questa è la fine della pagina</div>



</body>
</html>