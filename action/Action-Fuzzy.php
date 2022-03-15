<!-- koneksi -->
<?php
include '../koneksi.php';
?>

<!-- edit -->
<?php
if(isset($_POST["edit"])){
$IdPenyediaan = mysqli_real_escape_string($koneksi, $_POST["IdPenyediaan"]);
$Periode = mysqli_real_escape_string($koneksi, $_POST["Periode"]);
$Tanggal = mysqli_real_escape_string($koneksi, $_POST["Tanggal"]);
$Tegangan = mysqli_real_escape_string($koneksi, $_POST["Tegangan"]);
$Arus = mysqli_real_escape_string($koneksi, $_POST["Arus"]);
$Daya = mysqli_real_escape_string($koneksi, $_POST["Daya"]);
$update = mysqli_query($koneksi, "UPDATE tbl_penyediaan SET IdPenyediaan='$IdPenyediaan', Periode='$Periode', Tanggal='$Tanggal', Tegangan='$Tegangan', Arus='$Arus', Daya='$Daya' WHERE IdPenyediaan='$IdPenyediaan'") or die (mysqli_error($koneksi));
if($update){
  echo '<script>alert("Data Yang Dipilih Berhasil Diubah");document.location="../Data-Penyediaan.php?id='.$IdPenyediaan.'";</script>';
}
}
?>  

<!-- simpan -->
<?php
if(isset($_POST["simpan"])){
	mysqli_query($koneksi, "TRUNCATE tbl_hasil");
$Periode = mysqli_real_escape_string($koneksi, $_POST["Periode"]);
$Tegangan = mysqli_real_escape_string($koneksi, $_POST["Tegangan"]);
$Arus = mysqli_real_escape_string($koneksi, $_POST["Arus"]);
$create = "INSERT INTO tbl_hasil (Periode, Tegangan, Arus)" . "values ('$Periode', '$Tegangan', '$Arus')";
mysqli_query($koneksi, $create);
header("location:../Action-Fuzzy.php");
}
?>
