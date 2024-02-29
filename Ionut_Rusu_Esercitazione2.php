<?php
$persone = [
    ['nome' => 'pasquale','cognome' => 'pignatelli','genere' => 'maschile'],
    ['nome' => 'chiara','cognome' => 'verdi','genere' => 'femminile'],
    ['nome' => 'nicola','cognome' => 'rossi','genere' => 'maschile'],
    ['nome' => 'giuseppe','cognome' => 'birillo','genere' => 'femminile'],
    ['nome' => 'paolo','cognome' => 'roma','genere' => ''],
    ];
    foreach ($persone as $persona){ 
    if ($persona["genere"] == "femminile"){
        echo 'Buongiorno sig.ra' . ' ' .  $persona['nome'] . ' ' . $persona['cognome'] . "\n";
     }else if ($persona["genere"] == "maschile") {
        echo 'Buongiorno sig.' . ' ' .  $persona['nome'] . ' ' .  $persona['cognome'] . "\n";
      } else {
        echo 'Buongiorno' . ' ' .  $persona['nome'] . ' ' .  $persona['cognome'] . "\n";
       }}
       

function mediaNumeriPari($listaNumeri) {
    $somma = 0;
    $contatore = 0;
    foreach ($listaNumeri as $numero) {
        if ($numero % 2 === 0) {
            $somma += $numero;
            $contatore++;
        }
    }
    if ($contatore > 0) {
        return $somma / $contatore;
    } else {
        return 0;
    }
}
$arrayNumeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25];
$mediaNumeriPari = mediaNumeriPari($arrayNumeri);
echo "La media dei numeri pari è: " . $mediaNumeriPari;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "HACKADEMY\n";
    } elseif ($i % 3 === 0) {
        echo "PHP\n";
    } elseif ($i % 5 === 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $i . "\n"; 
    }
}

