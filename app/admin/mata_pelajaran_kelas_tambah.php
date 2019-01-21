
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Pilih mata pelajaran kelas</h3>
                  </div>
                </div>

                
                <div class="col-md-12">



  <div class="col-md-6">
      
     <form action="mata_pelajaran_kelas_proses.php" method="post">

      <div class="row">
      <div class="col-md-3"><label>Kelas</label></div>
      <div class="col-md-3">

        <select name="kelas" class="form-group">
          <?php 
            $query=mysqli_query($koneksi,"select * from kelas");
            while ($data=mysqli_fetch_array($query)) { ?>
              <option value="<?php echo $data['idkelas']; ?>"><?php echo $data['tingkat'].$data['kelas']; ?></option>
           <?php }
          ?>
          
        </select>
      </div>
    </div>

    

  </div>
  <div class="col-md-6">
      <div class="row">
      <div class="col-md-3"><label>Mata pelajaran</label></div>
      <div class="col-md-3">

        <select name="matpel" class="form-group">
          <?php 
            $query=mysqli_query($koneksi,"select * from matpel where idmatpel!='0' and idmatpel!='1'");
            while ($data=mysqli_fetch_array($query)) { ?>
              <option value="<?php echo $data['idmatpel']; ?>"><?php echo $data['nama_matpel']; ?></option>
           <?php }
          ?>
          
        </select>
        </div>
      </div>



      <div class="row">
        <button type="submit" class="btn btn-success pull-right">Tambah</button></form>
      </div>
  </div>




<!-- <table id="example" class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <td width="5%">No</td><td width="25%">Mata Pelajaran</td><td>Pengajar</td><td width="10%">Aksi</td>
  </thead>
  <tbody>
    <?php 
    
    $query="select * from matpel inner join guru on guru.nip=matpel.nip";
    $hasil=mysqli_query($koneksi,$query);
    $i=1;
    while($data=mysqli_fetch_array($hasil)){
      echo "<tr><td>".$i."</td><td>".$data['nama_matpel']."</td><td>".$data['nama']."</td>";
      echo "<td>";

      
       echo "<a href='jurusan_hapus.php?id=".$data['idmatpel']."' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a>";
      


        echo "</td></tr>";
      $i++;
    }
    ?>
  </tbody>
</table> -->




 </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          