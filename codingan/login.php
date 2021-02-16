<?php

session_start();
include 'koneksi.php';

$username = $_POST ['username'];
$password = $_POST ['password'];


$data = mysqli_query($koneksi, "SELECT * FROM `admin` WHERE `user` = '$username' AND `pass` = '$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
  $_SESSION['username']=$username;
  $_SESSION['status']="login";
  header("location:admin/index.php");
  $_SESSION ['bukanadmin']="logout";
}
else{
  header("location:index.php?pesan=gagal");
  $_SESSION['pesan'] = "gagal";
}
?>