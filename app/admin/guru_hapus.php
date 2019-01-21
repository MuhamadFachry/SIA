<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	require('../../koneksi.php');
	$id=$_GET['id'];
	$query="delete from guru where nip = '".$id."'";
	$hasil=mysqli_query($koneksi,$query);
	if($hasil){
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Akun Berhasil Dihapus')
    	window.location.href='guru.php';
    </SCRIPT>";
		
	}else{
		echo "Akun tidak berhasil terhapus";
	}



}
?>