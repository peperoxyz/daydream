<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include "../pages/auth/koneksi.php";
	// membuat variabel untuk menampung data dari form 
    $id         = $_POST ['id'];
    $tgl        = $_POST['tanggal'];
    $nomorAkun  = $_POST['nomor'];
    $name       = $_POST['akun_user'];
    $saldo      = $_POST['saldo'];
    $jenis      = $_POST['jenis_debt'];   

      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE transaksi set tgl_transaksi='$tgl', nama_akun='$name', no_akun='$nomorAkun', saldo='$saldo' , jenis='$jenis' where id='$id'
                                                      ";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location=' ../pages/jurnalumum.php';</script>";
      }
?>      