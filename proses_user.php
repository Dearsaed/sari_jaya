<?php
include "../koneksi.php";
if (isset($_POST['submit']))
{

	$username     = $_POST['username'];
	$fullname     = $_POST['fullname'];
	$level        = $_POST['level'];
	$password     = $_POST['password'];
	$alamat     = $_POST['alamat'];
	$telp     = $_POST['telp'];

	$q = "INSERT INTO `user` (`ID_USER`,`USERNAME`, `PASSWORD`, `FULLNAME`, `LEVEL`, `alamat`, `telp`) VALUES ('NULL','$username','$password','$fullname','$level','$alamat','$telp')";
	$ck= mysqli_query($conn,$q);
	if ($ck)
	{
	header ("location: table_user.php");
	}
}
elseif(isset($_POST['submit1']))
	{
	$id_user      = $_POST['id_user'];
	$username     = $_POST['username'];
	$fullname     = $_POST['fullname'];
	$level        = $_POST['level'];
	$password     = $_POST['password'];
	$alamat     = $_POST['alamat'];
	$telp     = $_POST['telp'];
	$qu			  ="UPDATE `user` SET `USERNAME`='$username',`PASSWORD`='$password',`FULLNAME`='$fullname',`LEVEL`='$level',`alamat` = '$alamat', `telp` = '$telp' WHERE `ID_USER`='$id_user' ";
	$cek=mysqli_query($conn,$qu);
	if($cek)
	{
		header ("location: table_user.php");
	}
	}
else
{
	$id_user = $_GET['delete_id'];
	$que = "DELETE FROM `user` WHERE `ID_USER` = '$id_user'";
	$cekk=mysqli_query($conn,$que);
	if($cekk)
	{
		echo "<script language='JavaScript'>
        alert('Data Berhasil Dihapus !');
        setTimeout(function() {window.location.href='table_user.php'},10);
        </script>";
	}

}
?>
