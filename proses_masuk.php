<?php
include "../koneksi.php";
if (isset($_POST['submit']))
{
	$tanggal = $_POST['tanggal'];
	$pendapatan = $_POST['nominal'];
	$pendapatan1 = $_POST['nominal1'];
	$id_mobil = $_POST['id_mobil'];

	$q = "INSERT INTO `pendapatan` (`id_pendapatan`, `tgl`, `nominalsopir1`, `nominalsopir2`, `id_mobil`) VALUES (NULL, '$tanggal', '$pendapatan', '$pendapatan1', '$id_mobil')";
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
		header ("location:table_masuk.php");
	}
	else{
		echo "<script language='JavaScript'>
        alert('ADA YANG SALAH!!');
        setTimeout(function() {window.location.href='add_masuk.php'},10);
        </script>";
		}
}
elseif(isset($_POST['submit1']))
	{
		$id_pendapatan = $_POST['id_pendapatan'];
		$tanggal = $_POST['tanggal'];
		$pendapatan = $_POST['nominal'];
		$pendapatan1 = $_POST['nominal1'];
		$id_mobil = $_POST['id_mobil'];

	$q = "UPDATE `pendapatan` SET `tgl` = '$tanggal', `nominalsopir1` = '$pendapatan', `nominalsopir2` = '$pendapatan1', `id_mobil` = '$id_mobil' WHERE `id_pendapatan` = '$id_pendapatan'";
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
		header ("location:table_masuk.php");
	}
	else{
		echo "<script language='JavaScript'>
        alert('ADA YANG SALAH!!');
        setTimeout(function() {window.location.href='tabel_masuk.php'},10);
        </script>";
		}
	}
else
{
	$id_desa = $_GET['delete_id'];
	$que = "DELETE FROM `pendapatan` WHERE `id_pendapatan` = '$id_desa'";
	$cekk=mysqli_query($conn,$que);
	if($cekk)
	{
		echo "<script language='JavaScript'>
        alert('Data Berhasil Dihapus !');
        setTimeout(function() {window.location.href='table_masuk.php'},10);
        </script>";
	}


}
?>
