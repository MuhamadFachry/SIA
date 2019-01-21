<?php
session_start();
$login=$_SESSION['adminlogin'];
include '../../koneksi.php';
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SMK BINA MANDIRI</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>SISTEM INFORMASI AKADEMIK SEKOLAH SMK BINA MANDIRI</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../../logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php 
        $query=mysqli_query($koneksi,"select * from guru where nip='".$_SESSION['no_login']."'");
        $data=mysqli_fetch_array($query);

        
      ?>

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="../../assets/propic/avatar.jpg" class="img-circle" width="100"></a></p>
                  
                  <h5 class="centered"><?php echo $_SESSION['nama']."<br>".$_SESSION['no_login']; ?></h5>
                    
                  <li class="sub-menu">
                      <a href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="admin.php" >
                          <i class="fa fa-user"></i>
                          <span>Akun Admin</span>
                      </a>
                      
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Guru</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="guru.php">Data Guru</a></li>
                          <li><a  href="guru_tambah.php">Tambah Guru</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Siswa</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="siswa.php">Data Siswa</a></li>
                          <li><a  href="siswa_tambah.php">Tambah Siswa</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Mata Pelajaran</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="mata_pelajaran.php">Data Mata Pelajaran</a></li>
                          <li><a  href="mata_pelajaran_tambah.php">Tambah Mata Pelajaran</a></li>
                          <li><a  href="mata_pelajaran_kelas.php">Mata Pelajaran kelas</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tag"></i>
                          <span>Kelas</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="jurusan.php">Jurusan</a></li>
                          <li><a  href="kelas.php">Kelas</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-tasks"></i>
                          <span>Jadwal</span>
                      </a>
                      <ul class="sub">
                        <li><a href="jadwal.php">Jadwal Matpel</a></li>
                        <li><a href="jadwal.php">Jadwal UTS</a></li>
                        <li><a href="jadwal.php">Jadwal UAS</a></li>
                      </ul>

                      
                  </li>


                  <li class="sub-menu">
                      <a href="nilai.php" class="active">
                          <i class="fa fa-user"></i>
                          <span>Nilai</span>
                      </a>
                      
                  </li>
                  
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content" style="min-height: 600px;">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Home</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	

             
                <div class="row mt">
                  <div class="col-lg-12">
                      <div class="form-panel">
                          <?php 
                            include 'nilai_tambah.php';
                          ?>
                      </div>
                  </div><!-- col-lg-12-->       
                </div><!-- /row -->

                <div class="row mt">
                  <div class="col-lg-12">
                      <div class="form-panel">
                          <?php 
                            include 'nilai_tambah_form.php';
                          ?>
                      </div>
                  </div><!-- col-lg-12-->       
                </div><!-- /row -->
            
            
          	
          	<!-- INLINE FORM ELELEMNTS -->
          	
          	
          	<!-- INPUT MESSAGES -->
          	
          	
          	<!-- INPUT MESSAGES -->
          	
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 - Arkey &copy;
              
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="../../assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="../../assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="../../assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="../../assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="../../assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="../../assets/js/form-component.js"></script>    
  <link rel="stylesheet" type="text/css" href="../../assets/datatable/css/jquery.dataTables.min.css"/>
    <!-- <script type="text/javascript" src="../../assets/datatable/js/jquery.js"></script> -->
    <script type="text/javascript" src="../../assets/datatable/js/jquery.dataTables.min.js"></script>   
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
