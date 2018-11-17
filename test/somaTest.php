<?php
use PHPUnit\Framework\TestCase;
require 'soma.php';

class SomaTest extends TestCase {

	public function testSomarComParametros() {
		$this->assertEquals(5, somar(2, 3));
	}

	public function testSomarSemParametros() {
		$this->assertEquals(0, somar());
	}

}
