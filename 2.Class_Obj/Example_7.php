<?php
	
	class Controller{

		private $book;

		public function __construct()
		{
			$this->book = new Book("Book On OOP");
		}

		public function showBook()
		{
			echo "Book Name: ".$this->book->getBook();
			// echo "\n";
			// print_r($this->book);
		}
	}

	class Book{

		protected $book_name;

		public function __construct($name)
		{
			$this->book_name = $name;

		}

		public function getBook()
		{
			return $this->book_name;
		}
	}

	$con = new Controller;
	$con->showBook();

	?>