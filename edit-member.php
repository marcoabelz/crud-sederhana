<?php 

    include_once('koneksi.php');

    $id = $_GET['id'];

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    mysqli_query($koneksi, "UPDATE member SET nama = '$nama',
                                                umur = '$umur'
                                                WHERE id = '$id'");

    header("location: index.php");

?>