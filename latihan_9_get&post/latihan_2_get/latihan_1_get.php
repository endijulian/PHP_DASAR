<?php 
	// $_GET
	
	// $_GET["nama"]="endi julian";
	// $_GET["nim"] = "1655201175";
	// var_dump($_GET);

		$mahasiswa = [
					[
					"nama" => "endi julian",
					"nim" => "1655201175",
					"jurusan" => "informatika",
					"email" => "endijulian1998@gmail.com",
					"gambar" => "123.jpg"
					],

					[
					"nama" => "alung",
					"nim" => "23456789",
					"jurusan" => "informatika",
					"email" => "endi8@gmail.com",
					"gambar" => "abcd.jpg"
					]
				];
	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 </head>
 <body>
 	<h1>Data Mahasiswa</h1>
 	<ul>
 		<?php foreach ($mahasiswa as $mhs) :?>
 			<li>
 				<a href="latihan_2.php?nama=<?= $mhs ["nama"]; ?>&nim=<?= $mhs ["nim"]; ?>&jurusan=<?= $mhs ["jurusan"]; ?>&email=<?= $mhs ["email"]; ?>&gambar=<?=
 				$mhs ["gambar"]; ?>"> <?= $mhs ["nama"];  ?></a>
 			</li>
 		<?php endforeach; ?>
 	</ul>
 </body>
 </html>