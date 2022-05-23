<?php
	session_start();
	include 'koneksi.php';
	
	$umkm = $_POST['namaumkm'];
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];

	$pass_acak = password_hash($pass, PASSWORD_DEFAULT);
	$input = mysqli_query($koneksi, "INSERT INTO user2 (nama, username, pass, email, user_id, umkm, no_hp) VALUES('$nama', '$user', '$pass_acak', '$email', '', '$umkm', '$telepon')") or die(mysqli_error($koneksi));

	if ($input) 
	{ ?>
			<script language="JavaScript">
            alert('Selamat Data Berhasil Di tambahkan, Sekarang Silahkan Login Terlebih Dahulu');
            document.location='logindaydream.php';
        	</script>
		<?php
		// echo "Data berhasil disimpan";
		// header("location: ../transaksi.html");
		// header("location: logindaydream.php");
		
	} else
		{
		?>
			<script language="JavaScript">
            alert('Maaf Data Yang Anda Masukkan Kurang Lengkap, Silahkan Lengkapi Terlebih Dahulu');
            document.location='registerdaydream.php';
        	</script>
	<?php
		}
?>