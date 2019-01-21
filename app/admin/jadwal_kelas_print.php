
<?php
require('../../assets/fpdf181/fpdf.php');
include '../../koneksi.php';
//define('FPDF_FONTPATH', 'fpdf181/font/');
session_start();
#setting judul laporan dan header tabel
$id=$_GET['id'];


class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Move to the right
    $this->Cell(0,5,'SMK BINA MANDIRI','0','1','C',false);
    // Title
    $this->SetFont('Arial','B',8);
    // Line break
    $this->Cell(0,5,'Alamat : Jl H. Sulaiman no 10 Bedahan Sawangan, Depok','0','1','C',false);
    $this->Cell(0,5,'Telepon : (021) 55664685','0','1','C',false);
	$this->Cell(0,5,'Website : http://www.binamandiri.sch.id','0','1','C',false);
	$this->Ln(2);
	$this->Cell(190,0.6,'','0','1','C',true);
	$this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();



$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
$jam = array("07.15-08.35","08.35-09.50","09.50-10.10","10.10-10.40","10.40-11.20",
                  "11.20-12.00","12.00-12.30","12.30-13.50");
$pdf->SetFont('Arial','',8);
$pdf->Cell(14,6,'Hari ',1,0,'C');
$n=count($jam);
for ($i=0; $i <$n ; $i++) {
	$pdf->Cell(22,6,$jam[$i],1,0,'C');

}
$pdf->Ln();

$n=count($hari);
for ($i=0; $i <$n ; $i++) {
	$pdf->Cell(14,6,$hari[$i],1,0,'C');
	$query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$id' and hari='".$i."' and jam='1'");
    $data=mysqli_fetch_array($query);
    $pdf->Cell(22,6,$data['nama_matpel'],1,0,'C');

    $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$id' and hari='".$i."' and jam='2'");
    $data=mysqli_fetch_array($query);
    $pdf->Cell(22,6,$data['nama_matpel'],1,0,'C');


    $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$id' and hari='".$i."' and jam='3'");
    $data=mysqli_fetch_array($query);
    $pdf->Cell(22,6,$data['nama_matpel'],1,0,'C');

    $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$id' and hari='".$i."' and jam='4'");
    $data=mysqli_fetch_array($query);
    $pdf->Cell(22,6,$data['nama_matpel'],1,0,'C');

    $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$id' and hari='".$i."' and jam='5'");
    $data=mysqli_fetch_array($query);
    $pdf->Cell(22,6,$data['nama_matpel'],1,0,'C');

    $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$id' and hari='".$i."' and jam='6'");
    $data=mysqli_fetch_array($query);
    $pdf->Cell(22,6,$data['nama_matpel'],1,0,'C');

    $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$id' and hari='".$i."' and jam='7'");
    $data=mysqli_fetch_array($query);
    $pdf->Cell(22,6,$data['nama_matpel'],1,0,'C');

    $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$id' and hari='".$i."' and jam='8'");
    $data=mysqli_fetch_array($query);
    $pdf->Cell(22,6,$data['nama_matpel'],1,0,'C');

    $pdf->Ln();

}


$query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel ");

$pdf->Output('D','Jadwal_kelas.pdf');
?>