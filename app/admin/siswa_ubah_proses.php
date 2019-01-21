<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
include('../../koneksi.php');
$nis = $_POST['nis'];
$nisn = $_POST['nisn'];
$idkelas = $_POST['kelas'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tahun']."-".$_POST['bulan']."-".$_POST['hari'];
$jkel = $_POST['jkel'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];





// $time = date("d-m-Y")."-".time();
// $nama_file = $time."-".$_FILES['gambar']['name'];
// $tmp_file = $_FILES['gambar']['tmp_name'];
// $path = "../../assets/propic/".$nama_file;


$query=mysqli_query($koneksi,"update siswa set nama='$nama',tempat='$tempat',tgl_lahir='$tanggal',jenis_kelamin='$jkel',telepon='$telepon',alamat='$alamat',idkelas='$idkelas' where nis='$nis'");

if ($query) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Berhasil merubah akun')
    window.location.href='siswa.php';
    </SCRIPT>");

}else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Gagal merubah data akun')
    window.location.href='siswa.php';
    </SCRIPT>");

}
		


	



}
?>