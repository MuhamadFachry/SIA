<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	include('../../koneksi.php');
	
	$kelas = $_POST['kelas'];
	$matpel = $_POST['matpel'];
	$matpel = mysqli_real_escape_string($koneksi,$matpel);

	$query  = mysqli_query($koneksi,"insert into matpel_kelas (idkelas,idmatpel) values ('$kelas','$matpel')");
	if ($query) {
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data berhasil ditambahkan')
	    	window.location.href='mata_pelajaran_kelas.php';
	    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data gagal ditambahkan')
	    	window.location.href='mata_pelajaran_kelas.php';
	    </SCRIPT>";
	}
}
?>