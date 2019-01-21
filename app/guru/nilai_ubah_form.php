<?php
$kelas=$_GET['kelas'];
$id=$_GET['id'];

?>

<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Ubah Nilai Siswa</h3>
                  </div>
                </div>

                
                <div class="col-md-12">
                <form action="nilai_ubah_proses.php" method="post">
                <input type="hidden" name="kelas" value="<?php echo $kelas; ?>">
                <input type="hidden" name="nis" value="<?php echo $id; ?>">
                	<table class="table table-bordered">
                		<thead>
                			<th width="5%">No.</th>
                			<th>Nama Matpel</th>
                			<th width="7%">KKM</th>
                			<th width="5%">Nilai</th>

                		</thead>

                		<tbody>
                			<?php 
                			$query=mysqli_query($koneksi,"select * from matpel_kelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel inner join nilai on matpel_kelas.idmatpel=nilai.idmatpel where matpel_kelas.idmatpel!='2' and matpel_kelas.idmatpel!='13' and matpel_kelas.idkelas='$kelas' and nilai.nis='$id'");
                			$i=1;
                			while ($data=mysqli_fetch_array($query)) { 
                				echo "<tr>
                				<td>$i</td>
                				<td>".$data['nama_matpel']."</td>
                				<td>".$data['kkm']."</td>
                				<td><input type='text' style='width:50px;' class='form-group' name='nilai[]' required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='3' value='".$data['nilai']."'><input type='hidden' name='idmatpel[]' value='".$data['idmatpel']."'>
                				</td>
                				</tr>";
                				
                				$i++;
                			}
                			?>
                		</tbody>
                        <tfoot>
                        <?php 
                            $query=mysqli_query($koneksi,"SELECT round(avg(nilai), 2) as nilai, round(avg(kkm), 2) as kkm FROM `nilai` inner join matpel on nilai.idmatpel=matpel.idmatpel where nis='$id' and idkelas='$kelas'");
                            $data=mysqli_fetch_array($query);
                        ?>
                            <th colspan="2">Nilai Rata-Rata</th>
                            <th><?php echo $data['kkm']; ?></th>
                            <th><?php echo $data['nilai']; ?></th>
                        </tfoot>
                	</table>
                	<button type="submit" class="btn btn-success pull-right">Ubah</button>
                	</form>
                </div>
              </div>
            </div>
</div>
          