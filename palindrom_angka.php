<?php


function palindrome($str) {
  $output = false;
  if (strrev($str)==$str) {
    # code...
    $output = true;

  }
  return $output;
}
function palindrome_angka($angka) {
  // tulis kode di sini
if ($angka >= 1 && $angka <= 8) {
  # code...
return $angka+1;
  }
while (palindrome($angka)==false) {
  # code...
  $angka++;
}
return $angka;
}   


// TEST CASES
echo  palindrome_angka(2); // 9
echo "<br>". palindrome_angka(10); // 11
echo "<br>".palindrome_angka(117); // 121
echo "<br>".palindrome_angka(175); // 181
echo "<br>".palindrome_angka(1000); // 1001

?>
