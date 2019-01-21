<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	require('../../koneksi.php');
	$id=$_GET['id'];
	$query="delete from jadwal_matpel where idkelas = '".$id."'";
	$hasil=mysqli_query($koneksi,$query);
	if($hasil){
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Jadwal Berhasil Dihapus')
    	window.location.href='jadwal.php';
    </SCRIPT>";
		
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Jadwal Tidak Berhasil Dihapus')
    	window.location.href='jadwal.php';
    </SCRIPT>";
	}



}
?>