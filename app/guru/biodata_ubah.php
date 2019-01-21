<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
include('../../koneksi.php');
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tahun']."-".$_POST['bulan']."-".$_POST['hari'];
$jkel = $_POST['jkel'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];






$time = date("d-m-Y")."-".time();
$nama_file = $time."-".$_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "../../assets/propic/".$nama_file;

if(move_uploaded_file($tmp_file, $path)){
	$query = mysqli_query($koneksi,"update guru set nama='$nama', jenis_kelamin='$jkel',tempat='$tempat',tgl_lahir = '$tanggal',telepon='$telepon',alamat='$alamat',foto='$nama_file' where nip='$nip'");
	if($query){
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Update Berhasil')
    	window.location.href='index.php';
    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Gagal Update')
    	window.location.href='index.php';
    </SCRIPT>";
	}
}
else{
	$query = mysqli_query($koneksi,"update guru set nama='$nama', jenis_kelamin='$jkel',tempat='$tempat',tgl_lahir = '$tanggal',telepon='$telepon',alamat='$alamat' where nip='$nip'");
	if($query){
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Update Berhasil')
    	window.location.href='index.php';
    </SCRIPT>";
	}else{
		echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Gagal Update')
    	window.location.href='index.php';
    </SCRIPT>";
	}
}




}
?>