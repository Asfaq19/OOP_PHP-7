<?php 
	
	# An interface is provided so you can describe a set of functions and then hide the  final implementation of those functions in an implementing class.This allows you to change the "IMPLEMENTATION" of those functions without changing how you use it.

	interface MyInterface
	{
	
		public function method1();
		
	}

	interface MyInterface3
	{
	
		public function method3();
		
	}

	interface MyInterface2 extends MyInterface,MyInterface3
	{
	
		public function method2():string;
	}   

	class MyClass implements MyInterface2
	{
		public function method1()
		{

		}

		public function method2():string
		{

		}
		public function method3()
		{

		}
	}

	$myClass = new myClass;
?>