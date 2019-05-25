<?php
error_reporting(0);
include "funct.php";

$students = [];
$students = getDataSt($students);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Class</title>
	<style type="text/css">
	.block1 {  
		background: #ccc;
		padding: 5px;
		padding-right: 20px; 
		border: solid 1px black; 
		float: left;
   }
	</style>
</head>
<body>
	<form class="block1" action="appstud.php">
		<table border="1">
			<thead>
				 <td><b>ФИО студента</b></td>
				 <td><b>Средняя оценка</b></td>
			</thead>
			<tbody>
				<?php for($i=0;$i<count($students);$i+=1){  ?>
					<tr>
						<td><?php echo $students[$i]->get_fullname() ?></td>
						<td><?php echo $students[$i]->get_average_score() ?></td>
					</tr>				
				<?php } ?>
			</tbody>
		</table>
		<p><input type="submit" value="Добавить студента">	
	</form>
</body>
</html>
