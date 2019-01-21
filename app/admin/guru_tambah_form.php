<?php
            include '../../function/imgpreview.php';
          ?>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Tambah data guru</h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1 enctype="multipart/form-data"  action="guru_tambah_proses.php" method="post">
	

	<div class="col-md-6">

    <div class="row">
      <div class="col-md-3"><label>Nip</label></div>
      <div class="col-md-3"><input type="text" name="nip" class="form-group" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required></div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Nama</label></div>
      <div class="col-md-3"><input type="text" name="nama" class="form-group" required></div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Tempat lahir</label></div>
      <div class="col-md-3"><input type="text" name="tempat" class="form-group" required></div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Tanggal lahir</label></div>
      <div class="col-md-4">
        <select name="hari">
          <?php for($hari=1;$hari<=31;$hari++){
            echo "<option value='$hari'>$hari</option>";
          } 
          ?>
        </select>
        <select  name="bulan">
          <?php 
          
          for($bulan=1;$bulan<=12;$bulan++){
            echo "<option value='".$bulan."'>".$bulan."</option>";
          } 
          ?>
        </select>
        <select name="tahun">
          <?php 
          
          for($tahun=1993;$tahun>=1955;$tahun--){
            echo "<option value='".$tahun."'>".$tahun."</option>";
          } 
          ?>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Jenis Kelamin</label></div>
      <div class="col-md-3">
        <input type="radio" name="jkel" class="form-group" checked="" value="Laki-laki" /><label> Laki Laki</label><br>
        <input type="radio" name="jkel" class="form-group" value="Perempuan" /><label> Perempuan</label>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3"><label>Telepon</label></div>
      <div class="col-md-3"><input type="text" name="telepon" maxlength="13" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-group" required></div>
    </div>


    
  
    
		<div class="row">
      <button type="submit" class="btn btn-success">Tambah</button>
    </div>

	</div>


  <div class="col-md-6">


    <div class="row">
      <div class="col-md-3"><label>Alamat</label></div>
      <div class="col-md-3"><textarea name="alamat" class="form-group"></textarea></div>
    </div>
    

    

    <div class="row">
      <div class="col-md-3"><label>Username</label></div>
      <div class="col-md-3"><input type="text" name="username" class="form-group" required></div>
    </div>
    <div class="row">
      <div class="col-md-3"><label>Password</label></div>
      <div class="col-md-3"><input type="password" name="password" class="form-group" required></div>
    </div>
    <div class="row">
      <div class="col-md-3"><label>Ulang Password</label></div>
      <div class="col-md-3"><input type="password" name="konfirm" class="form-group" required></div>
    </div>


    

    
  </div>
</form>





 </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
          