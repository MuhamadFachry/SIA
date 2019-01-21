<?php
            include '../../function/imgpreview.php';
          ?>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Tambah Jadwal Matpel</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1   action="jadwal_tambah_form.php" method="post">
  

  <div class="col-md-6">

    <div class="row">
      <div class="col-md-3"><label>Kelas</label></div>
      <div class="col-md-3">
      <select name="kelas" class="form-group" required>
        <option disabled value="" selected>Pilih kelas</option>
        <?php 
          $query = mysqli_query($koneksi,"select * from kelas INNER join matpel_kelas on kelas.idkelas=matpel_kelas.idkelas group by kelas.idkelas");
          while ($data=mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $data['idkelas']; ?>"><?php echo $data['tingkat'].$data['kelas']; ?></option>
         <?php }
        ?>
      </select>
      </div>
      <button type="submit" class="btn btn-success">Tambah</button>
    </div>

    

    


    
  
    
    

  </div>


  
</form>





 </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
          