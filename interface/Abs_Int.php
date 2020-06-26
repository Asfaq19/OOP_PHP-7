<?php 

	interface SignContact
	{

	}

	interface MakeInvestment
	{

	}

	interface ManageClient
	{

	}

	interface FixBug
	{

	}
	interface ReportBug
	{

	}
	
	abstract class Employee
	{
		abstract public function calculateAttendance;
		abstract public function generatePayroll;
	}

	class Management extends Employee implements SignContact,MakeInvestment
	{

	}

	class ProjectManager extends Employee implements SignContact,ManageClient
	{

	}

	class SoftwareDeveloper extends Employee implements FixBug
	{

	}

	class QualityAssurance extends Employee implements ReportBug
	{

	}
?>