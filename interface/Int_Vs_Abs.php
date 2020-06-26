<?php 
	
	interface MathInterface
	{
		public function calculate(); 
	}

	abstract class AbstractMath
	{
		abstract public function calculate();
	}

	class SomeClass implements MathInterface
	{
		public function calculate()
		{
			echo "SomeClass::calculate() <br>";
		}
	}

	class AnotherClass extends AbstractMath 
	{
		public function calculate()
		{
			echo "AnotherClass::calculate() <br>";
		}	
	}

	$sc = new SomeClass();
	$sc->calculate();

	$ac = new AnotherClass();
	$ac->calculate();

?>