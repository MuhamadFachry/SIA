
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
    <td width="15%">Aksi</td>
  </thead>
  <tbody>
    <?php 
    
    $query="select * from siswa inner join kelas on kelas.idkelas=siswa.idkelas order by username";
    $hasil=mysqli_query($koneksi,$query);
    $i=1;
    while($data=mysqli_fetch_array($hasil)){
      echo "<tr><td>".$i."</td><td>".$data['nis']."</td><td>".$data['nisn']."</td><td>".$data['tingkat'].$data['kelas']."</td><td>".$data['username']."</td><td>".$data['nama']."</td><td>".$data['jenis_kelamin']."</td><td>".$data['tempat'].", ".$data['tgl_lahir']."</td><td>".$data['telepon']."</td>";
      echo "<td>";

      
       echo "
       <a href='siswa_ubah.php?id=".$data['nip']."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-edit'></span> Ubah</a>
       <a href='siswa_hapus.php?id=".$data['nis']."' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a>";
      


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
          