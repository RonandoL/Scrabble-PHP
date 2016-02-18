<?php

	require_once 'src/Scrabble.php';

	class ScrabbleTest extends PHPUnit_Framework_TestCase
	{

		function test_getScore_oneLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble("a");

		//Act
		$result = $test_Scrabble->getScore();

		//Assert
		$this->assertEquals(1, $result);
		}
	}

?>
