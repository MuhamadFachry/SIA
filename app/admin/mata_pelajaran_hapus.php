<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	require('../../koneksi.php');
	$id=$_GET['id'];
	$query="delete from matpel where idmatpel = '".$id."'";
	$hasil=mysqli_query($koneksi,$query);
	if($hasil){
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Mata Pelajaran Berhasil Dihapus')
    	window.location.href='mata_pelajaran.php';
    </SCRIPT>";
		
	}else{
		echo "Akun tidak berhasil terhapus";
	}



}
?>