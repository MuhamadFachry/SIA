<?php
            include '../../function/imgpreview.php';
            $kelas=$_GET['id'];
            
            $query = mysqli_query($koneksi,"select * from jadwal_matpel where idkelas='$kelas'");
              
            $hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
                $jam = array("07.15-08.35","08.35-09.50","09.50-10.10","10.10-10.40","10.40-11.20",
                  "11.20-12.00","12.00-12.30","12.30-13.50");
          ?>
          
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Tambah Jadwal Matpel</h3>
                  </div>
                </div>

                <!-- <div class="row">
                  <div class="col-md-3">
                    S
                  </div>
                  <div class="col-md-3">
                    test
                  </div>
                  <div class="col-md-3">
                    test
                  </div>
                  <div class="col-md-3">
                    test
                  </div>
                </div> -->
                <form action="jadwal_ubah_proses.php" method="post">
                <input type="hidden" name="kelas" value="<?php echo $kelas; ?>">

                <table class="table table-bordered">
                  <thead>
                    <th width="5%">Hari:Jam</th>
                    <?php 

                      $n=count($jam);
                      for ($i=0; $i <$n ; $i++) { ?>
                        <th><?php echo $jam[$i]; ?></th>
                    <?php  }
                    ?>
                  </thead>
                  <tbody>
                    <?php 
                    $n=count($hari);
                    for ($i=0; $i <$n ; $i++) { ?>

                      <tr>
                      <th><?php echo $hari[$i] ?>                    <input type="hidden" name="hari[]" value="<?php echo $hari[$i]; ?>"></th>
                      <td>
                      <input type="hidden" name="jam1[]" value="1">
                      <select name="matpel1[]"  class="form-group" required="">
                        
                        <?php 
                          
                          $query=mysqli_query($koneksi, "select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='$i' and jam='1' ");
                          $data=mysqli_fetch_array($query);
                          echo "<option value='".$data['idmatpel']."'>".$data['nama_matpel']."</option>";
                          $query=mysqli_query($koneksi, "select * from matpel_kelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel where matpel_kelas.idkelas='$kelas' and matpel_kelas.idmatpel!='".$data['idmatpel']."'");
                          while ($data2=mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $data2['idmatpel']; ?>"><?php echo $data2['nama_matpel']; ?></option>
                       <?php   }
                           ?>
                            
                  
                      </select></td>
                      <td>
                      <input type="hidden" name="jam2[]" value="2">
                      <select name="matpel2[]"  class="form-group" required="">
                        
                        <?php 
                          
                          $query=mysqli_query($koneksi, "select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='$i' and jam='2' ");
                          $data=mysqli_fetch_array($query);
                          echo "<option value='".$data['idmatpel']."'>".$data['nama_matpel']."</option>";
                          $query=mysqli_query($koneksi, "select * from matpel_kelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel where matpel_kelas.idkelas='$kelas' and matpel_kelas.idmatpel!='".$data['idmatpel']."'");
                          while ($data2=mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $data2['idmatpel']; ?>"><?php echo $data2['nama_matpel']; ?></option>
                       <?php   }
                           ?>
                            
                  
                      </select>
                      </td>
                      <td>
                        
                        
                        <?php 
                          
                          $query=mysqli_query($koneksi, "select * from matpel where idmatpel='0'");
                          $data=mysqli_fetch_array($query)  ?>
                          <input type="hidden" name="jam3[]" value="3">
                          <input type="hidden" name="matpel3[]" value="<?php echo $data['idmatpel']; ?>">
                          <input style="width: 90px;" type="text" class="form-group" disabled="" value="<?php echo $data['nama_matpel']; ?>">

                        
                       
                            
                  
                      
                      </td>
                      <td>
                        
                        <?php 
                          
                          $query=mysqli_query($koneksi, "select * from matpel where idmatpel='1'");
                          $data=mysqli_fetch_array($query)  ?>
                          <input type="hidden" name="jam4[]" value="4">
                          <input type="hidden" name="matpel4[]" value="<?php echo $data['idmatpel']; ?>">
                          <input type="text" style="width: 90px;" class="form-group" disabled="" value="<?php echo $data['nama_matpel']; ?>"

                        ?>

                      </td>
                      <td>
                      <input type="hidden" name="jam5[]" value="5">
                        <select name="matpel5[]"  class="form-group" required="">
                        <?php 
                          
                          $query=mysqli_query($koneksi, "select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='$i' and jam='5' ");
                          $data=mysqli_fetch_array($query);
                          echo "<option value='".$data['idmatpel']."'>".$data['nama_matpel']."</option>";
                          $query=mysqli_query($koneksi, "select * from matpel_kelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel where matpel_kelas.idkelas='$kelas' and matpel_kelas.idmatpel!='".$data['idmatpel']."'");
                          while ($data2=mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $data2['idmatpel']; ?>"><?php echo $data2['nama_matpel']; ?></option>
                       <?php   }
                           ?>
                            
                  
                      </select>
                      </td>
                      <td>
                      <input type="hidden" name="jam6[]" value="6">
                        <select name="matpel6[]"  class="form-group" required="">
                        <?php 
                          
                          $query=mysqli_query($koneksi, "select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='$i' and jam='6' ");
                          $data=mysqli_fetch_array($query);
                          echo "<option value='".$data['idmatpel']."'>".$data['nama_matpel']."</option>";
                          $query=mysqli_query($koneksi, "select * from matpel_kelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel where matpel_kelas.idkelas='$kelas' and matpel_kelas.idmatpel!='".$data['idmatpel']."'");
                          while ($data2=mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $data2['idmatpel']; ?>"><?php echo $data2['nama_matpel']; ?></option>
                       <?php   }
                           ?>
                            
                  
                      </select>
                      </td>
                      <td>
                        <?php 
                          
                          $query=mysqli_query($koneksi, "select * from matpel where idmatpel='0'");
                          $data=mysqli_fetch_array($query)  ?>
                          <input type="hidden" name="jam7[]" value="7">
                          <input type="hidden" name="matpel7[]" value="<?php echo $data['idmatpel']; ?>">
                          <input type="text" style="width: 90px;" class="form-group" disabled="" value="<?php echo $data['nama_matpel']; ?>"

                        ?>
                      </td>
                      <td>
                        <input type="hidden" name="jam8[]" value="8">
                        <select name="matpel8[]"  class="form-group" required="">
                        <?php 
                          
                          $query=mysqli_query($koneksi, "select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='$i' and jam='8' ");
                          $data=mysqli_fetch_array($query);
                          echo "<option value='".$data['idmatpel']."'>".$data['nama_matpel']."</option>";
                          $query=mysqli_query($koneksi, "select * from matpel_kelas inner join matpel on matpel_kelas.idmatpel=matpel.idmatpel where matpel_kelas.idkelas='$kelas' and matpel_kelas.idmatpel!='".$data['idmatpel']."'");
                          while ($data2=mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $data2['idmatpel']; ?>"><?php echo $data2['nama_matpel']; ?></option>
                       <?php   }
                           ?>
                            
                  
                      </select>
                      </td>
                      
                    </tr>
                    <?php }
                    ?>
                    <!-- <tr>
                      <th>07.15-08.35</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr> -->
                    <!-- <tr>
                      <th>08.35-09.50</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>09.50-10.10</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>10.10-10.40</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>10.40-11.20</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>11.20-12.00</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>12.00-12.30</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>12.30-13.50</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr> -->
                  </tbody>
                </table>
                <input type="submit" name="submit" value="submit" class="btn btn-success pull-right">
                </form>




 </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
          