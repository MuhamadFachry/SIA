<?php 
include('../../koneksi.php');
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
$nilai = $_POST['nilai'];
$idmatpel = $_POST['idmatpel'];

$n = count($nilai);

for ($i=0; $i <$n ; $i++) { 
	$query=mysqli_query($koneksi,"insert into nilai (idmatpel,idkelas,nis,nilai) values ('".$idmatpel[$i]."','$kelas','$nis','".$nilai[$i]."')");
	if ($query) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Berhasil Input')
    window.location.href='nilai_siswa.php?kelas=$kelas';
    </SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Gagal')
    window.location.href='nilai_siswa.php?kelas=$kelas';
    </SCRIPT>");
	}

}




?>