<?php

namespace ExampleTests;

use PHPUnit_Framework_TestCase;
use Example\User;

class UserTest extends PHPUnit_Framework_TestCase
{
	/**
	* @test
	*/
	function deveRetornarONomeCompletoParaOUsuario(){
		$classeUsuario = new User("Guilherme","Valdevieso");
		$this->assertEquals(		$classeUsuario->getFullName(), "Guilherme Valdevieso");
	}
	/**
	* @test
	*/
	function deveRetornarApenasOUltimoNome(){
		$classeUsuario = new User("Guilherme", "Valdevieso");
		$this->assertEquals($classeUsuario->getLastName(),"Valdevieso");
	}
	
	/**
	* @test
	*/
	function deveRetornarApenasOPrimerioNome(){
		$classeUsuario = new User("Guilherme", "Valdevieso");
		$this->assertEquals($classeUsuario->getFirstName(),"Guilherme");
	}

	

}