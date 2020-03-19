<?php 
	$angka = [1,2,3,4,5,6,7,8,2,2,2];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan pengulangan pada array</title>
 	<style type="text/css">
 		.kotak{
 			background-color: salmon;
 			width: 50px;
 			height: 50px;
 			text-align: center;
 			line-height: 50px;
 			float: left;
 			margin: 3px;

 		}
 	</style>
 </head>
 <body>

 		<!-- cara pertama menampilkan foreach -->
 	<!-- <?php foreach ($angka as $a) { ?>
 		<div class="kotak"> <?php echo $a; ?></div>
 	<?php } ?> -->

 		<!-- cara kedua menampilkan foreach -->
 		<?php foreach ($angka as $a): ?>
 			<div class="kotak"> <?= $a; ?></div>
 		<?php endforeach; ?>
 		
 </body>
 </html>