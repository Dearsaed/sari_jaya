<?php
include "../koneksi.php";
if (isset($_POST['submit']))
{

	$nopol     = $_POST['nopol'];
	$tahun     = $_POST['tahun'];
	$id_sopir1 = $_POST['id_sopir1'];
	$id_sopir2 = $_POST['id_sopir2'];

	$q = "INSERT INTO `mobil` (`id_mobil`, `nopol`, `tahun`, `id_sopir1`, `id_sopir2`) VALUES ('NULL','$nopol','$tahun','$id_sopir1','$id_sopir2')";
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
	header ("location: table_mobil.php");
	}
}
elseif(isset($_POST['submit1']))
	{
		$id_mobil     = $_POST['id_mobil'];
		$nopol     = $_POST['nopol'];
		$tahun     = $_POST['tahun'];
		$id_sopir1 = $_POST['id_sopir1'];
		$id_sopir2 = $_POST['id_sopir2'];
	$qu			  ="UPDATE `mobil` SET `nopol` = '$nopol', `tahun` = '$tahun' WHERE `id_mobil` = '$id_mobil'";
	$cek=mysqli_query($conn,$qu);
	if($cek)
	{
		header ("location: table_mobil.php");
	}
	}
else
{
	$id_mobil = $_GET['delete_id'];
	$que = "DELETE FROM `mobil` WHERE `id_mobil` = '$id_mobil'";
	$cekk=mysqli_query($conn,$que);
	if($cekk)
	{
		echo "<script language='JavaScript'>
        alert('Data Berhasil Dihapus !');
        setTimeout(function() {window.location.href='table_mobil.php'},10);
        </script>";
	}

}
?>
