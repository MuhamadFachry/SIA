<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Tambah Akun <small>(Input akun baru)</small></h3>
                  </div>
                </div>

                
                <div class="col-md-12">








<form id=form1  action="admin_tambah.php" method="post">
	<div class="col-md-6">
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

	<div class="col-md-6">
    <div class="row">
      <div class="col-md-3"><label>Nama</label></div>
      <div class="col-md-3"><input type="text" name="nama" class="form-group" required></div>
    </div>

  <div class="row">
      <div class="col-md-3"><label>No Admin</label></div>
      <div class="col-md-3"><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="8" name="no_admin" class="form-group" required></div>
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
          