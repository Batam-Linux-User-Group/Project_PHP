<?php

/**
 * Buatlah sebuah fungsi PHP yang bernama hitungKata($kalimat) yang akan menerima satu parameter berupa string $kalimat. 
 * Fungsi ini harus mengembalikan jumlah kata dalam kalimat tersebut. 
 * Kata-kata dalam kalimat akan dipisahkan oleh spasi.
 * Contoh:
 * Input: "Halo nama saya Galih"
 * Output: 4
 */

function hitungKata($kalimat)
{
    // Menghapus spasi berlebihan dan karakter whitespace di awal dan akhir kalimat
    $kalimat = trim(preg_replace('/\s+/', ' ', $kalimat));

    // Memecah kalimat menjadi array berdasarkan spasi
    $kataKata = explode(' ', $kalimat);

    // Inisialisasi jumlah kata
    $jumlahKata = 0;

    // Menghitung jumlah kata dengan memeriksa setiap kata
    foreach ($kataKata as $kata) {
        // Hanya menambah jumlah kata jika kata tersebut tidak kosong
        if (!empty($kata)) {
            $jumlahKata++;
        }
    }

    return $jumlahKata;
}

?>