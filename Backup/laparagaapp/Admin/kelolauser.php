<?php
if(empty($_SESSION['name']))
{
    ?>
    <script>
        window.location.href="login.php";
    </script>
    <?php
}
else
{
    /*session_start();*/
    $user = $_SESSION['name'];
    $nik = $_SESSION['nik'];
    $level = $_SESSION['hakAkses'];
?>
<!--sisip disini-->
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
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-ethernet"></i>
                  DATA USER
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                    <button type="button" name="btnTambahDataUser" id="btnTambahDataUser" data-toggle="modal" data-target="#modalTambahDataUser" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <!--sisip disni-->
                <table id="tblDataUser" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Id Akun</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php
                   include('connect.php');
                   $qryUser = mysqli_query($koneksi, "select * from tbl_login order by id_akun ASC");
                   $i=1;
                   while($rowUser= mysqli_fetch_array($qryUser))
                   {
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $rowUser['id_akun'];?></td>
                            <td><?php echo $rowUser['username'];?></td>
                            <td><?php echo $rowUser['password'];?></td>
                            <td><?php echo $rowUser['level'];?></td>
                            <td><?php echo $rowUser['status'];?></td>
                            <td style="text-align:center">
                            <?php if ($rowUser['status'] == 1) { ?>
                            <button class="btn btn-sm btn-warning" onclick="ubahStatus(<?php echo $rowUser['id_akun']; ?>, 0)">Non-Aktif</button>
                            <?php } else { ?>
                            <button class="btn btn-sm btn-success" onclick="ubahStatus(<?php echo $rowUser['id_akun']; ?>, 1)">Aktif</button>
                            <?php } ?>
                            <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalEditDataUser<?php echo $rowUser['id_akun'];?>"><i class="fas fa-edit"></i>Edit</a>
                              <!-- MODAL EDIT -->
                            <div id="modalEditDataUser<?php echo $rowUser['id_akun'];?>" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Form Ubah Data User</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form name="frmEditData" id="frmEditData" method="POST" action="action/editDataUser.php?id=<?php echo $rowUser['id_akun'];?>" enctype="multipart/form-data">
                                      <label style="display:block; text-align:left;">Id Akun</label>
                                      <input type="text" name="txtEditIdAkun" id="txtEditIdAkun" class="form-control" value="<?php echo $rowUser['id_akun'];?>" />
                                      <br/>
                                      <label style="display:block; text-align:left;">Username</label>
                                      <input type="text" name="txtEditUsername" id="txtEditUsername" value="<?php echo $rowUser['username'];?>" class="form-control" />
                                      <br/>
                                      <label style="display:block; text-align:left;">Password</label>
                                      <input type="text" name="txtEditPassword" id="txtEditPassword" value="<?php echo $rowUser['password']; ?>" class="form-control" />
                                      <br/>
                                      <label style="display:block; text-align:left;">Level</label>
                                      <input type="text" name="txtEditLevel" id="txtEditLevel" value="<?php echo $rowUser['level'];?>" class="form-control" />
                                      <br/>
                                      <label style="display:block; text-align:left;">Status</label>
                                      <input type="text" name="txtEditStatus" id="txtEditStatus" value="<?php echo $rowUser['status'];?>" class="form-control" />
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
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusDataUser<?php echo $rowUser['id_akun'];?>"><i class="fas fa-trash"></i> Delete</a>
                            <!-- MODAL HAPUS -->
                            <div id="modalHapusDataUser<?php echo $rowUser['id_akun'];?>" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                  <h4 class="modal-title">Konfirmasi Hapus Data Karyawan</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                  <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
                                  <br/>
                                  <form name="frmHapusUser" id="frmHapusUser" method="POST" action="action/hapusDataUser.php?id=<?php echo $rowUser['id_akun'];?>" enctype="multipart/form-data">
                                    <!--<label style="display:block; text-align:left;">Id Akun</label>
                                    <input type="text" name="txtHapusIdAkun" id="txtHapusIdAkun" class="form-control" value="<?php echo $rowUser['id_akun'];?>" disabled/>
                                    <br/>
                                    <label style="display:block; text-align:left;">Username</label>
                                    <input type="text" name="txtHapusUsername" id="txtHapusUsername" value="<?php echo $rowUser['username'];?>" class="form-control" readonly/>
                                    <br/>
                                    <label style="display:block; text-align:left;">Password</label>
                                    <input type="text" name="txtHapusPassword" id="txtHapusPassword" value="<?php echo $rowUser['password'];?>" class="form-control" readonly/>
                                    <br/>
                                    <label style="display:block; text-align:left;">Level</label>
                                    <input type="text" name="txtHapusLevel" id="txtHapusLevel" value="<?php echo $rowUser['level'];?>" class="form-control" readonly/>
                                    <br/>
                                    <label style="display:block; text-align:left;">Status</label>
                                    <input type="text" name="txtHapusStatus" id="txtHapusStatus" value="<?php echo $rowUser['Status'];?>" class="form-control" readonly/>
                                    <br/>-->
                                    <input type="submit" name="btnHapus" id="btnHapus" value="Hapus" class="btn btn-primary" />
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                  </form>
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
              </div> <!-- /.card-body-->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <!--/.direct-chat -->

            <!-- TO DO List -->
            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- POP UP - FORM TAMBAH DATA JURUSAN -->
    <div id="modalTambahDataUser" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Input Data User</h4>
          </div>
          <div class="modal-body ">
            <form name="frmTambahDataUser" id="frmTambahDataUser" method="POST" enctype="multipart/form-data">
              <label>Id Akun</label>
              <input type="text" name="txtIdAkun" id="txtIdAkun" class="form-control" />
              <br/>
              <label>Username</label>
              <input type="text" name="txtUsername" id="txtUsername" class="form-control" />
              <br/>
              <label>Password</label>
              <input type="text" name="txtPassword" id="txtPassword" class="form-control" />
              <br/>
              <label>Level</label>
              <input type="text" name="txtLevel" id="txtLevel" class="form-control" />
              <br/>
              <label>Status</label>
              <input type="text" name="txtStatus" id="txtStatus" class="form-control" />
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

    <script>
    function ubahStatus(id, status) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Tambahkan logika jika perlu
                location.reload(); // Refresh halaman setelah berhasil mengubah status
            }
        };
        xmlhttp.open("GET", "action/ubahStatusUser.php?id=" + id + "&status=" + status, true);
        xmlhttp.send();
    }
</script>

<?php
}
?>