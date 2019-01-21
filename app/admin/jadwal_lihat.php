
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Data Jadwal Tersedia</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<table id="example" class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <td width="5%">No</td><td>Kelas</td><td>Wali Kelas</td><td width="10%">Detail</td><td width="15%">Aksi</td>
  </thead>
  <tbody>
    <?php 
    
    $query="select * from jadwal_matpel inner join kelas on jadwal_matpel.idkelas=kelas.idkelas inner join guru on kelas.nip=guru.nip group by jadwal_matpel.idkelas";
    $hasil=mysqli_query($koneksi,$query);
    $i=1;
    while($data=mysqli_fetch_array($hasil)){
      echo "<tr><td>".$i."</td><td>".$data['tingkat'].$data['kelas']."</td><td>".$data['nama']."</td>
      <td><a href='jadwal_lihat_detail.php?id=".$data['idkelas']."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-zoom-in'></span> Lihat</a></td>
      ";
      echo "<td>";

      
       echo "
       <a href='jadwal_ubah.php?id=".$data['idkelas']."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-edit'></span> Ubah</a> 
       <a href='jadwal_hapus.php?id=".$data['idkelas']."' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a>";
      


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
          