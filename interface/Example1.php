<?php 
	
	class Book
	{
		public $title;
		public $author;
		public $category;

		public function __construct($title,$author,$category)
		{
			$this->title = $title;
			$this->author = $author;
			$this->category = $category;
		}

		public function getInfo(DataFormatInterface $formatter)
		{
			return $formatter->getContent($this);
		}
	}

	interface DataFormatInterface
	{
		public function getContent(Book $book);
	}

	class JSONFormatter implements DataFormatInterface
	{
		public function getContent(Book $book)
		{
			$json_array = array('book'=>$book);
			return json_encode($json_array);
		}
	}

	class XMLFormatter implements DataFormatInterface
	{
		public function getContent(Book $book)
		{
			$xml = '<book>';
			$xml .= '<book_title>'.$book->title.'<book_title>';
			$xml .= '<book_author>'.$book->author.'<book_author>';
			$xml .= '<book_category>'.$book->category.'<book_category>';
			$xml .='</book>';
			return $xml;

		}
	}

	$xml = new XMLFormatter;
	$json = new JSONFormatter;

	$book1 = new Book("PHP Language","Niton","Web Programming");
	echo $book1->getInfo($xml);

	$book2 = new Book("Data Mining","Nasrin","Big Data");
	echo $book2->getInfo($json);


?>