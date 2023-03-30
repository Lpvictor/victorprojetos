<?php
$handle = fopen("planilha.csv", "r");
$row = 0;
while ($line = fgetcsv($handle, 1000, ";")) {
	if ($row++ == 3) {
		
	}
	
	$people[] = [
		'nome' => $line[0],
		'site' => $line[1],
		'telefone' => $line[2],
		];

		
			echo "<table border = '500'> <tr>";
			echo "<td>" . $line[0] ."</td>";
			echo "<td>" . $line[1] ."</td>";
			echo "<td>" . $line[2] ."</td>";
			echo "</tr> </table>";
	
	
}

fclose($handle);





?>