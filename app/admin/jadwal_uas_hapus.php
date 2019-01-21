<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	require('../../koneksi.php');
	$id=$_GET['id'];
	$query="delete from jadwal_ujian where idjadwal_ujian = '".$id."'";
	$hasil=mysqli_query($koneksi,$query);
	if($hasil){
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Jadwal Berhasil Dihapus')
    	window.location.href='jadwal_uas.php';
    </SCRIPT>";
		
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Jadwal Tidak Berhasil Dihapus')
    	window.location.href='jadwal_uas.php';
    </SCRIPT>";
	}



}
?>