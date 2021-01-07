<?php 

    include_once('koneksi.php');

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    mysqli_query($koneksi, "INSERT INTO member (nama, umur) values ('$nama', '$umur')");

    echo "Data berhasil di input";

    header("location: index.php");

?>