
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Data Guru</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<table id="example" class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <td width="3%">No</td>
    <td width="8%">NIP</td>
    <td>username</td>
    <td>Nama</td>
    <td>Jenis Kelamin</td>
    <td>TTL</td>
    <td>Telepon</td>
    <td width="15%">Aksi</td>
  </thead>
  <tbody>
    <?php 
    
    $query="select * from guru where nip!='000000' and nip!='999999' order by username";
    $hasil=mysqli_query($koneksi,$query);
    $i=1;
    while($data=mysqli_fetch_array($hasil)){
      echo "<tr><td>".$i."</td><td>".$data['nip']."</td><td>".$data['username']."</td><td>".$data['nama']."</td><td>".$data['jenis_kelamin']."</td><td>".$data['tempat'].", ".$data['tgl_lahir']."</td><td>".$data['telepon']."</td>";
      echo "<td>";

      
       echo "<a href='guru_ubah.php?id=".$data['nip']."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-edit'></span> Ubah</a> 
       <a href='guru_hapus.php?id=".$data['nip']."' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a>";
      


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
          