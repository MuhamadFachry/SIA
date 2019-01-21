<?php
            include '../../function/imgpreview.php';
            
            $kelas = $_SESSION['kelas'];
            $hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
                $jam = array("07.15-08.35","08.35-09.50","09.50-10.10","10.10-10.40","10.40-11.20",
                  "11.20-12.00","12.00-12.30","12.30-13.50");


          ?>
          
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Tambah Jadwal Matpel Kelas <?php 
                    $query = mysqli_query($koneksi,"select * from kelas where idkelas='$kelas'");
                    $data=mysqli_fetch_array($query);
                    echo $data['tingkat'].$data['kelas'];
                     ?></h3>
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
                        <?php 
                        $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='".$i."' and jam='1'");
                        $data=mysqli_fetch_array($query);
                        echo $data['nama_matpel'];
                        ?>
                        
                      </td>
                      <td>
                      <?php 
                        $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='".$i."' and jam='2'");
                        $data=mysqli_fetch_array($query);
                        echo $data['nama_matpel'];
                        ?>

                      </td>
                      <td>
                        
                        
                        <?php 
                          
                           
                        $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='".$i."' and jam='3'");
                        $data=mysqli_fetch_array($query);
                        echo $data['nama_matpel'];
                        ?>

                        
                       
                            
                  
                      
                      </td>
                      <td>
                        
                        <?php 
                        $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='".$i."' and jam='4'");
                        $data=mysqli_fetch_array($query);
                        echo $data['nama_matpel'];
                        ?>

                      </td>
                      <td>
                        <?php 
                        $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='".$i."' and jam='5'");
                        $data=mysqli_fetch_array($query);
                        echo $data['nama_matpel'];
                        ?>

                      </td>
                      <td>
                        <?php 
                        $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='".$i."' and jam='6'");
                        $data=mysqli_fetch_array($query);
                        echo $data['nama_matpel'];
                        ?>

                      </td>
                      <td>
                        <?php 
                        $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='".$i."' and jam='7'");
                        $data=mysqli_fetch_array($query);
                        echo $data['nama_matpel'];
                        ?>

                      </td>
                      <td>
                        <?php 
                        $query = mysqli_query($koneksi,"select * from jadwal_matpel inner join matpel on jadwal_matpel.idmatpel=matpel.idmatpel where idkelas='$kelas' and hari='".$i."' and jam='8'");
                        $data=mysqli_fetch_array($query);
                        echo $data['nama_matpel'];
                        ?>

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
                
                <a href="jadwal_matpel_print.php?id=<?php echo $kelas; ?>" class="btn btn-success "><span class="glyphicon glyphicon-print"> Print</span></a>




 </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br>
          