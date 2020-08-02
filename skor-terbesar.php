<?php
function skor_terbesar($arr){
//kode di sini
$output =[];
foreach ($arr as $key => $skor_siswa) {
    $cekkelas = $skor_siswa("kelas");
    if (isset($output[$cekkelas]) == 0) {
        $output[$cekkelas] = $skor_siswa;
    }
else {
    if($output[$cekkelas]["nilai"] < $skor_siswa["nilai"]) {
        $output[$cekkelas] = $skor_siswa;
    }
}
return $output;
}


// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($nilai));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>