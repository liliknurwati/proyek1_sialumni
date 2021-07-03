<?php
include 'koneksi.php';

$id = $_POST['id'];
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

mysqli_query($conn, "UPDATE alumni SET username_al='$username', password_al='$pass', nama_al='$nama', nik_al='$nik', tempat_lahir='$tempatlahir', tgl_lahir='$tanggallahir', agama='$agama', no_hp='$nohp', prodi='$prodi', tahun_lulus='$tahunlulus', alamat='$alamat', jk='$jk', profesi='$profesi' WHERE idAlumni='$id'");

header("location:alumni_page.php?pesan=update");
?>
