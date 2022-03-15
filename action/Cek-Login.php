<?php
session_start();
include '../koneksi.php';
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$data = mysqli_query($koneksi,"select * from tbl_login where Username ='$Username' and Password='$Password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
 $_SESSION['Username'] = $Username;
 $_SESSION['status'] = "login";
 header("location:../menu-utama.php");
}else{
 header("location:../index.php?pesan=gagal");
}
?>