<?php 
include('../../koneksi.php');
$id = $_GET['id'];


$query = mysqli_query($koneksi,"delete from materi where idmateri='$id'");
if ($query) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Berhasil hapus materi')
    window.location.href='materi.php';
    </SCRIPT>");

}else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Gagal hapus materi')
    window.location.href='materi.php';
    </SCRIPT>");
}


?>