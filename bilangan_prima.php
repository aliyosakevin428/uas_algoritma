<?php
// Function untuk memeriksa apakah sebuah angka adalah bilangan prima
function isPrime($angka) {
    // Jika angka kurang dari atau sama dengan 1, maka bukan bilangan prima
    if ($angka <= 1) {
        return "Tidak, $angka bukan merupakan bilangan prima";
    }

    // Memeriksa apakah angka habis dibagi oleh angka lain selain 1 dan dirinya sendiri
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return "Tidak, $angka bukan merupakan bilangan prima";
        }
    }

    // Jika tidak memenuhi kondisi di atas, maka merupakan bilangan prima
    return "Ya, $angka merupakan bilangan prima";
}

// pemanggilan function
$angka = 29; //nilai yang ingin di cek
$result = isPrime($angka);

// Menampilkan hasil diatas
echo $result;
?>
