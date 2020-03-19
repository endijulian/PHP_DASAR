<!DOCTYPE html>
 <html>
 <head>
 	<title> latihan array</title>

 		<style type="text/css">
 			.kotak{
 				width: 50px;
 				height: 50px;
 				background-color:#bada55;
 				text-align: center;
 				line-height: 50px;
 				margin: 3px;
 				float: left;
 				transition:1s;
 			}

 			.kotak:hover{
 				transform: rotate(180deg);
 				border-radius: 50%;
 			}

 			.clearboth{
 				clear: both;
 			}
 		</style>
 </head>
 <body>

 		<?php 
 		$angka= [
 		 		[1,2,3],
 				[4,5,6],
 				[7,8,9]
 				];
 		 ?>
 
 		 <?php foreach ($angka as $key) :?>
 		 		<?php foreach ($key as $key2) : ?>

 		 	<div class="kotak"><?= $key2; ?></div>

 		 	 	<?php endforeach; ?>
 		 	
 		 <div class="clearboth"></div>
 		 	<?php endforeach; ?>
 </body>
 </html>