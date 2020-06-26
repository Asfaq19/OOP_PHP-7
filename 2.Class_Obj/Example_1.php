<?php
	
	class BlogPost{
		private $author = "Mcw";
		private $post = "Something goes here...";


		public function showInfo()
		{
			echo "Author: ".$this->author;
			echo "\n Post: ".$this->post;
		}
	}
	$data = new BlogPost;
	$data->showInfo();
	// var_dump($data);