<?php
function br(){
    echo"</br>";
}




function div_generatore($numero_div){
    for ($i=0, $i<$numero_div,$i++):
        return "<div>questo div è il numero </div>" .$i;
}

div_generatore (15);