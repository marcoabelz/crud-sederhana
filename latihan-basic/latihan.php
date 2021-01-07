<?php 

    $nama = "Nama Anda";
    $Nama = "Nama";
    
    echo $nama;

    $a = 10;
    $b = '10';
    $compare = $a == $b;
    $deepCompare = $a === $b;

    echo "<br/>";
    var_dump ($compare);
    echo "<br/>";
    var_dump ($deepCompare);

    function penjumlahan ($a, $b) {
        $hasilPenjumlahan = $a + $b;
        echo $hasilPenjumlahan;
    }

    penjumlahan(10, 5);

    $c = 1;
    while ($c <= 10) {
        echo "Isi Var C : " . $c . "<br/>";
        $c++;
    }

    do {
        $c += 10;
        echo $c;
    } while ($c < 9);
    
    $namaBuah = ["Apel", "Jeruk", "Melon"];
    foreach ($namaBuah as $key => $value) {
        echo $value;
    }

    for ($i=0; $i < 10 ; $i++) { 
        echo $i;
    }

    $universitasGunadarma = [
        "fakultas" => [
            "IT" => [
                "nama" => "Teknik Informatika",
                "kode" => "IA"
            ],
            "SI" => [
                "nama" => "Sistem Informasi",
                "kode" => "IC"
            ]
        ]
    ];
    echo "<br/>";
    var_dump ($universitasGunadarma["fakultas"]["IT"]);
?>