<?php
session_start();
include("koneksi.php");
$user = $_POST['user'];
$user = str_replace("'","&acute;",$user);
$psw=$_POST['psw'];
$psw= str_replace("'","&acute;",$psw);


$query="select * from admin where username='".$user."' and password='".md5($psw)."'";
$hasil=mysqli_query($koneksi,$query);
$cek=mysqli_num_rows($hasil);
if($cek==0){
	// echo "<script language='javascript'>alert('Username atau password salah'); 
	// location.replace('index.php')</script>";
	$query="select * from guru where username='".$user."' and password='".md5($psw)."'";
	$hasil=mysqli_query($koneksi,$query);
	$cek=mysqli_num_rows($hasil);
	if($cek==0){

		$query="select * from siswa where username='".$user."' and password='".md5($psw)."'";
		$hasil=mysqli_query($koneksi,$query);
		$cek=mysqli_num_rows($hasil);
		if($cek==0){
			echo "<script language='javascript'>alert('Username atau password salah'); 
			location.replace('index.php')</script>";
			

		}
		else {
		$_SESSION['adminlogin'] =$user;
		$query="select * from siswa where username='".$user."' and password='".md5($psw)."'";
		$hasil=mysqli_query($koneksi,$query);
		$data=mysqli_fetch_array($hasil);
		$_SESSION['username']=$data['username'];
		$_SESSION['nama']=$data['nama'];
		$_SESSION['no_login']=$data['nis'];
		$_SESSION['jabatan']="siswa";
		$_SESSION['kelas']=$data['idkelas'];
		header("location:app/siswa/index.php");
		}


	}
	else {
	$_SESSION['adminlogin'] =$user;
	$query="select * from guru where username='".$user."' and password='".md5($psw)."'";
	$hasil=mysqli_query($koneksi,$query);
	$data=mysqli_fetch_array($hasil);
	$_SESSION['username']=$data['username'];
	$_SESSION['nama']=$data['nama'];
	$_SESSION['no_login']=$data['nip'];
	$_SESSION['jabatan']="guru";
	$_SESSION['gambar']=$data['foto'];
	header("location:app/guru/index.php");
	}


}
else {
	$_SESSION['adminlogin'] =$user;
	$query="select * from admin where username='".$user."' and password='".md5($psw)."'";
	$hasil=mysqli_query($koneksi,$query);
	$data=mysqli_fetch_array($hasil);
	$_SESSION['username']=$data['username'];
	$_SESSION['nama']=$data['nama'];
	$_SESSION['no_login']=$data['no_admin'];
	$_SESSION['jabatan']="admin";
	header("location:app/admin/index.php");
}
?>