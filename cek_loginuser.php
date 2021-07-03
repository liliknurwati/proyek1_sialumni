<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username_al = $_POST['username'];
$password_al = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from alumni where username_al='$username_al' and password_al='$password_al'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['idAlumni'] = $data_user['idAlumni'];
	$_SESSION['username'] = $username_al;
	$_SESSION['status'] = "login";
	header("location:beranda_user.php");
}else{
	header("location:login_user.php?pesan=gagal");
}
?>