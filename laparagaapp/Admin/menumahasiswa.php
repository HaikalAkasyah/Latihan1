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

        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-check"></i>
            <p>Profil Mahasiswa</p>
        </a>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav fas-fa user-friends"></i>
                    <p> Kelas Perwalian </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-edit"></i>
                    <p> Ubah User </p>
                </a>
            </li>
        </ul>
</nav>
<?php
}
?>