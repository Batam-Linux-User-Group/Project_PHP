<?php

/**
 * Buatlah sebuah fungsi PHP yang menerima sebuah array bilangan bulat dan mengembalikan semua bilangan genap yang ada dalam array tersebut dalam bentuk array baru.
 * Contoh:
 * Input: [5, 2, 8, 1, 6]
 * Output: [2, 8, 6]
 */

function cariBilanganGenap($array)
{
    $bilanganGenap = [];
    foreach ($array as $bilangan) {
        if ($bilangan % 2 == 0) {
            $bilanganGenap[] = $bilangan;
        }
    }
    return $bilanganGenap;
}

?>