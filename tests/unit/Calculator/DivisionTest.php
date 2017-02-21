<?php
require_once 'vendor/Autoload.php';
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
	/** @test */
	public function divides ()
	{
		$Division = new \App\Calculator\Division;

		$Division->setOperands([100,2]);

		$this->assertEquals(50,$Division->calculate());
	}

	/** @test */
	public function no_operands()
	{
		$this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);
		$Division = new \App\Calculator\Division;
		$Division->calculate();
	}
}
?>