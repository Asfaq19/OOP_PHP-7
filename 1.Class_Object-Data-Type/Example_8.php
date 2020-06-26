<?php 
	class Sample{
		var $variable = "Variable";
		private $private = "Private";
		protected $protected = "Protected";
		public $public = "Public";

		function printPropertiesInfo()
		{
			// var_dump($this);
			echo $this->public;

			// echo $this->variable."\n";
			// echo $this->private."\n";
			// echo $this->protected."\n";
			// echo $this->public."\n";
		}

		public function PublicPropertiesInfo()
		{
			echo "From Public  ====="."\n";
			print_r($this);
			
		}

		protected function ProtectedPropertiesInfo()
		{
			echo "From Proteted =====";
			print_r($this);
		}

		private function PrivatePropertiesInfo()
		{
			echo "From Private =====";
			print_r($this);
		}
	}

	class Asfaq extends Sample{


	}

	class Rafi extends Asfaq{

	}

	// $asfaq = new Asfaq;
	$sample = new Sample;
	// $rafi = new Rafi;
	// $asfaq->printPropertiesInfo();
	$sample->printPropertiesInfo();
	
	// $rafi->printPropertiesInfo();

	// echo $asfaq->public."\n";
	// echo $asfaq->variable."\n";
	// echo $asfaq->protected."\n";
	// echo $asfaq->private."\n";
	// echo $obj->variable."\n";
	// echo $obj->private."\n";
	// echo $obj->private."\n";
	// echo $obj->protected."\n";
	// echo $obj->variable."\n";

	// $sample->PublicPropertiesInfo();
	// $sample->ProtectedPropertiesInfo();
	// $sample->PrivatePropertiesInfo();

	// $asfaq->PublicPropertiesInfo();
	// $asfaq->ProtectedPropertiesInfo();
	// $asfaq->PrivatePropertiesInfo();

	// $rafi->PublicPropertiesInfo();

	// FTFCFG() DRDEDX() SW() AQ() VZ();
	




