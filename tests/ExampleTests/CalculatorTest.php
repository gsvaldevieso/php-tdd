<?php

namespace ExampleTests;
use PHPUnit_Framework_TestCase;
use Example\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	/**
	* @test
	*/
	function deveSomarDoisNumeros()
	{
		$calculator = new Calculator();
		$this->assertEquals($calculator->sum(5,5),10);
	}

	/**
	* @test
	*/
	function deveSubtrairDoisNumeros(){
		$calculator = new Calculator();
		$this->assertEquals($calculator->sub(10,5),5);
	}

	/**
	* @test
	*/
	function deveDividirDoisNumeros(){
		$calculator = new Calculator();
		$this->assertEquals($calculator->div(10,5),2);
	}

	/**
	* @test
	*/
	function deveDividirPorZeroERetornarZero(){
		$calculator = new Calculator();
		$this->assertEquals($calculator->div(10,0),0);
	}
}