<?php

$id=$_GET['id'];
$query = mysqli_query($koneksi,"select * from nilai where nis='$id'");
$cek=mysqli_num_rows($query);
$data=mysqli_fetch_array($query);
$kelas=$data['idkelas'];
if ($cek==0) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Belum ada nilai')
    window.location.href='index.php';
    </SCRIPT>");

}else{

}
?>

<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Nilai Siswa</h3>
                  </div>
                  <h4 style="color: red; ">
                      <?php 
                        $query=mysqli_query($koneksi,"select * from matpel_kelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel inner join nilai on matpel_kelas.idmatpel=nilai.idmatpel where matpel_kelas.idmatpel!='2' and matpel_kelas.idmatpel!='13' and matpel_kelas.idkelas='$kelas' and nilai.nis='$id' and nilai.nilai<matpel.kkm");
                        $cek = mysqli_num_rows($query);
                        if($cek!=0){
                            echo "Nilai ada yang kurang dari kkm!";
                        }else{

                        }
                      ?>
                  </h4>
                </div>

                
                <div class="col-md-12">
                
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
                				if ($data['nilai']<$data['kkm']) {
                                    echo "<tr style='color : red;'>
                                    <td>$i</td>
                                    <td>".$data['nama_matpel']."</td>
                                    <td>".$data['kkm']."</td>
                                    <td>".$data['nilai']."</td>
                                    
                                    </tr>";
                                }else{
                                    echo "<tr>
                                <td>$i</td>
                                <td>".$data['nama_matpel']."</td>
                                <td>".$data['kkm']."</td>
                                <td>".$data['nilai']."</td>
                                
                                </tr>";
                                }

                                
                				
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
                    <a href="nilai_print.php?id=<?php echo $id; ?>" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-print"> Print</span></a>
                	
                	
                </div>
              </div>
            </div>
</div>
          