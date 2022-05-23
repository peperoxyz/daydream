<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include "../pages/auth/koneksi.php";

      // jalankan query HAPUS berdasarkan ID yang produknya kita edit
	    $id         = $_GET['id'];
      $query  		= "DELETE FROM transaksi where id='$id'";
      $result 		= mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          //tampil alert dan akan redirect ke halaman akun.php
          echo "<script>alert('Data berhasil Dihapus.');window.location=' ../pages/jurnalumum.php';</script>";
      }
?>      