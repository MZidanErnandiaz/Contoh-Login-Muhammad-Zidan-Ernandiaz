<?php 
	
	include 'koneksi.php';
	$tb = "admin";
	
	if (isset($_POST['login'])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$ambil = mysqli_query($con,"SELECT * FROM $tb WHERE username='$username' AND password='$password'");

		$cek = mysqli_num_rows($ambil);
		
		if($cek > 0){

			$data = mysqli_fetch_assoc($ambil);

			$_SESSION['admin']=$data;

			// buat session login dan username
			$_SESSION['username'] = $username;

			// alihkan ke halaman dashboard index
			header("location:home.php?pesan=berhasil");
	
		}else{
			
			header("location:index.php?pesan=gagal");
		}
	}


?>