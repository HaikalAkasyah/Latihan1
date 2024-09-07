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
<!-- SISIP SCRIPT DI SINI -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
                <!-- Data Master -->
              <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-database"></i>
              <p>
                  Data Master
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                      <a href="beranda.php?l=lapangan" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                          <p> lapangan </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="beranda.php?l=fasilitas" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> fasilitas </p>
                      </a>
                  </li>
              <!-- Akhir Data Master -->
              <!-- Data Mahasiswa -->
              <li class="nav-item">
                  <a href="beranda.php?l=pemilik" class="nav-link">
                      <i class="nav-icon far fa-circle"></i>
                      <p>pemilik</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="beranda.php?l=booking" class="nav-link">
                  <i class="nav-icon far fa-circle"></i>
                  <p> booking </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="beranda.php?l=registrasi" class="nav-link">
                  <i class="nav-icon far fa-circle"></i>
                  <p> registrasi </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="beranda.php?l=tbl_admin" class="nav-link">
                  <i class="nav-icon far fa-circle"></i>
                  <p> admin </p>
                </a>
              </li>
              <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas-user-friends"></i>
                      <p>Kelola Perwalian</p>
                  </a>
              </li> -->
              <!-- <li class = "nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon far fa-address-book"></i>
                      <p>Kelola user</p>
                  </a>
              </li> -->
        <!-- Akhir Data Mahasiswa -->
        </ul>
    </li>
              <!-- Kelola User -->
              <li class="nav-item">
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-address-book"></i>
                  <p>
                      Kelola User
                      <i class="right fas fa-angle-left"></i>
                  </p>
                  </li>
</nav>
<?php
}
?>