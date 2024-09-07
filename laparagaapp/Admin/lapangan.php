<?php
// session_start ();
if(empty($_SESSION['user']))
{
    ?>
    <script>
        window.location.href="login.php";
        </script>
        <?php
}
else
{
    // session_start ();
    $user = $_SESSION['user'];
    $nik = $_SESSION['nik'];
    $level = $_SESSION['hakAkses'];
?>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col EDIT-->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  LAPANGAN
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    
                    <li class="nav-item">
                      <button type="button" name="btnTambahDataJurusan" id="btnTambahDataJurusan" data-toggle="modal" data-target="#modalTambahDatalapangan" class="btn btn-primary">Tambah Data</button>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="lapangan" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Id_lapangan</th>
                    <th>Nama_lapangan</th>
                    <th>alamat</th>
                    <th>Id_pemilik</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  include('connect.php');
                  $qryJurusan = mysqli_query($koneksi, "select * from lapangan order by Id_lapangan ASC");
                  $i=1;
                  while($rowJurusan = mysqli_fetch_array($qryJurusan))
                  {
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $rowJurusan['Id_lapangan'];?></td>
                        <td><?php echo $rowJurusan['Nama_lapangan'];?></td>
                        <td><?php echo $rowJurusan['alamat'];?></td>
                        <td><?php echo $rowJurusan['Id_pemilik'];?></td>
                        <td>
                              <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalEditDataLapangan<?php echo $rowJurusan['Id_lapangan'];?>">Ubah</a>
            <!-- MODAL EDIT -->
            <div id="modalEditDataLapangan<?php echo $rowJurusan['Id_lapangan']; ?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Ubah Data LAPANGAN</h4>
            </div>
            <div class="modal-body">
                <form name="frmEditDataLapangan" id="frmEditDataLapangan" method="POST" action="action/editDatalapangan.php?id=<?php echo $rowJurusan['Id_lapangan']; ?>" enctype="multipart/form-data">
                    <label style="display:block; text-align:left;">ID LAPANGAN</label>
                    <input type="text" name="txtEditId_lapangan" id="txtEditId_lapangan" class="form-control" value="<?php echo $rowJurusan['Id_lapangan']; ?>" />
                    <br>
                    <label style="display:block; text-align:left;">NAMA LAPANGAN</label>
                    <input type="text" name="txtEditNama_lapangan" id="txtEditNama_lapangan" class="form-control" value="<?php echo $rowJurusan['Nama_lapangan']; ?>" >
                    <br/>
                    <label style="display:block; text-align:left;">ALAMAT</label>
                    <input type="text" name="txtEditalamat" id="txtEditalamat" class="form-control" value="<?php echo $rowJurusan['alamat']; ?>" >
                    <br/>
                    <label style="display:block; text-align:left;">ID PEMILIK</label>
                    <select type="text" name="txtEditId_pemilik" id="txtEditId_pemilik" class="form-control" value="<?php echo $rowJurusan['Id_pemilik']; ?>" >
                    <option value="pilih">- Pilih -</option>
                        <?php
                          $qryPemilik = mysqli_query($koneksi, "select * from pemilik order by Id_pemilik ASC"); 
                          while($rowPemilik = mysqli_fetch_array($qryPemilik))
                          {
                            if($rowPemilik['Id_pemilik']==$rowJurusan['Id_pemilik'])
                            {
                      ?>
                          <option value="<?php echo
                          $rowPemilik['Id_pemilik'];?>" selected>
                          <?php echo
                          $rowPemilik['Id_pemilik'];?></option>
                          <?php
                          }
                          else
                          {
                          ?>
                          <option value="<?php echo
                          $rowPemilik['Id_pemilik'];?>"><?php echo $rowPemilik['Id_pemilik'];?></option>
                          <?php
                            }
                          }
                        ?>
                    </select>
                    <br/>
                    <input type="submit" name="btnSimpan" id="btnSimpan" value="Simpan" class="btn btn-primary" />
                    <input type="reset" name="btnBatal" id="btnBatal" value="Batal" class="btn btn-danger" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

      <!-- END MODAL EDIT -->
      <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusDataLapangan<?php echo $rowJurusan['Id_lapangan'];?>">Hapus</a>
            <!-- MODAL HAPUS -->
            <div id="modalHapusDataLapangan<?php echo $rowJurusan['Id_lapangan']; ?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Konfirmasi Hapus Data Lapangan</h4>
            </div>
            <div class="modal-body">
                <h6>Apakah anda yakin menghapus data ini?</h6>
                <form name="frmHapusData" id="frmHapusData" method="POST" action="action/HapusDataLapangan.php?id=<?php echo $rowJurusan['Id_lapangan']; ?>" enctype="multipart/form-data">
                    <label style="display:block; text-align:left;">ID LAPANGAN</label>
                    <input type="text" name="txtHapusId_lapangan" id="txtHapusId_lapangan" class="form-control" value="<?php echo $rowJurusan['Id_lapangan']; ?>" disabled/>
                    <br/>
                    <label style="display:block; text-align:left;">NAMA LAPANGAN</label>
                    <input type="text" name="txtHapusNama_lapangan" id="txtHapusNama_lapangan" value="<?php echo $rowJurusan['Nama_lapangan']; ?>" class="form-control" readonly/>
                    <br/>
                    <label style="display:block; text-align:left;">ALAMAT</label>
                    <input type="text" name="txtHapusAlamat" id="txtHapusAlamat" value="<?php echo $rowJurusan['alamat']; ?>" class="form-control" readonly/>
                    <br/>
                    <label style="display:block; text-align:left;">ID PEMILIK</label>
                    <input type="text" name="txtHapusId_pemilik" id="txtHapusId_pemilik" value="<?php echo $rowJurusan['Id_pemilik']; ?>" class="form-control" readonly/>
                    <br/>
                    <input type="submit" name="btnHapus" id="btnHapus" value="Hapus" class="btn btn-primary" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- END MODAL HAPUS -->

                        </td>
                    </tr>
                    <?php
                    $i++;
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
           
            <!--/.direct-chat -->

            <!-- TO DO List -->
            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- POP UP - FORM TAMBAH DATA LAPANGAN -->
    <div id="modalTambahDatalapangan" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             <h4 class="modal-title">Form Input Data LAPANGAN</h4>
            </div>
    <div class="modal-body ">
          <form name="frmTambahDataLapangan" id="frmTambahDataLapangan" method="POST" enctype="multipart/form-data">
            <label>ID LAPANGAN</label>
            <input type="text" name="txtId_lapangan" id="txtId_lapangan" class="form-control" />
            <br/>
            <label>NAMA LAPANGAN</label>
            <input type="text" name="txtNama_lapangan" id="txtNama_lapangan" class="form-control" />
            <br/>
            <label>ALAMAT</label>
            <input type="text" name="txtalamat" id="txtalamat" class="form-control" />
            <br/>
            <label>ID PEMILIK</label>
            <select type="text" name="txtId_pemilik" id="txtId_pemilik" class="form-control">
            <option value="pilih">- pilih -</option>
            <?php
            $qryPemilik = mysqli_query($koneksi, "select * from pemilik order by Id_pemilik ASC");
            while($rowPemilik= mysqli_fetch_array($qryPemilik))
            {
              ?>
              <option value="<?php echo $rowPemilik['Id_pemilik'];?>"><?php echo $rowPemilik['Id_pemilik'];?></option>  
              <?php    
            }
            ?>
            </select>
            <br/>
            <input type="submit" name="btnSimpan" id="btnSimpan" value="Simpan" class="btn btn-primary" />
            <input type="reset" name="btnBatal" id="btnBatal" value="Batal" class="btn btn-danger" />
          </form>
        </div>
       <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
          </div>
      </div>
   </div>
 </div>
<!-- END POP UP - FORM TAMBAH DATA JURUSAN -->
    <!-- /.content -->
    <?php
}
?>