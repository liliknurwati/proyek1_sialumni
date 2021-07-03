<?
$idReview = $_POST['idReview'];
$review=$_POST['review'];

$result=mysqli_query($conn, "insert into review values('$idReview','','$review')");
if ($result) {
echo "Data Berhasil Dikirim" ;
} else{
echo "Gagal";}
?>