<?php
	
	class PrimeNumbers{

		private $start = 0;
		private $end = 0;
		private $last_is_prime = 3;
		private $primes_checker = array();

		public function setRange($start,$end)
		{
			echo $this->start = $start;
			echo "\n";
			$this->end = $end;
			echo "$start"."\n"."$end";
			echo "\n";
			var_dump($this);
		} 

		public function showPrimes()
		{
			var_dump($this);
		}
	}

	// $Object = new PrimeNumbers;
	// $Object->setRange(1,2);


	(new PrimeNumbers)->setRange(1,2);
	(new PrimeNumbers)->showPrimes();