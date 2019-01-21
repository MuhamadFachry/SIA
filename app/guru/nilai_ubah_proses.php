<?php 
include('../../koneksi.php');
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
$nilai = $_POST['nilai'];
$idmatpel = $_POST['idmatpel'];

$n = count($nilai);

for ($i=0; $i <$n ; $i++) { 
	$query=mysqli_query($koneksi,"update nilai set nilai='".$nilai[$i]."' where idkelas='$kelas' and nis='$nis' and idmatpel='".$idmatpel[$i]."'");
	
	if ($query) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Berhasil Ubah')
    window.location.href='nilai_siswa.php?kelas=$kelas';
    </SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Gagal ubah')
    window.location.href='nilai_siswa.php?kelas=$kelas';
    </SCRIPT>");
	}

}




?>