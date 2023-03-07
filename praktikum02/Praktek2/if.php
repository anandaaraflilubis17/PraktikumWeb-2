<?php 

$total_nilai = 80;
$status;


if ($total_nilai > 60) {
   $status = "lulus";
} else {
   $status = "tidak lulus";
   
}

echo $status; 

echo "<br>";

// Buat elseif
if ($total_nilai > 85) {
    $grade = "A";
} elseif ($total_nilai > 70) {
    $grade = "B";
} elseif ($total_nilai > 50) {
    $grade = "C";
} elseif ($total_nilai > 30) {
    $grade = "D";
} else {
    $grade = "E";
}

echo $grade;

?>