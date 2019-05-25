<?php
error_reporting(0);
$error = array(
);

if (!empty($_POST))
{
	$name = isset($_POST['name']) ? trim($_POST['name']) : null;
	$score = isset($_POST['score']) ? trim($_POST['score']) : null;

	if (empty($name))
	{
		$error[$name] = "Введите ФИО";
	}
	else
	{
		$arr = explode(" ", $name);
		if (count($arr) < 3)
			$error['name'] = "Удостоверьтесь, что Вы ввели ФАМИЛИЮ, ИМЯ и ОТЧЕСТВО в данное поле";
	}

	if (empty($score))
	{
		$error['score'] = "Введите оценки студента";
	}
	/*foreach (['name', 'score'] as $key) 
	{
		if(empty($$key))
		{
			$error[$key] = true;
		}
	}*/

	if (empty($error))
	{
		$content1 = "\n" . $name;
		file_put_contents("Data/StudentsData.txt", $content1, FILE_APPEND);		
		$content2 = "\n" . $score;
		file_put_contents("Data/StudentsScore.txt", $content2, FILE_APPEND);

		header('Location: index.php');
		exit;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<form class = "block1" action="<?= $_SERVER['REQUEST_URI'];?>" method="POST">
			<p><input placeholder="Введите ФИО студента" name="name" value="<?= isset($_POST['name']) ? $_POST['name']:''?>" required><?php echo $error['name'] ?></p>

			<p><input placeholder="Введите оценки за четверть через пробел" name="score" value="<?= isset($_POST['score']) ? $_POST['score']:''?>" required><?php echo $error['score'] ?></p>
		<p><input type="submit" value="Добавить"></p>
	</form>
</body>
</html>
