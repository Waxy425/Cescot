<?php



function connect_db($host, $user, $pass, $dbname) {
    $conn = mysqli_connect ($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }
}




// File di libreria con generatori di <div>
/**
 * la funzione genera div dispari e pari alternati tra loro
 * @param int numero di div da generare
 * @return void
 */
function div_generatore_dispari_pari($pari_dispari_div){
      // $pari_dispari_div: numero di coppie di div da generare
      $p="pari"; // nome classe per i div pari (non usato direttamente)
      $d="dispari"; // nome classe per i div dispari (non usato direttamente)
      $k=0; // contatore delle iterazioni
        while($k<$pari_dispari_div):
            $k++; // incremento contatore
            
            // Stampo prima un div "pari" poi un div "dispari"
            echo'<div class="pari">questo div è pari</div>';
            echo'<div class="dispari">questo div è dispari</div>';
        endwhile;
    };

    /**
 * la funzione genera div casulai
 * @param int numero di div random da generare (mix, max)
 * @return void
 */
function div_generatore_random($min, $max){
    // Genera un numero casuale di div compreso tra $min e $max.
    // Se il numero è dispari stampa una sequenza alternata pari/dispari adeguata.
    $i=0; // contatore delle coppie stampate
    $numero_div = rand($min,$max); // numero totale di div da generare
    if ($numero_div %2 == true){
        // numero dispari: calcolo metà (float) e genero coppie fino a $n
        $n=$numero_div/2;
        while ($i<$n):
            echo'<div class="dispari">questo div è dispari</div>';
            echo'<div class="pari">questo div è pari</div>';
            $i++;
        endwhile;
    } else {
        // numero pari: genero coppie fino a $m (numero_div - 1) poi un ultimo div dispari
        $m=$numero_div-1;
        while ($i<$m):
            // Stampo coppie dispari/pari
            echo'<div class="dispari">questo div è dispari</div>';
            echo'<div class="pari">questo div è pari</div>';
            $i++;
        endwhile;
        // Stampo l'ultimo div dispari rimanente
        echo'<div class="dispari">questo div è dispari</div>'; 
        }
    
}

/**
 * la funzione genera div 
 * @param int numero di div da generare
 * @return void
 */
    function div_generatore($numero_div, $class="", $id="", $contenuto=""){
      // Genera $numero_div di <div> con attributi opzionali: class, id e contenuto
      for($i=0;$i<$numero_div;$i++) {
        echo"<div class='$class' id='$id'>$contenuto</div>";
    }
    };

/**
 * la funzione genera div casuali
 * @param int min/max numero di div da generare casualmente
 * @return void
 */
    function div_casuali($min, $max, $class="", $id="", $contenuto=""){
      $i = 0;
      $numero_div = rand($min,$max);
        for ($i=0;$i<=$numero_div;$i++) {
        echo"<div class='$class' id='$id'>$contenuto</div>";
}
    };