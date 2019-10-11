<?php
  include "conf/conn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  	<div class="kotak_login">
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
			echo "<meta http-equiv='refresh' content='1;url=login.php'>";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
			echo "<meta http-equiv='refresh' content='1;url=login.php'>";
		}
	}
	?>
		<p class="tulisan_login">Silahkan login</p>
		<form action="proseslogin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>

	</div> 
</body>
</html>