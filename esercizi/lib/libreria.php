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
    };

function div_generatore_random($min, $max){
    $i=0;
    $numero_div = rand($min,$max);
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


    function div_generatore($numero_div, $class="", $id="", $contenuto=""){
      for($i=0;$i<$numero_div;$i++) {
        echo"<div class='$class' id='$id'>$contenuto</div>";
    }
    };



































?>