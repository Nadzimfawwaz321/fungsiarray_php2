<?php
$buah = [
    ["Apel", 15000, 10], // Index 0
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// Buah pertama berada di index 0 dari array luar.
// Nama buah berada di index 0 dari array di dalamnya.
$nama_buah_pertama = $buah[0][0];

echo "Nama buah pertama adalah: " . $nama_buah_pertama . "\n";
?>