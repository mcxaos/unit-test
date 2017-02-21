<?php
require_once 'vendor/Autoload.php';
use PHPUnit\Framework\TestCase;

class AddeditionTest extends TestCase
{
	/** @test */
	public function adds_up ()
	{
		$addition = new \App\Calculator\Addition;

		$addition->setOperands([5,10]);

		$this->assertEquals(15,$addition->calculate());
	}

	/** @test */
	public function no_operands()
	{
		$this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);
		$addition = new \App\Calculator\Addition;
		$addition->calculate();
	}
}
?>