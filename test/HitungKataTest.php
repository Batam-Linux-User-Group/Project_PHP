<?php
require 'questions/hitungKata.php'; // Ganti dengan nama file yang sesuai

use PHPUnit\Framework\TestCase;

// ! Cara run php test: vendor/bin/phpunit test/HitungKataTest.php

class HitungKataTest extends TestCase {
    public function testHitungKataKalimatKosong() {
        $hasil = hitungKata('');
        $this->assertEquals(0, trim($hasil), 'Test case 1: Kalimat kosong');
    }

    public function testHitungKataSatuKata() {
        $hasil = hitungKata('Halo');
        $this->assertEquals(1, trim($hasil), 'Test case 2: Kalimat dengan satu kata');
    }

    public function testHitungKataBeberapaKata() {
        $hasil = hitungKata('Halo nama saya Galih');
        $this->assertEquals(4, trim($hasil), 'Test case 3: Kalimat dengan beberapa kata');
    }

    public function testHitungKataKarakterKhusus() {
        $hasil = hitungKata('Ini, kalimat dengan tanda baca!');
        $this->assertEquals(5, trim($hasil), 'Test case 4: Kalimat dengan karakter khusus');
    }

    public function testHitungKataSpasiGanda() {
        $hasil = hitungKata('Ini   kalimat   dengan   spasi   ganda');
        $this->assertEquals(5, trim($hasil), 'Test case 5: Kalimat dengan spasi ganda');
    }
}
?>


<!-- 
    Jika Anda menjalankan unit test yang disediakan dengan PHPUnit, maka Anda akan mendapatkan hasil berikut:
    Test case 1: Kalimat kosong
    Hasil yang diharapkan: 0
    Test case 2: Kalimat dengan satu kata
    Hasil yang diharapkan: 1
    Test case 3: Kalimat dengan beberapa kata
    Hasil yang diharapkan: 4
    Test case 4: Kalimat dengan karakter khusus
    Hasil yang diharapkan: 5
    Test case 5: Kalimat dengan spasi ganda
    Hasil yang diharapkan: 5
-->