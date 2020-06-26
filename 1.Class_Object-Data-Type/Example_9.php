<?php
	class Sample
	{
		private function privateMethod()
		{
			echo "Private Method \n";

		}

		protected function protectedMethod()
		{
			echo "Protected Method \n";

		}

		public function publicMethod()
		{
			echo "Public Method \n";

		}

		function MethodCall()
		{
			$this->privateMethod();
			$this->protectedMethod();
			$this->publicMethod();
		}
	}
	
	$obj = new Sample;
	$obj->MethodCall();
	// $obj->privateMethod();