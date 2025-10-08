<?php

// Soal 1: Array 2 Dimensi Data Siswa
$siswa = [
    // Siswa ke-1 (Index 0)
    [
        'Nama' => 'Andi',
        'Matematika' => 85,
        'Bahasa' => 90
    ],
    // Siswa ke-2 (Index 1)
    [
        'Nama' => 'Budi',
        'Matematika' => 78,
        'Bahasa' => 92
    ],
    // Siswa ke-3 (Index 2)
    [
        'Nama' => 'Citra',
        'Matematika' => 95,
        'Bahasa' => 88
    ]
];

// 1. Cetak nilai Bahasa dari siswa ke-2.
echo "--- Cetak Nilai Bahasa Siswa ke-2 ---\n";
// Siswa ke-2 berada di index 1.
// Nama field adalah 'Bahasa'.
$nilai_bahasa_siswa_2 = $siswa[1]['Bahasa'];
echo "Nilai Bahasa Budi (Siswa ke-2): " . $nilai_bahasa_siswa_2 . "\n\n";

// 2. Cetak semua data menggunakan looping (foreach).
echo "--- Cetak Semua Data Siswa ---\n";
// Loop pertama untuk mengiterasi setiap siswa (baris)
foreach ($siswa as $index => $data_siswa) {
    // Menampilkan nomor siswa
    echo "Data Siswa ke-" . ($index + 1) . ":\n";

    // Loop kedua untuk mengiterasi setiap data (Nama, Matematika, Bahasa) dalam siswa
    foreach ($data_siswa as $kunci => $nilai) {
        echo "- " . $kunci . ": " . $nilai . "\n";
    }
    echo "\n"; // Baris kosong untuk memisahkan antar siswa
}

?>