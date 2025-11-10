<?php

class LuasLingkaran {

    public const phi = 3.14;

    public int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
    }

    public function tampil($nama = 'ban') : void { 
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasil nya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini testing static";
    }

    public function __destruct() {
        echo "<br/>";
        echo "udah ah cape";
    }

}

$lingkaran = new LuasLingkaran(10);
//$lingkaran->jari = 10; //input nilai jari-jari
$lingkaran->tampil("roda"); //tampilkan luas lingkaran

LuasLingkaran::testing();

// $rumus = LuasLingkaran::phi * ($lingkaran->jari * $lingkaran->jari);

// echo "Hasil nya adalah: " . $rumus;