<?php
namespace App\Calculator;

use App\Calculator\OperationInterface;

class Calculator 
{
	protected $operations = [];
	
	public function setOperation(OperationInterface $operation)
	{
		$this->operations[] = $operation;
	}

	public function getOperation()
	{
		return $this->operations;
	}
}
?>