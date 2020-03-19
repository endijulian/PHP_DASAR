<?php 
	// cek apakah tombol submit sudah ditekan atau belum
		if (isset($_POST["submit"]) ) {
			
	// cek username dan password
		if ($_POST["name"] == "endi" && $_POST["password"] == "123") {
	// jika benar masuk ke halaman admin
		header("Location: admin.php");
		exit;
		}	else{
	// jika salah tampilkan pesan kesalhan
			$error = true;
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>Silahkan Login</h1>

		<?php if( isset($error)) :?>
			<p style="color:red; font-style: italic;">Username atau Password Salah</p>
		<?php endif; ?>
	<ul>
	<form action="" method="post">
		<li>
			<label for="username">username:</label>
			<input type="name" name="name" id="username">
		</li>
		<li>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
		</li>
		<li><button type="submit" name="submit"> Masuk </button></li>
	</form>
	</ul>
</body>
</html>