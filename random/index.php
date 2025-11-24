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
      $i=0;
        while($i<$pari_dispari_div):
            $i++;
            echo"<div>questo div è il numero $i</div>";
            
        endwhile;
    }

?>





</body>
</html>