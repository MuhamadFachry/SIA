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

$username = $_POST['username'];
$password = $_POST['password'];
$konfirm = $_POST['konfirm'];




// $time = date("d-m-Y")."-".time();
// $nama_file = $time."-".$_FILES['gambar']['name'];
// $tmp_file = $_FILES['gambar']['tmp_name'];
// $path = "../../assets/propic/".$nama_file;




if($password <> $konfirm){
	echo "<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Password tidak sama')
    	window.location.href='admin.php';
    </SCRIPT>";
}else{

		$query="select * from admin where username='$username'";
		$hasil=mysqli_query($koneksi,$query);
		$cek=mysqli_num_rows($hasil);
		if($cek!=0){
			echo "<SCRIPT LANGUAGE='JavaScript'>
	 	window.alert('Username telah digunakan')
     	window.location.href='guru_tambah.php';</SCRIPT>";
		}else{
			$query="select * from siswa where username='$username'";
			$hasil=mysqli_query($koneksi,$query);
			$cek=mysqli_num_rows($hasil);
			if($cek!=0){
			echo "<SCRIPT LANGUAGE='JavaScript'>
	 		window.alert('Username telah digunakan')
     		window.location.href='guru_tambah.php';</SCRIPT>";
			}else{
				
				$password= str_replace("'","&acute;",$password);
				$query="insert into guru (nip,username,password,nama,jenis_kelamin,tempat,tgl_lahir,telepon,alamat,foto) values ('$nip','".$username."','".md5($password)."','".$nama."','$jkel','$tempat','$tanggal','$telepon','$alamat','avatar.jpg')";
				$hasil=mysqli_query($koneksi,$query);
				if ($hasil) {
					echo "<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Akun telah ditambahkan')
			    	window.location.href='guru_tambah.php';
			    </SCRIPT>";
				}else{
					echo "<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Akun gagal ditambahkan')
			    	window.location.href='guru_tambah.php';
			    </SCRIPT>";
				}



			}

		}


	
}



}
?>