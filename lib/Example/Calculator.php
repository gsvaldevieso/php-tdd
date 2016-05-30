<?php

namespace Example;

class Calculator
{
	function __construct()
	{
		# code...
	}

	function sum($x, $y)
	{
		return ($x+$y);
	}

	function sub($x, $y){
		return ($x - $y);
	}

    function div($x, $y)
	{
		if($y == 0) return 0;
		
		return ($x/$y);
	}
}