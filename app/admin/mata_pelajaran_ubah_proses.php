<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	include('../../koneksi.php');
	$idmatpel=$_POST['idmatpel'];
	$guru  = $_POST['guru'];
	$matpel  = $_POST['matpel'];
	$kkm = $_POST['kkm'];
	$matpel = mysqli_real_escape_string($koneksi, $matpel);
	$query  = mysqli_query($koneksi,"update matpel set nip='$guru',nama_matpel='$matpel',kkm='$kkm' where idmatpel='$idmatpel'");
	if ($query) {
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data berhasil dirubah')
	    	window.location.href='mata_pelajaran.php';
	    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data gagal dirubah')
	    	window.location.href='mata_pelajaran.php';
	    </SCRIPT>";
	}
}
?>