<?php
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase {

	public function testSomar() {
		$this->assertEquals(5, somar(2, 3));
	}

}
