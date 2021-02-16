<?php

session_start();
include '../koneksi.php';

$data = $_GET['nden'];

$delete = mysqli_query($koneksi,"DELETE FROM `karyawan` WHERE `karyawan`.`id_karyawan` = $data");

if($delete){
    header("location:index.php");
    $_SESSION['berhasil'] = "berhasil";
}
else{
    $_SESSION['gagal']="pesan";
    header("location:index.php");
}
?>