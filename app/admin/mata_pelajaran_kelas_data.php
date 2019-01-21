
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
      
     <form action="mata_pelajaran_kelas.php" method="post">

      <div class="row">
      <div class="col-md-3"><label style="font-size: 20px;">Kelas</label></div>
      <div class="col-md-3">

        <select name="kelas" class="form-control" style="width: 115px;text-align: left;">
          <option selected disabled="">Pilih kelas</option>
          <?php 
            $query=mysqli_query($koneksi,"select * from kelas");
            while ($data=mysqli_fetch_array($query)) { ?>
              <option value="<?php echo $data['idkelas']; ?>"><?php echo $data['tingkat'].$data['kelas']; ?></option>
           <?php }
          ?>
          
        </select>
      </div>
     
        <button type="submit" class="btn btn-success btn-sm">Search</button></form>
      

    </div>

    

  </div>




 




 </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          

<hr>



          <table id="example" class="table table-striped table-bordered table-hover table-condensed">
  <thead>
    <td width="5%">No</td><td width="25%">Kelas</td><td>Nama Matpel</td><td>Pengajar</td><td width="10%">Aksi</td>
  </thead>
  <tbody>
    <?php 
    
    if (isset($_POST['kelas'])) {
      $query="select * from matpel_kelas inner join kelas on matpel_kelas.idkelas=kelas.idkelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel inner join guru on matpel.nip=guru.nip where matpel_kelas.idkelas='".$_POST['kelas']."'";
      $hasil=mysqli_query($koneksi,$query);
      $i=1;
      while($data=mysqli_fetch_array($hasil)){
        echo "<tr><td>".$i."</td><td>".$data['tingkat'].$data['kelas']."</td><td>".$data['nama_matpel']."</td><td>".$data['nama']."</td>";
        echo "<td>";

        
         echo "<a href='mata_pelajaran_kelas_hapus.php?id=".$data['idmatpel_kelas']."' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a>";
        


          echo "</td></tr>";
        $i++;

      }
    }
    
    
    ?>
  </tbody>
</table>