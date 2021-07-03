<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username_adm = $_POST['username'];
$password_adm = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from admin where username_adm='$username_adm' and password_adm='$password_adm'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username_adm;
	$_SESSION['status'] = "login";
	header("location:dashboard_admin.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>