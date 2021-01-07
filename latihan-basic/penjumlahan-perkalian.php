<?php 

    $angka1 = $_GET['angka1'];
    $angka2 = $_GET['angka2'];

    function penjumlahan ($a, $b) {
        $hasilPenjumlahan = $a + $b;
        function perkalian ($a) {
            $hasilPerkalian = $a * 2;
            echo $hasilPerkalian;
        }
        perkalian($hasilPenjumlahan);
    }

    penjumlahan($angka1, $angka2);

?>