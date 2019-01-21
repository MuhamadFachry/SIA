<?php
            include '../../function/imgpreview.php';
            
            $id=$_GET['id'];
            $query = mysqli_query($koneksi, "select * from kelas inner join jurusan on kelas.idjurusan=jurusan.idjurusan inner join guru on kelas.nip=guru.nip where idkelas='$id'");
            $data=mysqli_fetch_array($query);
            
          ?>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Ubah data kelas</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1   action="kelas_ubah_proses.php" method="post">
	

	<div class="col-md-6">



    <div class="row">

      <div class="col-md-3"><label>Tingkat</label></div>
      <input type="hidden" name="idkelas" value="<?php echo $data['idkelas']; ?>" class="form-group">
      <select class="form-group" name="tingkat">
      <option value="<?php echo $data['tingkat']; ?>"><?php echo $data['tingkat']; ?></option>
      <?php 
        for ($i=10; $i <= 12; $i++) { 

            if ($data['tingkat']==$i) {
              
            }else{?>
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php    }
          

          
         }
      ?>
        
      </select>
      
    </div>


    <div class="row">

      <div class="col-md-3"><label>Jurusan</label></div>
      <select class="form-group" name="jurusan">
      <option value="<?php echo $data['idjurusan']; ?>"><?php echo $data['jurusan']; ?></option>
      <?php 
        $query=mysqli_query($koneksi,"select * from jurusan where idjurusan!='".$data['idjurusan']."'");
        while ($data2=mysqli_fetch_array($query)) { ?>
          <option value="<?php echo $data2['idjurusan']; ?>"><?php echo $data2['jurusan']; ?></option>
       <?php }
      ?>
        
      </select>

    </div>

    

    

    


    
  
    
		

	</div>


  <div class="col-md-6">
    <div class="row">
      <div class="col-md-3"><label>Nama Kelas</label></div>
      <div class="col-md-3"><input type="text" name="kelas" class="form-group"  required value="<?php echo $data['kelas']; ?>"></div>
    </div>

    <div class="row">

      <div class="col-md-3"><label>Wali kelas</label></div>
        <div class="col-md-3">
        <select class="form-group" name="guru">
        <option value="<?php echo $data['nip']; ?>"><?php echo $data['nama']; ?></option>
      <?php 
        $query=mysqli_query($koneksi,"select * from guru where nip!='".$data['nip']."' and nip!='000000' and nip!='999999'");
        while ($data=mysqli_fetch_array($query)) { ?>
          <option value="<?php echo $data['nip']; ?>"><?php echo $data['nama']; ?></option>
       <?php }
      ?>
        
      </select></div>

    </div>

    <div class="row">
      <button type="submit" class="btn btn-success pull-right">Ubah</button>
    </div>
    


    

    
  </div>
</form>





 </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
          