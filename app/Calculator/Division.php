<?php
namespace App\Calculator;
use App\Calculator\Exceptions\NoOperandsException;
use App\Calculator\OperationAbstract;

class Division extends OperationAbstract implements OperationInterface
{
	

	public function calculate()
	{
		if( count($this->operands) === 0)
		{
			throw new NoOperandsException;
			
		}
		/*
		$result  = 1;
		foreach ($this->operands as $index=>$operand) {
			if($index === 0){
				$result  = $operand;
				continue;
			}
			$result  = $result/$operand;
		}
		return $result;
		*/
		return array_reduce($this->operands, function($a,$b){
			if($a !==null && $b !== null)
			{
				return $a / $b;
			}
			return $b;
		},null);
	}
}
?>