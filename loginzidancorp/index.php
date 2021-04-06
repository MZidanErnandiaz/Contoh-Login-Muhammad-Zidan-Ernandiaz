<?php
  
  session_start();
  include 'masuk.php';

  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<script>alert('Isian kolom wajib diisi atau ada yang salah !')</script>";
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

	<div class="row content">
		<div class="col-md-4"></div>
		<div class="col-md-4 konten">
			<center>

				<img class="logo" src="gambar/logozidancorp.png">
				<h1>Sign in to ZidanCorp</h1>

			</center>
			
			<div class="fill">
				<form method="POST">
					
					<div id="tampungAlert"></div>

					<label>Username or email address</label>
					<input type="text" name="username" class="form-control" id="username">

					<div class="row forgot">
						<div class="col-md-6">
							<label class="pass">Password</label>
						</div>
						<div class="col-md-6 text-right">
							<a href="">Forgot password?</a>
						</div>
					</div>

					<input type="password" name="password" class="form-control" id="password">
					<br>
					<a href="masuk.php">
		              <button type="submit" name="login" class="btn">Sign in</button>
		            </a>  
				</form>
			</div>
			<br>
			<div class="fill1">
				<label>New to ZidanCorp? <a href="">Create an account.</a></label>
			</div>
			
		</div>
		<div class="col-md-4"></div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	
</body>
</html>