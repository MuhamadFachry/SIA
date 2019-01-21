<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	require('../../koneksi.php');
	$id=$_GET['id'];
	$query="delete from jurusan where idjurusan = '".$id."'";
	$hasil=mysqli_query($koneksi,$query);
	if($hasil){
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Jurusan Berhasil Dihapus')
    	window.location.href='jurusan.php';
    </SCRIPT>";
		
	}else{
		echo "Akun tidak berhasil terhapus";
	}



}
?>