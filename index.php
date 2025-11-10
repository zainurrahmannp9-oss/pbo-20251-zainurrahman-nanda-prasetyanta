<?php

require_once('./LuasLingkaran.php');

use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(10);
// $lingkaran->jari = 10; //input nilai jari-jari
$lingkaran->tampil("roda"); //tampilkan luas lingkaran