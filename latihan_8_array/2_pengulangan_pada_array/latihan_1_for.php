<?php 
	// pengulangan pada array
	// for / foreach
 
	$angka = [1,2,3,4,5,6,7,8,9,10];
 ?>

 <!-- <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan pengulangan pada array</title>

 	<style type="text/css">
 		div {
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
 	<?php for ($i = 0; $i < 9; $i++) { ?>

 	<div><?php echo $angka [$i]; ?></div>

 	<?php } ?>
 </body>
 </html> -->

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan pengulangan pada array</title>

 	<style type="text/css">
 		div {
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
 	<?php for ($i = 0; $i < count($angka); $i++) { ?>

 	<div><?php echo $angka [$i]; ?></div>

 	<?php } ?>
 </body>
 </html>