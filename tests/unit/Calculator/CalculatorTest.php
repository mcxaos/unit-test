<?php
require_once 'vendor/Autoload.php';
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
	/** @test */
	public function can_set_single_operation ()
	{
		$addition = new \App\Calculator\Addition;
		$addition->setOperands([5,10]);

		$Calculator = new \App\Calculator\Calculator;
		$Calculator->setOperation($addition);

		

		$this->assertCount(1,$Calculator->getOperation());
	}

	
}
?>