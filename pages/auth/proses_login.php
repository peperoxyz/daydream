	<?php
	// ============================
	session_start();
	include 'koneksi.php';

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	// $umkm=$_POST['umkm'];
	// $email=$_POST['email'];
	// $nama=$_POST['nama'];
	

	$data = mysqli_query($koneksi, "SELECT * FROM user2 where username='$user'");
	$row=mysqli_fetch_array($data);
	if (password_verify($pass, $row['pass'])) {
		if (mysqli_num_rows($data)>0) {
			// echo "Login Berhasil";
			$_SESSION['user'] = $row['username'];
			$_SESSION['pass'] = $row['pass'];
			$_SESSION['umkm'] = $row['umkm'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['no_hp'] = $row['no_hp'];
			$_SESSION['user_id'] = $row['user_id'];
			// header("location: ../transaksi.php");
			// header("location: ../dashboard/dashboard.php");
			?>
			<script language="JavaScript">
            alert('Selamat Datang Di Aplikasi Akuntansi Sederhana');
            document.location='../transaksi.php';
        	</script>
			<?php
		}
	} else {
		echo "Username dan Password Tidak Ada";
	?>
		<script language="JavaScript">
            alert('Maaf, Akun Anda tidak terdeteksi di dalam data kami, silahkan coba lagi');
            document.location='logindaydream.php';
        	</script>
	<?php
	}
	?>