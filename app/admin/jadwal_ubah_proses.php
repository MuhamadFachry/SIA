<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
	include('../../koneksi.php');
	$kelas = $_POST['kelas'];
	

	
		$n = count($_POST['matpel1']);
		$hari = $_POST['hari'];


		$jam1 = $_POST['jam1'];
		$jam2 = $_POST['jam2'];
		$jam3 = $_POST['jam3'];
		$jam4 = $_POST['jam4'];
		$jam5 = $_POST['jam5'];
		$jam6 = $_POST['jam6'];
		$jam7 = $_POST['jam7'];
		$jam8 = $_POST['jam8'];

		$matpel1 = $_POST['matpel1'];
		$matpel2 = $_POST['matpel2'];
		$matpel3 = $_POST['matpel3'];
		$matpel4 = $_POST['matpel4'];
		$matpel5 = $_POST['matpel5'];
		$matpel6 = $_POST['matpel6'];
		$matpel7 = $_POST['matpel7'];
		$matpel8 = $_POST['matpel8'];
		$hari2[] = "";
		for ($i=0; $i <$n ; $i++) { 
			// echo $_POST['hari'][$i]."<br>";
			if ($hari[$i]=="Senin"){
				$hari2=0;
			}elseif ($hari[$i]=="Selasa") {
				$hari2=1;		
			}elseif ($hari[$i]=="Rabu") {
				$hari2=2;		
			}elseif ($hari[$i]=="Kamis") {
				$hari2=3;		
			}elseif ($hari[$i]=="Jumat") {
				$hari2=4;		
			}elseif ($hari[$i]=="Sabtu") {
				$hari2=5;		
			}
			
			$input1 = mysqli_query($koneksi,"update jadwal_matpel set idmatpel='".$matpel1[$i]."' where idkelas='$kelas' and hari='".$hari2."' and jam='".$jam1[$i]."'");
			if ($input1) {
							$input2 = mysqli_query($koneksi,"update jadwal_matpel set idmatpel='".$matpel2[$i]."' where idkelas='$kelas' and hari='".$hari2."' and jam='".$jam2[$i]."'");
							if ($input2) {
								$input3 = mysqli_query($koneksi,"update jadwal_matpel set idmatpel='".$matpel3[$i]."' where idkelas='$kelas' and hari='".$hari2."' and jam='".$jam3[$i]."'");
								if ($input3) {
									$input4 = mysqli_query($koneksi,"update jadwal_matpel set idmatpel='".$matpel4[$i]."' where idkelas='$kelas' and hari='".$hari2."' and jam='".$jam4[$i]."'");
									if ($input4) {
										$input5 = mysqli_query($koneksi,"update jadwal_matpel set idmatpel='".$matpel5[$i]."' where idkelas='$kelas' and hari='".$hari2."' and jam='".$jam5[$i]."'");
										if ($input5) {
											$input6 = mysqli_query($koneksi,"update jadwal_matpel set idmatpel='".$matpel6[$i]."' where idkelas='$kelas' and hari='".$hari2."' and jam='".$jam6[$i]."'");	
											if ($input6) {
																					
																					$input7 = mysqli_query($koneksi,"update jadwal_matpel set idmatpel='".$matpel7[$i]."' where idkelas='$kelas' and hari='".$hari2."' and jam='".$jam7[$i]."'");
																					if ($input7) {
																						$input8 = mysqli_query($koneksi,"update jadwal_matpel set idmatpel='".$matpel8[$i]."' where idkelas='$kelas' and hari='".$hari2."' and jam='".$jam8[$i]."'");
																						if ($input8) {
																							echo ("<SCRIPT LANGUAGE='JavaScript'>
																						    window.alert('Perubahan berhasil')
																						    window.location.href='jadwal.php';
																						    </SCRIPT>");

																						}
																						else{
																							echo ("<SCRIPT LANGUAGE='JavaScript'>
																						    window.alert('Perubahan Gagal')
																						    window.location.href='jadwal.php';
																						    </SCRIPT>");
																						}
																					}
																				}									}
									}
								}
							}
						}			
		}
		
	
	

}
?>