<?php
require 'questions/HitungRataRata.php'; 
use PHPUnit\Framework\TestCase;

// ! Cara run php test: vendor/bin/phpunit test/HitungRataRataTest.php

class HitungRataRataTest extends TestCase {
    public function testHitungRataRata() {
        $nilai1 = [80, 90, 75, 60, 85];
        $hasil1 = hitungRataRata($nilai1);
        $this->assertEquals(78, $hasil1, 'Test case 1: Rata-rata dari nilai-nilai');

        $nilai2 = [100, 100, 100, 100];
        $hasil2 = hitungRataRata($nilai2);
        $this->assertEquals(100, $hasil2, 'Test case 2: Rata-rata dari nilai-nilai yang sama');

        $nilai3 = [];
        $hasil3 = hitungRataRata($nilai3);
        $this->assertEquals(0, $hasil3, 'Test case 3: Rata-rata dari array kosong');
    }
}
?>

<!-- 
    Jika Anda menjalankan unit test yang disediakan dengan PHPUnit, maka Anda akan mendapatkan hasil berikut:
    Test case 1: Rata-rata dari nilai-nilai
    Hasil yang diharapkan: 78
    Test case 2: Rata-rata dari nilai-nilai yang sama
    Hasil yang diharapkan: 100
    Test case 3: Rata-rata dari array kosong
    Hasil yang diharapkan: 0
-->
