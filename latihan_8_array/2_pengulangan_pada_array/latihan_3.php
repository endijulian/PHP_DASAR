<?php 
	$mahasiswa = [
		["endi julian", "1655201175", "teknik informatika","endijulian1998@gmail.com"],
		["mantul", "1655201176", "teknik informatika","mantul@gmail.com"],
		["mantap", "1655201177", "teknik informatika","mantap@gmail.com"],
		["betul", "1655201178", "teknik informatika","betul@gmail.com"]
	];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>

 	<h1>Daftar Mahasiswa</h1>
 	<!-- <ul>
 		<?php foreach ($mahasiswa as $mhs):?>
 			<li><?php echo $mhs; ?></li>
 		<?php endforeach; ?>
 	</ul> -->
 	<?php foreach($mahasiswa as $mhs ):?>
 	<ul type="1">
 		<li>NAMA :<?= $mhs[0]; ?></li>
 		<li>NIM :<?= $mhs[1]; ?></li>
 		<li>FAKULTAS :<?= $mhs[2]; ?></li>
 		<li>EMAIL :<?= $mhs[3]; ?></li>
 	</ul>
	  <?php endforeach; ?>
 </body>
 </html>