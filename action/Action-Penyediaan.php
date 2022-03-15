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
$IdPenyediaan = mysqli_real_escape_string($koneksi, $_POST["IdPenyediaan"]);
$Periode = mysqli_real_escape_string($koneksi, $_POST["Periode"]);
$Tanggal = mysqli_real_escape_string($koneksi, $_POST["Tanggal"]);
$Tegangan = mysqli_real_escape_string($koneksi, $_POST["Tegangan"]);
$Arus = mysqli_real_escape_string($koneksi, $_POST["Arus"]);
$Daya = mysqli_real_escape_string($koneksi, $_POST["Daya"]);
$create = "INSERT INTO tbl_penyediaan (IdPenyediaan, Periode, Tanggal, Tegangan, Arus, Daya)" . "values ('$IdPenyediaan', '$Periode', '$Tanggal', '$Tegangan', '$Arus', '$Daya')";
mysqli_query($koneksi, $create);
echo "<script>alert('Data Penyediaan Berhasil Disimpan');document.location='../Data-Penyediaan.php'</script>";
}
?>

<!-- hapus -->
<?php
if($_GET['proses']=="hapus"){
$id = $_GET["id"];
$delete = "DELETE FROM tbl_penyediaan WHERE IdPenyediaan = '$id'";
mysqli_query($koneksi, $delete);
echo "<script>alert('Data Yang Dipilih Berhasil Dihapus');document.location='../Data-Penyediaan.php'</script>";
}
?>  