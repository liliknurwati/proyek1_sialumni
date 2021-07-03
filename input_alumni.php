<?php
include 'koneksi.php';

$username = $_POST['username'];
$pass = $_POST['pass'];
$nama = $_POST['name'];
$nik = $_POST['nik'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$agama = $_POST['agama'];
$nohp = $_POST['nohp'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$tahunlulus = $_POST['tahunlulus'];
$jk =  $_POST['jk'];
$profesi = $_POST['profesi'];




mysqli_query($conn, "INSERT INTO alumni VALUES ('','$username','$pass','$nama','$nik','$tempatlahir','$tanggallahir', '$agama','$nohp','$prodi','$tahunlulus','$alamat', '$jk', '$profesi')");

header("location:alumni_page.php?pesan=input");
?>