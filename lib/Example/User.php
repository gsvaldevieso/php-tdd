<?php

namespace Example;

class User
{
	private $fullName;

	function __construct($name, $lastName)
	{
		$this->fullName = $name." ".$lastName;
	}

	function getFullName(){
		return $this->fullName;
	}

	function getLastName(){
		$splittedName = explode(" ", $this->fullName);
		return $splittedName[count($splittedName)-1];
	}

	function getFirstName(){
		$splittedName = explode(" ", $this->fullName);
		return $splittedName[0];
	}
}