<?php
  
  session_start();
  include 'masuk.php';

  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="berhasil"){
      echo "<script>alert('Berhasil Sign in')</script>";
    }
  }

?>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	
	<center>
		<h1>Selamat datang <?= $_SESSION['username'] ?></h1>
	</center>	

	<div class="text-right logout">
		<a href="logout.php">Logout</a>
	</div>

</body>
</html>