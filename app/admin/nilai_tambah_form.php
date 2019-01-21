<?php
//$kelas=$_GET['kelas'];
  
?>

<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Data Siswa</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<table id="example" class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <td width="3%">No</td>
    <td width="8%">NIS</td>
    <td width="8%">NISN</td>
    <td width="8%">Kelas</td>
    <td>username</td>
    <td>Nama</td>
    <td>Jenis Kelamin</td>
    <td>TTL</td>
    <td>Telepon</td>
    <td width="5%">Aksi</td>
  </thead>
  <tbody>
    <?php 
    if (isset($_GET['nis'])) {
      $query="select * from siswa inner join kelas on kelas.idkelas=siswa.idkelas inner join nilai on nilai.nis=siswa.nis where siswa.nis='".$_GET['nis']."' order by username";
    }else{
      
      $query="select * from siswa inner join kelas on kelas.idkelas=siswa.idkelas inner join nilai on nilai.nis=siswa.nis order by username";
    }
    
    $hasil=mysqli_query($koneksi,$query);
    $i=1;
    while($data=mysqli_fetch_array($hasil)){
      echo "<tr><td>".$i."</td><td>".$data['nis']."</td><td>".$data['nisn']."</td><td>".$data['tingkat'].$data['kelas']."</td><td>".$data['username']."</td><td>".$data['nama']."</td><td>".$data['jenis_kelamin']."</td><td>".$data['tempat'].", ".$data['tgl_lahir']."</td><td>".$data['telepon']."</td>";
      echo "<td>";

      
       

       $query=mysqli_query($koneksi,"select * from nilai where nis='".$data['nis']."'");
       $cek=mysqli_num_rows($query);
       if ($cek==0) {
         // echo "<a href='nilai_tambah_siswa.php?id=".$data['nis']."&kelas=".$kelas."' class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-plus'></span> Tambah</a>";
       }else{
          echo "
       <a href='nilai_lihat.php?id=".$data['nis']."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-edit'></span> Lihat</a>";
       }

       
      


        echo "</td></tr>";
      $i++;
    }
    ?>
  </tbody>
</table>




 </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          