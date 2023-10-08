<?php
require 'questions/CariBilanganGenap.php'; // Ganti dengan nama file yang sesuai
use PHPUnit\Framework\TestCase;

// ! Cara run php test: vendor/bin/phpunit test/CariBilanganGenapTest.php

class CariBilanganGenapTest extends TestCase {
    public function testCariBilanganGenap() {
        $array1 = [5, 2, 8, 1, 6];
        $hasil1 = cariBilanganGenap($array1);
        $this->assertEquals([2, 8, 6], $hasil1, 'Test case 1: Array dengan beberapa bilangan genap');

        $array2 = [1, 3, 5, 7];
        $hasil2 = cariBilanganGenap($array2);
        $this->assertEquals([], $hasil2, 'Test case 2: Array tanpa bilangan genap');

        $array3 = [10, 20, 30, 40];
        $hasil3 = cariBilanganGenap($array3);
        $this->assertEquals([10, 20, 30, 40], $hasil3, 'Test case 3: Array dengan semua bilangan genap');
    }
}
?>

<!-- 
    Jika Anda menjalankan unit test yang disediakan dengan PHPUnit, maka Anda akan mendapatkan hasil berikut:
    Test case 1: Array dengan beberapa bilangan genap
    Hasil yang diharapkan: [2,8,6]
    Test case 2: Array tanpa bilangan genap
    Hasil yang diharapkan: []
    Test case 3: Array dengan semua bilangan genap
    Hasil yang diharapkan: [10, 20, 30, 40]
-->
