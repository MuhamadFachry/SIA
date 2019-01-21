<?php
            
          ?>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Input Nilai</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1   action="nilai_siswa.php"  enctype="multipart/form-data">
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-3"><label>Pilih Kelas</label></div>
      <div class="col-md-3">
      <select name="kelas" class="form-group" required>
        <option disabled value="" selected>Pilih Kelas</option>
        <?php 
          $query = mysqli_query($koneksi,"select * from kelas inner join matpel_kelas on kelas.idkelas=matpel_kelas.idkelas  where nip='".$_SESSION['no_login']."' ");
          while ($data=mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $data['idkelas']; ?>"><?php echo $data['tingkat'].$data['kelas'] ?></option>
         <?php }
        ?>
      </select>

      </div>
    </div>
  </div>

  
    
<button type="submit" class="btn btn-success pull-right">Pilih</button>
    


    
  
    
    

  


  
</form>





 </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
          