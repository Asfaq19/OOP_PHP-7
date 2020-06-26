<?php
	
	class Sample{
		public $public = "Public Value";
		protected $protected = "Protected Value";
		private $private = "Private Value";
	}

	$obj = new Sample;
	echo "Serialize: "."\n".serialize($obj);
	// print_r(serialize($obj));

?>