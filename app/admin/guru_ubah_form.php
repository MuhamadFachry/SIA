<?php

  $id= $_GET['id'];
  $query=mysqli_query($koneksi,"select *,day(tgl_lahir) as day, month(tgl_lahir) as month,year(tgl_lahir) as year from guru where nip ='$id'");
  $data=mysqli_fetch_array($query);
            include '../../function/imgpreview.php';
          ?>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Ubah data guru</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1 enctype="multipart/form-data"  action="guru_ubah_proses.php" method="post">
	

	<div class="col-md-6">

    <div class="row">
      <div class="col-md-3"><label>Nip</label></div>
      <div class="col-md-3"><input type="hidden" name="nip" class="form-group" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $data['nip']; ?>">
      <input type="text" disabled class="form-group" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $data['nip']; ?>">
      </div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Nama</label></div>
      <div class="col-md-3"><input type="text" name="nama" class="form-group" value="<?php echo $data['nama']; ?>"></div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Tempat lahir</label></div>
      <div class="col-md-3"><input type="text" name="tempat" class="form-group" value="<?php echo $data['tempat']; ?>"></div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Tanggal lahir</label></div>
      <div class="col-md-4">
        <select name="hari">
          <?php for($hari=1;$hari<=31;$hari++){
            if ($data['day']==$hari) {
              echo "<option value='$hari' selected>$hari</option>";
            }else{
              echo "<option value='$hari'>$hari</option>";
            }
          } 
          ?>
        </select>
        <select  name="bulan">
          <?php 
          
          for($bulan=1;$bulan<=12;$bulan++){
            if ($data['month']==$bulan) {
              echo "<option value='".$bulan."' selected>".$bulan."</option>";
            }else{
              echo "<option value='".$bulan."'>".$bulan."</option>";
            }
          } 
          ?>
        </select>
        <select name="tahun">
          <?php 
          
          for($tahun=1993;$tahun>=1955;$tahun--){
            if($data['year']==$tahun){
              echo "<option value='".$tahun."' selected>".$tahun."</option>";
            }else{
              echo "<option value='".$tahun."'>".$tahun."</option>";
            }
          } 
          ?>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Jenis Kelamin</label></div>
      <div class="col-md-3">
        

        <?php 

        if ($data['jenis_kelamin']=='Laki-laki') { ?>
         <input type="radio" name="jkel" class="form-group" checked="" value="Laki-laki" /><label> Laki Laki</label><br>
            <input type="radio" name="jkel" class="form-group" value="Perempuan" /><label> Perempuan</label>
          
      <?php  }elseif($data['jenis_kelamin']=='Perempuan'){ ?>
            <input type="radio" name="jkel" class="form-group" value="Laki-laki" /><label> Laki Laki</label><br>
            <input type="radio" name="jkel" class="form-group" checked="" value="Perempuan" /><label> Perempuan</label>
          
      <?php  }

      ?>
      </div> 
      
    </div>

    <div class="row">
      <div class="col-md-3"><label>Telepon</label></div>
      <div class="col-md-3"><input type="text" name="telepon" maxlength="13" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-group" value="<?php echo $data['telepon']; ?>"></div>
    </div>


    
  
    
		<div class="row">
      <button type="submit" class="btn btn-success">Ubah</button>
    </div>

	</div>


  <div class="col-md-6">


    <div class="row">
      <div class="col-md-3"><label>Alamat</label></div>
      <div class="col-md-3"><textarea name="alamat" class="form-group"><?php echo $data['alamat']; ?></textarea></div>
    </div>
    

    

    


    

    
  </div>
</form>





 </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
          