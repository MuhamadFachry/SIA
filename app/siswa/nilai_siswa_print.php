
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




$pdf->SetFont('Arial','',10);
$pdf->Cell(20,5,'No. ',1,0,'C');
$pdf->Cell(130,5,'Nama Matpel. ',1,0,'C');
$pdf->Cell(20,5,'kkm. ',1,0,'C');
$pdf->Cell(20,5,'Nilai. ',1,0,'C');

$pdf->Ln();
$query = mysqli_query($koneksi,"select * from nilai inner join matpel on nilai.idmatpel=matpel.idmatpel where nilai.nis='$id'");
$i=1;
while ($data=mysqli_fetch_array($query)) {
    $pdf->Cell(20,5,$i,1,0,'C');
    $pdf->Cell(130,5,$data['nama_matpel'],1,0,'L');
    $pdf->Cell(20,5,$data['kkm'],1,0,'C');
    $pdf->Cell(20,5,$data['nilai'],1,0,'C');
    $i++;
    $pdf->Ln();
}
$query=mysqli_query($koneksi,"SELECT round(avg(nilai), 2) as nilai, round(avg(kkm), 2) as kkm FROM `nilai` inner join matpel on nilai.idmatpel=matpel.idmatpel where nis='$id'");
$data=mysqli_fetch_array($query);
$pdf->Cell(150,5,'Nilai Rata Rata',1,0,'C');
$pdf->Cell(20,5,$data['kkm'],1,0,'C');
$pdf->Cell(20,5,$data['nilai'],1,0,'C');
$pdf->Ln();



$pdf->Output('D','Nilai_Siswa.pdf');
?>