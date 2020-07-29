<?php
function tukar_besar_kecil($string){
    $abjad = "abcdefghijklmnopqrstuvwx";
    $uppAbjad = strtoupper($abjad);
    $output = "";
    $posAbjad = 0;
    for ($i = 0; $i < strlen($string)-1; $i++){
        $posAbjad .= strrpos($abjad, strtolower($string[$i]));
        if ( strtolower($string[$posAbjad]) == $abjad[$posAbjad]){
            $output .= $uppAbjad[$posAbjad];
        } else {
            $output .= $abjad[$posAbjad];
        }


    }
    return $output;

}
 
// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
// echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
// echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
// echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
// echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>