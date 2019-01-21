<?php
include('../../koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$konfirm = $_POST['konfirm'];
$nama = $_POST['nama'];
$no_admin=  $_POST['no_admin'];




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
			     	window.location.href='admin.php';</SCRIPT>";
					}else{


						$query="select * from guru where username='$username'";
						$hasil=mysqli_query($koneksi,$query);
						$cek=mysqli_num_rows($hasil);
						if($cek!=0){
							echo "<SCRIPT LANGUAGE='JavaScript'>
					 	window.alert('Username telah digunakan')
				     	window.location.href='admin.php';</SCRIPT>";
						}else{
							$query="select * from siswa where username='$username'";
							$hasil=mysqli_query($koneksi,$query);
							$cek=mysqli_num_rows($hasil);
							if($cek!=0){
							echo "<SCRIPT LANGUAGE='JavaScript'>
					 		window.alert('Username telah digunakan')
				     		window.location.href='admin.php';</SCRIPT>";
							}else{
								
								$password= str_replace("'","&acute;",$password);
								$query="insert into admin (username,password,nama,no_admin) values ('".$username."','".md5($password)."','".$nama."','".$no_admin."')";
								$hasil=mysqli_query($koneksi,$query);
								if ($hasil) {
									echo "<SCRIPT LANGUAGE='JavaScript'>
									window.alert('Akun telah ditambahkan')
							    	window.location.href='admin.php';
							    </SCRIPT>";
								}else{
									echo "<SCRIPT LANGUAGE='JavaScript'>
									window.alert('Akun gagal ditambahkan')
							    	window.location.href='admin.php';
							    </SCRIPT>";
								}



							}

						}

				}


	
}




?>