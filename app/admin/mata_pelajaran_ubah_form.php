<?php
            include '../../function/imgpreview.php';
            
            $id = $_GET['id'];
            $query = mysqli_query($koneksi,"select * from matpel inner join guru on matpel.nip=guru.nip where idmatpel='$id'");
            $data=mysqli_fetch_array($query);
          ?>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Ubah data mata pelajaran</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1   action="mata_pelajaran_ubah_proses.php" method="post">
	

	<div class="col-md-6">



    <div class="row">
    <input type="hidden" name="idmatpel" value="<?php echo $data['idmatpel']; ?>">
      <div class="col-md-3"><label>Guru pengajar</label></div>
      <div class="col-md-3">
      <select class="form-group" name="guru">
      <option value="<?php echo $data['nip']; ?>"><?php echo $data['nama']; ?></option>
      <?php 
        $query=mysqli_query($koneksi,"select * from guru where nip!='".$data['nip']."' and nip!='000000' and nip!='999999'");
        while ($data2=mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $data2['nip']; ?>"><?php echo $data2['nama']; ?></option>
        <?php }
      ?>
        
      </select>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Mata pelajaran</label></div>
      <div class="col-md-3"><input type="text" name="matpel" class="form-group" value="<?php echo $data['nama_matpel']; ?>"  required></div>
    </div>


    

    

    

    


    
  
    
		

	</div>


  <div class="col-md-6">
    <div class="row">
      <div class="col-md-3"><label>Nilai KKM</label></div>
      <div class="col-md-3"><input type="text" name="kkm" class="form-group" value="<?php echo $data['kkm']; ?>"  required></div>
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
          