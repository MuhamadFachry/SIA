<?php
$kelas=$_GET['kelas'];
$id=$_GET['id'];

?>

<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Tambah Nilai Siswa</h3>
                  </div>
                </div>

                
                <div class="col-md-12">
                <form action="nilai_tambah_siswa_proses.php" method="post">
                <input type="hidden" name="kelas" value="<?php echo $kelas; ?>">
                <input type="hidden" name="nis" value="<?php echo $id; ?>">
                	<table class="table table-bordered">
                		<thead>
                			<th width="5%">No.</th>
                			<th>Nama Matpel</th>
                			<th width="7%">KKM</th>
                			<th width="15%">Nilai</th>

                		</thead>
                		<tbody>
                			<?php 
                			$query=mysqli_query($koneksi,"select * from matpel_kelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel where matpel_kelas.idmatpel!='2' and matpel_kelas.idmatpel!='13' and matpel_kelas.idkelas='$kelas'");
                			$i=1;
                			while ($data=mysqli_fetch_array($query)) { 
                				echo "<tr>
                				<td>$i</td>
                				<td>".$data['nama_matpel']."</td>
                				<td>".$data['kkm']."</td>
                				<td><input type='text' class='form-group' name='nilai[]' required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='3'><input type='hidden' name='idmatpel[]' value='".$data['idmatpel']."'>
                				</td>
                				</tr>";
                				
                				$i++;
                			}
                			?>
                		</tbody>

                	</table>
                	<button type="submit" class="btn btn-success pull-right">Tambah</button>
                	</form>
                </div>
              </div>
            </div>
</div>
          