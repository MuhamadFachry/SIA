<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	include('../../koneksi.php');
	$tingkat = $_POST['tingkat'];
	$jurusan  = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$guru = $_POST['guru'];
	$query  = mysqli_query($koneksi,"insert into kelas (idjurusan,tingkat,kelas,nip) values ('$jurusan','$tingkat','$kelas','$guru')");
	if ($query) {
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data berhasil ditambahkan')
	    	window.location.href='kelas.php';
	    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data gagal ditambahkan')
	    	window.location.href='kelas.php';
	    </SCRIPT>";
	}
}
?>