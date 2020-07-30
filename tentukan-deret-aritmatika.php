<?php
function tentukan_deret_aritmatika($arr) {
    $ratio = $arr[1] / $arr[0];

    for($i = 0; $i < count($arr); $i++){
        if ($arr[count($arr)-1] - $arr[count($arr)-2] == $ratio ){
            return "true<br>";
        }else{
            return "false<br>";
        }
    }
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>