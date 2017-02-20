<?php
require_once 'vendor/Autoload.php';
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
	public function testTrueAssertsToTrue ()
	{
		$this->assertTrue(true);
	}
}
?>