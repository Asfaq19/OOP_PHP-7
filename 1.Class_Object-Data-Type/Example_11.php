<?php
	
	class Sample {
		
		private $private_property;
		private function privateMethod()
		{
			echo "privateMethod";
		}
		
		public function publicMethod(Sample $obj,String $str)
		{
			var_dump($obj);
			var_dump($this);
			$obj->private_property = $str;
			echo $obj->private_property;
			echo "\n";
			var_dump($obj->private_property);

			$obj->privateMethod();

		}

		public function showInfo()
		{
			echo "\n".$this->private_property;
		} 

	}

	$Sample = new Sample();
	$Sample2 = new Sample();
	$Sample->publicMethod($Sample2,"Niton");
	$Sample2->showInfo();