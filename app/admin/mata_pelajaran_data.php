
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Data Matpel</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<table id="example" class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <td width="5%">No</td><td width="25%">Mata Pelajaran</td><td>Pengajar</td><td width="5%">KKM</td><td width="15%">Aksi</td>
  </thead>
  <tbody>
    <?php 
    
    $query="select * from matpel inner join guru on guru.nip=matpel.nip where idmatpel!='0' and idmatpel!='1' and idmatpel!='2'";
    $hasil=mysqli_query($koneksi,$query);
    $i=1;
    while($data=mysqli_fetch_array($hasil)){
      echo "<tr><td>".$i."</td><td>".$data['nama_matpel']."</td><td>".$data['nama']."</td><td>".$data['kkm']."</td>";
      echo "<td>";

      
       echo "

       <a href='mata_pelajaran_ubah.php?id=".$data['idmatpel']."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-edit'></span> Ubah</a>
       <a href='mata_pelajaran_hapus.php?id=".$data['idmatpel']."' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a>";
      


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
          