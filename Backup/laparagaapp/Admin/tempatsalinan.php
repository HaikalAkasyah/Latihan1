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
          <!-- ./col -->
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
                  JURUSAN
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="tab">TAMBAH DATA</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                
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
    <!-- /.content -->
    <?php
}
?>


<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Data Program Studi
        </h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <button type="button" name="btnTambahDataProdi" id="btnTambahDataProdi" data-toogle="modal" data-target="#modalTambahDataProdi" class="btn btn-primary"> Tambah Data </button>
                </li>
            </ul>
    </div>
</div>
<!-- /. card header -->
<div class = "card-body">
    <!-- MASUKKAN DI SINI -->
    <!-- /. card-header -->
<div class="card-body">
    <table id="tblDataProdi" class="table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Program Studi</th>
                <th>Nama Program Studi</th>
                <th>Nama Jurusan</th>
                <th>Aksi</>
            </tr>
        </thead>
    </tbody>
    </table>


    <label style="display:block; text-align:left;">Nama Prodi</label>
      <input type="text" name="txtEditNamaProdi"
      id="txtEditNamaProdi" value="<?php echo $rowProdi['namaProdi'];?>"
      class="form-control" />
      <br/>
      <input type="submit" name="btnSimpan"
      id="btnSimpan" value="Simpan" class="btn btn-primary" />
      <input type="reset" name="btnBatal"
      id="btnBatal" value="Batal" class="btn btn-danger" />
      </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>

      <!--CODING ADMIN PRODI -->
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
                  PRGRAM STUDI
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    
                    <li class="nav-item">
                      <button type="button" name="btnTambahDataProdi" id="btnTambahDataProdi" data-toggle="modal" data-target="#modalTambahDataProdi" class="btn btn-primary">Tambah Data</button>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblDataProdi" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Program Studi</th>
                    <th>Nama Program Studi</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  include('connect.php');
                  $qryJurusan = mysqli_query ($koneksi, "select * from tblprodi INNER JOIN tbljurusan ON tblprodi.kodeJurusan = tbljurusan.kodeJurusan ORDER BY tbljurusan.namaJurusan ASC");
                  $i=1;
                  while($rowJurusan = mysqli_fetch_array($qryJurusan))
                  {
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $rowJurusan['kodeProdi'];?></td>
                        <td><?php echo $rowJurusan['namaProdi'];?></td>
                        <td><?php echo $rowJurusan['namaJurusan'];?></td>
                        <td>
                        <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalEditDataProdi<?php echo $rowProdi['kodeProdi'];?>">Ubah</a>
            <!-- MODAL EDIT -->
      <div id="modalEditDataProdi<?php echo $rowProdi['kodeProdi'];?>" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Form Ubah Data Prodi</h4>
              </div>
            <div class="modal-body">
      <form name="frmEditDataProdi" id="frmEditDataProdi" method="POST" action="action/editDataProdi.php?id=<?php echo $rowProdi['kodeProdi'];?>" enctype="multipart/form-data">
        <label style="display:block; text-align:left;">Kode Program Studi</label>
        <input type="text" name="txtEditnamaProdi" id="txtEditnamaProdi" class="form-control" value="<?php echo $rowProdi['kodeProdi'];?>" />
        <br/>
        <label>Jurusan</label>
        <select name ="cmbJurusan" class="form-control" style="width: 100;">
        <option value="pilih">- pilih -</option>
        <?php
        $qryJurusan = mysqli_query ($koneksi, "select * from tbljurusan order by namaJurusan ASC");
        while($rowJurusan = mysqli_fetch_array($qryJurusan))
        {
          if($rowJurusan['kodeJurusan']== $rowProdi['kodeJurusan'])
          {
            ?>

            <option value = "<?php echo $rowJurusan['kodeJurusan'];?>" selected><?php echo $rowJurusan['namaJurusan'];?></option>
            <?php
          }
          else 
          {
          ?>
          <option value="<?php echo $rowJurusan['kodeJurusan'];?>"><?php echo $rowJurusan['namaJurusan'];?></option>
          <?php
          }
        }
        ?>
        </select>
        <br/>
        <br/>
        <input type="submit" name="btnSimpan" id="btnSimpan" value="Simpan" class="btn btn-primary" />
        <input type="reset" name="btnBatal" id="btnBatal" value="Batal" class="btn btn-danger" />
      </from>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
      <!-- END MODAL EDIT -->
      <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalEditDataProdi<?php echo $rowProdi['kodeProdi'];?>">Ubah</a>
 <!-- MODAL HAPUS -->
 <div id="modalHapusDataJurusan<?php echo
$rowJurusan['kodeJurusan'];?>" class="modal fade">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h4 class="modal-title">Form Konfirmasi Hapus Data 
Jurusan</h4>
 </div>
 <div class="modal-body">
 <h6>Apakah anda yakin menghapus data ini?</h6>
 <form name="frmHapusData" id="frmHapusData"
method="POST" action="action/hapusDataJurusan.php?id=<?php echo
$rowJurusan['kodeJurusan'];?>" enctype="multipart/form-data">
 <label style="display:block; text-align:left;">Kode 
Jurusan</label>
 <input type="text" name="txtHapusKodeJurusan"
id="txtHapusKodeJurusan" class="form-control" value="<?php echo
$rowJurusan['kodeJurusan'];?>" disabled/>
 <br/>
<label style="display:block; text-align:left;">Nama 
Jurusan</label>
 <input type="text" name="txtHapusNamaJurusan"
id="txtHapusNamaJurusan" value="<?php echo $rowJurusan['namaJurusan'];?>" class="form-control" readonly/>
 <br/>
 <input type="submit" name="btnHapus" id="btnHapus"
value="Hapus" class="btn btn-primary" />
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
    <!-- POP UP - FORM TAMBAH DATA PRODI -->
    <div id="modalTambahDataProdi" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             <h4 class="modal-title">Form Input Data Program Studi</h4>
            </div>
    <div class="modal-body ">
          <form name="frmTambahDataProdi" id="frmTambahDataProdi" method="POST" enctype="multipart/form-data">
            <label>Kode Prodi</label>
            <input type="text" name="txtkodeProdi" id="txtkodeProdi" class="form-control" />
            <br/>
            <label>Nama Prodi</label>
            <input type="text" name="txtnamaProdi" id="txtnamaProdi" class="form-control" />
            <br/>

            <label>Jurusan</label>
            <select name="cmbJurusan" class="form-control" style="width: 100%;">
            <option value="pilih">- pilih -</option>
            <?php
            $qryJurusan = mysqli_query($koneksi, "select * from tbljurusan order by namaJurusan ASC");
            while($rowJurusan= mysqli_fetch_array($qryJurusan))
            {
              ?>
              <option value="<?php echo $rowJurusan['kodeJurusan'];?>"><?php echo $rowJurusan['namaJurusan'];?></option>  
              <?php    
            }
            ?>
            </select>
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
<!-- END POP UP - FORM TAMBAH DATA PRODI -->
    <!-- /.content -->
    <?php
}
?>