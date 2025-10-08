<?php
$buah = [
    ["Apel", 15000, 10], // [Nama (0), Harga (1), Stok (2)]
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

$total_nilai_semua_buah = 0;

echo "--- Perhitungan Total Nilai Stok Buah ---\n";

// Looping untuk setiap buah (setiap baris array)
foreach ($buah as $data_buah) {
    $nama = $data_buah[0];
    $harga = $data_buah[1];
    $stok = $data_buah[2];

    // Hitung nilai per buah: Harga * Stok
    $nilai_per_buah = $harga * $stok;

    // Tambahkan ke total keseluruhan
    $total_nilai_semua_buah += $nilai_per_buah;

    echo $nama . ": Rp" . number_format($harga, 0, ',', '.') . " x " . $stok . " = Rp" . number_format($nilai_per_buah, 0, ',', '.') . "\n";
}

echo "\nTotal nilai stok semua buah adalah: Rp" . number_format($total_nilai_semua_buah, 0, ',', '.') . "\n";
?>