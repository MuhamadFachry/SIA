<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
include('../../koneksi.php');




$query = mysqli_query($koneksi,"select * from jadwal_ujian where status='uts'");
$cek = mysqli_num_rows($query);
if ($cek==0) {
	$time = date("d-m-Y")."-".time();
	$nama_file = $time."-".$_FILES['uts']['name'];
	$tmp_file = $_FILES['uts']['tmp_name'];
	$path = "../../assets/jadwal_ujian/".$nama_file;
	if (move_uploaded_file($tmp_file, $path)) {
		$query=mysqli_query($koneksi,"insert into jadwal_ujian (file,status) values ('$nama_file','uts')");
		if ($query) {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Berhasil Upload jadwal')
		    window.location.href='jadwal_uts.php';
		    </SCRIPT>");

		}else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Gagal Upload jadwal')
		    window.location.href='jadwal_uts.php';
		    </SCRIPT>");
		}
	}
	
}else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Jadwal UTS sudah ada')
		    window.location.href='jadwal_uts.php';
		    </SCRIPT>");

}

}


?>