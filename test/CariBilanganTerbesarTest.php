<?php
require 'questions/CariBilanganTerbesar.php'; // Ganti dengan nama file yang sesuai
use PHPUnit\Framework\TestCase;

// ! Cara run php test: vendor/bin/phpunit test/CariBilanganTerbesarTest.php

class CariBilanganTerbesarTest extends TestCase {
    public function testCariTerbesar() {
        $array1 = [5, 8, 2, 10, 3];
        $hasil1 = cariBilanganTerbesar($array1);
        $this->assertEquals(10, $hasil1, 'Test case 1: Array dengan bilangan terbesar di tengah');

        $array2 = [22, 12, 8, 4, 18];
        $hasil2 = cariBilanganTerbesar($array2);
        $this->assertEquals(22, $hasil2, 'Test case 2: Array dengan bilangan terbesar di awal');

        $array3 = [7, 1, 9, 5, 14];
        $hasil3 = cariBilanganTerbesar($array3);
        $this->assertEquals(14, $hasil3, 'Test case 3: Array dengan bilangan terbesar di akhir');
    }
}
?>

<!-- 
    Jika Anda menjalankan unit test yang disediakan dengan PHPUnit, maka Anda akan mendapatkan hasil berikut:
    Test case 1: Array dengan bilangan terbesar di tengah
    Hasil yang diharapkan: 10
    Test case 2: Array dengan bilangan terbesar di awal
    Hasil yang diharapkan: 22
    Test case 3: Array dengan bilangan terbesar di akhir
    Hasil yang diharapkan: 14
-->
