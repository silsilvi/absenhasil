<?php
session_start();
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

		<p class="tulisan_login">Silahkan login</p>
		<form method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" name="login" value="LOGIN">
			<?php
			if (isset($_POST['login'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
				$query=mysqli_query($koneksi,"select * from tlogin where username='$username' and password='$password'");
 
				// menghitung jumlah data yang ditemukan
				$cek = mysqli_num_rows($query);
				 
				if($cek == 1){
					$_SESSION['login'] = $query->fetch_assoc();
					header("location:index.php");
				}else{
					echo "Login gagal! username dan password salah!";
					echo "<meta http-equiv='refresh' content='1;url=login.php'>";
				}
				}
				?>
			<br/>
			<br/>
		</form>
	</div> 
</body>
</html>