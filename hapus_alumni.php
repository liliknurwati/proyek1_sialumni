<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM alumni WHERE idAlumni='$id'");

header("location:alumni_page.php?pesan=hapus");
?>