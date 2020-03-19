<?php 
	// $mahasiswa = [
	// 	["endi julian", "1655201175", "informatika", "endijulian1998@gmail.com"],
	// 	["endi julian", "16552011", "informatika", "endijulian1998@gmail.com"],
	// ];

	// array associative 
	// defenisi nya sama spereti array numerik,kecuali
	// key nya adalah string yang kita buat sendiri
	
	$mahasiswa = [
					[
					"nama" => "endi julian",
					"nim" => "1655201175",
					"jurusan" => "informatika",
					"email" => "endijulian1998@gmail.com",
					"gambar" => "game.png"
					],

					[
					"nama" => "endi",
					"nim" => "1655201175",
					"jurusan" => "informatika",
					"email" => "endijulian1998@gmail.com",
					"gambar" => "safe.png"
					]
				];
					// echo $mahasiswa[1]["email"];

 ?>


			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<title>latihan array asocciative</title>
			</head>
			<body>
				<h1>Daftar Mahasiswa</h1>

				<?php foreach ($mahasiswa as $mhs) :?>
				<ul>
					<li><img src="img/<?= $mhs ["gambar"]; ?>"></li>
					
					<li>Nama: <?= $mhs["nama"]; ?></li>
					<li>Nim: <?= $mhs["nim"]; ?></li>
					<li>Jurusan: <?= $mhs["jurusan"]; ?></li>
					<li>Email: <?= $mhs["email"]; ?></li>

				</ul>

				<?php endforeach; ?>
			</body>
			</html>