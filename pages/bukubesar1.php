<?php 

    @session_start();
    $user=$_SESSION['user'];

    // include "koneksi.php";
    include '../pages/auth/koneksi.php'; 

    if (@$_SESSION['user']) {     
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Day-Dream! Aplikasi Akuntansi Sederhana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="title" content="Volt Free Bootstrap Dashboard - Settings" />
    <meta name="author" content="Themesberg" />
    <meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS." />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard"
    />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro" />
    <meta property="og:title" content="Volt Free Bootstrap Dashboard - Settings" />
    <meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS." />
    <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro" />
    <meta property="twitter:title" content="Volt Free Bootstrap Dashboard - Settings" />
    <meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS." />
    <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="../assets/img/favicon/site.webmanifest" />
    <link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Sweet Alert -->
    <link type="text/css" href="../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />

    <!-- Notyf -->
    <link type="text/css" href="../vendor/notyf/notyf.min.css" rel="stylesheet" />

    <!-- Volt CSS -->
    <link type="text/css" href="../css/volt.css" rel="stylesheet" />

    <!-- NOTICE: You can use the _analytics.php partial to include production code specific code & trackers -->
  </head>

  <body>
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

       <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
      <a class="navbar-brand me-lg-5" href="../index.html"> <img class="navbar-brand-dark" src="../assets/img/brand/money.png" alt="Volt logo" /> <img class="navbar-brand-light" src="../assets/img/brand/dark.svg" alt="Volt logo" /> </a>
      <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

        <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
      <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
          <div class="d-flex align-items-center">
            <div class="avatar-lg me-4">
              <img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green" />
            </div>
            <div class="d-block">
              <h2 class="h5 mb-3">Selamat Datang, <?php echo $nama;?></h2>
            </div>
          </div>
          <div class="collapse-close d-md-none">
            <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
              <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </a>
          </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
          <li class="nav-item muted">
            <a href="#" class="nav-link d-flex align-items-center disabled">
              <span class="sidebar-icon">
                <img src="../assets/img/brand/money.png" height="20" width="20" alt="Volt Logo" />
              </span>
              <span class="mt-1 ms-1 sidebar-text">Day-Dream!</span>
            </a>
          </li>

          <li class="nav-item ">
            <a href="../pages/akun.php" class="nav-link">
              <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z" clip-rule="evenodd"></path></svg>
              </span>
              <span class="sidebar-text">Jenis Akun</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/transaksi.php" class="nav-link">
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
              </span>
              <span class="sidebar-text">Input Transaksi</span>
            </a>
          </li>

          <!-- trying submenus -->
                <li class="nav-item">
                  <span
                    class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-app">
                    <span>
                      <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                      </span> 
                      <span class="sidebar-text">Laporan</span>
                    </span>
                    <span class="link-arrow">
                      <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </span>
                  </span>
                  <div class="multi-level collapse "
                    role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                      <li class="nav-item">
                        <a href="../pages/jurnalumum.php" class="nav-link">
                          <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                          </span>
                          <span class="sidebar-text">Jurnal Umum</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  
                  <div class="multi-level collapse "
                    role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                      <li class="nav-item active">
                        <a href="../pages/bukubesar.php" class="nav-link">
                          <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                          </span>
                          <span class="sidebar-text">Buku Besar</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                  <div class="multi-level collapse "
                    role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                      <li class="nav-item">
                        <a href="../pages/neraca.php" class="nav-link">
                          <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                          </span>
                          <span class="sidebar-text">Neraca Saldo</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>                 
          <!-- stop trying submenus -->
  
          <li class="nav-item">
            <a href="../pages/settings.php" class="nav-link">
              <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </span>
              <span class="sidebar-text">Profil User</span>
            </a>
          </li>
          
          <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
        </ul>
      </div>
    </nav>


    <main class="content">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-3">
        <div class="d-block mb-4 mb-md-0">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
              <li class="breadcrumb-item">
                <a href="#">
                  <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    ></path>
                  </svg>
                </a>
              </li>
              <li class="breadcrumb-item"><a href="#">Day Dream App</a></li>
              <li class="breadcrumb-item active" aria-current="page">Buku Besar</li>
            </ol>
          </nav>
          <h2 class="h4">Buku Besar</h2>
          <p>Berisi buku besar yang bersumber dari transaksi.</p><br>
        </div>
            <?php
              $sql = mysqli_query($koneksi, "SELECT * FROM user2 where user_id =  {$_SESSION['user_id']}");
              while ($data10=mysqli_fetch_array($sql)) {
            ?>
          <table>
            <tr>
              <td>Nama Usaha</td>
              <td></td>
              <td>:</td>
              <td><?php echo $data10['umkm'];?></td>
            </tr>
            <tr>
              <td>Nama Pemilik</td>
              <td></td>
              <td>:</td>
              <td><?php echo $data10['nama'];?></td>
            </tr>            
             <tr>
              <td>Mata Uang</td>
              <td></td>
              <td>:</td>
              <td>Rp (Rupiah)</td>
            </tr>           
          </table>
          <?php
          }
          ?>        
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">KAS DI BANK</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '105-KAS DI BANK' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY jenis ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                $jumlah_saldo1 = $jumlah_saldo1 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo1, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
              $jumlah_saldo1 = $jumlah_saldo1 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo1, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">KAS DI TANGAN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '101-KAS DI TANGAN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo2 = $jumlah_saldo2 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo2, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo2 = $jumlah_saldo2 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <?php if($jumlah_saldo2 < 0) {?>
              <?php $jumlah_saldo2 = abs($jumlah_saldo2);?>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo2, 0, ".", ".").")"; ?></td>
              <?php } else {?><td><?php echo "Rp. " . number_format($jumlah_saldo2, 0, ".", "."); ?></td>
              <?php
                  
              } ?>
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">PERSEDIAAN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '126-PERSEDIAAN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi desc";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo3 = $jumlah_saldo3 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo3, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo3 = $jumlah_saldo3 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <?php if($jumlah_saldo3 < 0) {?>
              <?php $jumlah_saldo3 = abs($jumlah_saldo3);?>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo3, 0, ".", ".").")"; ?></td>
              <?php } else {?><td><?php echo "Rp. " . number_format($jumlah_saldo3, 0, ".", "."); ?></td>
              <?php
                  
              } ?>
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BEBAN SEWA</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
               $no = 1;
               $query        = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '729-BEBAN SEWA' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";                
               $jurnal_umum  = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                $jumlah_saldo = $jumlah_saldo + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
              $jumlah_saldo = $jumlah_saldo - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">MODAL</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '311-MODAL' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                $jumlah_saldo22 = $jumlah_saldo22 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo22, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo22 = $jumlah_saldo22 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <?php if($jumlah_saldo22 < 0) {?>
              <?php $jumlah_saldo22 = abs($jumlah_saldo22);?>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo22, 0, ".", ".").")"; ?></td>
              <?php } else { ?> <?php $jumlah_saldo22 = abs($jumlah_saldo22);?> <td><?php  echo "Rp. " . number_format($jumlah_saldo22, 0, ".", "."); ?></td>
              <?php
                  
              } ?>
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div> 

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">PENDAPATAN DITERIMA DI MUKA</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
                    <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '209-PENDAPATAN DITERIMA DI MUKA' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                $jumlah_saldoxx = $jumlah_saldoxx + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldoxx, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
              $jumlah_saldoxx = $jumlah_saldoxx - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <?php $jumlah_saldoxx = abs($jumlah_saldoxx);?>
              <td><?php echo "(Rp. " . number_format($jumlah_saldoxx, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">SEWA BAYAR DIMUKA</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '129-SEWA BAYAR DI MUKA' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo4 = $jumlah_saldo4 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo4, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo4 = $jumlah_saldo4 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo4, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">ASURANSI BAYAR DIMUKA</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
<tbody>
            <?php
               include "../pages/auth/koneksi.php";
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
               $no = 1;
               $query        = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '130-ASURANSI BAYAR DIMUKA' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";                
               $jurnal_umum  = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                $jumlah_saldo60 = $jumlah_saldo60 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo60, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
              $jumlah_saldo60 = $jumlah_saldo60 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              
              <td><?php echo "(Rp. " . number_format($jumlah_saldo60, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">PERLENGKAPAN/PERALATAN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '153-PERLENGKAPAN/ PERALATAN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo6 = $jumlah_saldo6 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo6, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo6 = $jumlah_saldo6 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo6, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">PENYUSUTAN PERALATAN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '154-PENYUSUTAN PERALATAN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo7 = $jumlah_saldo7 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo7, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo7 = $jumlah_saldo7 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo7, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">HUTANG WESEL</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '200-HUTANG WESEL' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo8 = $jumlah_saldo8 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo8, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo8 = $jumlah_saldo8 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo8, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">HUTANG</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '201-HUTANG' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo9 = $jumlah_saldo9 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo9, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo9 = $jumlah_saldo9 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              
              <td><?php echo "(Rp. " . number_format($jumlah_saldo9, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">PENDAPATAN JASA</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '400-PENDAPATAN JASA' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo1x0 = $jumlah_saldo1x0 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo1x0, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo1x0 = $jumlah_saldo1x0 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo1x0, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">HUTANG GAJI</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '212-HUTANG GAJI' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo11 = $jumlah_saldo11 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo11, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo11 = $jumlah_saldo11 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo11, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">HUTANG GAJI</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '212-HUTANG GAJI' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo5 = $jumlah_saldo5 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo5, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo5 = $jumlah_saldo5- $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldoo5, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">DIVIDEN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '332-DIVIDEN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo23 = $jumlah_saldo23 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo23, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo23 = $jumlah_saldo23 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo23, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BEBAN IKLAN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
               $no = 1;
               $query        = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '610-BEBAN IKLAN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";                
               $jurnal_umum  = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                $jumlah_saldox16 = $jumlah_saldox16 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldox16, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
              $jumlah_saldo16x = $jumlah_saldo16x - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo16x, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BEBAN PENYUSUTAN PERALATAN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
               $no = 1;
               $query        = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '621-BEBAN PENYUSUTAN PERALATAN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";                
               $jurnal_umum  = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                $jumlah_saldo160 = $jumlah_saldo160 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo160, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
              $jumlah_saldo160 = $jumlah_saldo160 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo160, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BEBAN PERSEDIAAN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '631-BEBAN PERSEDIAAN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo15 = $jumlah_saldo15 - $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo15, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo15 = $jumlah_saldo15 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo15, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BEBAN GAJI</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '726-BEBAN GAJI' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo16 = $jumlah_saldo16 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo16, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo16 = $jumlah_saldo16 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo16, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BEBAN ASURANSI</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '730-BEBAN ASURANSI' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo17 = $jumlah_saldo17 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo17, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo17 = $jumlah_saldo17 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo17, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BIAYA UTILITAS</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '731-BIAYA UTILITAS' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo18 = $jumlah_saldo18 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo18, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo18 = $jumlah_saldo18 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo18, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BEBAN BIAYA PERAWATAN DAN PERBAIKAN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '735-BEBAN BIAYA PERAWATAN DAN PERBAIKAN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo19 = $jumlah_saldo19 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo19, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo19 = $jumlah_saldo19 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo19, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)">BIAYA BENSIN</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '740-BEBAN BENSIN' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo20 = $jumlah_saldo20 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo20, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo20 = $jumlah_saldo20 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo20, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>

      <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
        <h5 style="color: rgb(42, 76, 177)"> BEBAN BUNGA</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="border-gray-200">Tanggal</th>
              <th class="border-gray-200">Keterangan</th>
              <th class="border-gray-200">Debit</th>
              <th class="border-gray-200">Kredit</th>
              <th class="border-gray-200">Saldo</th>
              <!-- <th class="border-gray-200">D/K</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
               include "../pages/auth/koneksi.php";
               $no = 1;
               $query       = "SELECT * FROM transaksi 
                              INNER JOIN akun on transaksi.no_akun = akun.no_reff AND akun.nama_akun = '741-BEBAN BUNGA' WHERE transaksi.user_id = {$_SESSION['user_id']} ORDER BY tgl_transaksi ASC";
               $jurnal_umum = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

              $tmp_date = "";

               while($data  = mysqli_fetch_array($jurnal_umum)){
                $jumlah  = $data['saldo'];
                if ($data['jenis'] == "Debit" ) {
                  $jumlah_saldo21 = $jumlah_saldo21 + $jumlah;
             ?>          
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($jumlah_saldo21, 0, ".", "."); ?></td>
              <!-- <td><?php echo $data['jenis'];?></td> -->
            </tr>

            <?php
              }elseif (($data['jenis'] == "Kredit")) {
                $jumlah_saldo21 = $jumlah_saldo21 - $jumlah;
            ?>
            <tr>
              <td><?php echo $tmp_date != $data['tgl_transaksi'] ? $data['tgl_transaksi'] :"";?></td>
              <td><?php echo $data['keterangan'];?></td>
              <td>Rp. 0</td>
              <td><?php echo "Rp. " . number_format($data['saldo'], 0, ".", "."); ?></td>
              <td><?php echo "(Rp. " . number_format($jumlah_saldo21, 0, ".", ".").")"; ?></td>
              <!-- <td><?php echo $data['jenis'];?></td>           -->
            </tr> 
            <?php
              }
            ?>

            <?php
            $tmp_date = $data['tgl_transaksi'];
              }
            ?>        
          </tbody>
        </table>
      </div>            

      <!-- item -->
      <div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
        <div class="card-body bg-gray-800 text-white pt-4">
          <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse" href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
            <a
              class="github-button"
              href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
              data-color-scheme="no-preference: dark; light: light; dark: light;"
              data-icon="octicon-star"
              data-size="large"
              data-show-count="true"
              aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub"
              >Star</a
            >
          </div>
          <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank" class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">
            Download
            <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
          <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
          <div class="d-flex justify-content-center">
            <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank">
              <img src="../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs" />
            </a>
            <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
              <img src="../assets/img/technologies/react-logo.svg" class="image image-xs" />
            </a>
          </div>
        </div>
      </div>


      <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
        <div class="row">
          <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
            <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
          </div>
          <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
            <!-- List -->
            <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
              <li class="list-inline-item px-0 px-sm-2">
                <a href="https://themesberg.com/about">About</a>
              </li>
              <li class="list-inline-item px-0 px-sm-2">
                <a href="https://themesberg.com/themes">Themes</a>
              </li>
              <li class="list-inline-item px-0 px-sm-2">
                <a href="https://themesberg.com/blog">Blog</a>
              </li>
              <li class="list-inline-item px-0 px-sm-2">
                <a href="https://themesberg.com/contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </main>

    <!-- Core -->
    <script src="../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="../vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <script src="../vendor/chartist/dist/chartist.min.js"></script>
    <script src="../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Notyf -->
    <script src="../vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="../vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="../assets/js/volt.js"></script>
  </body>
</html>

<?php 
}else{
        header("location:../index.html");
        
}
?>