<?php

session_start();

include '../koneksi.php';

$id = $_POST['id_edit'];
$nama = $_POST['nama_edit'];
$tgl = $_POST['tgl_edit'];
$jk = $_POST['jk_edit'];
$jabatan = $_POST['jabatan_edit'];

$queryupdate = mysqli_query($koneksi, "UPDATE karyawan SET nama='$nama',tgl='$tgl', id_jk='$jk', id_jabatan='$jabatan' WHERE id_karyawan = '$id'");


if($queryupdate){
    $_SESSION['suksesupdate']="hyruph";
    header("location:index.php");
}

?>