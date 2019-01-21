<?php 
session_start();
include '../../koneksi.php';
$judul = $_POST['judul'];
$idmatpel = $_POST['idmatpel'];


$time = date("d-m-Y")."-".time();
$nama_file = $time."-".$_FILES['upload']['name'];
$tmp_file = $_FILES['upload']['tmp_name'];
$path = "../../assets/library/".$nama_file;

if(move_uploaded_file($tmp_file, $path)){
	$query="insert into materi (idmatpel,nip,judul,file) values ('$idmatpel','".$_SESSION['no_login']."','$judul','$nama_file')";
	$hasil=mysqli_query($koneksi,$query);
	if($hasil){
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Materi berhasil diupload')
    	window.location.href='materi.php';
    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Materi berhasil diupload')
    	window.location.href='materi.php';
    </SCRIPT>";
	}
}
else{
	echo "Gagal upload ";
	echo "<br><a href='materi.php'>Kembali Ke Form</a>";
}

?>