<?php
function pasangan_terbesar($angka){
    $arrAngka = array_map('intval', str_split($angka));
    $countArr = count($arrAngka);
    $pairNamber = [];
    $j = 0;
    for ($i = 0; $i < $countArr-1; $i++){
        $pairNamber[$i] = $arrAngka[$i] . $arrAngka[$i+1];
        // $j = $j + 1;
    }
  echo "Pasangan terbesar dari $angka adalah : " . max($pairNamber);
  echo "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>