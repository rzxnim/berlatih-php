<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
$output = "true";
$selisih = $arr[1] - $arr[0];
for ($key=0; $key <count($arr)-2 ; $key++) { 
    $selisihcek = $arr[$key+1] -$arr[$key];
    if ($selisihcek != $selisih) {
        $output = " false";
    }
}
return $output;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>".tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>".tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>".tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>".tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>