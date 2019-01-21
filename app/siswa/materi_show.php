
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Data Materi</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<table id="example" class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <td>No</td><td>Judul</td><td>Mata pelajaran</td><td>Upload by </td><td width="10%">Download</td>
  </thead>
  <tbody>
    <?php 
    
    $query="select * from materi inner join matpel on materi.idmatpel=matpel.idmatpel inner join guru on materi.nip=guru.nip";
    $hasil=mysqli_query($koneksi,$query);
    $i=1;
    while($data=mysqli_fetch_array($hasil)){
      echo "<tr><td>".$i."</td><td>".$data['judul']."</td><td>".$data['nama_matpel']."</td><td>".$data['nama']."</td><td><a href='../../assets/library/".$data['file']."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-download'></span> Download</a></td></tr>";
      
      
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
          