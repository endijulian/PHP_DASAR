<?php 
	// array
	// variabel yang dapat memiliki banyak nilai
	// elemen pada aray boleh memiliki tipe data yang berbeda
	
		// membuat array dengan cara lama
		$hari = array("senin", "selasa", "rabu" );

		// membuat array dengan cara yang baru
		$bulan = ["januari", "februari", "maret"];
		$arr1 =[123, "tulisan", false];

		// cara menampilkan array
		// 1.var_dump();
		// 2.print_r();

		// var_dump($hari);
		// echo "<br>";

		// print_r($bulan);
		// echo "<br>";

		// // menmapilkan 1 elemen pada array
		// echo $arr1[0];
		// echo "<br>";

		// echo $bulan[1];

		// menampilkan elemen baru pada array

		var_dump($hari);
		$hari[] = "kamis";
		$hari[] = "jum'at";
		var_dump($hari);

 ?> 