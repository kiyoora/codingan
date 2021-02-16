<?php

include '../koneksi.php';

//nangkap data yang dikirim

$nama= $_POST['nama'];
$tgl= $_POST['tgl'];
$jk= $_POST['jk'];
$jabatan= $_POST['jabatan'];

mysqli_query($koneksi, "insert into karyawan values ( 0, '$nama','$tgl', '$jk','$jabatan' )");

header("location:index.php");


?>