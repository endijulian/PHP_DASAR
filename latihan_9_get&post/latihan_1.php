<?php 
	// variabel scope atau lingkup variable
	
	$x = 10;
	// echo $x;

	function tampilx(){
		// $x = 30;
		global $x;
		echo $x;
	}
		tampilx();
		// 	echo "<br>";
		// echo $x;
?>