<?php
            include '../../function/imgpreview.php';
            
            
          ?>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Tambah data kelas</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1   action="kelas_tambah_proses.php" method="post">
	

	<div class="col-md-6">



    <div class="row">

      <div class="col-md-3"><label>Tingkat</label></div>
      <select class="form-group" name="tingkat">
      <?php 
      $kelas=array("X","XI","XII");
        for ($i=0; $i < 3; $i++) { ?>
          <option value="<?php echo $kelas[$i]; ?>"><?php echo $kelas[$i]; ?></option>
        <?php }
      ?>
        
      </select>
      
    </div>


    <div class="row">

      <div class="col-md-3"><label>Jurusan</label></div>
      <select class="form-group" name="jurusan">
      <?php 
        $query=mysqli_query($koneksi,"select * from jurusan");
        while ($data=mysqli_fetch_array($query)) { ?>
          <option value="<?php echo $data['idjurusan']; ?>"><?php echo $data['jurusan']; ?></option>
       <?php }
      ?>
        
      </select>

    </div>

    

    

    


    
  
    
		

	</div>


  <div class="col-md-6">
    <div class="row">
      <div class="col-md-3"><label>Nama Kelas</label></div>
      <div class="col-md-3"><input type="text" name="kelas" class="form-group"  required></div>
    </div>

    <div class="row">

      <div class="col-md-3"><label>Wali kelas</label></div>
        <div class="col-md-3"><select class="form-group" name="guru">
      <?php 
        $query=mysqli_query($koneksi,"select * from guru where nip!='000000' and nip!='999999'");
        while ($data=mysqli_fetch_array($query)) { ?>
          <option value="<?php echo $data['nip']; ?>"><?php echo $data['nama']; ?></option>
       <?php }
      ?>
        
      </select></div>

    </div>

    <div class="row">
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
          