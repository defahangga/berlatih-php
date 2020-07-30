<?php

function palindrome_angka($angka) {
  // $reverse_number = 0;
  //   $number_backup  = $number;
  //   while($angka > 0){
  //     $reverse_number = $reverse_number * 10 + $angka % 10;
  //     $angka /= 10;
  //   }
  //   return $reverse_number == $number_backup;
  //   echo "$reverse_number";

    

}

// TEST CASES
echo palindrome_angka(8) // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>