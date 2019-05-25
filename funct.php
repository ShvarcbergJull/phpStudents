<?php

include "App/Student.php";

function getDataSt($students)
{
	$students = [];
	$filelist = file_get_contents("Data/StudentsData.txt");
	$filedata = file_get_contents("Data/StudentsScore.txt");

	$filelist = explode("\n", $filelist);
	$filedata = explode("\n", $filedata);

	foreach ($filelist as $key => $value) {
		$data = explode(" ", $filedata[$key]);
		$n = explode(" ", $filelist[$key]);
		$stud = new Student($n[0], $n[1], $n[2], $data);
		array_push($students, $stud);
	}


	return $students;
}
