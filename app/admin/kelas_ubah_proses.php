<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	include('../../koneksi.php');
	$idkelas = $_POST['idkelas'];
	$tingkat = $_POST['tingkat'];
	$jurusan  = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$guru = $_POST['guru'];
	echo $idkelas;
	$query  = mysqli_query($koneksi,"update kelas set idjurusan='$jurusan',tingkat='$tingkat',kelas='$kelas',nip='$guru' where idkelas='$idkelas' ");
	if ($query) {
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data berhasil dirubah')
	    	window.location.href='kelas.php';
	    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data gagal dirubah')
	    	window.location.href='kelas.php';
	    </SCRIPT>";
	}
}
?>