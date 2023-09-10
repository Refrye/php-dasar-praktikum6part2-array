<?php
// membuat array multidimensi dua dimensi
$meja = array(
    array('gunting', 'pulpen'),
    array('handphone', 'earphone'),
    array('kue', 'minuman')
);
foreach ($meja as $baris) {
    foreach ($baris as $elemen) {
        echo $elemen;
        echo "<br>";
    }
}
