<?php

use mahasiswa\Mahasiswa;
use dosen\Dosen;

include "data/Biodata.php";
include "data/JabatanTrait.php";
include "mahasiswa/Mahasiswa.php";
include "dosen/Dosen.php";

$dosen = new Dosen('Pe', '20-11-1894', 'Malang');
$mahasiswa = new Mahasiswa('Rosid', '20-11-1894', 'Malang');

header('Content-Type: application/json');
echo json_encode([
    $dosen->showData(),
    $mahasiswa->showData(),
], JSON_PRETTY_PRINT);
