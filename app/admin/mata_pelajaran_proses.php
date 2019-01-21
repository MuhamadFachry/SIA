<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	include('../../koneksi.php');
	$guru  = $_POST['guru'];
	$matpel  = $_POST['matpel'];
	$kkm = $_POST['kkm'];
	
	$matpel = mysqli_real_escape_string($koneksi, $matpel);
	$query  = mysqli_query($koneksi,"insert into matpel (nip,nama_matpel,kkm) values ('$guru','$matpel','$kkm')");
	if ($query) {
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data berhasil ditambahkan')
	    	window.location.href='mata_pelajaran_tambah.php';
	    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data gagal ditambahkan')
	    	window.location.href='mata_pelajaran_tambah.php';
	    </SCRIPT>";
	}
}
?>