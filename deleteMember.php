<?php 

    include_once ('koneksi.php');

    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM member WHERE id = '$id'");

    header("location: index.php");

    echo "Data Berhasil Di Hapus";

?>