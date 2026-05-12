<?php
// pengulangan for
$counter = 0;
for($counter = 1; $counter <= 50; $counter++){
    // cek kondisi gabungan duluan
    if($counter % 4 == 0 && $counter % 5 == 0){
        echo "Tilawatil Sagita <br>";
    }
    elseif($counter % 8 == 0){
        echo "Sagita <br>";
    }
    elseif($counter % 4 == 0){
        echo "Tilawatil <br>";
    }
    // kalau tidak memenuhi syarat apapun, tampilkan angkanya
    else {
        echo "Angka ke - " . $counter . "<br>";
    }
}
?>