<?php

$produk_ecommerce = [
    // Produk 1: Menggunakan key/kode yang unik dan jelas
    'PRD001' => [
        'nama' => 'Laptop Gaming X',
        'kategori' => 'Elektronik',
        'harga' => 18000000,
        'rating' => 4.8
    ],
    // Produk 2
    'PRD002' => [
        'nama' => 'Blender Super Mute',
        'kategori' => 'Peralatan Rumah Tangga',
        'harga' => 1250000,
        'rating' => 4.5
    ],
    // Produk 3
    'PRD003' => [
        'nama' => 'Sepatu Lari Pro',
        'kategori' => 'Fashion & Olahraga',
        'harga' => 850000,
        'rating' => 4.9
    ]
];

// Inisialisasi variabel untuk melacak produk termahal
$harga_tertinggi = 0;
$produk_termahal = null; // Gunakan null untuk menandakan belum ada produk yang ditemukan

// Looping untuk membandingkan harga setiap produk
foreach ($produk_ecommerce as $data_produk) {
    // Memeriksa apakah harga produk saat ini lebih besar dari harga tertinggi yang tersimpan
    if ($data_produk['harga'] > $harga_tertinggi) {
        // Jika ya, perbarui harga tertinggi dan simpan data produk ini
        $harga_tertinggi = $data_produk['harga'];
        $produk_termahal = $data_produk;
    }
}

// Cetak hasilnya
echo "===== Produk dengan Harga Tertinggi =====\n";

if ($produk_termahal !== null) {
    echo "Nama Produk: " . $produk_termahal['nama'] . "\n";
    echo "Kategori: " . $produk_termahal['kategori'] . "\n";
    // Menggunakan number_format untuk tampilan harga yang rapi (format mata uang)
    echo "Harga: Rp" . number_format($produk_termahal['harga'], 0, ',', '.') . "\n";
    echo "Rating: " . $produk_termahal['rating'] . "\n";
} else {
    echo "Data produk tidak ditemukan atau array kosong.\n";
}

?>