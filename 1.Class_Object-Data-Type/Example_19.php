<?php
	class Sample{

		function __construct()
		{
			print "Constructing...\n";
			$this->name = "Sample";
		} 

		function __destruct()
		{
			print "Destroying ".$this->name."\n";
		}
	}

	$obj = new Sample();
	$obj->name = "Obj";

	$obj1 = new Sample();
	$obj1->name = "Obj1";

	$obj2 = new Sample();
	$obj2->name = "Obj2";

	unset($obj);
	unset($obj);

	echo "Before script exits....\n";	

