<?php
// loop while - Angka ganjil dari 1 sampai 15

$hit = 1; // Awal dari 1
while($hit <= 15){ // Berhenti kalau sudah lebih dari 15
    echo $hit . "<br>";
    $hit+=2; // Tambah 2 setiap kali, jadi dapat angka ganjil
 }
 echo "<h2> pengulangan do...while ...</h2>";
 // do while - Hitung mundur dari 30 sampai 15
 $hitung = 30; // Mulai dari 30
 do {
    echo "Angka ke - " . $hitung . "<br>";
    $hitung--; // kurangi 1 setiap kali
 }while($hitung >= 15); //berhenti kalau sudah dibawah 15

?>