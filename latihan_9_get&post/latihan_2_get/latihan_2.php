
	<?php 
		// cek apakah tidak ada data di $_GET
			if ( !isset($_GET ["nama"]) ||
				!isset($_GET ["nim"])	||
				!isset($_GET ["jurusan"])||
				!isset($_GET ["email"]) ||
				!isset($_GET ["gambar"])

			) {
					// redirect
				header("Location: latihan_1_get.php");
					exit;
			}

	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>data nmahasiswa</title>
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET ["gambar"]; ?>"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["nim"]; ?></li>
		<li><?= $_GET["jurusan"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
	</ul>

		<a href="latihan_1_get.php">kembali ke data mahasiswa</a>
</body>
</html>