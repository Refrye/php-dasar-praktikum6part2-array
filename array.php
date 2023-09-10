<?php
// array
// variabel yang mampu menampung lebih dari 1 nilai

// ada 2 cara yang sering dipakai

// cara pertama / lama
$hari = array("senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu");
// cara kedua / baru
$bulan = ["january", "februari", "maret"];
// nilai lebih dari 1 tipe data
$a = ["test", 456, false]; // string, int, boolean
// menampilkan nilai
print_r($hari);
// bagaimana kalau kita ingin menampilkan 1 nilai array
echo "<br>" . $bulan[1];