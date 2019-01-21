<?php
            
          ?>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Tambah Materi</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1   action="materi_upload.php" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-3">
        <label>Judul Materi</label>
      </div>
      <div class="col-md-3">
        <input type="text" name="judul" class="form-group">
      </div>
    </div>
  </div>

  <div class="col-md-6">

    <div class="row">
      <div class="col-md-3"><label>Mata pelajaran</label></div>
      <div class="col-md-3">
      <select name="idmatpel" class="form-group" required>
        <option disabled value="" selected>Pilih Matpel</option>
        <?php 
          $query = mysqli_query($koneksi,"select * from matpel where nip!='0'");
          while ($data=mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $data['idmatpel']; ?>"><?php echo $data['nama_matpel']; ?></option>
         <?php }
        ?>
      </select>

      </div>
      
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>Upload File</label>
      </div>
      <div class="col-md-3">
        <input type="file" name="upload" class="form-group">
      </div>
    </div>
    
<button type="submit" class="btn btn-success pull-right">Upload</button>
    


    
  
    
    

  </div>


  
</form>





 </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
          