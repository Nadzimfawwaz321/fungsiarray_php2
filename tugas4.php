<?php

// Inisialisasi array 3x3
$matriks = [];
// Inisialisasi variabel untuk menyimpan total
$total_semua_elemen = 0;
// Jumlah baris dan kolom
$baris = 3;
$kolom = 3;

// 1. Mengisi array 2 dimensi 3x3 dengan angka acak (1-9)
for ($i = 0; $i < $baris; $i++) {
    for ($j = 0; $j < $kolom; $j++) {
        // Menggunakan rand(1, 9) untuk menghasilkan angka acak 1 sampai 9
        $angka_acak = rand(1, 9);
        $matriks[$i][$j] = $angka_acak;

        // Sekaligus menghitung total semua elemen saat array diisi
        $total_semua_elemen += $angka_acak;
    }
}

// 2. Cetak array dalam bentuk matriks (tabel)
echo "===== Matriks 3x3 Angka Acak =====\n";
foreach ($matriks as $row) {
    // Gabungkan elemen baris dengan spasi untuk tampilan matriks
    echo "| " . implode(" | ", $row) . " |\n";
}

// 3. Hitung dan cetak jumlah total semua elemen.
echo "\n==================================\n";
echo "Jumlah total semua elemen dalam matriks adalah: " . $total_semua_elemen . "\n";

?>