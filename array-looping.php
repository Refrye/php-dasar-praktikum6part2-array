<?php

// Definisikan array
$array = [
    "nama" => "Budi Gunawan",
    "umur" => 23,
    "alamat" => "Bandung kencur",
];

// Tampilkan array menggunakan foreach
foreach ($array as $key => $value) {
    echo "$key: $value";
    echo "<br>";
}
