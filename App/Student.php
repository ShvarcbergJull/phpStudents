<?php

include "Human.php";

class Student extends Human
{
	public $scores = [];
	
	public function __construct($ln, $n, $sn, $score)
	{
		parent::__construct($ln, $n, $sn);
		$this->scores = $score;
	}

	public function get_average_score()
	{
		$count_scores = count($this->scores);
		$sum_scores = 0;
		for ($i = 0;$i < $count_scores;$i++)
		{
			$sum_scores += $this->scores[$i];
		}
		$average_score = (float)$sum_scores / (float)$count_scores;

		return $average_score;
	}
}
