<?php
	
	class Employee{

		public $employee_name;
		public $employee_age = 30 ;
		public $employee_salary;

		public function showProperties($name)
		{
			var_dump($this);
			echo $name;
			// echo $this->employee_name;
			// echo $this->employee_age;
			// echo $this->employee_salary;
		} 

		public function showMethods()
		{
			echo "\n";
			var_dump($this);
		} 

	}

	$e = new Employee;
	$e->showProperties('asfaq');
	$e->showMethods();
	// $e->employee_age;
	// $e->employee_name;

?>