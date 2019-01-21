
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Data Jadwal UAS</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<table id="example" class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <td width="5%">No</td><td>Tipe</td><td>Nama file</td><td width="10%">Download</td><td width="15%">Hapus</td>
  </thead>
  <tbody>
    <?php 
    
    $query="select * from jadwal_ujian where status='uas'";
    $hasil=mysqli_query($koneksi,$query);
    $i=1;
    while($data=mysqli_fetch_array($hasil)){
      echo "<tr><td>".$i."</td><td>".$data['status']."</td><td>".$data['file']."</td>
      <td><a href='../../assets/jadwal_ujian/".$data['file']."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-download'></span> Download</a></td>
      ";
      echo "<td>";

      
       echo "
       
       <a href='jadwal_uas_hapus.php?id=".$data['idjadwal_ujian']."' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a>";
      


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
          