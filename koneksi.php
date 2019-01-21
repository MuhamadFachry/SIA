<?php
$host = "localhost";
$user = "root";
$pass = "";
$db ="sekolah";
$koneksi = mysqli_connect($host, $user, $pass);
if (!$koneksi) {
echo "Koneksi ke server tidak berhasil";
};
$database = mysqli_select_db($koneksi,$db);
if (!$database) {
echo "Koneksi ke database tidak berhasil";
}
mysqli_select_db($koneksi,$db) or die ("Database not Found !");
//fungsi ini digunakan untuk membuat koneksi ke database
?>