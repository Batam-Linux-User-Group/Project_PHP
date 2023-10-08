<?php

/**
 * Buatlah sebuah fungsi PHP yang menerima sebuah array bilangan bulat dan mengembalikan bilangan terbesar dalam array tersebut.
 * Contoh:
 * Input: [5, 8, 2, 10, 3]
 * Output: 10
 */

function cariBilanganTerbesar($array) {
    $terbesar = $array[0]; // Anggap elemen pertama sebagai terbesar awalnya
    foreach ($array as $bilangan) {
        if ($bilangan > $terbesar) {
            $terbesar = $bilangan; // Jika bilangan lebih besar, perbarui nilai terbesar
        }
    }
    return $terbesar;
}
?>
