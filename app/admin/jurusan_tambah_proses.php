<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	include('../../koneksi.php');
	$jurusan  = $_POST['jurusan'];
	$query  = mysqli_query($koneksi,"insert into jurusan (jurusan) values ('$jurusan')");
	if ($query) {
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data berhasil ditambahkan')
	    	window.location.href='jurusan.php';
	    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Data gagal ditambahkan')
	    	window.location.href='jurusan.php';
	    </SCRIPT>";
	}
}
?>