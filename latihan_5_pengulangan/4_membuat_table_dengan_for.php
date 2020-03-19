<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>table dengan for</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="">
		<?php 

			for ($i=1; $i <= 3; $i++) { 
				echo "<tr>";

				for ($j=1; $j <= 5 ; $j++) { 
					echo "<td> $i,$j </td>";
				}

				echo "</tr>";
			}
		 ?>
		
	</table>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>table dengan for</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="">
		<?php for ($i=1; $i <= 3 ; $i++) : ?>

			<tr>
				<?php for ($j=1; $j <= 5 ; $j++) : ?>
					<td> <?php echo "$i,$j"; ?> </td>
				<?php endfor; ?>
			</tr>

		<?php endfor; ?>		
	</table>
</body>
</html>