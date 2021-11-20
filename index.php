<!DOCTYPE html>
<html>
<head>
	<title>chess</title>
	<style type="text/css">
		.square{
			width: 50px;
			height: 50px;
		}
		body{
			background-color: white;
		}
		.brown{
			background-color: saddlebrown;
		}
		.wheat{
			background-color: wheat;
		}
	</style>
</head>
<body style="background-color: white">
	<p style="color: saddlebrown; text-align: center;">Mhamad Othman Ibrahim</p>
<table style="border: 5px solid wheat; border-radius: 2px; background-color: saddlebrown; margin: auto;padding: 0px; ">
	<?php
	echo "<tr>";
		$arr = array('','A','B','C','D','E','F','G','H');
		for($i=0; $i<9 ; $i++){
		echo "<td style='width: 30px; height: 50; text-align: center; color: wheat; background-color: saddlebrown;'>$arr[$i]</td>";
	}
	echo "</tr>";
		for ($row=8; $row >=1 ; $row--) {
		echo "<tr>";
		echo "<td style='width: 30px; height: 50; text-align: center; color: wheat; background-color: saddlebrown;'>$row</td>";
			for ($col=8; $col >= 1; $col--) {
			if($row%2 == 0){
				if($col %2 == 0){
					echo "<td class='square wheat'></td>";
				}else{
				echo "<td class='square brown'></td>";
			}
			}else{
			if($col%2 != 0){
					echo "<td class='wheat'></td>";
		}else{
		echo "<td class='square brown'></td>";
	}
		}
		}
		echo "<td style='width: 30px; height: 50; text-align: center; color: wheat; background-color: saddlebrown;'>$row</td>";
		echo "</tr>";
	}

	echo "<tr>";
		$arr = array('','A','B','C','D','E','F','G','H');
		for($i=0; $i<9 ; $i++){
		echo "<td style='width: 30px; height: 50; text-align: center; color: wheat; background-color: saddlebrown;'>$arr[$i]</td>";
	}
	echo "</tr>";
	
	?>
</table>
</body>
</html>