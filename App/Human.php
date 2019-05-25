<?php

class Human
{
	public $name;
	public $lastname;
	public $secondname;
	
	public function __construct($ln, $n, $sn)
	{
		$this->name = $ln;
		$this->lastname = $n;
		$this->secondname = $sn;
	}

	public function get_fullname()
	{
		$fullname = $this->name . " " . $this->lastname . " " . $this->secondname;
		return $fullname;
	}
}
