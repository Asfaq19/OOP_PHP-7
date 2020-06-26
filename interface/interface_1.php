<?php 
	
	# An interface is provided so you can describe a set of functions and then hide the  final implementation of those functions in an implementing class.This allows you to change the "IMPLEMENTATION" of those functions without changing how you use it.

	interface MyInterface
	{
		# const MY_CONSTANT = 1;

		public function __construct();
		public function method1();
		public function method2();
	}   

	abstract class Myclass implements MyInterface
	{

		public function method2()
		{

		}

		public function __construct()
		{
			
		}
	}

	class MyClass2 extends MyClass
	{
		public function method1()
		{

		}

	}

	# echo MyInterface::MY_CONSTANT;
	$myClass = new myClass2;
?>