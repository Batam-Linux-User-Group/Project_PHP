<?php

/**
 * Buatlah sebuah fungsi PHP yang menerima sebuah array nilai numerik dan menghitung rata-rata nilai dari array tersebut.
 * Contoh:
 * Input: [80, 90, 75, 60, 85]
 * Output: 78
 */

function hitungRataRata($nilai)
{
    $total = array_sum($nilai);
    $jumlah = count($nilai);
    if ($jumlah > 0) {
        return round($total / $jumlah);
    } else {
        return 0;
    }
}
?>