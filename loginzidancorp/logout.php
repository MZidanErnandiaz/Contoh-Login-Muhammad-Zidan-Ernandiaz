<?php 

	session_start();
	session_destroy();
	echo "<script>alert('Logout berhasil');</script>";
	echo "<script>location.href='index.php'</script>";

?>