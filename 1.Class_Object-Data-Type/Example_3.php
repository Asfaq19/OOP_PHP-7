<?php

	class Employee{

		public $employee_name;
		public $employee_dob;
		public $employee_gender;
		public $employee_designation;

		// public function printInfo()
		// {

		//   	echo "Employee Information\n";
	 //    echo "Name : ".$this->employee_name."\n";
	 //    echo "Dob : ".$this->employee_dob."\n";
	 //    echo "Gender : ".$this->employee_gender."\n";
	 //    echo "Designation : ".$this->employee_designation."\n";
	 //    echo "\n\n";
		// }

	}

	

	$employee = new Employee();
	// echo $employee->employee_name;
	var_dump($employee->employee_name);
	// $employee->employee_name = "Niton";
	// $employee->employee_dob = "01/01/1952";
	// $employee->employee_gender = "Male";
	// $employee->employee_designation = "CTA";
	// $employee->printInfo();
